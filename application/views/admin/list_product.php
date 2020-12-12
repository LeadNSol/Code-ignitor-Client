<?php
//echo"<pre>";
//print_r($allbrand);

 ?>
<div class="right_col" role="main">
<?php
      //echo form_label('Name:', 'search_string');
      //echo form_input('search_string');

	 //echo form_dropdown('main_category', $get_cateory,'class="span2"');

	// echo "<pre>"; print_r($main_category); exit;
	  //echo form_label('Category :', 'main_category');
	  ?>
	             <td><b>Name:</b></td>
	            <td><input type="text" name="name" value=""></td>
                <div class="col-md-6 col-sm-6 col-xs-6">
							<td><b>Category:</b></td>
						      <select name="main_category" required="required">
							  <option value="">Select</option>
							  <?php foreach($main_category as $key=>$val){?>
							    <option value="<?php echo @$val['main_cat_id'] ?>"><?php echo $val['name'] ?></option>
							  <?php }?>
                           </select>
						</div>
						<?php $data_submit = array('name' => 'mysubmit', 'class' => 'btn btn-primary', 'value' => 'Search');
						echo form_submit($data_submit);

						?>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product list</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>
                          <th class="c_clg">Product name</th>
						              <th class="c_clg">Category</th>
						              <th class="c_clg">Time</th>
                          <th class="c_clg">Brand</th>
						             <th class="c_clg">Price</th>
                         <th class="c_clg">Image</th>
                         <th style="width:223px;text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
					  foreach($results as $key=>$value)
					  {
					  if($value['cat_id']!=0)
					  {
					  ?>
                           <tr id="row<?php echo $value['product_id']?>">
                           <td><?php echo $value['name']; ?></td>
						    <td>

          <?php

          foreach ($category as $key => $catval) {
           if($catval['main_cat_id']==$value['cat_id'])
           echo $catval['name'];

          }



          ?>


                </td>
                <td><?php echo $value['time1'];?></td>
						   <td>
                 <?php
                 foreach ($allbrand as $key => $brandval) {
                  if($brandval['id']==$value['brand'])
                  echo $brandval['brandname'];

                 }


                 ?>

               </td>
						   <td><?php echo $value['price']; ?></td>
                <td>
                  <?php
                  $jsondata = $value['product_image'];
                  $arr = json_decode($jsondata, true);
                //  print_r($arr);

                ?>
            <img class="img-responsive img-thumbnail"src="<?php echo site_base_url();?>uploads/<?php echo @$arr[0]?>" style="width: 157px;height: 97px;">
                </td>
						 <td>
                        <div class="Action">
						    <a href="<?php echo base_url()?>edit_product/<?php echo $value['product_id']; ?>">  <i class="fa fa-pencil" aria-hidden="true"></i></a>
							<a href="<?=site_url("")?>delete_product/<?=$value['product_id']?>"  onClick=" return confirm('Are You Sure to Delete order?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>



						   </div>
						  </td>

                        </tr>
					  <?php }}?>
                      </tbody>
                    </table>
                  </div>
				  <ul class="pagination">
                <li><a href="#">1</a></li>
               <li class="active"><a href="#">2</a></li>
               <li><a href="#">3</a></li>
               <li><a href="#">4</a></li>
               <li><a href="#">5</a></li>
                   </ul>



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
