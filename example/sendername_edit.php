<?php

/**
 * SMSGatewayCenter - Edit SenderName API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Edit SenderName
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* editSenderName
* $url string APIURL
* $component API URL Component
* $oldsendername String old sender name 
* $newendername String new sender name 
*/
$smsgatewaycenter->editSenderName(psmplSMSGatewayCenter::LIBAPI,"self/SenderName/","SMSNEW","NEWSMS");
echo $smsgatewaycenter->getResponse();