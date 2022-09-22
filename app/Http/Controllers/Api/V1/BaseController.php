<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('Api.auth', ['except' => ['login',]]);
        try {
            $token = \request()->header('authorization');
        } catch (\Exception $e) { //general JWT exception

        }
    }
}
