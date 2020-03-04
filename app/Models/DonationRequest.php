<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model 
{

    protected $table = 'donation_requests';
    public $timestamps = true;
    protected $fillable = array('client_id', 'patient_name', 'patient_age', 'blood_type_id', 'bags_num', 'hospital_address', 'city_id', 'latitude', 'phones', 'notes');

    public function notifications()
    {
        return $this->hasOne('App\Models\Notification');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function blood_type()
    {
        return $this->belongsTo('App\Models\BloodType');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

}