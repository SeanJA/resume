<?php

namespace App\Presenters;

use App\Experience;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use McCool\LaravelAutoPresenter\BasePresenter;

class ExperiencePresenter extends BasePresenter
{
    public function __construct(Experience $resource)
    {
        parent::__construct($resource);
    }

    /**
     * @return string
     */
    public function start()
    {
        $start = $this->wrappedObject->start;

        return Carbon::parse($start)
            ->format('Y-m-d');
    }

    /**
     * @return null|string
     */
    public function end()
    {
        $end = $this->wrappedObject->end;

        return !is_null($end)? Carbon::parse($end)
            ->format('Y-m-d') : null;
    }

    /**
     * @return static
     */
    public function carbon_start()
    {
        return $this->wrappedObject->start;
    }

    /**
     * @return null|static
     */
    public function carbon_end()
    {
        $end = $this->wrappedObject->end;
        return is_null($end)? null : $end;
    }

    /**
     * @return string
     */
    public function markdown_description()
    {
        $description = $this->wrappedObject->description;
        return markdown($description);
    }

    /**
     * @return string
     */
    public function tagging()
    {
        return implode(',',$this->wrappedObject->tagNames());
    }

    /**
     * @return Collection
     */
    public function tags()
    {
        return $this->wrappedObject->tags;
    }

    /**
     * @return bool
     */
    public function hasTags()
    {
        return $this->wrappedObject->tags->count() > 0;
    }
}
