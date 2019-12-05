<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Http\Controllers\Controller;

use illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        return redirect('/');
    }
}
