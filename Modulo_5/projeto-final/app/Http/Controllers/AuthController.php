<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mockery\Generator\StringManipulation\Pass\Pass;

class AuthController extends Controller
{
    //
    public function login() 
    {
        return view('login.loginForm');
    }

    public function register() 
    {
        return view('login.register');
    }

    public function createUser(Request $request) 
    {
        $new_user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ];
        
        $user = new User($new_user);
        $user->save();

        return redirect('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
           'email' => ['required', 'email'],
           'password' => ['required'],
        ]);
        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect('/');
        } else {
            return redirect('/login')->with('status', 'Não foi possível fazer o login');
        }
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function updatePassword(Request $request) 
    {
        $request->validate([
            'new_password'=>'required',
            'confirm_password' => 'required|same:new_password'
        ]);  

        if(!Hash::check($request->old_password, auth()->user()->password))
        {
            return back()->with("error", "Old Password Doesn't match!");
        }
        
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
    
        return back()->with("status", "Password changed successfully!");
    }

    public function updateInfo(Request $request) 
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/profile')->with('status', 'Atualizado com sucesso');
    }
}