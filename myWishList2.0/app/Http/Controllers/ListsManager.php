<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListsManager extends Controller
{
    function createList() {
        $email = session('email');

        return view('createList', compact('email'));
    }
}
