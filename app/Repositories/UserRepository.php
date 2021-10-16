<?php

namespace App\Repositories;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRepository
{
    public function updateUserInfo(FormRequest $data, User $user)
    {
        return User::where('id', $user->id)->update([
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'mobile' => $data->mobile,
            'address' => $data->address,
        ]);
    }
}
