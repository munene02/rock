<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Safaricom\

class CheckController extends Controller
{
    public function test()
    {
    	//dd('ola');

    	//Validation

		$mpesa= new \Mossey\Mpesa\Mpesa();

		$b2bTransaction=$mpesa->validate();

		//Confirmation

		$mpesa= new \Mossey\Mpesa\Mpesa();

		$b2bTransaction=$mpesa->confirm();

    }
}
