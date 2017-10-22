<?php

/**
 * SMSGatewayCenter - SMS Delivery Report API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * SMS Delivery Report
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* fetchReports
* $url string APIURL
* $component API URL Component
* $fromdate String fromdate (yyyy-mm-dd)
* $todate String todate (yyyy-mm-dd)
*/
//Reports are only showing for current date
$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->fetchReports(psmplSMSGatewayCenter::LIBAPI,"self/SMSDlr/","2017-10-16","2017-10-16");
echo $smsgatewaycenter->getResponse();