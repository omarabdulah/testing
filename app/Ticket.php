<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['first_name','last_name','phone','address','area','city','car','booking_time','from','where','user_id'];

    public $timestamps = false;

    public function agent(){
        return $this->belongsTo('App\User','id');
    }
}
