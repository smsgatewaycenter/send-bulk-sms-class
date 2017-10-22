<?php

/**
 * SMSGatewayCenter - View User's Profile Reseller API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * View User's Profile
 *
 */
//https://www.smsgateway.center/library/api/reseller/ViewProfile/?userId=YourUsername&password=YourPassword&Client_Username=ClientUsername&format=json

$param = array(
	'Client_Username' => 'YourClientUsername'
);

$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
//$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->sendRecord(psmplSMSGatewayCenter::LIBAPI,"reseller/ViewProfile/",$param);
echo $smsgatewaycenter->getResponse();
