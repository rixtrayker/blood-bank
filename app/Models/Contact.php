<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model 
{

    protected $table = 'contacts';
    public $timestamps = true;
    protected $fillable = array('subject', 'client_id', 'messages');

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

}