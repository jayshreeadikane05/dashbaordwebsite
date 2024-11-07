<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services(Request $request){
        return view('services');
    }

    public function digitalmarketing(){
        return view('services.digitalmarketing');
    }
   
    public function advertising(){
        return view('services.advertising');
    }
    public function visualcontent(){
        return view('services.visualcontent');
    }
    public function enhancedmarketing() {
        return view('services.enhancedmarketing');
    }
}
