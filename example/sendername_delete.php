<?php

/**
 * SMSGatewayCenter - Delete SenderName API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Delete SenderName
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* deleteGroup
* $url string APIURL
* $component API URL Component
* $groupname Input group name to delete
*/
$smsgatewaycenter->deleteSenderName(psmplSMSGatewayCenter::LIBAPI,"self/SenderName/","SMSNEW");
echo $smsgatewaycenter->getResponse();