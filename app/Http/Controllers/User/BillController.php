<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function add(){
        return view('user.billform');
    }

    public function create(){
        // return view('');
    }
}
