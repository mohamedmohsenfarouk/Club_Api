<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Sport;

class Session extends Model
{
    protected $table = 'sessions';

    protected $fillable = [
        'name', 'attendance_limit', 'sport_id', 'booked_users'
    ];

    public function users(){
        $this->hasMany('App\User');
    }

    public function sports(){
        $this->hasOne('App\Sport','sport_id');
    }
}
