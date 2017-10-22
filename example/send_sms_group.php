<?php

/**
 * SMSGatewayCenter - Send Group SMS to SMSGateway.center API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Send Group SMS 
 * Comma Separated Group IDs or Group Names.
 * GroupId Example: 12321,42314,41223
 * GroupName Example: mygroup,testgroup,othergroup
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword"); //Your username and password
$smsgatewaycenter->setGroup("12345,34567"); //Your comma separated group ids or group names
$smsgatewaycenter->setMsg("Welcome to SMSGatewayCenter"); // Your message
$smsgatewaycenter->setMsgType(psmplSMSGatewayCenter::MSG_TYPE_TEXT); //Change to MSG_TYPE_UNICODE for Unicode message
$smsgatewaycenter->setSenderId("SMSGAT"); // Your approved sender anem
$smsgatewaycenter->setSendMethod(psmplSMSGatewayCenter::METHOD_GROUP_MSG);
$smsgatewaycenter->sendSMS(psmplSMSGatewayCenter::SMSAPI,'send');
echo $smsgatewaycenter->getResponse();
