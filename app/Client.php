<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
    	'fname',
    	'lname',
    	'nrc',
    	'address',
    	'phone1',
    	'phone2',
    	'email'
    ];

    public function payments()
    {
    	return $this->hasMany(Payments::class);
    }

    public function collections()
    {
        return $this->hasMany(Collections::class);
    }
}
