<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class langController extends Controller
{
    public function eng()
    {
       App::setLocale('en');
       Session::put('lang','en');
       return back();
    }
    public function ara()
    {
       App::setLocale('ar');
       Session::put('lang','ar');
       return back();
    }
}
