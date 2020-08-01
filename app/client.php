<?php

namespace App;

use App\bank;
use App\bill;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    public function bills(){
        return $this->hasMany('App\bill');
    }
    public function bank(){
        return $this->belongsTo('App\bank');
    }

    protected $fillable = [
        'name','address','phone','register_id'
    ];


}
