<?php

/**
 * SMSGatewayCenter - View User's Credit History Reseller API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * View User's Credit History
 *
 */
//https://www.smsgateway.center/library/api/reseller/CreditHistory/?userId=YourUsername&password=YourPassword&Client_Username=ClientUsername&format=json

$param = array(
	'Client_Username' => 'ClientUsername'
);

$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
//$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->sendRecord(psmplSMSGatewayCenter::LIBAPI,"reseller/CreditHistory/",$param);
echo $smsgatewaycenter->getResponse();
