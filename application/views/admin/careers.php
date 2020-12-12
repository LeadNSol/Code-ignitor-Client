

<body>
 

<section class="career page-section-ptb">
<div class="breadcrumb-wrapper" style="
    margin-top: -46px;
    margin-bottom: 46px;
">
			
				<div class="container">

					<div class="" style="text-align: center;">
					
						
							<h2 class="page-title">Career</h2>
					
						
					

					</div>
					
				</div>

			</div>
			
			
  <div class="container">
   
		
    <div class="row">
     <div class="col-lg-12 col-md-12">
        <img class="img-responsive center-block" src="<?php echo base_url()?>images/01.jpg" alt="" style="padding-bottom:50px">
        <div class="career-info">
          <h5>It's very important to us that we find the right people, so we've created a step-by-step process that will help us get to know each other and work together to match your interests and skills with the right opportunities. </h5>
        
        
         
		 
		 
		 	<div class="">	

			
			
					<div class="row">
                    <div class="col-md-6 margt51">
					   
					<h2 class="take_service">POST DETAILS</h2>
					
					
					
					<?php foreach($get_job_list as $key=>$val){?>
					
					<ol type="1">
					<li><h5> &#9673; <?php echo $val['name']?></h5></li>
					</ol>
					
					
					
					<ul class="list-style-1">
					<li>
					<span style="font-size: 20px;">&#x270D;  </span> 
					
					<?php echo $val['description']?>
					
					</li>
					
					</ul>
					<?php }?>	
					
				
					</div>					
						<div class="col-sm-6 service_booking">
							<div class="featured-header-most-top">
								<h5><span>Apply Online</span></h5>
								<?php 				
					$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
					echo  form_open_multipart('careers/', $attributes);
					?>
								
				 <div class="">
								
				  <label for="form_name" class="label_serverbooking">Your Name <span class="font10 text-danger">(required)</span></label>
				  <div class="form-group">
					<input type="text" class="form-control book_service_form" id="pwd" placeholder="Name"value=""required name="name">
				  </div>
				  <label for="form_name" class="label_serverbooking">Email Id <span class="font10 text-danger">(required)</span></label>
				   <div class="form-group">
					<input type="text" class="form-control book_service_form" id="pwd" placeholder="Email Id"value=""required name="email">
				  </div>
				  <label for="form_name" class="label_serverbooking">Contact Number <span class="font10 text-danger">(required)</span></label>
				  <div class="form-group">
					<input type="text" class="form-control book_service_form" id="pwd" placeholder="Contact Number"value=""required name="phone">
				  </div>
				  
				  <label for="form_name" class="label_serverbooking">Applied post <span class="font10 text-danger">(required)</span></label>
				  <div class="form-group">
					<select class="form-control book_service_form" id=""required name="post">
					<option class="service_center">Choose  Post</option>
					<?php foreach($get_job_list as $key=>$val){?>
					<option class="service_center" value="<?php echo $val['id']?>"><?php echo $val['name']?></option>
					<?php }?>			
					</select>
				 </div>
				 
				  
				  
				           <div class="">
							<label  for="form_name" class="label_serverbooking">Upload C.V.<span class="font10 text-danger">(required) .pdf,.dec,.docx</span></label>
							<div class="form-group">
								
							 <input type="file" id="offer_image" class="form-control col-md-7 col-xs-12" name="gallery_image" value=""required >
							</div>
						  </div>
				 
				 
				 
				    
				  </div>
				 
				  
				 
				  <button type="submit" class="btn btn-default service_btn">CONTACT NOW</button>
				<?php echo form_close(); ?>
							</div>
						
						</div>			
					</div>

			</div>
		 
		 
		 
		 
		 
		 
        </div>
      </div>
     </div>
   </div>
</section>
</body>


