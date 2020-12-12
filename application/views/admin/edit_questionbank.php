<?php
$id=$this->uri->segment(2);
$subject_id=$this->uri->segment(3);
$exam_id=$this->uri->segment(4);
?>
        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit <small>Questionbank</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  
				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong> Questionbank Edited successfully.
						  </div>
								<?php }else { ?>
									  <div class="alert alert-danger">
										<a class="close" data-dismiss="alert">×</a>
										<strong>Oops!</strong> Please Try Again...
									  </div>     
							   <?php } } ?> 
                  <div class="x_content">
                    <br />
					<?php 				
					$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
					echo  form_open_multipart('edit_questionbank/'.$id.'/'.$subject_id.'/'.$exam_id, $attributes);
					?>
		                   
		              
                           <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Question Type <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						   <select name="qtype" id="type"  class="form-control col-md-7" >
                                    <option value="">Select Type</option>
                                    <option value="radio" <?php if($results[0]['question_type']=='radio'){echo'selected';}?>>radio</option>
									<option value="checkbox" <?php if($results[0]['question_type']=='checkbox'){echo'selected';}?>>checkbox</option>
									<option value="blanks" <?php if($results[0]['question_type']=='blanks'){echo'selected';}?>>blanks</option>
						   </select>
						</div>	
						</div> 
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Question<span >*</span>
							</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<textarea rows="3" cols="50" class="form-control col-md-7" placeholder="Enter Question here..." name="question"><?=$results[0]['question'];?> </textarea>
						</div>
						</div>
					
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Total No Answers <span >*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						   <select name="totans" id="totans"  class="form-control col-md-7" >
                                    <option value="">Select No</option>
                                    <option value="1" <?php if($results[0]['total_answers']=='1'){echo'selected';}?>>1</option>
									<option value="2" <?php if($results[0]['total_answers']=='2'){echo'selected';}?>>2</option>
									<option value="3" <?php if($results[0]['total_answers']=='3'){echo'selected';}?>>3</option>
                                    <option value="4" <?php if($results[0]['total_answers']=='4'){echo'selected';}?>>4</option>
									
						   </select>
						</div>	
						</div>
						<div id="answer_sethtml">
						</div>
					
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Total Correct Answers <span >*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						   <select name="totcrans" id="totcrans"  class="form-control col-md-7" >
                                    <option value="">Select No</option>
                                    <option value="1" <?php if($results[0]['total_correct_answers']=='1'){echo'selected';}?>>1</option>
									<option value="2" <?php if($results[0]['total_correct_answers']=='2'){echo'selected';}?>>2</option>
									<option value="3" <?php if($results[0]['total_correct_answers']=='3'){echo'selected';}?>>3</option>
                                    <option value="4" <?php if($results[0]['total_correct_answers']=='4'){echo'selected';}?>>4</option>
									
						   </select>
						</div>	
						</div>
						<div id="answer_car_sethtml">
						</div>
        <!-- Copy Fields -->
        
						
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Marks <span >*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="number" id="amount" name="marks" required="required" class="form-control col-md-7 col-xs-12" value="<?=$results[0]['marks'];?>">
						</div>
				       </div>
				       <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Negative Marks <span >*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="amount" name="nagative_mark" required="required" class="form-control col-md-7 col-xs-12" value="<?=$results[0]['nagative_mark'];?>">
						</div>
				       </div>
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Time To Spend <span >*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="number" id="amount" name="ttspend" required="required" class="form-control col-md-7 col-xs-12" value="<?=$results[0]['time_to_spend'];?>">
						</div>
				       </div>
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Difficulty Level <span >*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						   <select name="diff_level" id="typeid"  class="form-control col-md-7" >
                                    <option value="">Select Type</option>
                                    <option value="easy" <?php if($results[0]['difficulty_level']=='easy'){echo'selected';}?>>easy</option>
									<option value="medium" <?php if($results[0]['difficulty_level']=='medium'){echo'selected';}?>>medium</option>
									<option value="hard" <?php if($results[0]['difficulty_level']=='hard'){echo'selected';}?>>hard</option>
									
						   </select>
						</div>	
						</div>
					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Hint <span >*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="name" name="hint" class="form-control col-md-7 col-xs-12" value="<?=$results[0]['hint'];?>">
						</div>
				       </div>
					   <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Explation<span >*</span>
							</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<textarea rows="3" cols="50" class="form-control col-md-7" name="explation" placeholder="Enter Answers here..."><?=$results[0]['explanation'];?> </textarea>
						</div>
						</div>
	             <div class="ln_solid"></div>
                      <div class="form-group profile_ed_f_rm">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 save_pr_v">
                          <input type="submit" class="btn btn-success sve_bot" value="Save">
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
	 var global_answers =[];
	 var global_car_answers =[];

            $(document).ready(function(){
            	
                var no_ans='<?=$results[0]['total_answers']?>';
				var answer='<?=$results[0]['answers']?>';
				global_answers ='<?=$results[0]['answers']?>';
				var no_corect_ans='<?=$results[0]['total_correct_answers']?>';
				var corect_answer='<?=$results[0]['correct_answers']?>';
				
				var obj = JSON.parse(answer);
				var corect_obj = JSON.parse(corect_answer);
			    global_answers = JSON.parse(answer);
			    global_car_answers=JSON.parse(corect_answer);
				//alert(global_car_answers.option1);
                
				$("#answer_sethtml").html("");
				var i=1;
				$.each(obj, function (key, val) {
                 
				 
                    //for(var i=1; i<=no_ans; i++){
                      var prize_text =  get_prize_text(i);
                       $("#answer_sethtml").append('<div class="form-group profile_ed_f_rm"><label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Answer '+i+' </label><div class="col-md-9 col-sm-9 col-xs-12"><input type="text" class="form-control col-md-7" id="answer'+i+'" name="answer['+prize_text+']" value="'+val+'" placeholder="Enter Answer" ></div><div>');
                    i++;
					//alert(i);
					//}
				});


                
               $("#totans").change(function(){
                   
                    $("#answer_sethtml").html("");
                    var no_answer = $(this).val();
                   for(var i=1; i<=no_answer; i++){
                      var prize_text =  get_prize_text(i);
                       $("#answer_sethtml").append('<div class="form-group profile_ed_f_rm"><label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Answer '+i+' </label><div class="col-md-9 col-sm-9 col-xs-12"><input id="new_ans_'+i+'" type="text" class="form-control col-md-7"  name="answer['+prize_text+']" placeholder="Enter Answer" ></div><div>');
                   }
                  var b = 0;

                   $.each(global_answers,function(k,v){ b++;
					$('#new_ans_'+b).val(v);
				})
                    
               });
			   $("#answer_car_sethtml").html("");
			   $.each(corect_obj, function (key, val) {
                 
				 var i=1;
                    //for(var i=1; i<=no_ans; i++){
                      var prize_text =  get_prize_text(i);
					  $("#answer_car_sethtml").append('<div class="form-group profile_ed_f_rm"><label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Answer '+i+' </label><div class="col-md-9 col-sm-9 col-xs-12"><input type="text" class="form-control col-md-7" id="answer'+i+'" name="carect_answer['+prize_text+']" value="'+val+'" placeholder="Enter Correct Answer" ></div><div>');
                    i++;
					//alert(i);
					//}
				});


			   $("#totcrans").change(function(){
                   
                    $("#answer_car_sethtml").html("");
                    var no_answer = $(this).val();
                   for(var i=1; i<=no_answer; i++){
                      var prize_text =  get_prize_text(i);
                       $("#answer_car_sethtml").append('<div class="form-group profile_ed_f_rm"><label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Answer '+i+' </label><div class="col-md-9 col-sm-9 col-xs-12"><input type="text" class="form-control col-md-7" id="answer_car'+i+'" name="carect_answer['+prize_text+']" placeholder="Enter Correct Answer" ></div><div>');
                   }
                   var c = 0;
               
                   $.each(global_car_answers,function(k1,v1){ c++;
                   	
					$('#answer_car'+c).val(v1);
				})
                    
               });
                
               
               function get_prize_text(i){
                   if(i==1){
                       return "option1";
                   }else if(i==2){
                       return "option2";
                   }else if(i==3){
                       return "option3";
                   }else if(i==4){
                       return "option4";
                   }else if(i==5){
                       return "option5";
                   }
               }
            });
            
            
</script>

 