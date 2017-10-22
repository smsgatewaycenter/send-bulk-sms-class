<?php

/**
 * SMSGatewayCenter - Fetch SMS Delivery Report based on Transaction ID API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Fetch SMS Delivery Report based on Transaction ID
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* smsDeliveryReportTransId
* $url string APIURL
* $component API URL Component
* $transid String message transaction id
*/
$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->smsDeliveryReportTransId(psmplSMSGatewayCenter::LIBAPI,"self/SMSDlrTrans/","5e52be8d-ec37-423a-8c27-a9bae449485c");
echo $smsgatewaycenter->getResponse();