<?php

namespace App;

use App\Presenters\ExperiencePresenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;

/**
 * Class Experience
 *
 * @package App
 */
class Experience extends Model implements HasPresenter
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
        return $this->hasMany(Tag::class);
    }

    /**
     * @return mixed
     */
    public function getPresenterClass()
    {
        return ExperiencePresenter::class;
    }
}
