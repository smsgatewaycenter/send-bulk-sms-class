<?php
/**
 * SMSGatewayCenter - Cancel Schedule API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Cancel Schedule
 *
 */
//transaction ids are similar to 8094edb6-2c49-4b70-8034-872b90c43844 and you can fetch transaction id from fetch scheduled sms api
$param = array(
	'transactionId' => 'Your Transaction ID'
);
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword"); //Your username and password
$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->sendRecord(psmplSMSGatewayCenter::SMSAPI,"cancelScheduled",$param);
echo $smsgatewaycenter->getResponse();
