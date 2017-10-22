<?php

/**
 * SMSGatewayCenter - Add New User - Reseller API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Add New User
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* addNewRecord
* $url string APIURL
* $component API URL Component
* $param array array of required fields
*/
//https://www.smsgateway.center/library/api/reseller/AddClient/?userId=YourUsername&password=YourPassword&Client_Username=ClientUsername&Client_Fullname=clientfullname&Client_Email=client%40example.com&Client_Mobile=98xxxxxxxx&Client_Usertype=customer&Client_Senderid=6charsendername&Client_Address=yourclientaddress&ExpDate=2018-10-16

$param = array(
	'Client_Username' => 'User_New_Username',
	'Client_Fullname' => 'User_Full_Name',
	'Client_Email' => 'User@ValidEmail.com',
	'Client_Mobile' => 'User_91999xxxxxxx',
	'Client_Mobile' => 'User_Mobile',
	'Client_Usertype' => 'customer', //customer/reseller
	'Client_Senderid' => 'SGCSMS', //6 Digits Sender Name
	'Client_Address' => 'User_Full_Address',
	'ExpDate' => 'User_Expiry_Date' //validation or expiry date
);

$smsgatewaycenter->sendRecord(psmplSMSGatewayCenter::LIBAPI,"reseller/AddClient/",$param);
echo $smsgatewaycenter->getResponse();