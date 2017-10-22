<?php

/**
 * SMSGatewayCenter - List Contacts API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * List Contacts
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* listItems
* $url string APIURL
* $component API URL Component
*/
//$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->listItems(psmplSMSGatewayCenter::LIBAPI,"self/Contact/");
echo $smsgatewaycenter->getResponse();