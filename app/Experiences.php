<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tags;

class Experiences extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this->hasMany('Tags');
    }
}
