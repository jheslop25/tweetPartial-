<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function form(){
        return view('login');
    }

    public function login(Request $request){
        // var_dump($request->userId);
        // var_dump($request->password);
        $results = DB::select("SELECT * FROM `tweets_users` WHERE `username` = '$request->userId' and `password` = '$request->password'");
        //var_dump($results[0]->username);

        if ($results[0]->username = $request->userId  and $results[0]->password = $request->password){
            return view('success');
        } else{
            return view('login');
        }


    }
}
