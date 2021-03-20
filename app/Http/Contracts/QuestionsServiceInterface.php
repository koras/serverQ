<?php

namespace App\Http\Contracts;

interface QuestionsServiceInterface {

    /**
     * Create the new question
     */
    public function create($data);

    /**
     * get list 
     */
    public function list($data);    
    
    /**
    * get a single question
    */
   public function single($id);
}