<?php
  $id=$this->uri->segment(2);
 $car_details_byid[0]['model_name'];
 $model_id=$car_details_byid[0]['model_name'];
 $modal_name=$this->product_module->get_modelnamebyid($model_id);
 $specification=$car_details_byid[0]['specification'];
 $car_specification= json_decode($specification,true);
			
 ?>
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
			
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modal Name: <?php echo $modal_name[0]['car_model_name'];?></h2>
                    <h2 style=" float: right;">Car Name: <?php echo $car_specification['car_name'];?></h2>
                  <?php   //echo"<pre>";
                //  print_r($car_exterior_image);exit;
				  ?>
 
                    <div class="clearfix"></div>
                  </div>
				  
                  <div class="x_content">
                    
                    <table id="datatable-buttons1" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          <th >Exterior Images</th>
                        
                         <th style="width:223px;text-align: center;">select image</th> 
						 
						 <th style="width:223px;text-align: center;">update image</th>
                        </tr>
                      </thead>
                      <tbody>			 
                          <tr id="row">
						   <td>Exterior image1: 
						   <?php if($car_exterior_image[0]['exterior_image1']==''){?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/noimagefound.jpg" height="100px" width="150px">
						   <?php }else{?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/<?php echo $car_exterior_image[0]['exterior_image1'];?>" height="100px" width="200px">
						   <?php }?>
						   </td>
						   <?php 				
						$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
						echo  form_open_multipart('more_car_images/'.$id.'/exterior_image1/1', $attributes);
						?>
                          <td><input type="file" name="exterior_image1" required></td>
						  <td><input type="submit" value="update" class="btn btn-danger"></td>
                         <?php echo form_close(); ?>
                        </tr>
					<tr id="row">
						   <td>Exterior image2:
						   <?php if($car_exterior_image[0]['exterior_image2']==''){?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/noimagefound.jpg" height="100px" width="150px">
						   <?php }else{?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/<?php echo $car_exterior_image[0]['exterior_image2'];?>" height="100px" width="200px">
						   <?php }?></td>
                           <?php 				
						$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
						echo  form_open_multipart('more_car_images/'.$id.'/exterior_image2/1', $attributes);
						?>
                          <td><input type="file" name="exterior_image2" required></td>
						  <td><input type="submit" value="update" class="btn btn-danger"></td>
                         <?php echo form_close(); ?>
                        
                        </tr>
						<tr id="row">
						   <td>Exterior image3: <?php if($car_exterior_image[0]['exterior_image3']==''){?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/noimagefound.jpg" height="100px" width="150px">
						   <?php }else{?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/<?php echo $car_exterior_image[0]['exterior_image3'];?>" height="100px" width="200px">
						   <?php }?></td>
                          <?php 				
						$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
						echo  form_open_multipart('more_car_images/'.$id.'/exterior_image3/1', $attributes);
						?>
                          <td><input type="file" name="exterior_image3" required></td>
						  <td><input type="submit" value="update" class="btn btn-danger"></td>
                         <?php echo form_close(); ?>
                        
                        </tr>
						<tr id="row">
						   <td>Exterior image4:<?php if($car_exterior_image[0]['exterior_image4']==''){?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/noimagefound.jpg" height="100px" width="150px">
						   <?php }else{?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/<?php echo $car_exterior_image[0]['exterior_image4'];?>" height="100px" width="200px">
						   <?php }?></td>
                          <?php 				
						$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
						echo  form_open_multipart('more_car_images/'.$id.'/exterior_image4/1', $attributes);
						?>
                          <td><input type="file" name="exterior_image4" required></td>
						  <td><input type="submit" value="update" class="btn btn-danger"></td>
                         <?php echo form_close(); ?>
                        
                        </tr>
						<tr id="row">
						   <td>Exterior image5:<?php if($car_exterior_image[0]['exterior_image5']==''){?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/noimagefound.jpg" height="100px" width="150px">
						   <?php }else{?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/<?php echo $car_exterior_image[0]['exterior_image5'];?>" height="100px" width="200px">
						   <?php }?></td>
                              <?php 				
						$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
						echo  form_open_multipart('more_car_images/'.$id.'/exterior_image5/1', $attributes);
						?>
                          <td><input type="file" name="exterior_image5" required></td>
						  <td><input type="submit" value="update" class="btn btn-danger"></td>
                         <?php echo form_close(); ?>
                        
                        </tr>
                      </tbody>
                    </table>
                  </div>
				  
				  <div class="x_content">
                    
                    <table id="datatable-buttons1" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          <th >Car Interior Images</th>
                        
                          <th style="width:223px;text-align: center;">select image</th> 
						 
						 <th style="width:223px;text-align: center;">update image</th>
                        </tr>
                      </thead>
                      <tbody>
					 
                          <tr id="row">
						   <td>Interior Images1: <?php if($car_interior_image[0]['Interior_image1']==''){?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/noimagefound.jpg" height="100px" width="150px">
						   <?php }else{?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/<?php echo $car_interior_image[0]['Interior_image1'];?>" height="100px" width="200px">
						   <?php }?></td>
						    <?php 				
						$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
						echo  form_open_multipart('more_car_images/'.$id.'/Interior_image1/2', $attributes);
						?>
                          <td><input type="file" name="Interior_image1" required></td>
						  <td><input type="submit" value="update" class="btn btn-danger"></td>
                         <?php echo form_close(); ?>
                        
                        </tr>
					   <tr id="row">
						   <td>Interior Images2: <?php if($car_interior_image[0]['Interior_image2']==''){?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/noimagefound.jpg" height="100px" width="150px">
						   <?php }else{?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/<?php echo $car_interior_image[0]['Interior_image2'];?>" height="100px" width="200px">
						   <?php }?></td>
						      <?php 				
						$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
						echo  form_open_multipart('more_car_images/'.$id.'/Interior_image2/2', $attributes);
						?>
                          <td><input type="file" name="Interior_image2" required></td>
						  <td><input type="submit" value="update" class="btn btn-danger"></td>
                         <?php echo form_close(); ?>
                        </tr>
						<tr id="row">
						   <td>Interior Images3:<?php if($car_interior_image[0]['Interior_image3']==''){?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/noimagefound.jpg" height="100px" width="150px">
						   <?php }else{?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/<?php echo $car_interior_image[0]['Interior_image3'];?>" height="100px" width="200px">
						   <?php }?></td>
						      <?php 				
						$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
						echo  form_open_multipart('more_car_images/'.$id.'/Interior_image3/2', $attributes);
						?>
                          <td><input type="file" name="Interior_image3" required></td>
						  <td><input type="submit" value="update" class="btn btn-danger"></td>
                         <?php echo form_close(); ?>
                        </tr>
						<tr id="row">
						   <td>Interior Images4: <?php if($car_interior_image[0]['Interior_image4']==''){?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/noimagefound.jpg" height="100px" width="150px">
						   <?php }else{?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/<?php echo $car_interior_image[0]['Interior_image4'];?>" height="100px" width="200px">
						   <?php }?></td>
						       <?php 				
						$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
						echo  form_open_multipart('more_car_images/'.$id.'/Interior_image4/2', $attributes);
						?>
                          <td><input type="file" name="Interior_image4" required></td>
						  <td><input type="submit" value="update" class="btn btn-danger"></td>
                         <?php echo form_close(); ?>
                        </tr>
						<tr id="row">
						   <td>Interior Images5: <?php if($car_interior_image[0]['Interior_image5']==''){?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/noimagefound.jpg" height="100px" width="150px">
						   <?php }else{?>
						   <img src="<?php echo site_base_url()?>uploads/car_image/<?php echo $car_interior_image[0]['Interior_image5'];?>" height="100px" width="200px">
						   <?php }?></td>
						       <?php 				
						$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
						echo  form_open_multipart('more_car_images/'.$id.'/Interior_image5/2', $attributes);
						?>
                          <td><input type="file" name="Interior_image5" required></td>
						  <td><input type="submit" value="update" class="btn btn-danger"></td>
                         <?php echo form_close(); ?>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
          
        </div>
          
        </div>
		
		
		
		 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md" style="width:450px;">
    <div class="modal-content modl_cntnt">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
            <h4 class="modal-title">Are you sure you want to delete this Item? </h4>
        </div>
			<!--<div class="modal-body mb_b">
			</div>-->
	  <div class="modal-footer" style="margin-top:0;">
	  <input type="hidden" id="de_userid">
          <button type="button" class="btn btn-default ok_board_pop" id="delete_setuser">Yes</button>
          <button type="button" class="btn btn-default ok_board_pop" data-dismiss="modal">No</button>
         
		</div>
       
      </div>
    </div>
  </div>
        <!-- /page content -->

        <!-- footer content -->
       