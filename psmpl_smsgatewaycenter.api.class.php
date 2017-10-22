<?php
    /*
    |--------------------------------------------------------------------------
    | SMSGatewayCenter - Class file to Send SMS to SMSGateway.center API
    |--------------------------------------------------------------------------
    |
    | @package  SMSGatewayCenter
    | @version  1.0.0
    | @api     https://www.smsgateway.center/docs/api/
    | @license    <https://www.smsgateway.center> (SMSGatewayCenter)
    | @author   psmpl <psmpl@psmpl.com>
    |
    |
    */
    
    /*
    |--------------------------------------------------------------------------
    | Class for psmpl SMS Gateway Center.
    |--------------------------------------------------------------------------
    | 
    |
    */
    class psmplSMSGatewayCenter {
        /*
        |--------------------------------------------------------------------------
        | Constant for all API Parameters
        |--------------------------------------------------------------------------
        |
        |
        */
        const SMSAPI = "http://www.smsgateway.center/SMSApi/rest/"; // API End Point
        const LIBAPI = "http://www.smsgateway.center/library/api/"; // Other Library API End Point
        const PARAM_APIKEY = "apiKey";
        const PARAM_USERID = "userId";
        const PARAM_PASSWORD = "password";
        const PARAM_SEND_METHOD = "sendMethod";
        const PARAM_SENDER_ID = "senderId";
        const PARAM_MSG_TYPE = "msgType";
        const PARAM_MSG = "msg";
        const PARAM_TEST_MESSAGE = "testMessage";
        const PARAM_MOBILE = "mobile";
        const PARAM_GROUP = "group";
        const PARAM_FILE = "file";
        const PARAM_SCHEDULE_TIME = "scheduleTime";
        const PARAM_FORMAT = "format";
        const PARAM_DUPLICATE_CHECK = "duplicateCheck";
        const METHOD_SIMPLE_MSG = "simpleMsg";
        const METHOD_GROUP_MSG = "groupMsg";
        const METHOD_BULK_MSG = "excelMsg";
        const FORMAT_JSON = "json";
        const FORMAT_PLAIN = "plain";
        const FORMAT_XML = "xml";
        const MSG_TYPE_TEXT = "text";
        const MSG_TYPE_UNICODE = "unicode";
        const MSG_TYPE_FLASH = "flash";
        
        /*
        |--------------------------------------------------------------------------
        | API parameters
        |--------------------------------------------------------------------------
        |
        |
        */
        private $apiKey;
        private $userId;
        private $password;
        private $sendMethod;
        private $senderId;
        private $msgType;
        private $msg;
        private $testMessage;
        private $mobile;
        private $scheduleTime;
        private $format;
        private $group;
        private $file;
        private $duplicateCheck;
        private $response;
        private $param = array();
        
        /*
        |--------------------------------------------------------------------------
        | Object Instantiation
        |--------------------------------------------------------------------------
        |
        | @param      string  $userid    The userid
        | @param      string  $password  The password
        | @param      string  $apiKey    The api key
        |
        */
        public function __construct($userid, $password, $apiKey='') {
            $this->userId = $userid;
            $this->password = $password;
            if($apiKey != ''){
                $this->apiKey = $apiKey;
            }
        }
        
        /*
        |--------------------------------------------------------------------------
        | Gets the response.
        |--------------------------------------------------------------------------
        |
        | @return     array|mixed  The response.
        |
        */
        function getResponse() {
            return $this->response;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Gets the duplicate check.
        |--------------------------------------------------------------------------
        |
        | @return     string  The duplicate check.
        |
        */
        function getDuplicateCheck() {
            return $this->duplicateCheck == SMS::TRUE_IN ? SMS::TRUE_OUT : SMS::FALSE_OUT;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the duplicate check.
        |--------------------------------------------------------------------------
        |
        | @param      string $duplicateCheck  The duplicate check
        |
        */
        function setDuplicateCheck($duplicateCheck) {
            $this->duplicateCheck = $duplicateCheck;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the api key.
        |--------------------------------------------------------------------------
        |
        | @param      null|string  $apiKey  The api key
        |
        */
        function setApiKey($apiKey) {
            $this->apiKey = $apiKey;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the user identifier.
        |--------------------------------------------------------------------------
        |
        | @param      string  $userId  The user identifier
        |
        */
        function setUserId($userId) {
            $this->userId = $userId;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the password.
        |--------------------------------------------------------------------------
        |
        | @param      string  $password  The password
        |
        */
        function setPassword($password) {
            $this->password = $password;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the send method.
        |--------------------------------------------------------------------------
        |
        | @param      string  $sendMethod  The send method
        |
        */
        function setSendMethod($sendMethod) {
            $this->sendMethod = $sendMethod;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the sender identifier.
        |--------------------------------------------------------------------------
        |
        | @param      string  $senderId  The sender identifier
        |
        */
        function setSenderId($senderId) {
            $this->senderId = $senderId;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the message type.
        |--------------------------------------------------------------------------
        |
        | @param      string  $msgType  The message type
        |
        */
        function setMsgType($msgType) {
            $this->msgType = $msgType;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the message.
        |--------------------------------------------------------------------------
        |
        | @param      string  $msg    The message
        |
        */
        function setMsg($msg) {
            $this->msg = $msg;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the test message.
        |--------------------------------------------------------------------------
        |
        | @param      string  $testMessage  The test message
        |
        */
        function setTestMessage($testMessage) {
            $this->testMessage = $testMessage;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the mobile.
        |--------------------------------------------------------------------------
        |
        | @param      <type>  $mobile  The mobile
        |
        */
        function setMobile($mobile) {
            $this->mobile = $mobile;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the schedule time.
        |--------------------------------------------------------------------------
        |
        | @param      string  $scheduleTime  The schedule time
        |
        */
        function setScheduleTime($scheduleTime) {
            $this->scheduleTime = $scheduleTime;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the format.
        |--------------------------------------------------------------------------
        |
        | @param      string $format  The format
        |
        */
        function setFormat($format) {
            $this->format = $format;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the group.
        |--------------------------------------------------------------------------
        |
        | @param     string  $group  The group
        |
        */
        function setGroup($group) {
            $this->group = $group;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sets the file.
        |--------------------------------------------------------------------------
        |
        | @param      string  $file   The file
        |
        */
        function setFile($file) {
            $this->file = $file;
        }
        
        /*
        |--------------------------------------------------------------------------
        | Sends SMS Message
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      component|string  $sendtype  The sendtype
        |
        | Build all param to send SMS for any type
        | Sends Single SMS
        | Sends Multiple SMS
        | Sends Group SMS
        | Send Bulk Upload SMS
        |
        */
        public function sendSMS($api,$sendtype) {
            $param[psmplSMSGatewayCenter::PARAM_SENDER_ID] = $this->senderId;
            $param[psmplSMSGatewayCenter::PARAM_SEND_METHOD] = $this->sendMethod;
            $param[psmplSMSGatewayCenter::PARAM_MSG_TYPE] = $this->msgType;
            $param[psmplSMSGatewayCenter::PARAM_MSG] = $this->msg;
            $param[psmplSMSGatewayCenter::PARAM_TEST_MESSAGE] = $this->testMessage == "" ? "false" : $this->testMessage;
            $param[psmplSMSGatewayCenter::PARAM_SCHEDULE_TIME] = $this->scheduleTime;
            $param[psmplSMSGatewayCenter::PARAM_DUPLICATE_CHECK] = $this->duplicateCheck == "" ? "false" : $this->duplicateCheck;
        
            if ($this->sendMethod === psmplSMSGatewayCenter::METHOD_SIMPLE_MSG) {
                $param[psmplSMSGatewayCenter::PARAM_MOBILE] = $this->mobile;
            }
            
            if ($this->sendMethod === psmplSMSGatewayCenter::METHOD_GROUP_MSG) {
                $param[psmplSMSGatewayCenter::PARAM_GROUP] = $this->group;
            }

            if ($this->sendMethod === psmplSMSGatewayCenter::METHOD_BULK_MSG) {
                if ((version_compare(PHP_VERSION, '5.5') >= 0)) {
                    $param[psmplSMSGatewayCenter::PARAM_FILE] = new CURLFile($this->file);
                } else {
                    $param[psmplSMSGatewayCenter::PARAM_FILE] = "@".$this->file;
                }
            }
            //print_r($param);exit;
            $this->baseSGCRequest($api,$sendtype,$param);
        }
        
        /*
        |--------------------------------------------------------------------------
        | Build basic param
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      array|mixed   $param     The parameter
        |
        | @return     array|mixed  ( Gets all basic requested data )
        |
        */
        private function baseSGCRequest($api,$sendtype,$param = array()) {
            $apiEndPoint = $api.$sendtype;
            $param[psmplSMSGatewayCenter::PARAM_USERID] = $this->userId;
            $param[psmplSMSGatewayCenter::PARAM_PASSWORD] = $this->password;
            $param[psmplSMSGatewayCenter::PARAM_FORMAT] = $this->format == "" ? psmplSMSGatewayCenter::FORMAT_PLAIN : $this->format;
            //print_r($param);
            return $this->response = $this->sendRequestDataPostarray($apiEndPoint,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | Sends a request data with post array
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      array|mixed   $param     The parameter
        | 
        | @throws     Exception 
        |
        | @return     boolean    ( returns the curl scraped page response )
        |
        */
        private function sendRequestDataPostarray($apiEndPoint,$param) {
            //print_r($param);
            //echo $apiEndPoint;exit;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $apiEndPoint);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
            if($this->apiKey && $this->apiKey != ''){
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:','apikey:'.$this->apiKey));
            } else {
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
            }
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            if ($this->sendMethod === psmplSMSGatewayCenter::METHOD_BULK_MSG) {
                curl_setopt($ch, CURLOPT_SAFE_UPLOAD, 1);
            }
            curl_setopt($ch, CURLOPT_VERBOSE, 1);
            $curl_scraped_page = curl_exec($ch);
            $getHTTPCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $curlError = curl_error($ch);
            curl_close($ch);
            if ($curl_scraped_page === false) {
                throw new Exception('Unable to connect to SMSGatewayCenter API: ' . $curlError);
            } 
            elseif ($getHTTPCode != 200) {
                throw new Exception('Bad response from SMSGatewayCenter API: HTTP code ' . $getHTTPCode);
            }
            return $curl_scraped_page;
        }

        /*
        |--------------------------------------------------------------------------
        | Send basic API related 
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        */
        public function checkBasic($api,$sendtype){
            $this->baseSGCRequest($api,$sendtype);
        }

        /*
        |--------------------------------------------------------------------------
        | List all items for required data
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        */
        public function listItems($api,$sendtype){
            $param['do'] = 'list';
            $this->baseSGCRequest($api,$sendtype,$param);
        }
        
        /*
        |--------------------------------------------------------------------------
        | Change self password
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      string $newPass   The new pass
        */
        public function changePasswordSelf($api,$sendtype,$newPass){
            $param['NewPassword'] = $newPass;
            $this->baseSGCRequest($api,$sendtype,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | Adds a new group.
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      string  $groupname  The groupname
        */
        public function addNewGroup($api,$sendtype,$groupname){
            $param['do'] = 'add';
            $param['newGroupname'] = $groupname;
            $this->baseSGCRequest($api,$sendtype,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | Edit group
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      string  $oldgroupname  The oldgroupname
        | @param      string  $groupname     The groupname
        */
        public function editGroup($api,$sendtype,$oldgroupname,$groupname){
            $param['do'] = 'edit';
            $param['oldGroupname'] = $oldgroupname;
            $param['newGroupname'] = $groupname;
            $this->baseSGCRequest($api,$sendtype,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | Deletes a group
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      string  $groupname  The groupname
        */
        public function deleteGroup($api,$sendtype,$groupname){
            $param['do'] = 'delete';
            $param['delGroupname'] = $groupname;
            $this->baseSGCRequest($api,$sendtype,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | Adds a new contact.
        |--------------------------------------------------------------------------
        |
         * @param      url|string  $api       The api
         * @param      comp|string  $sendtype  The sendtype
         * @param      string  $fname     The filename
         * @param      string  $groupid   The groupid
         * @param      string  $mobile    The mobile
         */
        public function addNewContact($api,$sendtype,$fname,$groupid,$mobile){
            $param['do'] = 'add';
            $param['fname'] = $fname;
            $param['groupid'] = $groupid;
            $param['mobile'] = $mobile;
            $this->baseSGCRequest($api,$sendtype,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | Deletes a contact
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      string  $contactid  The contactid
        */
        public function deleteContact($api,$sendtype,$contactid){
            $param['do'] = 'delete';
            $param['delcontactId'] = $contactid;
            $this->baseSGCRequest($api,$sendtype,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | Adds a new sender name.
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      string  $sendername  The sendername
        */
        public function addNewSenderName($api,$sendtype,$sendername){
            $param['do'] = 'add';
            $param['newSendername'] = $sendername;
            $this->baseSGCRequest($api,$sendtype,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | Edits a sender name
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      string  $oldsendername  The oldsendername
        | @param      string $sendername     The sendername
        */
        public function editSenderName($api,$sendtype,$oldsendername,$sendername){
            $param['do'] = 'edit';
            $param['oldSendername'] = $oldsendername;
            $param['newSendername'] = $sendername;
            $this->baseSGCRequest($api,$sendtype,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | deletes a sender name
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      string  $sendername  The sendername
        */
        public function deleteSenderName($api,$sendtype,$sendername){
            $param['do'] = 'delete';
            $param['delSendername'] = $sendername;
            $this->baseSGCRequest($api,$sendtype,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | Fetches delivery report by transaction id
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      string  $transid   The transid
        */
        public function smsDeliveryReportTransId($api,$sendtype,$transid){
            $param['transId'] = $transid;
            $this->baseSGCRequest($api,$sendtype,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | Fetches reports.
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      string  $fromdate  The fromdate
        | @param      string  $todate    The todate
        | @param      string  $do        { parameter_description }
        */
        public function fetchReports($api,$sendtype,$fromdate,$todate,$do=''){
            if($do != ''){
                $param['do'] = $do;
            }
            $param['FromDate'] = $fromdate;
            $param['ToDate'] = $todate == "" ? date('Y-m-d') : $todate;
            $this->baseSGCRequest($api,$sendtype,$param);
        }

        /*
        |--------------------------------------------------------------------------
        | Sends a record. Common function to use for any API
        |--------------------------------------------------------------------------
        |
        | @param      url|string  $api       The api
        | @param      comp|string  $sendtype  The sendtype
        | @param      array|mixed  $param     The parameter
        */
        public function sendRecord($api,$sendtype,$param){
            $this->baseSGCRequest($api,$sendtype,$param);
        }
    }
