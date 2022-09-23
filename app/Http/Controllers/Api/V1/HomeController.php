<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Product;

class HomeController extends BaseController
{
    public function getHome(){
        $data = [];
        // $post = Product::find('123');

    $a =  \DB::collection('user')
        ->get();
        dd($a);

        $user = Redis::set('name', 'KhanhLC');
        $user3 = Redis::get('name');
        dd($user3);
        return response([
            'status'=> 200,
            'data'=> $data
        ]);
    }
}
