<?php

/**
 * SMSGatewayCenter - View Credit History API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * View View Credit History Self
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
//$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->checkBasic(psmplSMSGatewayCenter::LIBAPI,"self/CreditHistory/");
echo $smsgatewaycenter->getResponse();