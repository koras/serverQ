<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests; 
use App\Http\Contracts\UserServiceInterface;

use Illuminate\Http\Request;

class UserController extends ApiController
{ 

    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function check(Request $request)
    {
        return $this->userService->checkOrCreateUser($request);
    }
}