<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class useradds extends Model
{
    //

    protected $fillable = [
        'user_id','category_id','first_name','last_name','photo','filename',
        "year",
        'month' ,
        "day",
        "phone" ,
        "tahsilat" ,
        "reshteh",
        "uni" ,
        "job" ,
        "address" ,
        'marry',
        'text',


    ];

    public function User(){


        return $this->belongsTo(User::class);
    }


}
