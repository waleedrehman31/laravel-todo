<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['todo', 'created_at', 'updated_at', 'user_id'];

}
