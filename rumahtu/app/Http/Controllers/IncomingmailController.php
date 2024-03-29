<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surmas;
use App\Exports\InmailExport;
use Maatwebsite\Excel\Facades\Excel;

class IncomingmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dtsuratmasuk = Surmas::latest()->get();
        return view('admin.incomingmail', compact('dtsuratmasuk'));
    }

    public function export() 
    {
        return Excel::download(new InmailExport, 'inmail.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->file;
        $namaFile = date('YmdHis') . "." .   $nm->getClientOriginalName();

        $dtUpload = new Surmas;
        $dtUpload->index = $request->index;
        $dtUpload->date = $request->date;
        $dtUpload->kode_surat = $request->kode_surat;
        $dtUpload->alamat = $request->alamat;
        $dtUpload->tanggal = $request->tanggal;
        $dtUpload->perihal = $request->perihal;
        $dtUpload->file = $namaFile;

        $nm->move(public_path() . '/files', $namaFile);
        $dtUpload->save();

        return redirect('incomingmail')->with('success', 'Surat Masuk Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dok = Surmas::findorfail($id);
        return view('admin.editincomingmail', compact('dok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Surmas::findorfail($id);
        $awal = $ubah->file;

        $dt = [
            'index' => $request['index'],
            'date' => $request['date'],
            'kode_surat' => $request['kode_surat'],
            'alamat' => $request['alamat'],
            'tanggal' => $request['tanggal'],
            'perihal' => $request['perihal'],
            'file' => $awal,


        ];

        $request->gambar->move(public_path() . '/img', $awal);
        $ubah->update($dt);
        return redirect('incomingmail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dok = Surmas::findorfail($id);
        
        unlink("files/".$dok->file);

        Surmas::where("id", $dok->id)->delete();

        return redirect('incomingmail')->with('success', 'Surat Masuk Deleted Successfully!');
    }

    // public function approve($id)
    // {
    //     $leave = Task::findOrFail($id);
    //     $leave->review = 'Approve'; //Approved
    //     $leave->save();
    //     return redirect()->back(); //Redirect user somewhere
    // }

    // public function ejject($id)
    // {
    //     $leave = Task::findOrFail($id);
    //     $leave->review = 'Rejected'; //Approved
    //     $leave->save();
    //     return redirect()->back(); //Redirect user somewhere
    // }

    
}
