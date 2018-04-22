<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    /**
     * The table associated with the Projects model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'deadline', 'members', 'description'
    ];
}
