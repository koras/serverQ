<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use App\Http\Contracts\Repositories\UserRepInterface;

class Users extends Model implements UserRepInterface
{
    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'users';
    public $timestamps = false;
    
}