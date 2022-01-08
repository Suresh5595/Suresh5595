<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Customer
                <small class="text-muted">Welcome to Customer List</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>            
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                   <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
									<th>State</th>
                                    <th>Contact</th>
                                    <th data-visible="false">GST No</th>
                                    <th data-visible="false">PAN No</th>
                                    <th>Status</th>
									<th data-visible="false">Address</th>
                                    <th data-visible="false">SPOC Name</th>
                                    <th data-visible="false">SPOC Email</th>
                                    <th data-visible="false">SPOC Designation</th>
                                    <th data-visible="false">SPOC Contact</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
							    <tr>
                                    <th>S.No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
									<th>State</th>
                                    <th>Contact</th>
                                    <th>GST No</th>
                                    <th>PAN No</th>
                                    <th>Status</th>
									<th>Address</th>
                                    <th>SPOC Name</th>
                                    <th>SPOC Email</th>
                                    <th>SPOC Designation</th>
                                    <th>SPOC Contact</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
							<?php if($customers){  ?>
								<?php foreach($customers as $key => $customer){ ?>
									<tr>
										<td><?php echo $key+1; ?></td>
										<td><?php echo $customer->name;?></td>
										<td><?php echo $customer->email;?></td>
										<td><?php echo get_val('state_name','state_id',$customer->state_id_fk,'rsm_state');?></td>
										<td><?php echo $customer->contact;?></td>
										<td><?php echo $customer->gst_no;?></td>
										<td><?php echo $customer->pan_no;?></td>
										<td>
											<?php 
											if($customer->status == 1){
												echo '<lable class="btn btn-success small-label">Active</label>';
											}else{
												echo '<lable class="btn btn-danger small-label">In-Active</label>';
											}
											?>
										</td>
										<td><?php echo $customer->address;?></td>
										<td><?php echo $customer->spoc_name;?></td>
										<td><?php echo $customer->spoc_email;?></td>
										<td><?php echo $customer->spoc_designation;?></td>
										<td><?php echo $customer->spoc_contact;?></td>
										<td>
											<a href="javascript:void(0);" id="edit_form"><span class="badge badge-success">EDIT</span></a>&numsp;
											<a href="javascript:void(0);" onclick="deleteRecord(<?php echo $customer->customer_id;?>)"><span class="badge badge-danger">DELETE</span></a>
										</td>
									</tr>
								<?php } ?>
							<?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
function deleteRecord(id){
	if (confirm('Are you sure you want to delete this item?')) {
		  $.ajax({
		  url:"<?php echo base_url();?>index.php/masters/customer_view/daleteRecord",
		  method:"POST",
		  data:'id='+id,
		  success:function(html){
		  window.location.reload();
		  }
		  });
	}
}
</script>
