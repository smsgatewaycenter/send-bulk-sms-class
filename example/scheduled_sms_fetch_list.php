<?php

/**
 * SMSGatewayCenter - Fetch Scheduled SMS list API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Fetch Scheduled SMS list
 *
 *
*/
//http://www.smsgateway.center/library/api/self/Schedule/?userId=YourUsername&password=YourPassword&do=list&format=json

$param = array(
	'do' => 'list'
);

$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->sendRecord(psmplSMSGatewayCenter::LIBAPI,"self/Schedule/",$param);
echo $smsgatewaycenter->getResponse();