<?php

namespace App;

use App\client;
use App\bank_account;
use Illuminate\Support\Facades\App;
use Psy\CodeCleaner\ReturnTypePass;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    public function client(){
        return $this->belongsTo('App\client');
    }

    public function bank()
    {
        return $this->belongsTo('App\bank');
    }

    public function bank_account()
    {
        return $this->belongsTo('App\bank_account');
    }
}
