<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = array('guest_id');

    public static $rules = array(
        'guest_name' => 'required',
        'address' => 'required',
        'tel' => 'required'
    );

    // public function getId()
    // {
    //     return $this->guest_id;
    // }

    // public function getName()
    // {
    //     return $this->guest_name;
    //     // return $this->guest_name;$this->address; $this->tel;
    // }

    // public function getAddress()
    // {
    //     return $this->address;
    // }

    // public function getTel()
    // {
    //     return $this->tel;
    // }

    public function hotel()
    {
        return $this->hasOne('App\Hotel');
    }
}
