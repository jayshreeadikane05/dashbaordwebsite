<?php

namespace App\Http\Controllers;

use App\Models\GetInTouch;
use Illuminate\Http\Request;

class GetInTouchController extends Controller
{
    public function getintouchentry(Request $request){
        $data = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'services' => $request->services,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        
        try {
            $insert = GetInTouch::create($data);

            if($insert){
                return response()->json(['status' => '01', 'message' => 'User Created Successfully'], 200);
            }else{
                return response()->json(['status' => '00', 'message' => 'Error creating user'], 400);
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
