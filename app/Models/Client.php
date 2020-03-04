<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model 
{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('phone', 'name', 'password', 'pin_code', 'email', 'd_o_b', 'blood_type_id', 'last_donation_date', 'city_id');
    protected $hidden = array('password');

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }

    public function donation_requests()
    {
        return $this->hasMany('App\Models\DonationRequest');
    }

    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }

    public function notifications()
    {
        return $this->belongsToMany('App\Models\Notification');
    }

    public function blood_type()
    {
        return $this->belongsTo('App\Models\BloodType');
    }

    public function governorates()
    {
        return $this->belongsToMany('App\Models\Governorate');
    }

    public function blood_types()
    {
        return $this->hasOne('App\Models\BloodType');
    }

}