<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The table associated with the Projects model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'deadline', 'description', 'assignee'
    ];
}
