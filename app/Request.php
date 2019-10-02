<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
    	'client_id',
        'collection_id',
        'request',
        'status',
        'date_made',
        'date_due'
    ];

    public function client()
    {
    	return $this->belongsTo(Client::class);
    }
}
