<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class CheckController extends Controller
{
    public function test()
    {
    	//dd('ola');

    	//Validation

		$mpesa= new \Mossey\Mpesa\Mpesa();

		// $b2bTransaction=$mpesa->validate();

		// $b2bTransaction=$mpesa->confirm();

		$BusinessShortCode = "174379";
		$LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
		$TransactionType = "CustomerPayBillOnline";
		$Amount = "1";
		$PartyA = "254713467781";
		$PartyB = "174379";
		$PhoneNumber = "254713467781";
		$CallBackURL = "http://crysrockeng.com/call";
		$AccountReference = "350 Daily Plan";//plans
		$TransactionDesc = "test";
		$Remarks = "Remarked";

		$stkPushSimulation = $mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);

		//$id = $stkPushSimulation.CheckoutRequestID;
		// $timestamp='20'.date("ymdhis");
  //       $password=base64_encode('password');

		// if($stkPushSimulation->isEmpty()){return 'Empty';}
		// 	else{
		// 		$STKPushRequestStatus=$mpesa->STKPushQuery($checkoutRequestID,$businessShortCode,$password,$timestamp);
		// 		return $STKPushRequestStatus;
		// 	}
		$decode = json_decode($stkPushSimulation, true);
		$id = $stkPushSimulation[0];
        return $stkPushSimulation;
        return $id;

        var_dump($decode);
        //var_dump($stkPushSimulation);
		


    }

    public function nice(Request $request)
    {
    	dd('amigo');
    }
}
