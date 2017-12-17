<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
     'user_id',
     'name',
     'address',
     'website',
     'email',
     'phone',
     'bio'
    ];

    protected $table = 'listings';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function users(){
    	return $this->belongsTo('App\User');
    }
}
