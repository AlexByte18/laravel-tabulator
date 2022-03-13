<?php

namespace App\Repositories\User;

use App\Http\Resources\UserResource;
use App\Models\User;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function tabulatorPagination(): array
    {
        $users = User::select([
            "users.id as user_id",
            "users.name",
            "email",
            "created_at",
            "role_id"
        ])
        ->with([
            "role:id,name"
        ])
        ->orderByDesc("user_id")
        ->paginate(request("size") ?? 5);

        $resouce = UserResource::collection($users);

        return[
            "data" => $resouce->all(),
            "last_paage" => $resouce->lastPage(),
            "current_page" => $resouce->currentPage()
        ];
    }
}
