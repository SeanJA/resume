<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tags;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Experience
 *
 * @package App
 */
class Experience extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'company',
        'start',
        'end',
        'type',
        'description',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'start',
        'end',
        'updated_at',
        'created_at',
        'deleted_at',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this->hasMany('Tags');
    }
}
