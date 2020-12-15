<?php
//echo "<pre>";
//print_r($results);die;

?>

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
			
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Exam Chapter Video List</h2>
                    <div class="clearfix"></div>
                  </div>
          
           <?php
            if(isset($flash_message)){
               if($flash_message == TRUE)
              {
             ?>
             
              <div class="alert alert-success">
              <a class="close" data-dismiss="alert">×</a>
              <strong>Well done!</strong> Exam Chapter Updated successfully.
              </div>
                <?php }else { ?>
                    <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert">×</a>
                    <strong>Oops!</strong> Please Try Again...
                    </div>     
                 <?php } } ?> 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          <th class="c_clg">Chapter Name</th>
                          <!--<th class="c_clg">Description</th>-->
                          <th class="c_clg">image</th>
                           <th class="c_clg">Video</th>
                           <th class="c_clg">Class Name</th>
                            <th class="c_clg">Subject Name</th>
                            <th class="c_clg">Popular</th>
						  
                         <th style="width:223px;text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php 
					  foreach($results as $key=>$value)
					  {
					  
					  ?>
					  <?php
					  $count=$value['popular_video'];
					  ?>
                          <td><?php echo $value['video_title']; ?></td>
                          <!--<td><?php //echo $value['description']; ?></td>-->
                           <td><img src="<?php echo site_base_url();?>images/<?php echo $value['chapter_image']?>"  height="100px" width="200px"></td>
                           <td><video width="220" height="100px" controls>
                            <source src="<?php echo site_base_url();?>images/<?php echo $value['video_name']?>" type="video/mp4">
                            </video></td>
                           <td><?php echo $value['name']; ?></td>
                           <td><?php echo $value['subject_name']; ?></td>
                           
                            <td>
                     <label class="switch">
                      <input type="checkbox" id="toggle_<?php echo $value['chapter_id']; ?>"
                      <?php 
                      //$check_status= $value['popular_video'];
                      if( $value['popular_video'] =="1"){
                      ?>
                      checked
                      <?php
                      }else{
                      }?>
                      onclick="door(<?php echo $value['chapter_id']; ?>)" value="<?php echo $value['chapter_id']; ?>">
                      <span class="slider round"></span>
                    </label>
                    </td>
                          <td>
						   <div class="Action">
						    <a href="<?php echo base_url()?>edit_exam_chapter_video/<?php echo $value['chapter_id']; ?>"><span class="Action_icon_1"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
							<a href="<?=site_url("")?>delete_exam_chapter_video/<?php echo $value['chapter_id']?>"  onClick=" return confirm('Are You Sure to Delete order?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
						   </div>
						   </td>      
                  </tr>
					  <?php }?>
					  	
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
        <script>
 
function door($idd){
var checkBoxes=$("#toggle_"+$idd).prop("checked");
if(checkBoxes){
  var id1= $idd;
  //alert(id1);
 $.ajax
    ({ 
      type: "POST",
        url: "<?php echo base_url(); ?>updatepopular_video1",
        data: {po_id:id1},
        success: function(result)
           {
               if(result==1){
                  // alert("1");
               }
           }
    });
}
else{
    var id2=$idd;
     $.ajax
    ({ 
      type: "POST",
        url: "<?php echo base_url(); ?>updatepopular_video2",
        data: {po_id2:id2},
        success: function(result)
           {
              if(result==0){
                  //alert("0");
              }
               
           }
    });
}
 }
 
     </script>    