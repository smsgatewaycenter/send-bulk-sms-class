<?php

/**
 * SMSGatewayCenter - Send Schedule Multiple SMS to SMSGateway.center API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Send Schedule Multiple SMS 
 * Comma Separated mobile numbers.
 * Schedule SMS datetime format - yyyy-mm-dd hh:mm:ss
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword"); //Your username and password
$smsgatewaycenter->setMobile("91961xxxxxxxx,91971xxxxxxxx"); //Your comma separated mobile numbers
$smsgatewaycenter->setMsg("Welcome to SMS Gateway Center"); // Your message
$smsgatewaycenter->setMsgType(psmplSMSGatewayCenter::MSG_TYPE_TEXT); //Change to MSG_TYPE_UNICODE for Unicode message
$smsgatewaycenter->setSenderId("SMSGAT"); // Your approved sender anem
$smsgatewaycenter->setSendMethod(psmplSMSGatewayCenter::METHOD_SIMPLE_MSG);
$smsgatewaycenter->setScheduleTime("2017-10-19 20:00:00");
$smsgatewaycenter->sendSMS(psmplSMSGatewayCenter::SMSAPI,'send');
echo $smsgatewaycenter->getResponse();
