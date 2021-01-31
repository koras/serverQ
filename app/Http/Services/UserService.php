<?php

 
namespace App\Http\Services;

use App\Http\Contracts\UserServiceInterface;
use App\Http\Contracts\Repositories\UserRepInterface;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

 

class UserService   implements UserServiceInterface
{

    private  $secret;
    private  $secretKey = "question";
    
    private $userRepInterface;

    public function __construct(UserRepInterface $userRepInterface)
    {
        $this->userRepInterface = $userRepInterface;
    }


    public function  checkOrCreateUser($data)  {
        // secret - генерирует телефон
        $userData = $this->checkUser($data->id, $this -> getSecret($data->secret));
        if($userData){
            return $userData;
        } 
      return   $this->register($data);
    }


    private function checkUser($id, $secret)
    {
      return  $this->userRepInterface->show($id, $secret);
    }
    
    private function register($data)
    {      
        
        $params = [
            'secret_hidden'=>$data->secret,
            'ip'=>$this->getIp(),
            'secret'=> $this->getSecret($data->secret)
        ];

       return  $this->userRepInterface->createItem($params);
    }


    private function getSecret($secret) : string
    {        
      return md5($this->secretKey. $secret);
    }
     

    private function getIp(){
        $req = Request();
        return $req->ip();
    }
}
