<?php

namespace App\Controllers;

use Input;
use Redirect;
use Auth;
use View;
use Validator;
use App\Models\Users;
use Session;

class LoginController extends BaseController {

//put your code here
    public function login() {
        return View::make('login.login');
    }

    public function prosesLogin() {
        $df = Input::all();
        $rule = [
            'username' => 'required',
            'password' => 'required'
        ];
        $validasi = Validator::make($df, $rule);

        if ($validasi->fails()) {
            return redirect::to('/login');
        } else {
            $username = $df['username'];
            $password = $df['password'];
            $datalogin = [
            'nama_user' =>$username,
            'password' =>$password,
            ];
            if (Auth::attempt($datalogin)) {
                return Redirect::intended('/');
            } else {
                return Redirect::to('/login');
            }
        }
    }

}
