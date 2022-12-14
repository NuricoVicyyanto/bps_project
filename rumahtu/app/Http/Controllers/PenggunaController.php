<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPengguna = User::all();
        return view('admin.daftaruser', compact('dtPengguna'));
    }

    // public function show()
    // $count = Pengguna::count();
    // return View::make('')->with('count', $count);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('backend.pengguna.tambahpengguna');
    // }

    // public function tambah()
    // {
    //     return view('frontend.layouts.contact');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     User::create([
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'number' => $request->number,
    //         'password' => $request->password,
    //     ]);
    //     return redirect('pengguna');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $peng = User::findorfail($id);
    //     return view('backend.pengguna.editpengguna', compact('peng'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $peng = User::findorfail($id);
    //     $peng->update($request->all());
    //     return redirect('pengguna');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        $peng = User::findorfail($id);
        $peng->delete();
        return redirect('daftaruser')->with('success', 'User Deleted Successfully!');
    }
}