<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'number_of_adults' => 'integer|min:1|max:3',
        'number_of_children' => 'integer|max:3',
    );

    public function getData()
    {
        return $this->guest_name . ':'.$this->address.'('.$this->tel.')';
    }
}
