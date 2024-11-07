<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoredController extends Controller
{
    public function index(){
        return view('cookies');
    }
    public function privacy(){
        return view('privacy');
    }
    public function gdpr(){
        return view('gdpr');
    }
    public function subscription(){
        return view('subscription');
    }
}
