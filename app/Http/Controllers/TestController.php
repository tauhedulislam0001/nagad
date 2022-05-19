<?php

namespace App\Http\Controllers;
use App\Http\Controllers\NagadPaymentController;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function store(Request $request){

        $amount = '200';
        if($request->payment =='Nagad'){
        $result=(new NagadPaymentController)->pay($amount);
        }
        dd($request->all());
    }

}
