<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class Api extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.basic');
    }

    public function getAllUsers()
    {
        $users = array('users' => DB::table('users')->get());
        return Utils::dataFormat(200, 1, "success", $users);
    }
}
