<?php

namespace App\Http\Controllers;

use App\bank;
use App\bill;
use Illuminate\Http\Request;

class BillreceiveController extends Controller
{
    public function index(){
        $bills  = bill::all();
        $banks = bank::all();
     
        return view('admin.bank_receive',[
            'banks' => $banks,
            'bills' => $bills            
        ]);
    }
    
}
