<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Session;

class Sport extends Model
{
    protected $table = 'sports';

    protected $fillable = [
        'name','attendees_no'
    ];

    public function sessions(){
        $this->hasMany('App\Session');
    }
}
