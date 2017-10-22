<?php

/**
 * SMSGatewayCenter - Check Validity API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Check Validity Self
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUserName", "YourPassword");//Your username and password
//$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->checkBasic(psmplSMSGatewayCenter::LIBAPI,"self/CheckExpiry/");
echo $smsgatewaycenter->getResponse();
