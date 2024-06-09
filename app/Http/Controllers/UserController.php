<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Import the Hash facade
use App\Models\Penyewa; // Import the User model

class UserController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return view('login');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        try {
            if (Auth::attempt($data)) {
                session()->flash('message', 'Login Berhasil!');
                if (Auth::user()->role == 'Admin')
                    return redirect()->route('daftarbuku');
                else
                    return redirect('/');
            } else {
                throw new \Exception('Email atau Password Salah');
            }
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect('/login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function actionregister(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|unique:penyewa,email',
                'password' => 'required',
                'namaDepan' => 'required',
                'namaBelakang' => 'required',
                'alamat' => 'required',
            ]);

            $user = Penyewa::create([
                'email' => $request->email,
                'namaDepan' => $request->namaDepan,
                'namaBelakang' => $request->namaBelakang,
                'password' => Hash::make($request->password),
                'alamat' => $request->alamat,
                'role' => 'Penyewa',    
            ]);

            session()->flash('message', 'Register Berhasil. Silahkan Login!');
            return redirect('login');
        } catch (\Exception $e) {
            // Handle the exception
            session()->flash('error', 'Error occurred while registering user: ' . $e->getMessage());
            return redirect('register')->withInput();
        }
    }
}
