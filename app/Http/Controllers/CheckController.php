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

		// $mpesa= new \Mossey\Mpesa\Mpesa();

		// $b2bTransaction=$mpesa->validate();

		// //Confirmation

		// $mpesa= new \Mossey\Mpesa\Mpesa();

		// $b2bTransaction=$mpesa->confirm();

		//Account balance

		$mpesa= new \Mossey\Mpesa\Mpesa();

		// $balanceInquiry=$mpesa->accountBalance($CommandID, $Initiator, $SecurityCredential, $PartyA, $IdentifierType, $Remarks, $QueueTimeOutURL, $ResultURL);

		$BusinessShortCode = "174379";
		$LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
		$TransactionType = "CustomerPayBillOnline";
		$Amount = "1";
		$PartyA = "254713467781";
		$PartyB = "174379";
		$PhoneNumber = "254713467781";
		$CallBackURL = "http://crysrockeng.com/call";
		$AccountReference = "101TEST";//plans
		$TransactionDesc = "test";
		$Remarks = "Remarked";

		$stkPushSimulation = $mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);

		$checkoutRequestID = $stkPushSimulation.CheckoutRequestID;
		$timestamp='20'.date("ymdhis");
        $password=base64_encode('password');

		// if($stkPushSimulation->isEmpty()){return 'Empty';}
		// 	else{
		// 		$STKPushRequestStatus=$mpesa->STKPushQuery($checkoutRequestID,$businessShortCode,$password,$timestamp);
		// 		return $STKPushRequestStatus;
		// 	}
        return $checkoutRequestID;
		


    }

    public function nice(Request $request)
    {
    	dd('amigo');
    }
}
