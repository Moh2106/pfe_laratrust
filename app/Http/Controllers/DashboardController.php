<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    if(Auth::user()->hasRole('admin')){
        return view('admindash');
   }
   elseif(Auth::user()->hasRole('viceprocureur')){ 
        return view('vicedash');
   }
   elseif(Auth::user()->hasRole('agent')){
    return view('dashboard');
}
elseif(Auth::user()->hasRole('administrateur')){ 
    return view('imAdmin');
}
 else return view('auth.login');
   }
}
