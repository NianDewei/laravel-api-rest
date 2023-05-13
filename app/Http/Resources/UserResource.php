<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $user = [
            'data'  => [
                'type' => 'users',
                'id'   => $this->id,
                'attributes' => [
                    'name'  =>  $this->name,
                    'email' =>  $this->email
                ]
            ],

            'links' => [
                'self' => $this->path
            ]
        ];

        return $user;
    }
}
