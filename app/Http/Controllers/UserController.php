<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function register() {
        return view('users.register');
    }

    public function registerUser(Request $request) {
        $user = new User();

        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect('/login');
    }

    public function login(Request $request) {
        return view('users.login');
    }

    public function auth(Request $request) {
        $email = $request->email;

        $user = User::where(['email' => $email])->get();
        $pessoa = User::find($user);

        if (count($pessoa) != null) {
            $users = count($pessoa) - 1;
            if ($pessoa[$users]['password'] == $request->password) {

                $request->session()->put('data', $request->input());
                return redirect('/'); 

            } else {
                return redirect('/login');
            }
        } else {
            return redirect('/login');
        }
    }
}
