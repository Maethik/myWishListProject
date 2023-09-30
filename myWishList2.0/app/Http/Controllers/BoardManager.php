<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;

class boardManager extends Controller
{
    function board() {
        return view('board');
    }

    function checkListsExists($email) {
        $id = DB::table('users')->where('email', $email)->value('id');

        $user_id = DB::table('ideas_lists')->where('user_id', $id)->count();
        
        if ($user_id) {
            $result = 1;
            return view('board', compact('result'));
        } else {
            $result = 0;
            return view('board', compact('result'));
        }
    }

    function getMail() {
        $email = session('email');
        return redirect()->intended(route('checkListsExists'));
    }
}
