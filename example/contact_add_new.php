<?php

/**
 * SMSGatewayCenter - Add New Contact API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Add New Contact
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* addNewContact
* $url string APIURL
* $component API URL Component
* $fname Input contact name
* $groupid Input Group ID
* $mobile Input Mobile Number
*/
$smsgatewaycenter->addNewContact(psmplSMSGatewayCenter::LIBAPI,"self/Contact/","samira","13814","919999999998");
echo $smsgatewaycenter->getResponse();