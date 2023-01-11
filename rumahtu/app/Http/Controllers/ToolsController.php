<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tools;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dtTools = Tools::all();
        return view('admin.tools', compact('dtTools'));
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
        // $nm = $request->image;
        // $namaFile = "http://127.0.0.1:8000/img/tools_" . $nm->getClientOriginalName();

        // $dtUpload = new Tools;
        // $dtUpload->title = $request->title;
        // $dtUpload->link = $request->link;
        // $dtUpload->image = $namaFile;

        // $nm->move(public_path() . '/img', $namaFile);
        // $dtUpload->save();

        // return redirect('tools');
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Tools::create($input);

        return redirect('tools');
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
        $peng = Tools::findorfail($id);
        $peng->delete();
        return redirect('tools')->with('success', 'Tool Successfully Deleted!');
    }
}
