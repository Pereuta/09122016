<?php

namespace App;
use App\Task;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * Получить все задачи пользователя.
     */
    public function tasks() {
        return $this->hasMany(Task::class);
    }
}