
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
      
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Questionbank</h2>
                    <div class="clearfix"></div>
                  </div>
          
           <?php
            if(isset($flash_message)){
               if($flash_message == TRUE)
              {
             ?>
             
              <div class="alert alert-success">
              <a class="close" data-dismiss="alert">×</a>
              <strong>Well done!</strong>  Question Updated Sucessfully successfully.
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
                    
                    <table id="datatable-buttons" class="display table table-striped table-bordered dataTable c_clg">
                      <thead> 
                        <!-- display table table-striped table-bordered dataTable no-footer  -->
                        <tr>                      
                          <th class="c_clg">Exam Name</th>
                          <th class="c_clg">subject</th>
                          <th class="c_clg">Question Type</th>
                          <th class="c_clg">Marks</th>
                          <th class="c_clg">Difficulty Level</th>
                         <th style="width:100px;text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
            <?php 
            foreach($results as $key=>$value)
            {
			//print_r($data);exit;
            ?>          
                        <tr>  
                          <td><?php echo $value['eaxm_name']; ?></td>
                          <td><?php echo $value['subject_name']; ?></td>
                          <td><?php echo $value['question_type']; ?></td>
                          <td><?php echo $value['marks']; ?></td>
                          <td><?php echo $value['difficulty_level']; ?></td>
                          <td>
               <div class="Action">
                <a href="<?php echo base_url()?>edit_questionbank/<?php echo $value['id']; ?>/<?php echo $value['subject_id']; ?>/<?php echo $value['exam_id']; ?>"><span class="Action_icon_1"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
              <a href="<?=site_url("")?>delete_questionbank/<?php echo $value['id']?>"  onClick=" return confirm('Are You Sure to Delete this Item?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
      
       