	<?php
   $iddata=$this->uri->segment(2);

	$name=$get_team[0]['chapter_name'];
	$description=$get_team[0]['description'];
	$image=$get_team[0]['chapter_image'];
	//$social_fb=$value['social_fb'];
	//$lin_l=$value['social_link'];
	$video=$get_team[0]['video_name'];
	$id=$get_team[0]['chapter_id'];
	$video_title=$get_team[0]['video_title'];

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
	 <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit <small>Exam Chapter Video</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					<?php 				
					$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
					echo  form_open_multipart('update_exam_chapter_video/'.$id, $attributes);
					?>
                    
					     <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select Class<span class="required">*</span>
		              </label>
		              <?php //print_r($main_category);?>
		              <div class="col-md-9 col-sm-9 col-xs-12">
		                  <select class="form-control col-md-7 col-xs-12" name="class_id" required="required" id="main_class">
		                     <option value="">Select</option>
		                      <?php
		                      //echo $get_team[0]['class_id'];
		                      foreach($results as $key=>$val){?>

		                            <option value="<?php echo $val['id'] ?>" <?php if($get_team[0]['class_id']==$val['id']){echo 'selected';}?> ><?php echo $val['name'] ?></option>
		                      <?php }?>
		                  </select>
		                 
		              </div>
		               </div>


		                     <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select Subject<span class="required">*</span>
		              </label>
		             
		              <div class="col-md-9 col-sm-9 col-xs-12">
		                  <select class="form-control col-md-7 col-xs-12" name="sub_id" required="required" id="sub_id">
		                     <option value="">Select</option>
		                    

		                            <option value=""></option>
		                     
		                  </select>
		                  
		              </div>
		               </div>
					   <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select chapter<span class="required">*</span>
		              </label>
		             
		              <div class="col-md-9 col-sm-9 col-xs-12">
		                  <select class="form-control col-md-7 col-xs-12" name="name"  id="chapter_id">
		                     <option value="">Select</option>
		                    

		                            <option value=""></option>
		                     
		                  </select>
		                  <input type="hidden" id="subject_name" name="chapter_name" class="form-control col-md-7 col-xs-12" value="">
		              </div>
		               </div>
					   <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Description
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							      <textarea rows="3" cols="50" class="form-control col-md-7" name="description"><?php echo $description;?></textarea>
							</div>
                         </div>	
                         <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Video Title 
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="video_title" class="form-control col-md-7 col-xs-12" value="<?php echo $video_title;?>">
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
							<option value="keep_old_video">Keep Old Video</option>
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
						
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center"> 
                                       <h4>Picture</h4>
                                    <label>
                                <div style="height: 250px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">     
                                       <img id="addImg" class="m_top05" height="200" width="200" style="border:1px solid #e6e6e6;padding: 14px 17px;cursor: pointer;" src="<?php echo site_base_url();?>images/<?php echo $image;?>">
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
							<input type="hidden" name="old_photo" value="<?=$image ?>" >
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" id="videocheck"> 
                                       <h4>VIDEO UPLOAD</h4>
                                    <label>
                                <div style="height: 250px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">     
                                       <div id="addVid" >
									   <video width="220" height="180px" controls>
										<source src="<?php echo site_base_url();?>images/<?php echo $video;?>" type="video/mp4">
										</video>
										</div>
                                       <div id="addedVid"></div>
                                       <input onchange="uploadVideo()" id="videoFile" type="file"  name="file">
                                       <input type="hidden" name="vid_source_name" id="vid_source_name">
                                       <div style="display: none;" id="progress-wrp3">
                                        <div class="progress-bar"></div>
                                        <div class="status">0%</div>
                                      </div>
                                    </div>
                                <div id="output"></div>
                                    </label>                                   
                             </div>
							 <input type="hidden" name="old_videoss" value="<?=$video ?>" />
							 
		              <!--<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select  Video
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
                           <input type="file" name="uploadFile" id="uploadFile" class="form-control col-md-7 col-xs-12" value="" />
						   
					 <video width="220" height="100px" controls>
                                <source src="<?php echo site_base_url();?>images/<?php echo $video;?>" type="video/mp4">
                                </video>
                  
						</div>
						
				       </div>
					   <input type="hidden" name="old_videoss" value="<?=$video ?>" />
					    
				        <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select  Image 
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
                           <input type="file" name="site_image" class="form-control col-md-7 col-xs-12" value="" />
		
						 <img src="<?php echo site_base_url();?>images/<?php echo $image;?>"  height="100px" width="200px">
                  
						</div>
						</div>
						<input type="hidden" name="old_photo" value="<?=$image ?>" > -->
				       
					    
	             <div class="ln_solid"></div>
                      <div class="form-group profile_ed_f_rm">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 save_pr_v">
                          <input type="submit" id="submit-btn" class="btn btn-success sve_bot" value="Save">
                        </div>
                      </div>

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
    var class_id =$("#main_class").val();
    var iddata="<?php echo $iddata;?>";
    if(iddata){
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>fetch_exam_subject",
        data: {class_id:class_id, iddata:iddata},
        success: function(data)
        {
             //alert(data);
             $("#sub_id").html(data)
             var subject_id =$("#sub_id").val();
             subject_fun(subject_id);

        }
        });
        
 $("#main_class").change(function(){

    var class_id =$(this).val();
   //alert(class_id);

   $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>fetch_exam_subject",
        data: {class_id:class_id, iddata:iddata},
        success: function(data)
        {
             //alert(data);
             $("#sub_id").html(data)
              
        }
        });
    })
    }
    
});

    function subject_fun(subject_id)
    {
        //alert(id);
        var iddata="<?php echo $iddata;?>";
        $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>fetch_exam_chapter",
        data: {subject_id:subject_id, iddata:iddata},
        success: function(data)
        {
             //alert(data);
             $("#chapter_id").html(data)

        }
        });
    }

 $("#chapter_id").change(function(){
  //alert($(this).find("option:selected").text());
    $("#subject_name").val($(this).find("option:selected").text());
    })

 $("#sub_id").change(function(){

    var subject_id =$(this).val();
   //alert(subject_id);

   $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>fetch_exam_chapter",
        data: {subject_id:subject_id},
        success: function(data)
        {
             //alert(data);
             $("#chapter_id").html(data)

        }
        });
    })

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
      url: '<?= base_url();?>exam_chapter_upload_image',
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
      url: '<?= base_url();?>exam_chapter_upload_video/',
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
    $('#addedVid').html('<video width="220" height="180px" controls><source src="<?=base_url();?>images/'+data+'" type="video/mp4"></video>');
	
	//'<img style="cursor:pointer;" height="200" src="<?=base_url();?>images/'+play_icon.png+'">');
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

	
    