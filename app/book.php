<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = [
        'titel', 'description', 'author' ,'publisher','image'
    ];

    public function categories()
    {
        return $this->belongsToMany('App\category');
    }
}
