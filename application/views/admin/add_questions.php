   <?php
	 $exam_id=@$_GET['exam_id'];
	 $subject_id=@$_GET['subject_id'];
	
   
   
	?>
	 <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row" >
              <div class="col-md-12 col-sm-12 col-xs-12">
                  
                  
<!--<div id="google_translate_element"></div>-->
<div id="google_translate_element"></div>
<!--<input type="button" onclick="googleTranslateElementInit();" value="click me" />-->
<!--<p>You can translate the content of this page by selecting a language in the input field.</p>-->

<!-- flag: you can choose language here: en, de, af etc. -->
<!--<input value="en" id="language"/>-->
<!--<button onclick="changeLanguageByButtonClick()">Translate</button>-->

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add <small>Question</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  
				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong> Question added successfully.
						  </div>
								<?php echo "<script>window.setTimeout(function(){window.location.href = '".base_url('add_questionbank')."';}, 2000);</script>"; }else { ?>
									  <div class="alert alert-danger">
										<a class="close" data-dismiss="alert">×</a>
										<strong>Oops!</strong> Please Try Again...
									  </div>     
							   <?php } } ?> 
                  <div class="x_content">
                    <br />
					<?php 				
					$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
					echo  form_open_multipart('add_question/', $attributes);
					?>
					<input type="hidden" id="amount" name="exam_id" class="form-control col-md-7 col-xs-12" value="<?=$exam_id?>">
					<input type="hidden" id="amount" name="subject_id" class="form-control col-md-7 col-xs-12" value="<?=$subject_id?>">
		                <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Question Type <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						   <select name="qtype" id="type"  class="form-control col-md-7" >
                                    <option value="">Select Type</option>
                                    <option value="radio">radio</option>
									<option value="checkbox">checkbox</option>
									<option value="blanks">blanks</option>
						   </select>
						</div>	
						</div> 
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Question<span class="required">*</span>
							</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<textarea rows="3" cols="50" class="form-control col-md-7" placeholder="Enter Question here..." name="question"> </textarea>
						</div>
						</div>
					
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Total No Answers <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						   <select name="totans" id="totans"  class="form-control col-md-7" >
                                    <option value="">Select No</option>
                                    <option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
                                    <option value="4">4</option>
									
						   </select>
						</div>	
						</div>
						<div id="answer_sethtml">
						</div>
					
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Total Correct Answers <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						   <select name="totcrans" id="totcrans"  class="form-control col-md-7" >
                                    <option value="">Select No</option>
                                    <option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
                                    <option value="4">4</option>
									
						   </select>
						</div>	
						</div>
						<div id="answer_car_sethtml">
						</div>
        <!-- Copy Fields -->
        
						
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Marks <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="number" id="amount" name="marks" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>
				       <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Negative Marks <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="amount" name="nagative_mark" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Time To Spend <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="number" id="amount" name="ttspend" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Difficulty Level <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						   <select name="diff_level" id="typeid"  class="form-control col-md-7" >
                                    <option value="">Select Type</option>
                                    <option value="easy">easy</option>
									<option value="medium">medium</option>
									<option value="hard">hard</option>
									
						   </select>
						</div>	
						</div>
					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Hint <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="name" name="hint" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>
					   <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Explation<span class="required">*</span>
							</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<textarea rows="3" cols="50" class="form-control col-md-7" name="explation" placeholder="Enter Answers here..."> </textarea>
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
            $(document).ready(function(){
               $("#totans").change(function(){
                   
                    $("#answer_sethtml").html("");
                    var no_answer = $(this).val();
                   for(var i=1; i<=no_answer; i++){
                      var prize_text =  get_prize_text(i);
                       $("#answer_sethtml").append('<div class="form-group profile_ed_f_rm"><label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Answer '+i+' </label><div class="col-md-9 col-sm-9 col-xs-12"><input type="text" class="form-control col-md-7" id="answer'+i+'" name="answer['+prize_text+']" placeholder="Enter Answer" required="required"></div><div>');
                   }
                    
               });
			   $("#totcrans").change(function(){
                   
                    $("#answer_car_sethtml").html("");
                    var no_answer = $(this).val();
                   for(var i=1; i<=no_answer; i++){
                      var prize_text =  get_prize_text(i);
                       $("#answer_car_sethtml").append('<div class="form-group profile_ed_f_rm"><label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Answer '+i+' </label><div class="col-md-9 col-sm-9 col-xs-12"><input type="text" class="form-control col-md-7" id="answer'+i+'" name="carect_answer['+prize_text+']" placeholder="Enter Correct Answer" required="required"></div><div>');
                   }
                    
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


function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, 'google_translate_element');
}

function changeLanguageByButtonClick() {
  var language = document.getElementById("language").value;
  var selectField = document.querySelector("#google_translate_element select");
  for(var i=0; i < selectField.children.length; i++){
    var option = selectField.children[i];
    // find desired langauge and change the former language of the hidden selection-field 
    if(option.value==language){
       selectField.selectedIndex = i;
       // trigger change event afterwards to make google-lib translate this side
       selectField.dispatchEvent(new Event('change'));
       break;
    }
  }
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 