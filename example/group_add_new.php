<?php

/**
 * SMSGatewayCenter - Add New Group API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Add New Group
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* addNewGroup
* $url string APIURL
* $component API URL Component
* $newgroupname Input new group name 
*/
$smsgatewaycenter->addNewGroup(psmplSMSGatewayCenter::LIBAPI,"self/Group/","myGroup");
echo $smsgatewaycenter->getResponse();