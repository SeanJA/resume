<?php

namespace App;

use App\Presenters\ExperiencePresenter;
use Carbon\Carbon;
use Conner\Tagging\TaggableTrait;
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
    use TaggableTrait;

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
     * @return mixed
     */
    public function getPresenterClass()
    {
        return ExperiencePresenter::class;
    }

    public function setEndAttribute($value)
    {
        return $this->attributes['end'] = empty($value)?  null : Carbon::parse($value);
    }

    public function getEndAttribute($value)
    {
        return $this->attributes['end'] = empty($value)?  null : Carbon::parse($value);
    }

    public function setStartAttribute($value)
    {

        return $this->attributes['start'] = empty($value)?  null : Carbon::parse($value);
    }

    public function getStartAttribute($value)
    {
        return $this->attributes['start'] = empty($value)?  null : Carbon::parse($value);
    }
}
