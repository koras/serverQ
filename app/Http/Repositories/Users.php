<?php

namespace App\Http\Repositories;

use Eloquent;
use Illuminate\Database\Eloquent\Model; 
use App\Http\Contracts\Repositories\UserRepInterface; 

class Users extends Model  implements UserRepInterface
{
    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'users';
   // public $timestamps = false;

    protected $primaryKey = 'id';


    protected $attributes = ['status' => 1,'reputation'=> 10, 'lang'=> 'en' ];

    protected $fillable = ['lang','ip','secret','secret_hidden'];
    protected $hidden = ['secret','secret_hidden','updated_at','ip'];

    // val _id: String,
    // val registartionStep: String,
    // val ip: String,
    // val lang: String,
    // val reputation: String,
    // val likesQuestions: List<String>,
    // val disLikeQuestions: List<String>,
    // val likesAnswers: List<String>,
    // val disLikeAnswers: List<String>


    // Get all instances of model
    public function allItems()
    {
        return self::get();
    }

    // create a new record in the database
    public function createItem(array $params)
    {
        return self::create($params);
    }

    // update record in the database
    public function updateItem(array $data, $id)
    {
        self::find($id)->update($data);
        return $this;
    }
 

    // show the record with the given id
    public function show($id, $secret)
    {
        return self::find($id);
    }

    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function withItem($relations)
    {
        return $this->model->with($relations);
    }
    
}