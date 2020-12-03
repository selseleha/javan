<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    //
    protected $fillable = [
        'text','image','valid','user_id','category_id',
    ];

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function categories(){


        return $this->belongsTo(category::class);

    }


}
