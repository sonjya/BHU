<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function authUser(Request $request) {

        $username = $request->username;
        $password = md5($request->password);

        $result = User::where('username',$username)->where('password',$password)->limit(1)->get();

        foreach($result as $user) {
            $userID = $user->userID;
            $userFirstName = $user->firstName;
            $userLastName = $user->lastName;
        }

        if(count($result)) {
            session(['id' => $userID]);
            session(['fullName' => $userFirstName . " " . $userLastName]);
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with('error_message','Incorrect username or password. Please try again.');
        }

    }

    function logoutUser() {
        session(['id' => ""]);
        session(['fullName' => ""]);
        return redirect('/');
    }

}
