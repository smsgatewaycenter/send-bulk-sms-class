<?php

/**
 * SMSGatewayCenter - Incoming SMS Report API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Incoming SMS Report
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* fetchReports 
* $url string APIURL
* $component API URL Component
* $fromdate String fromdate
* $todate String todate (optional)
*/
$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->fetchReports(psmplSMSGatewayCenter::LIBAPI,"self/ShortcodeReport/","2017-10-10","2017-10-15");
echo $smsgatewaycenter->getResponse();