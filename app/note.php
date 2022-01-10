<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class note extends Model
{
    protected $fillable=[
        'content' ,'user_id'
    ];

    //note belongTo one user
    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
