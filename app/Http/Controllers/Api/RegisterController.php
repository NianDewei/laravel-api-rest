<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    private readonly string $basePath ;


    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->basePath = config('app.url');
    }

    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        $request->validated();

        $user       = User::create($request->all());
        $path       = "$this->basePath/v1/users/$user->id";
        $user->path = $path;

        $header = [
            'Location'     => $path,
            'Content-Type' => 'application/vnd.api+json'
        ];

        $data = new UserResource($user);

        return response()->json($data, 201, $header);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
