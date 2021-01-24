<?php

 
namespace App\Http\Services;

use App\Http\Contracts\UserServiceInterface;
use App\Http\Contracts\Repositories\UserRepInterface;


class UserService   implements UserServiceInterface
{
    
    private $userRepInterface;

    public function __construct(UserRepInterface $userRepInterface)
    {
        $this->userRepInterface = $userRepInterface;
    }


    public function  checkOrCreateUser($data) : Array {


        return [];
    }


    private function checkUser()
    {
        //
    }
    


    private function register()
    {
        //
    }


}
