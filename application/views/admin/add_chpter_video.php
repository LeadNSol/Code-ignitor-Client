 <?php
 //print_r($results);
 //die;
 ?>   
    <script src="<?php echo base_url() ?>js/jquery.form.js"></script>
	 <!-- /top navigation -->
<style>
#progress-wrp {
   
   padding: 1px;
   position: relative;
   border-radius: 3px;
   margin: 10px;
   text-align: left;
   background: #fff;
   box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
}

#progress-wrp3 {
  
   padding: 1px;
   position: relative;
   border-radius: 3px;
   margin: 10px;
   text-align: left;
   background: #fff;
   box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
}
#progress-wrp .progress-bar{
  border: 1px solid #0099CC;
   height: 20px;
   border-radius: 3px;
   background-color: #8ed493;
   width: 0;
   box-shadow: inset 1px 1px 10px rgba(0, 0, 0, 0.11);
}
#progress-wrp  .status{
   top:3px;
   left:50%;
   position:absolute;
   display:inline-block;
   color: #000000;
}

#progress-wrp3 .progress-bar{
  border: 1px solid #0099CC;
   height: 20px;
   border-radius: 3px;
   background-color: #8ed493;
   width: 0;
   box-shadow: inset 1px 1px 10px rgba(0, 0, 0, 0.11);
}
#progress-wrp3 .status{
   top:3px;
   left:50%;
   position:absolute;
   display:inline-block;
   color: #000000;
}


</style>
        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add <small>Chapter Video</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
					<div class="alert alert-success" id="flashhhh" style="display: none;">
						<a class="close" data-dismiss="alert">×</a>
						<strong>Well done!</strong>  Chapter Video added successfully.
					</div>		   
                  <div class="x_content">
                    <br />
					<?php 				
					$attributes = array('class' => 'form-horizontal form-label-left');					
					echo  form_open_multipart('chapter_details_addForm/', $attributes);
					?>
					<!--<form id="addForm" method="POST" > -->
		            <div class="form-group profile_ed_f_rm">
		               	<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Sellect Class<span class="required">*</span>
		            	</label>
		            <?php //print_r($main_category);?>
		              	<div class="col-md-9 col-sm-9 col-xs-12">
		                  <select class="form-control col-md-7 col-xs-12" name="class_id" required="required" id="main_class">
		                  <option value="">Select</option>
		            <?php
		            foreach($results as $key=>$val){?>
		            <option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
		            <?php }?>
		                  </select>		                 
		              	</div>
		            </div>
		            <div class="form-group profile_ed_f_rm">
		                <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Sellect Subject<span class="required">*</span>
		                </label>		             
		                <div class="col-md-9 col-sm-9 col-xs-12">
		                <select class="form-control col-md-7 col-xs-12" name="sub_id" required="required" id="sub_id">
		                <option value="">Select</option>
		                <option value=""></option>		                     
		                </select>		                  
		              	</div>
		            </div>
					<div class="form-group profile_ed_f_rm">
		               	<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Sellect chapter<span class="required">*</span>
		              	</label>		             
		            	<div class="col-md-9 col-sm-9 col-xs-12">
		                <select class="form-control col-md-7 col-xs-12" name="name" required="required" id="chapter_id">
		                <option value="">Select</option>
		                <option value=""></option>		                     
		                </select>
		                  <input type="hidden" id="subject_name" name="chapter_name" class="form-control col-md-7 col-xs-12" value="">
		            	</div>
					</div>
				    <!--<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select  Image <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
                           <input type="file" name="site_image" multiple required="required" class="form-control col-md-7 col-xs-12" value="" />
						</div>
				    </div>-->
					    <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Description<span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							    <textarea rows="3" cols="50" class="form-control col-md-7" name="description"></textarea>
							</div>
                         </div>	
                        <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Video Title <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="video_title" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				        </div>
						<div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Upload Video Condition<span class="required">*</span>
							</label>		             
							<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control col-md-7 col-xs-12" onchange="upload_condition(this.value)" name="vidcon" required="required" id="vidcon">
							<option value="">Select</option>
							<option value="Upload_video">Upload Video</option>
							<option value="Upload_video_name">Add Video Name</option>
							</select>
							</div>
						</div>
						<div class="form-group profile_ed_f_rm" id="videosrc" style="display: none;">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Video Name <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text"  name="vid_src_name" class="form-control col-md-7 col-xs-12" value="">
							</div>
				        </div>
				           <!-- <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Video File Upload<span class="required">*</span></label>
							<input  accept="video/*" type="file" name="uploadFile" id="uploadFile" class="form-control col-md-7 col-xs-12"/>
							</div>-->
							
							<!--================================-->
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center"> 
                                       <h4>Picture</h4>
                                    <label>
                                <div style="height: 250px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">     
                                       <img id="addImg" class="m_top05" height="200" width="200" style="border:1px solid #e6e6e6;padding: 14px 17px;cursor: pointer;" src="https://www.eeweb.com/assets/themes/default/images/user.png">
                                       <div id="addedImg"></div>
                                       <input onchange="uploadImage()" id="imageFile" type="file" style="display: none;" name="file">
                                       <input type="hidden" name="img_source_name" id="img_source_name">
                                       <div style="display: none;" id="progress-wrp">
                                        <div class="progress-bar"></div>
                                        <div class="status">0%</div>
                                      </div>
                                    </div>
                                <div id="output"></div>
                                    </label>                                    
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" id="videocheck"> 
                                       <h4>VIDEO UPLOAD</h4>
                                    <label>
                                <div style="height: 250px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">     
                                       <img id="addVid" class="m_top05" height="200" width="200" style="border:1px solid #e6e6e6;padding: 14px 17px;cursor: pointer;" src="https://www.eeweb.com/assets/themes/default/images/user.png">
                                       <div id="addedVid"></div>
                                       <input onchange="uploadVideo()" id="videoFile" type="file" style="display: none;" name="file">
                                       <input type="hidden" name="vid_source_name" id="vid_source_name">
                                       <div style="display: none;" id="progress-wrp3">
                                        <div class="progress-bar"></div>
                                        <div class="status">0%</div>
                                      </div>
                                    </div>
                                <div id="output"></div>
                                    </label>                                   
                             </div>
							<!--================================-->
						<!--<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div id="targetLayer" style="display:none;"></div>				
					<div id="loader-icon" style="display:none;"><img src="<?php echo base_url() ?>images/loader.gif" /></div>  --> 
					<div></div>
                    <div class="ln_solid"></div>
                      <div class="form-group profile_ed_f_rm">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 save_pr_v">
                          <input type="submit" id="submit-btn" class="btn btn-success sve_bot" value="Save">
                        </div>
                      </div>                         
                         <!-- <div class="form-group profile_ed_f_rm">
						   <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Image 1 (525x350) <span   class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input accept="video/*" type="file" name="file" id="files" class="form-control col-md-7 col-xs-12" value="">
						</div>
						
						<div id="uploaded_images"></div>
				       </div> 				     
<div class="add_video_mess_btn">
<label class="myLabel02">
                        <input accept="video/*" id="file_video" name="file_video" type="file">
                        Add Video Message
                    </label>
                </div>
<div class="continue_btn">
<a href="https://www.blogger.com/null" id="continueButton" onclick="submiteCardDetails();" style="cursor: pointer;">Continue</a>
                </div>
<progress id="progressBar" max="100" style="width: 100%; display: none;" value="0"></progress>-->
                     <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
            </div>         
        </div>
        <!-- /page content -->
        <!-- footer content --> 
<style>
.change_ps_w_ord{min-height:611px !important;}
</style>
<script>
	$(document).ready(function(){
//alert("trttr");
 $("#main_class").change(function(){
    var class_id =$(this).val();
   //alert(class_id);
   $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>fetchsubject",
        data: {class_id:class_id},
        success: function(data)
        {
             //alert(data);
             $("#sub_id").html(data)
        }
        });
    })
});
</script>
<script>
$(document).ready(function(){
//alert("trttr");
 $("#chapter_id").change(function(){     
  //alert($(this).find("option:selected").text());  
    $("#subject_name").val($(this).find("option:selected").text());
    })
 $("#sub_id").change(function(){
    var subject_id =$(this).val();
   //alert(class_id);
   $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>fetchchapter",
        data: {subject_id:subject_id},
        success: function(data)
        {
             //alert(data);
             $("#chapter_id").html(data)
        }
        });
    })
});

function upload_condition(check){
	$(document).ready(function(){
		alert(check);
		if(check=="Upload_video_name"){
			$('#videocheck').hide();
			$('#videosrc').show();
		}
	});
	
	
}

</script>


<script> 
function uploadImage(){
  event.preventDefault();
  $('#progress-wrp').show();
  // var formElement = document.getElementById("imgForm");
  // var formData = new FormData(formElement);
  var file_data = $("#imageFile").prop("files")[0];
  var path = $('#imageFile').val();
  var res = path.split(".");
  var length =  (res.length)-1;
  var format = res[length]; // Getting the properties of file from file field  
  if(format=='jpeg' || format=='jpg' || format=='png'){   
   // continue .
  }else{
    alert('Only jpg, jpeg and png formats are allowed !');
    $('#progress-wrp').hide();
    return;
  }
  var form_data = new FormData();// Creating object of FormData class
  form_data.append("file", file_data);
  form_data.append('action_type',"IMAGE");  
      $.ajax({
      type:'POST',
      url: '<?= base_url();?>chapter_uploadImage',
      data: form_data,
      contentType: false,
      cache: false,
      processData:false,
    xhr: function(){
        //upload Progress
        var xhr = $.ajaxSettings.xhr();
        if (xhr.upload) {
            xhr.upload.addEventListener('progress', function(event) {
                var percent = 0;
                var position = event.loaded || event.position;
                var total = event.total;
                if (event.lengthComputable) {
                    percent = Math.ceil(position / total * 100);
                }
                //update progressbar
                $(" .progress-bar").css("width", + percent +"%");
                $( " .status").text(percent +"%");
            }, true);
        }
        return xhr;
    }
    })
.done(function(data) {
  if(data){
    //alert(data);
  //return;
    $('#addImg').hide();
    $('#addedImg').show();
     $('#addedImg').html('<img style="cursor:pointer;" height="200" src="<?=base_url();?>images/'+data+'">');
     $('#img_source_name').val(data);
  }
  $('#progress-wrp').hide();
  $(" .progress-bar").css("width", + 0 +"%");
 })
    // using the fail promise callback
   .fail(function(data) {
   // alert(data);
        $('#progress-wrp').hide();
        $(" .progress-bar").css("width", + 0 +"%");
        alert('Unable to upload image at this moment !');
                    });
    }

/*$("#addForm").submit(function(event){
    event.preventDefault();

    $('#submit-btn').prop('disabled',true);
    var formData = $(this).serializeArray();
       $.ajax({
                        type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                        url:  "<?=base_url();?>chapter_details_addForm",
                        data:formData ,
                        dataType: 'json', // what type of data do we expect back from the server
                        encode: true
                    })
                    // using the done promise callback
                    .done(function(data) {
                        alert(data);
                    if(data.status==false){
                        alert(data.message);
                    $('#app-fail-message').html(data.message);
                      $('#app-fail-popup').show();
                      $('#submit-btn').prop('disabled',false);
                    }

                     if(data.status==true){
                         alert(data.message);
                      $('#app-success-message').html(data.message);
                      $('#app-success-popup').show();
                      //$('#submit-msg').html(data.message);
                    //     setTimeout(function() {
                    //     location.href="<?=base_url();?>users";
                    //   }, 1500); 
                    }
                    })
                    // using the fail promise callback
                    .fail(function(data) {
                      $('#submit-btn').prop('disabled',false);
                       console.log(data);
                    });
    })*/



function uploadVideo(){
  event.preventDefault();
  $('#progress-wrp3').show();
  // var formElement = document.getElementById("imgForm");
  // var formData = new FormData(formElement);
  var file_data = $("#videoFile").prop("files")[0];   // Getting the properties of file from file field
  var path = $('#videoFile').val();
  
  var res = path.split(".");
  var length =  (res.length)-1;
  var format = res[length]; // Getting the properties of file from file field
  
  if(format=='mp4' || format=='avi' || format=='flv'){
   // continue .
  }else{
    alert('Only mp4, doc and docs formats are allowed !');
    $('#progress-wrp3').hide();
    return;
  }
  var form_data = new FormData();                  // Creating object of FormData class
  form_data.append("file", file_data);
  form_data.append('action_type',"IMAGE");
      $.ajax({
      type:'POST',
      url: '<?= base_url();?>chapter_uploadvideo/',
      data: form_data,
      contentType: false,
      cache: false,
      processData:false,
    xhr: function(){
        //upload Progress
        var xhr = $.ajaxSettings.xhr();
        if (xhr.upload) {
            xhr.upload.addEventListener('progress', function(event) {
                var percent = 0;
                var position = event.loaded || event.position;
                var total = event.total;
                if (event.lengthComputable) {
                    percent = Math.ceil(position / total * 100);
                }
                //update progressbar
                $(" .progress-bar").css("width", + percent +"%");
                $( " .status").text(percent +"%");
            }, true);
        }
        return xhr;
    }
    })
.done(function(data) {
   // alert(data);
  if(data){
    $('#addVid').hide();
    $('#addedVid').show();
    $('#addedVid').html('<img style="cursor:pointer;" height="200" src="<?=base_url();?>images/play_icon.png">');
     $('#vid_source_name').val(data);
  }
  $('#progress-wrp3').hide();
  $(" .progress-bar").css("width", + 0 +"%");

 })
    // using the fail promise callback
   .fail(function(data) {
   // alert('hjkh'+data);
        $('#progress-wrp3').hide();
        $(" .progress-bar").css("width", + 0 +"%");
        alert('Unable to upload at this moment !');
                    });
    } 
</script>
<script>
$(document).ready(function(){
	$('#uploadImage').submit(function(event){	    
		if($('#uploadFile').val())
		{
			event.preventDefault();
			$('#loader-icon').hide();
			$('#targetLayer').hide();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('50%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$('.progress-bar').animate({
						width: percentageComplete + '%'
					}, {
						duration: 1000
					});
				},
				success:function(){
					$('#loader-icon').hide();
					$('#targetLayer').hide();
					$('#progress-bar').hide();
					$('#flashhhh').css('display', "block")
					 //location.reload(); 					
				},
				//resetForm: true
			});
		}
		return false;
	});
});

/*
function UpdateStatus(){
        	if($('#uploadFile').val())
		{
			event.preventDefault();
			$('#loader-icon').show();
			$('#targetLayer').hide();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('50%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$('.progress-bar').animate({
						width: percentageComplete + '%'
					}, {
						duration: 1000
					});
				},
				success:function(){
					$('#loader-icon').hide();
					$('#targetLayer').show();
				},
				resetForm: true
			});
		}
		return false;       
   }   
    /*
$(document).ready(function(){   
	$('#uploadImage').click(function(event){
		if($('#uploadFile').val())
		{
			event.preventDefault();
			$('#loader-icon').show();
			$('#targetLayer').hide();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('50%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$('.progress-bar').animate({
						width: percentageComplete + '%'
					}, {
						duration: 1000
					});
				},
				success:function(){
					$('#loader-icon').hide();
					$('#targetLayer').show();
				},
				resetForm: true
			});
		}
		return false;
	});
});
*/
</script>

