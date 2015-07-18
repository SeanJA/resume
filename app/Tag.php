<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'start',
        'end',
        'updated_at',
        'created_at',
    ];
}
