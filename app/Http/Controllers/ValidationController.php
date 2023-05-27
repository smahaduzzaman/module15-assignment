<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function RequestValidation(Request $request)
    {
        $request->input([
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        return response()->json([
            'message' => 'Validation Successful',
            'status' => '200',
        ]);
    }
}
