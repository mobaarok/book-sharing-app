<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserInfoRequest;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function editUserInfo()
    {
        $user = Auth::user();
        return view('user.edit-user-info', ['user' => $user]);
    }

    public function updateUserInfo(UpdateUserInfoRequest $request, UserRepository $userRepository)
    {
        $user = Auth::user();
        $userRepository->updateUserInfo($request, $user);
        return redirect()->route('home');
    }
}
