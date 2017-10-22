<?php
/**
 * SMSGatewayCenter - Update User's Balance Reseller API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Update User's Balance
 *
 */
//https://www.smsgateway.center/library/api/reseller/UpdateBalance/?userId=YourUsername&password=YourPassword&Client_Username=ClientUsername&UpdateAction=add&UpdateCredit=100000

$param = array(
	'Client_Username' => 'YourClientUsername',
	'UpdateAction' => 'add', //add or remove
	'UpdateCredit' => '1' //number of credits to add or remove
);

$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
//$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->sendRecord(psmplSMSGatewayCenter::LIBAPI,"reseller/UpdateBalance/",$param);
echo $smsgatewaycenter->getResponse();
