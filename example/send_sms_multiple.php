<?php

/**
 * SMSGatewayCenter - Send Multiple SMS to SMSGateway.center API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Send Multiple SMS 
 * Comma Separated mobile numbers.
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword"); //Your username and password
$smsgatewaycenter->setMobile("919xxxxxxxxx,919xxxxxxxxx"); //Your comma separated mobile numbers
$smsgatewaycenter->setMsg("Welcome to SMSGatewayCenter"); // Your message
$smsgatewaycenter->setMsgType(psmplSMSGatewayCenter::MSG_TYPE_TEXT); //Change to MSG_TYPE_UNICODE for Unicode message
$smsgatewaycenter->setSenderId("SMSGAT"); // Your approved sender anem
$smsgatewaycenter->setSendMethod(psmplSMSGatewayCenter::METHOD_SIMPLE_MSG);
$smsgatewaycenter->sendSMS(psmplSMSGatewayCenter::SMSAPI,'send');
echo $smsgatewaycenter->getResponse();
