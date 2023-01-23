<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surkel;
use App\Exports\OutmailExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\File; 

class OutgoingmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtsuratkeluar = Surkel::latest()->get();
        return view('admin.outgoingmail', compact('dtsuratkeluar'));
    }

    public function export() 
    {
        return Excel::download(new OutmailExport, 'outmail.xlsx');
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
        $namaFile = date('YmdHis') . "." . $nm->getClientOriginalName();

        $dtUpload = new Surkel;
        $dtUpload->index = $request->index;
        $dtUpload->date = $request->date;
        $dtUpload->kode_surat = $request->kode_surat;
        $dtUpload->alamat = $request->alamat;
        $dtUpload->tanggal = $request->tanggal;
        $dtUpload->perihal = $request->perihal;
        $dtUpload->file = $namaFile;

        $nm->move(public_path() . '/files', $namaFile);
        $dtUpload->save();

        return redirect('outgoingmail')->with('success', 'Surat keluar Created Successfully!');
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
        $dok = Surkel::findorfail($id);
        return view('admin.editoutgoingmail', compact('dok'));
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
        $ubah = Surkel::findorfail($id);
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

        $request->gambar->move(public_path() . '/files', $awal);
        $ubah->update($dt);
        return redirect('outgoingmail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id) {
        $dok = Surkel::findOrFail($id);

        unlink("files/".$dok->file);

        Surkel::where("id", $dok->id)->delete();

        return redirect('outgoingmail')->with('success', 'Surat keluar Deleted Successfully!');
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
