<?php

namespace App;

use App\bill;
use App\bank_account;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    public function bills(){
        return $this->hasMany('App\bill');
    }

    public function bank_accounts(){
        return $this->hasMany('App\bank_account');
    }
}
