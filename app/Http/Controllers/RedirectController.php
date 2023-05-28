<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    function RedirectAction1():string {
        return response()->json([
            'message' => 'This is Home Page',
            'status_code' => '200'
        ]);
    }

    function RedirectAction2():string {
        return response()->json([
            'message' => 'This is Dashboard Page',
            'status_code' => '200'
        ]);
    }
}
