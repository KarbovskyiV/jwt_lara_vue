<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fruit\FruitResource;
use App\Models\Fruit;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class FruitController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $fruits = Fruit::all();

        return FruitResource::collection($fruits);
    }
}
