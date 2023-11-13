<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'guest_name' => 'required',
        'address' => 'required',
        'tel' => 'required'
    );

    public function getId()
    {
        return $this->guest_id;
    }

    public function getName()
    {
        return $this->guest_name;
        // return $this->guest_name;$this->address; $this->tel;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function getData()
    {
        return $this->reservation_id . ':' .$this->fee . '(' . $this->guest->address . ')';
    }

    public function guest()
    {
        return $this->belongsTo('App\Guest');
    }
}
