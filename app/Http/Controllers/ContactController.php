<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Send email
        return response()->json([
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ]);
    }
}
