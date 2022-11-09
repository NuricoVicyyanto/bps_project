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
                // [
                //     'name.required'     =>  'Nama tidak boleh kosong',
                //     'email.required'    =>  'Email tidak boleh kosong',
                //     'no_hp.required'    =>  'Nomer Hp tidak boleh kosong',
                //     'nip.required'      =>  'Nip tidak boleh kosong',
                //     'nip.min:18'        =>  'Nip tidak boleh kurang dari 18 angka',
                //     'nip.max:18'        =>  'Nip tidak boleh lebih dari 18 angka'
                // ]
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
        return view('admin.register');
    }
}
