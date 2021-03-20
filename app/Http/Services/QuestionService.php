<?php

 
namespace App\Http\Services;

use App\Http\Contracts\UserServiceInterface;
use App\Http\Contracts\QuestionsServiceInterface;
use App\Http\Contracts\Repositories\UserRepInterface;
use App\Http\Contracts\Repositories\QuestionRepInterface;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

 

class QuestionService   implements QuestionsServiceInterface
{

    private  $secret;
    private  $secretKey = "question";
    
    private $userRepInterface;
    private $questionRepInterface;

    public function __construct(UserRepInterface $userRepInterface, QuestionRepInterface $questionRepInterface)
    { 
        $this->userRepInterface = $userRepInterface;
        $this->questionRepInterface = $questionRepInterface;
    }

     /**
     * Create the new question
     */
    public function create($data){

      $user =   $this->userRepInterface->show($data->id,$data->secret);
      $params = $this->prepareQuestionForSave($data, $user);
      return $this->questionRepInterface->createItem($params);
    }
    /**
     * Подготавливаем данные для записи в базу
     */
    private function prepareQuestionForSave($data, $user) : array {
        $data =   $data;

        
    }


    /**
     * get list 
     */
    public function list($data){

    } 
    
    /**
    * get a single question
    */
   public function single($id){
       
   }
}
