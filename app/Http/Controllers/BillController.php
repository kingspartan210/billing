<?php

namespace App\Http\Controllers;

use App\bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(){
        $bills = bill::all();
        return view('admin.bill',[
            'bills' => $bills
        ]);
    }
    public function add(){
        return view('admin.billform');
    }
    public function create(){
        $bill = new bill;
        $bill->photo_name = request()->photo;
        $bill->bank_id = request()->bank_id;
        $bill->bank_account_id = request()->bankacc;
        $bill->amount = request()->amount;
        $bill->receive_address = request()->receive_address;
        $bill->transaction = request()->transaction;
        $bill->status = request()->status;

        $bill->save();

        return redirect('/admin/bill');
    }

    public function insert(){
        $bill = new bill;
        $bill->photo_name = request()->photo->getClientOriginalName();
        $bill->bank_id = request()->bank_id;
        $bill->client_id = request()->client_id;
        $bill->bank_id = request()->bank_id;
        $bill->bank_account_id = request()->bank_account_id;
        $bill->amount = request()->amount;
        $bill->receive_address = request()->receive_address;
        $bill->transaction = request()->transaction;
        $bill->status = request()->status;

        $bill->save();

        return 'Thank You !';
    }

    public function show(){

        
        return view('admin.index');
    }
}
