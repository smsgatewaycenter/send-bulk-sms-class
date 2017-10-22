<?php

/**
 * SMSGatewayCenter - Add New SenderName API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Add New SenderName
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* addNewSenderName
* $url string APIURL
* $component API URL Component
* $sendername String new sender name 
*/
$smsgatewaycenter->addNewSenderName(psmplSMSGatewayCenter::LIBAPI,"self/SenderName/","SMSGAT");
echo $smsgatewaycenter->getResponse();