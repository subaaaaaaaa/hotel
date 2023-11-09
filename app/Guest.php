<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'guest_name' => 'required',
        'address' => 'required',
        'tel' => 'required'
    );

    public function getData()
    {
        // anycode
    }
}
