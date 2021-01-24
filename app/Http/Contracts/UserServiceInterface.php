<?php

namespace App\Http\Contracts;

interface UserServiceInterface {


    public function checkOrCreateUser($data);
}