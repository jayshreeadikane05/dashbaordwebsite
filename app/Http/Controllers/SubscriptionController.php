<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|unique:subscriptions,email',
            ], [
                'email.unique' => 'Already subscribed.'
            ]);

            $subscription = Subscription::create([
                'email' => $request->email,
            ]);

            return response()->json(['message' => 'Successfully subscribed!'], 200);

        } catch (ValidationException $e) {
            return response()->json(['message' => $e->validator->errors()->first()], 400);

        } catch (\Exception $e) {
            return response()->json(['message' => 'An unexpected error occurred. Please try again later.'], 400);
        }
    }
}
