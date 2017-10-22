<?php

/**
 * SMSGatewayCenter - Delete Contact API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Delete Contact
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
/**
* deleteContact
* $url string APIURL
* $component API URL Component
* $delcontactId string contact id to delete (fetch contact id from contact list)
*/
$smsgatewaycenter->deleteContact(psmplSMSGatewayCenter::LIBAPI,"self/Contact/",4499670);
echo $smsgatewaycenter->getResponse();