
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
      
                <div class="x_panel">
                  <div class="x_title">
                    <h2><button>Subject Subsrciption</button></h2><br>
                    <div class="clearfix"></div>
                  </div>
          
           <?php
            if(isset($flash_message)){
               if($flash_message == TRUE)
              {
             ?>
             
              <div class="alert alert-success">
              <a class="close" data-dismiss="alert">×</a>
              <strong>Well done!</strong>  Subscription Deleted Sucessfully.
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
                    
                    <table id="datatable-buttons" class="display table table-striped table-bordered c_clg dom-jQuery-events">
                      <thead>
                        <tr>
                           <th class="c_clg">#</th>                       
                          <th class="c_clg">User</th>
                          <th class="c_clg">Email</th>
                           <th class="c_clg">Class</th>
                          <th class="c_clg">Order_id</th>
                           <th class="c_clg">Subject</th>
                              <th class="c_clg">Price</th>
                               <th class="c_clg">Start Date</th>
                                <th class="c_clg">End Date</th>
                              <th class="c_clg">Action</th>
                        </tr>
                      </thead>
                      <tbody>
            <?php 
            $i=1;
            foreach($results as $key=>$value)
            {
            
            ?>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $value['first_name']; ?></td>
                            <td><?php echo $value['email']; ?></td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['order_id']; ?></td>
                            <td><?php echo $value['subject_name']; ?></td>
                            <td><?php echo $value['amount']; ?></td>
                            <td><?php echo $value['start_date']; ?></td>
                            <td><?php echo $value['end_date']; ?></td>
                                
                            <td>
                                <button type="button" class="btn btn-sm btn-success" onclick="up_subsdate('<?php echo $value['subject_subs_id']?>')" data-toggle="modal" data-target="#exampleModal2"><i class="fa fa-pencil" aria-hidden="true"></i></button>  
                                <a href="<?=site_url("")?>delete_subscription/<?php echo $value['subject_subs_id']?>"  onClick=" return confirm('Are You Sure to Delete?')"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                            </td>
                        </tr>
            <?php $i++; }?>
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

<!--edit modal start-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Update Date</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="m_body">
        <div class=row>
          <div class="form-group col-md-12">
            <label for="examination" class="col-form-label">Start Date</label>
            <input type="text" class="form-control" value="" name="start_date" id="start_date" style="margin: 0px auto">
          </div>
        </div>
        <div class=row>
          <div class="form-group col-md-12">
            <label for="email" class="col-form-label">End Date</label>
            <input type="text" class="form-control" name="end_date" id="end_date" style="margin: 0px auto">
          </div>
        </div>
        <input type="hidden" id="id" name="id" value="">
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-outline-success" onclick="save_subs()" data-dismiss="modal" id="edit_submit" >Update</button>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>


<!--edit modal end here-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
<script>
$("#start_date").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d"
});
$("#end_date").flatpickr({
    enableTime: false,
    dateFormat: "Y-m-d"
});

</script>
<script>
    function up_subsdate(id){
      $('#id').val(id); 
    }
    
    function save_subs(){
      var id=$('#id').val();
      var start_date=$('#start_date').val();
      var end_date=$('#end_date').val();
      if(start_date !="" && end_date !="" ){
         $.ajax({
     url: "<?php echo base_url(); ?>update_subsdates",
     type: "POST",
     data: {id:id, start_date:start_date, end_date:end_date},
     success: function(data)
     {
         if(data==1){
             alert("Updated successfully");
         }else{
             alert("Something is wrontg");
         }
         
         location.reload();
     }
     });  
      }else{
          alert("Please! Select Date");
      }
    }
    

</script>
       