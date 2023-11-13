<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $guarded = array('guest_id');

    public static $rules = array(
        'guest_name' => 'required',
        'address' => 'required',
        'tel' => 'required'
    );
}
