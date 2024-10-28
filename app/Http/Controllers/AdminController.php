<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();
        return redirect('login');

    }
    public function login()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                return view('welcome');
            }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
