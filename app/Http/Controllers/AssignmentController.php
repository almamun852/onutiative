<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function sendSms(Request $request)
    {
    	 
		$SMSArray [0]['sent_time'] = udate('YmdHisu');
		$SMSArray [0]['sms_text'] = 'Testing from onuserver API';
		$SMSArray [0]['mobile'] = '011670122630';
		$SMSArray [0]['smsId'] = uniqid();


		$myJSonDatum = json_encode($SMSArray);

		//specifi the url
		$url="http://plugins.onuserver.com/6v0/outgoingPlugin/smsOutgoing/index";

		if($ch = curl_init($url))
		{
		    //Your valid username & Password ----------Please update those field
		    $username = '14303058@iubat.edu';
		    $password = 'pavelpass';

		    curl_setopt( $ch , CURLOPT_HTTPAUTH , CURLAUTH_BASIC ) ;
		    curl_setopt( $ch, CURLOPT_USERPWD , $username . ':' . $password ) ;
		    curl_setopt( $ch , CURLOPT_CUSTOMREQUEST , 'POST' ) ;

		    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
		        'Content-Length: ' . strlen($myJSonDatum)));

		    curl_setopt($ch, CURLOPT_POST, true);
		    curl_setopt($ch, CURLOPT_POSTFIELDS,$myJSonDatum);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		    curl_setopt( $ch, CURLOPT_TIMEOUT , 300 ) ;
		    $response=curl_exec($ch);
		    curl_close($ch);
		    echo('Response is: '.$response);
		}
		else
		{
		    echo("Sorry,the connection cannot be established");
		}

    }
    function udate($format, $utimestamp = null)
		{
		    $m = explode(' ',microtime());
		    list($totalSeconds, $extraMilliseconds) = array($m[1], (int)round($m[0]*1000,3));
		    return date("Y-m-d H:i:s", $totalSeconds);
		}
}
