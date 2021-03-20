<?php

namespace App\Http\Repositories;

use Eloquent;
use Illuminate\Database\Eloquent\Model; 
use App\Http\Contracts\Repositories\QuestionRepInterface; 

class Questions extends Model  implements QuestionRepInterface
{
    
    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'questions';
   // public $timestamps = false;

    protected $primaryKey = 'id';
    protected $attributes = ['status' => 1,'reputation'=> 10, 'lang'=> 'en' ];
    protected $fillable = ['lang','ip','secret','secret_hidden'];
    protected $hidden = ['secret','secret_hidden','updated_at','ip'];



    public function allItems(){
        
    }

    public function createItem(array $params)
    {
        return self::create($params);
    }

    public function updateItem(array $data, $id){
        
    }
 
    public function withItem($id){
        
    }

    // show the record with the given id
    public function show($id, $secret){

    }
}