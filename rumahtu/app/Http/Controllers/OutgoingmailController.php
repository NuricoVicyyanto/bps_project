<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surkel;


class OutgoingmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.outgoingmail');
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
        $namaFile = "http://127.0.0.1:8000/img/" . $nm->getClientOriginalName();

        $dtUpload = new Surkel;
        $dtUpload->index = $request->index;
        $dtUpload->date = $request->date;
        $dtUpload->kode_surat = $request->kode_surat;
        $dtUpload->alamat = $request->alamat;
        $dtUpload->tanggal = $request->tanggal;
        $dtUpload->perihal = $request->perihal;
        $dtUpload->file = $namaFile;

        $nm->move(public_path() . '/img', $namaFile);
        $dtUpload->save();

        return redirect('outgoingmail');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dok = Surkel::findorfail($id);
        $file = public_path('/img/') . $dok->gambar;

        if (file_exists($file)) {
            @unlink($file);
        }

        $dok->delete();
        return back();
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
