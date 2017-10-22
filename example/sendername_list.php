<?php

/**
 * SMSGatewayCenter - List SenderName API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * List SenderNames
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* listItems
* $url string APIURL
* $component API URL Component
*/
$smsgatewaycenter->listItems(psmplSMSGatewayCenter::LIBAPI,"self/SenderName/");
echo $smsgatewaycenter->getResponse();