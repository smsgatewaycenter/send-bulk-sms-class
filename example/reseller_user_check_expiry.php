<?php

/**
 * SMSGatewayCenter - Check User's Expiry Reseller API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Check User's Expiry
 *
 */
//https://www.smsgateway.center/library/api/reseller/CheckExpiry/?userId=YourUsername&password=YourPassword&Client_Username=ClientUsername

$param = array(
	'Client_Username' => 'YourClientUsername'
);

$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
//$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->sendRecord(psmplSMSGatewayCenter::LIBAPI,"reseller/CheckExpiry/",$param);
echo $smsgatewaycenter->getResponse();
