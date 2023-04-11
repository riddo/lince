<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'min:6|required|email',
            'password' => 'min:4|required|string|max:12'
        ], [
            'email.required' => 'Ingrese un usuario válido',
            'password.required' => 'Ingrese su contraseña'
        ]);

        $user = User::where(['email' => $request->email])
            ->count();
        if ($user > 0) {
            $userData = User::where(['email' => $request->email])
                ->first();

            if (Hash::check($request->password, $userData->password)) {
                $userData = User::where(['email' => $request->email])
                    ->get();
                session(['userData' => $userData]);
                //dd(session()->get('userData')[0]['perfil']);
                return view('admin.home');
            } else {
                return redirect('/')->with('msg', 'Usuario o contraseña inválidos');
            }
        }
    }

    public function logout(){
        session()->forget('userData');
        return redirect('/');
    }
}
