<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function getHome(){
        $data = [];
        return response([
            'status'=> 200,
            'data'=> $data
        ]);
    }
}
