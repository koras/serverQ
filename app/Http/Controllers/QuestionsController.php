<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests; 
use App\Http\Contracts\QuestionsServiceInterface;

use Illuminate\Http\Request;

class QuestionsController extends ApiController
{ 

    // Route::any('/questions', 'QuestionsController@index');
    // // Получение вопроса
    // Route::any('/question/{id}', 'QuestionsController@one');
    // //Создание вопроса
    // Route::any('/question/create', 'QuestionsController@create');



    private $service;

    public function __construct(QuestionsServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    { 
        
    }
    public function one(Request $request)
    { 
        
        echo  '2222';
    }

    public function create(Request $request)
    { 
        return  $this->service->create($request);
    }
}