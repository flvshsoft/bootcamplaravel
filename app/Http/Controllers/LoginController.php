<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index ()
    {
        return view("login.index");
    }

    public function login(Request $request)
    {
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)){
            return redirect('/siswa')->with('Anda Berhasil Login');
        } else {
            return redirect('/login')->withErrors('Username dan password yang di masukkan tidak sesuai');
        }
    }

    public function register()
    {
        return view ("login.register");
    }
    public function create(Request $request)
    {
        // Create a new user and log them in
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
        ]);

        Auth::login($user); // Log the user in after registration

        // Redirect the user after registration
        return redirect('/'); // Change the path to your desired destination
    }

}
