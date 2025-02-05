
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="http://ubkinfotech.com/demo/education/images/1541923443_1540988537_1540988283_logo.png">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
 

        <?php
          //print_r($user_data);
         
        
        error_reporting(-1);
        ini_set('display_errors', 'On');
        
        require_once __DIR__.'/notifications/firebase.php';
       
   
         require_once __DIR__ . '/notifications/push.php';
     
         
         
 
        $firebase = new Firebase();
        $push = new Push();
 
        // optional payload
        $payload = array();
        $payload['team'] = 'India';
        $payload['score'] = '5.6';
 
        // notification title
        $title = isset($_GET['title']) ? $_GET['title'] : '';
         
        // notification message
        $message = isset($_GET['message']) ? $_GET['message'] : '';
         
        // push type - single user / topic
        $push_type = isset($_GET['push_type']) ? $_GET['push_type'] : '';
         
        // whether to include to image or not
        $include_image = isset($_GET['include_image']) ? TRUE : FALSE;
 
 
        $push->setTitle($title);
        $push->setMessage($message);
        if ($include_image) {
            $push->setImage('https://api.androidhive.info/images/minion.jpg');
        } else {
            $push->setImage('');
        }
        $push->setIsBackground(FALSE);
        $push->setPayload($payload);

        $json = '';
        $response = '';
 
        if ($push_type == 'topic') {
            $json = $push->getPush();
            $response = $firebase->sendToTopic('global', $json);
        } else if ($push_type == 'individual') {
             foreach($user_data as $value){
              
		      $token_key=$value['fb_token'];
		      if($token_key!=""){
		       $json = $push->getPush();
		       //$regId = isset($_GET['regId']) ? $_GET['regId'] : '';
		       $response = $firebase->send($token_key, $json);
		      }
}
            
        }
        ?>
        <div class="right_col">
            <div class="fl_window">
                <!--<div><img src="https://api.androidhive.info/images/firebase_logo.png" width="200" alt="Firebase"/></div>-->
                <!--<br/>-->
                <!--<?php //if ($json != '') { ?>-->
                <!--    <label><b>Request:</b></label>-->
                <!--    <div class="json_preview">-->
                <!--        <pre><?php //echo json_encode($json) ?></pre>-->
                <!--    </div>-->
                <!--<?php// } ?>-->
                <!--<br/>-->
                <?php if ($response != '') { ?>
                    <label><b>Response:</b></label>
                    <div class="json_preview">
                        <pre><?php $res=json_decode($response,true);
                        if($res['success']==1){
                            echo "Message has been sent successfully!!";
                        }
                        
                        ?></pre>
                    </div>
                <?php } ?>
 
            </div>
 
            <form style="display: none;" class="pure-form pure-form-stacked" method="get">
                <fieldset>
                    <legend>Send to Single Device</legend>
 
                    <!--<label for="redId">Firebase Reg Id</label>-->
                    <!--<input type="text" id="redId" name="regId" class="pure-input-1-2" placeholder="Enter firebase registration id">-->
 
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="pure-input-1-2" placeholder="Enter title">
 
                    <label for="message">Message</label>
                    <textarea class="pure-input-1-2" rows="5" name="message" id="message" placeholder="Notification message!"></textarea>
 
                    <label for="include_image" class="pure-checkbox">
                        <input name="include_image" id="include_image" type="checkbox"> Include image
                    </label>
                    <input type="hidden" name="push_type" value="individual"/>
                    <button type="submit" class="pure-button pure-button-primary btn_send">Send</button>
                </fieldset>
            </form>
            <br/><br/><br/><br/>
 
            <form class="pure-form pure-form-stacked" method="get">
                <fieldset>
                    <legend>Send notification to all users</legend>
 
                    <label for="title1">Title</label>
                    <input type="text" id="title1" name="title" class="pure-input-1-2" placeholder="Enter title">
 
                    <label for="message1">Message</label>
                    <textarea class="pure-input-1-2" name="message" id="message1" rows="5" placeholder="Notification message!"></textarea>
 
                    <!--<label for="include_image1" class="pure-checkbox">
                        <input id="include_image1" name="include_image" type="checkbox"> Include image
                    </label>-->
                    <input type="hidden" name="push_type" value="individual"/>
                    <button type="submit" class="pure-button pure-button-primary btn_send">Send to Topic</button>
                </fieldset>
            </form>
        </div>
    </body>
