<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    function RedirectAction1():string {
        return response()->json([
            'message' => 'Redirected 1',
            'status_code' => '200'
        ]);
    }

    function RedirectAction2():string {
        return response()->json([
            'message' => 'Redirected 2',
            'status_code' => '200'
        ]);
    }
}
