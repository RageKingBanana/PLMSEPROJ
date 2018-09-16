<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //
    protected $table = 'college';

    public function professors()
    {
        return $this->belongsToMany(Professor::class)
            ->using(Course::class)
            ->withPivot('name','desc','duration')
            ->withTimestamps();
    }
}
