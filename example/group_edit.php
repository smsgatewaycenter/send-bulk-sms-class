<?php

/**
 * SMSGatewayCenter - Edit Group API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Edit Group
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* editGroup
* $url string APIURL
* $component API URL Component
* $oldgroupname Input old group name 
* $newgroupname Input new group name 
*/
$smsgatewaycenter->editGroup(psmplSMSGatewayCenter::LIBAPI,"self/Group/","myGroup","myGroupNew");
echo $smsgatewaycenter->getResponse();