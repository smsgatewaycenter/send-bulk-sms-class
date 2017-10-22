<?php

/**
 * SMSGatewayCenter - Bulk Upload to SMSGateway.center API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Send Bulk Upload SMS 
 * Allowed file extensions are .csv / .xls / .xlsx / .txt / .zip
 * .zip should have either .csv / .xls / .xlsx / .txt
 * File can have just mobile number or Mobile number with message or Custom Message with mobile numbers
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword"); //Your username and password
$smsgatewaycenter->setFile("../csv_sample_mobile.csv"); //path to file 
$smsgatewaycenter->setMsg("Welcome to SMSGatewayCenter"); // Your message
$smsgatewaycenter->setMsgType(psmplSMSGatewayCenter::MSG_TYPE_TEXT); //Change to MSG_TYPE_UNICODE for Unicode message
$smsgatewaycenter->setSenderId("SMSGAT"); // Your approved sender anem
$smsgatewaycenter->setSendMethod(psmplSMSGatewayCenter::METHOD_BULK_MSG);
$smsgatewaycenter->sendSMS(psmplSMSGatewayCenter::SMSAPI,'send');
echo $smsgatewaycenter->getResponse();
