<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;

class UserController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        User::query()->firstOrCreate([
            'email' => $data['email']
        ], $data);

        return response([]);
    }
}
