<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="http://ubkinfotech.com/demo/education/images/1541923443_1540988537_1540988283_logo.png">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php
//require("config.inc.php");
require __DIR__.'/notifications/server_side_code/config.inc.php';
//echo "hjhgsdjkhsjkhjkdfhdjkhgjdkhsfdjkghkjgsh";die;
$query = "SELECT * FROM user";

$stmt = $db->query($query);

$target_path = 'uploads/';

if (!empty($_POST)) {

    $response = array("error" => FALSE);
    define("GOOGLE_API_KEY", "AIzaSyAlXl28TrntE7fFYPJDt_hayn6hYIbXUIE");
        define("GOOGLE_GCM_URL", "https://fcm.googleapis.com/fcm/send");

    function send_gcm_notify($key,$token_key, $title, $message, $img_url, $tag) {

        $fields = array(

            'to'  						=> $token_key ,
            'priority'					=> "high",
            'data'						=> array("title" => "Shine India", "message" => $message, "image"=> $img_url, "tag" => $tag)
        );
        $headers = array(
            GOOGLE_GCM_URL,
            'Content-Type: application/json',
            'Authorization: key=' . GOOGLE_API_KEY
        );


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, GOOGLE_GCM_URL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        $result = curl_exec($ch);
        $responses=array(
            "output"=> $result
            );
        //echo var_dump($result);
        //$nres=json_decode($result)
        if ($result === FALSE) {
          die('Problem occurred: ' . curl_error($ch));
        }

        curl_close($ch);
        //print_r($responses);
        return $responses;
        
    }

    //$reg_id = $_POST['fcm_id'];
    $title = $_POST['title'];
    $msg = $_POST['msg'];
    $img_url = '';
    $tag = 'text';

    //if ($_FILES['image']['name'] != '') {
       // $tag = 'image';
        //$target_file = $target_path . basename($_FILES['image']['name']);
        //$img_url = 'http://ubkinfotech.com/demo/education/notifications/server_side_code/'.$target_file;

       // try {
            // Throws exception incase file is not being moved
            //if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                // make error flag true
                //echo json_encode(array('status'=>'fail', 'message'=>'could not move file'));
            //}

            // File successfully uploaded
            //echo json_encode(array('status'=>'success', 'message'=> $img_url));

        ///} catch (Exception $e) {
            // Exception occurred. Make error flag true
           /// echo json_encode(array('status'=>'fail', 'message'=>$e->getMessage()));
        //}

       // send_gcm_notify($reg_id, $msg, $img_url, $tag);

    //} else {
        
        $data=[];
        foreach($user_data as $key => $value){
              
		      $token_key=$value['fb_token'];
		      if($token_key!=""){
		      $responses = send_gcm_notify($key,$token_key, $title, $msg, $img_url, $tag);
		       array_push($data,$responses);
		      }
            }
            
            //print_r($data);
    //}

}
?>

<!--<!Doctype html>
<html>
<head>-->
    <!--<meta charset="utf-8">-->
    <!--Import Google Icon Font-->
    <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <!--Import materialize.css-->
    <!--<link type="text/css" rel="stylesheet" href="../script/css/materialize.min.css"  media="screen,projection"/>-->

    <!--Let browser know website is optimized for mobile-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"/>-->

    <!--<title>Admin | FCM Server</title>-->

   <!-- <style>body, .row{ text-align: center;}</style>-->

    

<!--</head>-->



<!--<h1>Admin Panel</h1>-->
<div class="right_col">
    <div><h1>Notification</h1></div>
    <div class="fl_window">
        <?php if (! empty($data)) { ?>
            <label><b>Response:</b></label>
            <div class="json_preview">
                <pre><?php //$res=json_decode($response,true);
                //if($res['success']==1){
                    echo "Message has been sent successfully!!";
                //}
                
                ?></pre>
            </div>
        <?php } ?>

    </div>
    
    <!--<div class="row">
        <form class="col s12 m12 l8" action="new_notification" method="post" enctype="multipart/form-data" onsubmit="return checkTextAreaLen()">
            <div class="row">
                <div class="input-field col s12">-->
                    <!--<select name="fcm_id" required>
                        <option value="" disabled selected>Select User</option>
                        <?php //while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            //echo "<option value='".$row['fb_token']."'>".$row['first_name']." &lt;".$row['email']."&gt;</option>";
                        //}\
                        //print_r($data); ?>
                    </select><br><br>-->
    
                    <!--<div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" name="image">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>-->
                    <!--<input type="text" name="title" class="input-field col s12" placeholder="Type your title"><br>
                    <textarea id="msg" name="msg" class="materialize-textarea" placeholder="Type your message"></textarea>
                    <br><br>
    
                    <button class="btn waves-effect waves-light" type="submit" name="action" >Send</button>
                </div>
            </div>
        </form>
    </div>-->

        <form class="pure-form pure-form-stacked" method="post" action="notification" enctype="multipart/form-data" onsubmit="return checkTextAreaLen()">
            <fieldset>
                <legend>Send notification to all users</legend>
    
                <label for="title1">Title</label></br>
                <input type="text" id="title" name="title" class="input-field col-md-6"  placeholder="Enter title" required="required"></br></br>
    
                <label for="message1">Message</label></br>
                <textarea class="materialize-textarea" name="msg" id="msg" rows="5" required="required" placeholder="Notification message!" style="margin: 3.25px 512px 3.25px 0px; width: 529px; height: 150px;">
                </textarea>
    
                <button type="submit" class="pure-button pure-button-primary btn_send" name="action" >Send to Topic</button>
            </fieldset>
        </form>
    </div>


<!--Import jQuery before materialize.js-->

<!--<script type="text/javascript" src="../script/js/materialize.min.js"></script>-->
<script>
    //$('select').material_select();

    $(function(){
        $("textarea").val("");
    });
    function checkTextAreaLen(){
        var msgLength = $.trim($("textarea").val()).length;
        if(msgLength == 0){
            alert("Please enter message before hitting submit button");
            return false;
        }else{
            return true;
        }
    }
    
</script>



