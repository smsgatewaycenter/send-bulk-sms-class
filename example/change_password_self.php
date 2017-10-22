<?php

/**
 * SMSGatewayCenter - Change Password API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Change Password Self
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* changePasswordSelf 
* $url string APIURL
* $component API URL Component
* $newpass Input new password
*/
$smsgatewaycenter->changePasswordSelf(psmplSMSGatewayCenter::LIBAPI,"self/ChangePassword/","NewPassword");
echo $smsgatewaycenter->getResponse();
