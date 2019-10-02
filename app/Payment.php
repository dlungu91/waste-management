<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $fillable = [
    	'client_id',
        'amount',
        'duration',
        'datePaid',
        'datedue',
        'tax'
    ];

    Public function client()
    {
    	return $this->belongsTo(Client::class);
    }
}