<?php

namespace App\Http\Controllers\Auth\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create (){
        return view ('auth.manager_login')
    }
}
