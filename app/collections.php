<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class collections extends Model
{
	protected $fillable = [
    	'date_collected',
    	'comment',
    	'client_id',
    	'payment_id',
    	'collector_id'
    ];

    public function payment()
    {
    	return $this->belongsTo(Payment::class);
    }

    public function client()
    {
    	return $this->belongsTo(Client::class);
    }
}
