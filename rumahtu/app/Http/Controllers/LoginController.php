<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use DB;


class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function postlogin (Request $request){
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))){
            if (Auth::user()->level == 'admin'){
                return redirect('homepage');
            }else{
                return redirect('homepage');
            }
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function registrasi(){
        return view('admin.register');
    }

    public function simpanregistrasi(Request $request){

        $this->validate(
            $request, [
                'name'      => 'required',
                'email'     => 'required',
                'no_hp'     => 'required',
                'nip'       => 'required|max:18|min:18',
                'jabatan'   => 'required|',
                'password'  => 'required|min:8',
            ],
        );

        User::create([
            'name' => $request->name,
            'level' => $request->level,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'password' =>bcrypt($request->password),
            'remember_token' =>Str::random(60),
        ]);
        return redirect('registrasi')->with('success', 'Account Created Successfully!');
    }
}
