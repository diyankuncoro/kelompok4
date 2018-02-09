<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        // return $email ." ". $password;
        if (auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }else {
            return 'username dan password anda tidak terdaftar';
        }
    }

    function register(Request $request) {
        // dd($request)  untuk menampilkan data secara default

        $email = $request->email;
        $nama  = $request->nama;
        $password = $request->password;
        $password_confirm = $request->password_confirm;

        if($email != null){
            return 'email kosong';
        }

        if($nama != null){
            return 'nama tidak ada';
        }

        if($password != null){
            return 'password tidak ada';
        }

        if($password_confirm != null){
          return 'password confirm salah';
        }

        $data = User::where('email', $email)->first();
        if($data != null){
          return 'email salah';
        }

        $user = new User();
        $user->email = $email;
        $user->nama  = $nama;
        $user->password = bcrypt($password);
        $user->save();

        $ide = $user->id;
        Auth::LoginUsing($id);

        return redirect('dashboard');
    }

}
