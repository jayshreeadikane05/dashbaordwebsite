<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormEntry;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        {
            try {
                $validatedData = $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'phone' => 'nullable|string|max:255',
                    'hereabout' => 'required|string|max:255',
                    'message' => 'required|string',
                ]);
    
                FormEntry::create($validatedData);
    
                return response()->json(['status' => 'true', 'message' => 'Form submitted successfully! We will Contact you soon'], 200);
            } catch (ValidationException $e) {
                return response()->json(['errors' => $e->errors()], 422);
            }
        }
    }
}
