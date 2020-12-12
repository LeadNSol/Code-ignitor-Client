<?php
class Admin_apps extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */ 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('apps_model');
		 $this->load->model('module');
		 $this->load->model('product_module');
		date_default_timezone_set('Asia/Kolkata');
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, OPTIONS");
        header("Access-Control-Allow-Methods: POST, OPTIONS");

       /* if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }*/
    }
     	function send_otp()
	{
	    
	    	if($this->input->server('REQUEST_METHOD')=='POST')
		{
		    
            	        $email=$this->input->post('email');
            	        $otp_code = rand(1000, 9999);
            			$message='<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Your OTP</title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
      
      /*All the styling goes here*/
      
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; 
      }

      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
      }

      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; 
      }

      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

      .body {
        background-color: #f6f6f6;
        width: 100%; 
      }

      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        Margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; 
      }

      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px; 
      }

      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; 
      }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; 
      }

      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }

      .footer {
        clear: both;
        Margin-top: 10px;
        text-align: center;
        width: 100%; 
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; 
      }

      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px; 
      }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; 
      }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px; 
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; 
      }

      a {
        color: #3498db;
        text-decoration: underline; 
      }

      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; 
      }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; 
      }

      .btn-primary table td {
        background-color: #3498db; 
      }

      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; 
      }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0; 
      }

      .first {
        margin-top: 0; 
      }

      .align-center {
        text-align: center; 
      }

      .align-right {
        text-align: right; 
      }

      .align-left {
        text-align: left; 
      }

      .clear {
        clear: both; 
      }

      .mt0 {
        margin-top: 0; 
      }

      .mb0 {
        margin-bottom: 0; 
      }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; 
      }

      .powered-by a {
        text-decoration: none; 
      }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; 
      }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; 
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; 
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; 
        }
        table[class=body] .content {
          padding: 0 !important; 
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; 
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; 
        }
        table[class=body] .btn table {
          width: 100% !important; 
        }
        table[class=body] .btn a {
          width: 100% !important; 
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; 
        }
      }

      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; 
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; 
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; 
        }
        .btn-primary table td:hover {
          background-color: #34495e !important; 
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; 
        } 
      }

    </style>
  </head>
  <body class="">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">

            <!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader">Your OTP</span>
            <table role="presentation" class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                     <p>Your OTP</p>
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td>'.$otp_code.'</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p>Good luck! Hope it works.</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
              </body>
            </html>';
					//echo $message;exit;
						$ci = get_instance();
						$ci->load->library('email');
						$config['protocol'] = "smtp";
						$config['smtp_host'] = "mail.ubkinfotech.com";
						$config['smtp_port'] = "25";
						$config['smtp_user'] = "noreply@ubkinfotech.com"; 
						$config['smtp_pass'] = "92YI28Z4kX(E";
						$config['charset'] = "utf-8";
						$config['mailtype'] = "html";
						$config['newline'] = "\r\n";
						$ci->email->initialize($config);
						$ci->email->from('noreply@ubkinfotech.com', "Shine India OTP Verification");
						$list = array($email);
						$ci->email->to($list);
						$this->email->reply_to("noreply@ubkinfotech.com", "Support");
						$ci->email->subject('Your OTP');
						$ci->email->message($message);
						if($ci->email->send())
						{
							//echo '<script> alert("Thank you we will contact you shortly");</script>';
							 echo '{"send":"'.$otp_code.'"}';
						}
						else{
						     echo '{"send":"false"}';
							
						}

		           }
	}
	function forget_password_api()
	{
  if($this->input->server('REQUEST_METHOD') === 'POST')
	{
	    $email=$this->input->post('email');
	    if($data = $this->product_module->check_email_api($email))
		{ 
		    $email=$data[0]['email'];
		    $id=$data[0]['u_id'];
		$message='<html><body><table width="80%" border="0">
                    <tr>
                        <td colspan="2">
                        <h2>Shine India</h2>
                        </td>
                    </tr>
                
                    <tr>
                         <td colspan="2" style="height:10px;"></td>
                    </tr>
                    <tr>
                        <td width="429" colspan="2">
                        <table width="97%" border="0" style="margin:15px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#4a4a4a;font-weight:normal;margin-bottom:2px;">
                        <tr>
                        <td colspan="2"><h3>To Change Password Press The Link. </h3></td>
                        </tr>
                    <tr>
                      <td colspan="2" height="10px;">
                      <a href="' . base_url().'set_new_password/'.$id.'">Click Here</a>
                      </td>
                    </tr>
                    <tr>                
                    </tr>
                    <tr>
                        <td colspan="2" height="10px;"> <br></td>    
                    </tr>
                    
                    
                    
                    <tr>
                    <td colspan="2" height="10px;"><p>Thanks You ! Shine India Team</p></td>
                    </tr>
                    </table>';

                    
                        $ci = get_instance();
                        $ci->load->library('email');
                        $config['protocol'] = "smtp";
                        $config['smtp_host'] = "mail.ubkinfotech.com";
                        $config['smtp_port'] = "25";
                        $config['smtp_user'] = "noreply@ubkinfotech.com";
                        $config['smtp_pass'] = "92YI28Z4kX(E";
                        $config['charset'] = "utf-8";
                        $config['mailtype'] = "html";
                        $config['newline'] = "\r\n";
                        $ci->email->initialize($config);
                        $ci->email->from('noreply@ubkinfotech.com', "Shine India");
                        $list = array($email);
                        $ci->email->to($list);
                        $this->email->reply_to("noreply@ubkinfotech.com", "Shine India");
                        $ci->email->subject("PASSWORD CHANGE");
                        $ci->email->message($message);
                        if($ci->email->send())
                        {
                        echo '{"states":"true"}';
                        } 
		}
		else
		{
		echo '{"states":"false"}';
                    
		}
		
	}
	}
	
     
    
    function user_qureis()
	{
	     if($this->input->server('REQUEST_METHOD') === 'POST')
			{
			
	    
		  $cat_arr=([
				'user_id'=>$this->input->post('user_id'),
				'question'=>$this->input->post('question'),
				'message'=>$this->input->post('message')
					]);
					
				   if($insert_home=$this->product_module->user_qureis($cat_arr))
				   {
				      
				       	echo'{"Results":"true"}';
				   }
				   else
				   {
				       	echo'{"Results":"false"}';
				   }
				    
           
			}
    	
	}
   
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
   
   function edit_profile_api()
	{
	    if($this->input->server('REQUEST_METHOD') === 'POST')
			{
			    $id = $this->input->post('user_id');
	            $pass=$this->input->post('password');
	            
	            if($pass=="")
				{
				$update_cateorgy=array(
				'Class_id'=>$this->input->post('class_id'),
				'first_name'=>$this->input->post('fast_name'),
				);
				
				if($ffff=$this->product_module->edit_profile_api($id,$update_cateorgy))
				{
					echo '{"Results":"true"}';
				}
				else{
					echo '{"Results":"false"}';
				}
				
			}
			else{
			    $update_cateorgy=array(
				'Class_id'=>$this->input->post('class_id'),
				'first_name'=>$this->input->post('fast_name'),
				'password'=>$pass
				);
				
				if($ffff=$this->product_module->edit_profile_api($id,$update_cateorgy))
				{
					echo '{"Results":"true"}';
				}
				else{
					echo '{"Results":"false"}';
				}
			}
			
    }
}
   
   function popular()
	{
	    
				if( $data['results'] = $this->product_module->get_popular_video())
				{
				    	echo "{";
                 echo  ' "states": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"states":"false"}';
				}
	}
	function list_packages()
	{
	    
	    if($this->input->server('REQUEST_METHOD') === 'POST')
			{
			    $id = $this->input->post('class_id');
				if( $data['results'] = $this->product_module->list_packages($id))
				{
				    	echo "{";
                 echo  ' "states": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
			}
	}
	function list_contacts()
	{
				if( $data['results'] = $this->product_module->list_contacts())
				{
				    	echo "{";
                 echo  ' "states": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
		
	}
		function list_user_subscription()
	{
	    
				if( $data['results'] = $this->product_module->get_user_subscription())
				{
				    	echo "{";
                 echo  ' "states": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
	}
	function term_page()
	{
	     $data['results'] = $this->product_module->get_terms_list();
        $this->load->view('admin/term',$data);
	}
	 
   function list_class()
	{
		 //$cat_arr=([
	           //'package_id'=>'1',//$this->input->post('pack_id'),
				//'name'=>'dddd'//$this->input->post('name')
				//	]);
//print_r($cat_arr);exit;
				if( $data['results'] = $this->product_module->get_category_list())
				{
				    	echo "{";
                 echo  ' "states": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else{
				    echo '{"list":"false"}';
				}
           //$data['results1'] = $this->product_module->get_packages_list();
	}
	
	 function list_subject()
	{	   
	     if($this->input->server('REQUEST_METHOD') === 'POST')
		 	{
			$id =$this->input->post('classid');
		 //$cat_arr=([
	           //'package_id'=>'1',//$this->input->post('pack_id'),
				//'name'=>'dddd'//$this->input->post('name')
				//	]);
//print_r($cat_arr);exit;
				if( $data['results'] = $this->product_module->get_subject_byid($id))
				{
				    echo "{";
                    echo  ' "states": ';
				    echo json_encode($data['results']);
				    echo	"}";
				}
				else{
				    echo '{"states":"false"}';
				}
			}
           // $data['results1'] = $this->product_module->get_packages_list();
	}
	 function list_chapter_name()
	{	   
	    if($this->input->server('REQUEST_METHOD') === 'POST')
			{
			    $id =$this->input->post('sub_id');		
				if( $data['results'] = $this->product_module->list_cahpter_bysub_id($id))
				{
				    	echo "{";
                 echo  ' "states": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"states":"false"}';
				}
		}      
	}
	
	 function list_chapter()
	{	   
	    if($this->input->server('REQUEST_METHOD') === 'POST')
			{
			   $id =$this->input->post('list_chapter');
		
				if( $data['results'] = $this->product_module->list_cahpter($id))
				{
				    	echo "{";
                 echo  ' "states": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
			//	else
			//	{
			//	    echo '{"states":"false"}';
			//	}
		}     
	}
	 function list_chapter_bychapter_id()
	{
	    if($this->input->server('REQUEST_METHOD') === 'POST')
			{
			   $id =$this->input->post('chapter_id');
		
				if( $data['results'] = $this->product_module->get_chapter_bychap_id($id))
				{
				    	echo "{";
                 echo  ' "states": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
		}         	
		else
				{
				    echo '{"states":"false"}';
				}
	}
	
 function list_chapter_bysubject_id()
	{	   
	       // if($this->input->server('REQUEST_METHOD') === 'POST')
			//{
			    	   $id =2;//$this->input->post('subject_id');
	
				    $allchapter= $this->product_module->get_chapter_bysub_id($id);
				    //echo"<pre>";
				   // print_r($allchapter);
				    foreach($allchapter as $key=>$value){
				        
				     $chapter_id_name= $value['chapter_id_name'];
				      
				       $allsubchapter= $this->product_module->get_chapter_name_id($chapter_id_name);
				     echo"<pre>";
				      // print_r($allsubchapter);
				       	   
                            
                             echo json_encode($allsubchapter);
                        
				        
				    }
				    
				    
				    
				   // $array_unique= array_unique($allchapter);
				    //  echo"<pre>";
				    //print_r($array_unique);
				    
				
		//	}
			
	}
	
		function user_login()
	{
	   
	    if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				
			  $phone = $this->input->post('phone');
			  $password =$this->input->post('password');
			   $mackid =$this->input->post('mack_id');
				if($data['results'] = $this->product_module->check_login_details($phone,$password,$mackid))
				{
				    
				 	echo "{";
                 echo  ' "is_logged_in": ';
							 echo json_encode($data['results']);
							 echo	"}";
				}
				else{
					 echo '{"is_logged_in":"false"}';
				}
		}

	}
	
	
		function check_subscription_expairy()
	{
	   
	    if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				
			  $class_id =$this->input->post('class_id');
			   $user_id =$this->input->post('user_id');
			   $data=$this->product_module->check_subscription_expairy($class_id,$user_id);
			   //  print_r($data);exit; 
				if($data)
				{
				 
				$today_date=date('d-m-Y');
				$enddate=$data[0]['end_date'];
                $datetime1 = date_create($today_date);
               $datetime2 = date_create($enddate);
               $interval = date_diff($datetime1, $datetime2);
               $expiredate_time= $interval->format('%R%a');
               //echo  $expiredate_time;exit;
              // header("location: ../index.php");
             if($expiredate_time>=0){
                 
              	        echo '{"results":"True"}';
                        }
							
				else{
					 echo '{"results":"expair"}';
				}
				
			
		     }
		     else{
		       	echo '{"results":"false"}';
		     }
	  
    	}
	
	}	
	
	
	function user_payment_status()
	{
	    
	     //if($this->input->server('REQUEST_METHOD') === 'POST')
			//{
			    
		    	$user_id=1;//$this->input->post('user_id');
			    $class_id=1;//$this->input->post('class_id');
			    $pack_id=1;//$this->input->post('packag_id');
			    $payment_id=123456;//$this->input->post('payment_id'),
			    
			    $s_date=date('d-m-Y'); 
		        $getpack = $this->module->getallsubscription($pack_id);
		      // echo"<pre>";
		       //print_r($getpack[0]);exit;
		        $limitmonth=$getpack[0]['month'];
		        $indays=$limitmonth*30;
		        //echo $indays;exit;
			 if($this->product_module->user_subscription_paymentid($payment_id))
			    {
			  if($enddate_date=$this->product_module->user_subscription_status($user_id,$class_id,$pack_id,$indays))
			  {
			    echo $enddate_date; exit;
		        
		         $cat_arr=([
				'order_id'=>$this->input->post('order_id'),
				'status'=>$this->input->post('status'),
				'tax_id'=>$this->input->post('tax_id'),
				'payment_id'=>$payment_id,
				'token'=>$this->input->post('token'),
				'package_id'=>$pack_id,
				'user_id'=>$user_id,
				'user_classs_id'=>$class_id,
				'price'=>$this->input->post('amount'),
				'end_date'=>$enddate_date,
				'start_date'=>$s_date,//$this->input->post('start_date')
					]);
				   if($update_subscription=$this->product_module->user_payment_status_update($cat_arr,$user_id,$class_id,$pack_id))
				   {
				       echo'{"resultsupdate":"Sucess"}';
				       
				   }
				    
			         }
			        else{
			         $today_datestill=date('d-m-Y');
                    $date =  $today_datestill;
                    $date = strtotime($date);
                    $date = strtotime("+$indays day", $date);
                    $enddate_date= date('d-m-Y', $date);
                   //return false;
                
			    
                //echo $enddate_date;exit;
			     $cat_arr=([
				'order_id'=>$this->input->post('order_id'),
				'status'=>$this->input->post('status'),
				'tax_id'=>$this->input->post('tax_id'),
				'payment_id'=>$this->input->post('payment_id'),
				'token'=>$this->input->post('token'),
				'package_id'=>$pack_id,
				'user_id'=>$user_id,
				'user_classs_id'=>$class_id,
				'price'=>$this->input->post('amount'),
				'end_date'=>$enddate_date,
				'start_date'=>$s_date,//$this->input->post('start_date')
					]);
				  
				   if($update_subscription=$this->product_module->user_payment_status($cat_arr))
				   {
				       echo'{"results":"Sucess"}';
				       
				   }
				   else
				   {
				        echo'{"results":"failed"}';
			   }
	    	}
	    	
	        }
	        else{
	           echo'{"results":"payment allready"}';
	        }
        //}
	}
   
	
	function registration_user()
	{
	       if($this->input->server('REQUEST_METHOD') === 'POST')
		 	{
			$name=$this->input->post('fast_name');    
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$fbtoken=$this->input->post('fb_token');
			$referalUserId=$this->input->post('referalUserId');
			$name_genarate=substr($name, 0, 3);
		    $phone_genarate1=substr($phone, 0, 2);
		    $phone_genarate=substr($phone, 8, 2);
		    $refer='' . $name_genarate . '' . $phone_genarate1 . '' . $phone_genarate . '';  
			    if($user_check=$this->product_module->add_user_check($email,$phone))
				{
		  $cat_arr=([
				'Class_id'=>$this->input->post('class_id'),
				'first_name'=>$name,
				'refer_code'=>$refer,
				'email'=>$email,
				'phone'=>$phone,
				'password'=>$this->input->post('password'),
			    'fb_token'=>$fbtoken,
				'mac_id'=>$this->input->post('imei')
					]);
				if($insert_home=$this->product_module->add_user_details($cat_arr))
				   {
				    $refer = $this->product_module->get_refer_amount();
				    $ref_amt=$refer[0]['refer_amount'];
					$add_amount=$this->product_module->registor_reward_admin($referalUserId,$ref_amt,$insert_home);
				      	echo "{";
                 		echo  ' "status": [';				      
				       	echo'{"user_id":"'.$insert_home.'"}';
				       	echo "]";
						echo "}";
				   }
				   else
				   {
				       	echo "{";
                 		echo  ' "status": [';
                   		echo   ' { "user_id":"false"  }';
                    	echo "]";
						echo	"}";
				   }				    
				}
				else{
	     	    echo '{ "status":"false"  }';
	     	    }
			}    	
	}
   
   
     function add_class_api()
	{
	    
	    
		 $cat_arr=([
	           'package_id'=>'1',//$this->input->post('pack_id'),
				'name'=>'dddd'//$this->input->post('name')
					]);
//print_r($cat_arr);exit;
				if($insert_home=$this->product_module->add_home_details($cat_arr))
				{
				echo "{";
                 echo  ' "states": [';
                   echo   ' { "status":"ok"  }';
                    echo "]";
				echo	"}";
				}
				else{
	
					echo "{";
                 echo  ' "states": [';
                   echo   ' { "status":"false"  }';
                    echo "]";
				echo	"}";
				}
           // $data['results1'] = $this->product_module->get_packages_list();
	}
   
   
   
   
   
    function update_apps_banner()
	{
		//echo 1; exit;
		$data['banner_img']=$this->apps_model->get_banner_apps();
		//echo "<pre>";print_r($data['banner_img']); exit;
		$data['main_content'] = 'admin/update_apps_banner';
        $this->load->view('includes/template', $data);
		
		//$this->load->view('admin/home');
	}
    function edit_banner_apps($id)
	{
	//echo "1"; die;
     if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
            if($_FILES['banner_img']['name']!='')
				{
					//echo "<pre>" ; print_r("$_FILES"); exit;
				   //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile'); 
					if(!is_dir('../uploads/banner_apps/')) {
						umask(0);
						mkdir('../uploads/banner_apps/',0777);
					}
	
					$time=time();
					$config['upload_path'] = '../uploads/banner_apps/';
					$config['file_name'] = $time."_".$_FILES['banner_img']['name'];
											
					//$main_image=$time."_".$_FILES['small_image']['name'];
					$UploadFile=$config['file_name'];
					
					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
				    $config['image_library'] = 'gd2';
					$config['overwrite'] = TRUE;
					$config['encrypt_name'] = FALSE;
					$config['remove_spaces'] = TRUE;
					$config['max_size']   = '1024';
					
					$this->load->library('upload',$config);
					
					if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
					if ( ! $this->upload->do_upload('banner_img'))
					{
						echo 'error';
					} else {

						$this->upload->initialize($config);
						
						$source_image=realpath('../uploads/banner_apps/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 480;
						$config['height']           = 225;
						$config['new_image']       =    '../uploads/banner_apps/'.$time."_".$_FILES['banner_img']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						
						$this->load->library('image_lib',$config);
						
						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						
						}
						$this->image_lib->clear();
						
						
						$source_image=realpath('../uploads/banner_apps/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 200;
						$config['height']          = 221;
						$config['new_image']       =    '../uploads/banner_apps/thumb/'.$time."_".$_FILES['banner_img']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						$this->image_lib->initialize($config);
						
						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						}	
						$this->image_lib->clear();
				   	}

				   $old_photo=$this->input->post('old_photo', TRUE); 
					if($old_photo != '')
					{
						if(file_exists(realpath('../uploads/banner_apps/'.$old_photo)))
						{
						unlink(realpath('../uploads/banner_apps/'.$old_photo));
						}
					}
					
				} else {
					$UploadFile=$this->input->post('old_photo', TRUE); 
				}
				$update_banner=array(
				'image'=>$UploadFile,
				'title'=>$this->input->post('title'), 
				'description'=>$this->input->post('deccription') 
				);
			//echo "<pre>"; print_r($update_banner);exit;
				
				if($banner_img=$this->apps_model->edit_banner_apps($id,$update_banner))
				{
					//echo 1;exit;
					redirect('update_apps_banner');
				}
				
			}
		$data['get_banner']=$this->apps_model->get_banner_appsid($id);
		
		$data['main_content'] = 'admin/edit_banner_apps';
        $this->load->view('includes/template', $data);
		
		//$this->load->view('admin/home');
	}
	 
	
	 public function delete_banner()
            {
			//echo 1; exit;
          $id = $this->uri->segment(2);
		  //echo $id ; die;
          $this->apps_model->banner_apps_delete($id);
          redirect('update_apps_banner');
            }		
	 
	 function logo_apps_change()
	{
   //echo 1;exit;
	
	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
	//echo 1;exit;
		 if($_FILES['change_logo']['name']!='')
		{
                $type_profile=$this->input->post('type_profile'); 
					if(!is_dir('../uploads/logo_apps/')) {
						umask(0);
						mkdir('../uploads/logo_apps/',0777);
					}
	
					$time=time();
					$config['upload_path'] = '../uploads/logo_apps/';
					$config['file_name'] = $time."_".$_FILES['change_logo']['name'];
											
					//$main_image=$time."_".$_FILES['small_image']['name'];
					$UploadFile=$config['file_name'];
					
					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
				    $config['image_library'] = 'gd2';
					$config['overwrite'] = TRUE;
					$config['encrypt_name'] = FALSE;
					$config['remove_spaces'] = TRUE;
					$config['max_size']   = '1024';
					
					$this->load->library('upload',$config);
					
					if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
					if ( ! $this->upload->do_upload('change_logo'))
					{
						echo 'error';
					} else {

						$this->upload->initialize($config);
						
						$source_image=realpath('../uploads/logo_apps/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           =280;
						$config['height']           = 200;
						$config['new_image']       =    '../uploads/logo_apps/'.$time."_".$_FILES['change_logo']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						
						$this->load->library('image_lib',$config);
						
						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						
						}
						$this->image_lib->clear();
						
						
						$source_image=realpath('../uploads/logo_apps/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 200;
						$config['height']          = 221;
						$config['new_image']       =    '../uploads/logo_apps/thumb/'.$time."_".$_FILES['change_logo']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						$this->image_lib->initialize($config);
						
						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						}	
						$this->image_lib->clear();
				   	}

				   $old_photo=$this->input->post('old_photo', TRUE); 
					if($old_photo != '')
					{
						if(file_exists(realpath('../uploads/client/'.$old_photo)))
						{
						unlink(realpath('../uploads/client/'.$old_photo));
						}
					}
					
				} else {
					$UploadFile=$this->input->post('old_photo', TRUE); 
				}		 
			 $chg_logo=array(
			 'apps_logo'=>$UploadFile
			 );
			 if($this->module->change_logo($chg_logo))
			 {
				 $data['flash_message'] =TRUE;
			 }
			 else{
				 $data['flash_message'] =FALSE;
			 }
		}
		 $data['site_logo']=$this->apps_model->getapps_logo();
		 $data['main_content'] = 'admin/logo_apps_change';
         $this->load->view('includes/template', $data);
		 //$this->load->view('admin/change_password');
	}	
	public function checkclassidhere()
	{
	    if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $class_id= $this->input->post('class_id');
            if($this->apps_model->app_modelcheckclassid($class_id))
            {                
                echo '{"status":"true"}';
            }
            else{
                echo '{"status":"flase"}';                                 
            }          
        }	    	    
	}
		function list_slider_api()
	{
	  //  echo 1;exit;	    
				if( $data['results'] = $this->product_module->get_slider_list2())
				{
				    	echo "{";
                 echo  ' "result": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
	}
		function list_exam_api()
	{
				if( $data['results'] = $this->apps_model->list_exam_api())
				{
				    	echo "{";
                 echo  ' "result": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
	}
    function get_plans_api()
  {
        if( $data['results'] = $this->apps_model->get_plans_list_api())
        {
              echo "{";
                 echo  ' "result": ';
            echo json_encode($data['results']);
        echo  "}";
        }
        else
        {
            echo '{"result":"false"}';
        }
  }
		function list_exambyid_api()
	{
			if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $exam_id=$this->input->post('exam_id');	    
				if( $data['results'] = $this->apps_model->list_exambyid_api($exam_id))
				{
				    	echo "{";
                 echo  ' "result": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
		}
	}
	function list_subjectbyid_api()
	{
			if ($this->input->server('REQUEST_METHOD') === 'POST')
         {
            $exam_id=$this->input->post('exam_id');	    
				if( $data['results'] = $this->apps_model->list_subjectbyid_api($exam_id))
				{
				    	echo "{";
                 echo  ' "result": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
		}
	}	
function list_question_api()
	{
			if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $exam_id=$this->input->post('exam_id');
			$subject_id=$this->input->post('subject_id');
				if( $data['results'] = $this->apps_model->list_question_api($exam_id,$subject_id))
				{
				    	echo "{";
                 echo  ' "result": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
		}
	}	
//<======================================exam_subscription=========================================
function check_exam_subscription_api()
	{	    
	      if($this->input->server('REQUEST_METHOD') === 'POST')
		  	{
			    $exam_id =$this->input->post('exam_id');
			    $user_id =$this->input->post('user_id');
				if( $data['results'] = $this->product_module->check_exam_subscription_api($user_id,$exam_id))
				{
					echo "{";
						echo  ' "result": ';
						   echo json_encode($data['results']);
					   echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
			}
	}
	function check_exam_subscription_expiry_api()
	{	   
	     if($this->input->server('REQUEST_METHOD') === 'POST')
		 	{				
			  $exam_id =$this->input->post('exam_id');
			   $user_id =$this->input->post('user_id');
			   $data=$this->product_module->check_exam_subscription_expiry_api($exam_id,$user_id); 
				if($data)
				{
                $today_date = strtotime(date('Y-m-d'));
               $enddate = strtotime($data[0]['end_date']);
               $interval = $enddate - $today_date;
			   //echo  $interval;exit;
			   
              // header("location: ../index.php");
             if($interval>=0){   
              	        echo '{"result":"True"}';
                        }		
				else{
					 echo '{"result":"expire"}';
				}
		     }
		     else{
		       	echo '{"result":"false"}';
		     }	  
    	}
	}
public function exam_result_api()
	{
	   if ($this->input->server('REQUEST_METHOD') === 'POST')
	   {
		   $user_id=$this->input->post('user_id');
		   $exam_id=$this->input->post('exam_id');
		   $date=date('Y-m-d H:i');
		   $cat_arr=array(
				   'user_id'=>$user_id,
				   'exam_id'=>$exam_id,
				   'result'=>$this->input->post('result'),
				   'date'=>$date				   
				   );		   
		   if($data=$this->product_module->exam_result_api($cat_arr,$user_id,$exam_id))
		   {
				echo "{";
				echo  ' "result": ';
				echo json_encode($data);
				echo	"}";
			}
			else
			{
				echo '{"result":"false"}';
			}		   
	   }    
	}
	function list_exam_result_api()
	{
			if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $user_id=$this->input->post('user_id');
		   	$exam_id=$this->input->post('exam_id');
				if( $data['results'] = $this->product_module->list_exam_result_api($user_id,$exam_id))
				{
				    	echo "{";
                 echo  ' "result": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
		}
	}
	function list_examresultbyid_api()
	{
 		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $user_id=$this->input->post('user_id');
				if( $data['results'] = $this->product_module->list_examresultbyid_api($user_id))
				{
				    	echo "{";
                 echo  ' "result": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
		}
	}
	function user_examsubs_payment()
	{	    
	      if($this->input->server('REQUEST_METHOD') === 'POST')
		 	{			    
		    	$user_id=$this->input->post('user_id');
			    $exam_id=$this->input->post('exam_id');
			    $payment_id=$this->input->post('payment_id');			    
			    $s_date=date('Y-m-d'); 
		        $getexam = $this->product_module->get_exam_listbyid($exam_id);
		      // echo"<pre>";
		       //print_r($getpack[0]);exit;
		        $expiry_months=$getexam[0]['validation'];
		        $indays=$expiry_months*30;
		        //echo $indays;die;
			 //if($this->product_module->user_examsubscription_paymentid($payment_id))
			    //{
			  if($enddate_date=$this->product_module->user_exam_subs_status($user_id,$exam_id,$expiry_months))
			  {	    
				$cat_arr=array(
					'user_id'=>$user_id,
					'exam_id'=>$exam_id,	 
					'order_id'=>$this->input->post('order_id'),
					'status'=>$this->input->post('status'),
					'payment_id'=>$this->input->post('payment_id'),
					'token'=>$this->input->post('token'),
					'end_date'=>$enddate_date,
					'start_date'=>$s_date
						);
				   if($update_subscription=$this->product_module->user_exam_payment_status_update($cat_arr,$user_id,$exam_id))
				   {
				       echo'{"resultsupdate":"Success"}';				       
				   }				    
			         }
			        else{
                    $date = strtotime($s_date);
                    $date = strtotime("+$indays day", $date);
                    $enddate_date= date('Y-m-d', $date);
			     $cat_arr=array(
				'user_id'=>$user_id,
				'exam_id'=>$exam_id,	 
				'order_id'=>$this->input->post('order_id'),
				'status'=>$this->input->post('status'),
				'payment_id'=>$this->input->post('payment_id'),
				'token'=>$this->input->post('token'),
				'end_date'=>$enddate_date,
				'start_date'=>$s_date
					);				  
				if($update_subscription=$this->product_module->user_exam_payment_status($cat_arr))
				   {
				       echo'{"results":"Success"}';				       
				   }
				   else
				   {
				        echo'{"results":"failed"}';
			   		}
	    	}	    	
	        /*}
			else
			{
	           echo'{"results":"Payment allready exist."}';
	        }*/
        }
	
	}
//<======================================subject_subscription=========================================
function check_subject_subscription_api()
	{	    
	       if($this->input->server('REQUEST_METHOD') === 'POST')
		   	{
				$user_id =$this->input->post('user_id');
				$class_id =$this->input->post('class_id');
				$subject_id =$this->input->post('subject_id');
				if( $data['results'] = $this->product_module->check_subject_subscription_api($user_id,$class_id,$subject_id))
				{
					echo "{";
						echo  ' "result": ';
						   echo json_encode($data['results']);
					   echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
			}
	}
	function check_subscription()
	{
	    
	      if($this->input->server('REQUEST_METHOD') === 'POST')
		  	{
			    $class_id =$this->input->post('class_id');
			    $user_id =$this->input->post('user_id');
				if( $data['results'] = $this->product_module->check_subscription($user_id,$class_id))
				{
					$today_date = strtotime(date('Y-m-d'));
					$json_data=array();
					foreach($data as $val){						
						foreach($val as $val1){
						$enddate = strtotime($val1['end_date']);
						$interval = $enddate - $today_date;
						if($user_id ==$val1['user_id']){
						if($interval>=0){ 
						array_push($json_data,$val1);
						}		
				  		else{
					   echo '{"result":"expired"}';
						  }    
					}
					}
				}
				    echo "{";
				 	echo  ' "result": ';
				    echo json_encode($json_data);
				    echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
			}
	}
	function check_subject_subscription_expiry_api()
	{	   
	      if($this->input->server('REQUEST_METHOD') === 'POST')
		  	{				
				$user_id =$this->input->post('user_id');
				$class_id =$this->input->post('class_id');
				$subject_id =$this->input->post('subject_id');
			   $data=$this->product_module->check_subject_subscription_expiry_api($user_id,$class_id,$subject_id); 
				if($data)
				{
                $today_date = strtotime(date('Y-m-d'));
               $enddate = strtotime($data[0]['end_date']);
               $interval = $enddate - $today_date;
			   //echo  $interval;exit;
             if($interval>=0){   
              	        echo '{"result":"True"}';
                        }		
				else{
					 echo '{"result":"expired"}';
				}
		     }
		     else{
		       	echo '{"result":"false"}';
		     }	  
    	}
	}

	function user_subjectsubs_payment()
	{	    
	      if($this->input->server('REQUEST_METHOD') === 'POST')
		  	{			    
		    	$user_id =$this->input->post('user_id');
				$class_subject_json=$this->input->post('subs_ids');
			    $payment_id=$this->input->post('payment_id');
			    $order_id=$this->input->post('order_id');
			    $status=$this->input->post('status');
			    $wallet_debit=$this->input->post('debitbalance');
			    $token=$this->input->post('token');
			    $s_date=date('Y-m-d');
			    $json_array=json_decode($class_subject_json , true);
			    $wallet_balance=$this->product_module->user_walletbyid_api($user_id);
			    
			    if($wallet_balance[0]['wallet']>=$wallet_debit){
			       $wallet=$wallet_balance[0]['wallet'] - $wallet_debit;
			       
			    $response=array();
			    foreach($json_array[0] as $key=>$value){
			     $subject_id=$value['s_id'];
			     $class_id=$value['class_id'];
		        $getsubject = $this->product_module->fetchamountsubject_byid($subject_id);

		        $expiry_months=$getsubject[0]['month'];
		        $indays=$expiry_months*30;
		        
			 if($payment_data=$this->product_module->user_subjectsubscription_paymentid($payment_id))
			    {
			  if($enddate_date=$this->product_module->user_subject_subs_status($user_id,$class_id,$subject_id,$expiry_months))
			  {	    
				$cat_arr=array(
					'user_id'=>$user_id,
					'class_id'=>$class_id,
					'subject_id'=>$subject_id,	 
					'order_id'=>$order_id,
					'status'=>$status,
					'payment_id'=>$payment_id,
					'token'=>$token,
					'end_date'=>$enddate_date,
					'start_date'=>$s_date
						);
				   if($update_subscription=$this->product_module->user_subject_payment_status_update($cat_arr,$user_id,$class_id,$subject_id))
				   {
				       array_push($response,array(
				           'class_id'=>$class_id,
					       'subject_id'=>$subject_id,
					       'result'=>"Success"
				           ));
				       //echo'{"resultsupdate":"Success"}';				       
				   }				    
			         }
			        else{
			            
                    $date = strtotime($s_date);
                    $date = strtotime("+$indays day", $date);
                    $enddate_date= date('Y-m-d', $date);
                    
			     $cat_arr=array(
				'user_id'=>$user_id,
				'class_id'=>$class_id,
			    'subject_id'=>$subject_id,	 
				'order_id'=>$order_id,
				'status'=>$status,
				'payment_id'=>$payment_id,
				'token'=>$token,
				'end_date'=>$enddate_date,
				'start_date'=>$s_date
					);
					
				if($update_subscription=$this->product_module->user_subject_payment_status($cat_arr))
				   {
				       array_push($response,array(
				           'class_id'=>$class_id,
					       'subject_id'=>$subject_id,
					       'result'=>"Success"
				           ));
				       //echo'{"results":"Success"}';				       
				   }
				   else
				   {
				       array_push($response,array(
				           'class_id'=>$class_id,
					       'subject_id'=>$subject_id,
					       'result'=>"failed"
				           ));
				        //echo'{"results":"failed"}';
			   	   }
	    	}	    	
	        }
			else
			{
	           echo'{"results":"Payment allready exist."}';
	        }
			    }
			    $cat_bal=array(
			        'wallet'=>$wallet
			        );
			    if($up_data=$this->product_module->sub_sub_wallet_update($user_id,$cat_bal)){
			        echo "{";
                    echo  ' "results": ';
    			    echo json_encode($response);
    			    echo "}";  
			    }
			    }else{
			      echo'{"results":"Insufficient balance"}';  
			    }
		}
	
	}
//<=====================refer==================================>
public function user_referid_api()
	{
	    if($this->input->server('REQUEST_METHOD') === 'POST')
		{ 
	      $user_id=$this->input->post('user_id');
	      
    	     if ($data=$this->product_module->user_referid_api($user_id))
    	     {
    	         echo "{";
                 echo  ' "result": ';
    			 echo json_encode($data);
    			 echo	"}";
    	     }
		}
	}
	public function	check_referid()
	{
	  if($this->input->server('REQUEST_METHOD') === 'POST')
	 	{ 
	      $refer_code=$this->input->post('refer_code');
	      	 if($refeuserid=$this->product_module->referidcheck($refer_code))
	      	 {
	      	     $userid=$refeuserid[0]['u_id'];
	      	      echo '{"result":"true","userid":"'.$userid.'"}';
	      	 }
	      	 else{
				 echo '{"result":"false"}';
			}
		}
	}

//<=====================User==================================>
public function user_walletbyid_api()
	{
	    if($this->input->server('REQUEST_METHOD') === 'POST')
		{ 
	      $user_id=$this->input->post('user_id');
	      
    	     if ($data=$this->product_module->user_walletbyid_api($user_id))
    	     {
    	         echo "{";
                 echo  ' "result": ';
    			 echo json_encode($data);
    			 echo	"}";
    	     }
		}
	}
///==============================notification====================================================
function list_notification_byid_api()
	{
			if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $user_id=$this->input->post('user_id');
				if( $data['results'] = $this->product_module->list_notification_byid_api($user_id))
				{
				    	echo "{";
                 echo  ' "result": ';
				    echo json_encode($data['results']);
				echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
		}
	}


function update_token_api()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $user_id=$this->input->post('user_id');
            $token=$this->input->post('fb_token');
            $cat_arr=array(
					'u_id'=>$user_id,
					'fb_token'=>$token
						);
			if( $data['results'] = $this->product_module->update_token_api($user_id,$cat_arr))
			{
                echo '{"result":"true"}';
			}
			else
			{
			    echo '{"result":"false"}';
			}
		}
	}
function list_popularvideo_api()
	{
			if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			$class_id= $this->input->post('class_id');
				if( $data['results'] = $this->apps_model->list_popularvideo_api($class_id))
				{
				    echo "{";
					echo  ' "result": ';
				    echo json_encode($data['results']);
					echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
		}
	}

function fetch_subscription_byuserid_api()
	{
        	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $user_id=$this->input->post('user_id');
				if( $data['results'] = $this->apps_model->fetch_subscription_byuserid_api($user_id))
				{
				    echo "{";
                    echo  ' "result": ';
				    echo json_encode($data['results']);
				    echo	"}";
				}
				else
				{
				    echo '{"result":"false"}';
				}
		}
	 }
	














}
