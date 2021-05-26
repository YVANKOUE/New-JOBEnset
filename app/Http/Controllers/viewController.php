<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class viewController extends Controller
{
    public function store(Request $request)
    {
       $request_id = $request->input('domain');
       
        $response = array(
            'status' => 'success',
            'msg'    => 'Setting created successfully',
        );
    
        return Response::json($response);
    }
}
