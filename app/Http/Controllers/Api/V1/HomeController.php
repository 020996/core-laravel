<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Product;
use App\Http\Repositories\ProductRepository;
use App\Components\QueryElastic;



class HomeController extends BaseController
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getHome()
    {
        // $products = $this->productRepository->getById(2);
        $products = $this->productRepository->getAll();

        return response()->json($products);
    }
    public function getSearch()
    {



        Product::addAllToIndex();   /// ad data in services elastic search;


        $param1 = [
            'match' => [
                'username' => 'rogers63'
                // 'message' => [
                //     "username" => "rogers63",
                // ],
                // "type" => "parsing_exception"
            ]
        ];


        $articles = Product::searchByQuery($param1);

        // $articles = Product::where('id', '<', 200)->get();
        // $articles->addToIndex();

        // $articles = Product::find($id);
        // $articles->addToIndex();

        // Product::reindex();



        // return $articles;


       $param = QueryElastic::$param;



        return $response = Product::complexSearch($param)->toArray();
    }
}
