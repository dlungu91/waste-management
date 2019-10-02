<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
	protected $fillable = [
    	'id',
    	'complaint',
    	'client_id',
    	'date_made',
    	'date_due',
    	'status',
    ];

    public function client()
    {
    	return $this->belongsTo(Client::class);
    }
}
