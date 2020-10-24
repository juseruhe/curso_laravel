<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;


class UserController extends Controller
{
    public function show($user) {

$usr = User::find($user);

return view('user', compact('usr'));



    }
}
