<?php

/**
 * SMSGatewayCenter - Change User's Password Reseller API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Change User's Password
 *
 */
//https://www.smsgateway.center/library/api/reseller/ChangePassword/?userId=YourUsername&password=YourPassword&Client_Username=ClientUsername&Client_NewPassword=ClientNewPassword

$param = array(
	'Client_Username' => 'YourClientUsername',
	'Client_NewPassword' => 'NewPassword'
);

$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
//$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->sendRecord(psmplSMSGatewayCenter::LIBAPI,"reseller/ChangePassword/",$param);
echo $smsgatewaycenter->getResponse();
