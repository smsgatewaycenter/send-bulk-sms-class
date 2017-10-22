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
 * Comma Separated mobile numbers with schedule timestamp.
 */
$scheduleTime = "2017-10-22 10:00:00"; //Schedule time is set to 22nd October 2017 at 10 am
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword"); //Your username and password
$smsgatewaycenter->setMobile("917xxxxxxxxx,9170xxxxxxxx"); //Your comma separated mobile numbers
$smsgatewaycenter->setMsg("Welcome to SMSGatewayCenter"); // Your message
$smsgatewaycenter->setMsgType(psmplSMSGatewayCenter::MSG_TYPE_TEXT); //Change to MSG_TYPE_UNICODE for Unicode message
$smsgatewaycenter->setSenderId("SMSGAT"); // Your approved sender anem
$smsgatewaycenter->setSendMethod(psmplSMSGatewayCenter::METHOD_SIMPLE_MSG);
$smsgatewaycenter->setScheduleTime($scheduleTime);
$smsgatewaycenter->sendSMS(psmplSMSGatewayCenter::SMSAPI,'send');
echo $smsgatewaycenter->getResponse();
