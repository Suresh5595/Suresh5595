<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
    <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Supplier
                <small class="text-muted">Welcome to Supplier List</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" onclick="addRow();" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>            
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                   <div class="body" style="overflow-x:scroll">
                        <table id="item_table" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th style="width:5px;">S.No.</th>
                                    <th>Name</th>
									<th>Email</th>
                                    <th>Contact</th>
									<th>GST No.</th>
									<th>PAN No.</th>
									<th>State</th>
									<th>Address</th>
									<th>SPOC Name</th>
									<th>SPOC Email</th>
									<th>SPOC Designation</th>
									<th>SPOC Contact</th>
									<th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popup section -->
<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header" style="border-bottom-style: solid;border-bottom-width: 1px;padding-top: 10px;padding-left: 10px;padding-right: 10px;">
				<button style="margin-left: 0px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;padding-top: 0px;padding-left: 0px;padding-bottom: 0px;padding-right: 0px;top: 10px;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 style="font-size: 15px;color: #1fa7b2;margin-bottom: 10px;"><strong id="popup_title">ADD Department</strong></h2>
			</div>

			<div class="modal-body">
			<form method="post" onSubmit="return form_validate();" id="supplier_form" action="<?php echo base_url();?>index.php/masters/supplier/update">
				<input type="hidden" name="hidden_id" value="0" id="hidden_id">
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>Name</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="supplier_name" name="supplier_name">
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>Email</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="supplier_mail" name="supplier_mail">
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>Contact</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="supplier_contact" name="supplier_contact">
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>GST No.</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="supplier_gst_no" name="supplier_gst_no">
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>PAN No.</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="supplier_pan_no" name="supplier_pan_no">
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-sm-12">
						<b>Supplier State</b>
						<div class="form-group">
							<select class="form-control" name="supplier_state" id="supplier_state">
								<option value="">-Select-</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-sm-12">
						<b>Address</b>
						<div class="form-group">
							<textarea class="form-control field_required" id="supplier_address" name="supplier_address"></textarea>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-sm-12">
						<b>SPOC Name</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="supplier_spoc_name" name="supplier_spoc_name">
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>SPOC Mail</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="supplier_spoc_mail" name="supplier_spoc_mail">
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>SPOC Designation</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="supplier_spoc_designation" name="supplier_spoc_designation">
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-sm-12">
						<b>SPOC Contact</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="supplier_spoc_contact" name="supplier_spoc_contact">
						</div>
					</div>
				</div>
				
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>Supplier Status</b>
						<div class="form-group">
							<select class="form-control" name="supplier_status" id="supplier_status">
								<option value="0">Active</option>
								<option value="1">In-Active</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" id="popup_btn" class="btn btn-primary">Save</button>
			</div>

		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->
<script>
function form_validate(){ 
    var flag = true;
	$('#department_form').find('.field_required').each(function(){
		if($(this).val() == ''){
			 $(this).parent('div').addClass('has-danger');
			 $(this).addClass('forn-control-danger');
			 flag = false;
	    }else{
			$(this).parent('div').removeClass('has-danger');
			 $(this).removeClass('forn-control-danger');
		}
	});
	return flag;
}

function edit(id){
	$('#popup_title').html('');
	$('#popup_btn').html('');
	$('#popup_title').html('EDIT DEPARTMENT');
	$('#popup_btn').html('UPDATE');
	$('#hidden_id').val(0); 
    $('#department_name').val('');
    $('#department_status').val(0);
	var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/masters/department/edit",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
         $('#myModal2').modal({ backdrop: 'static',keyboard: true,show: true });
         $('#hidden_id').val(data.dep_id); 
         $('#department_name').val(data.dep_name);
         $('#department_status').val(data.dep_status);
       }
     });
}

function addRow(){
	$('#popup_title').html('');
	$('#popup_btn').html('');
	$('#popup_title').html('ADD DEPARTMENT');
	$('#popup_btn').html('SAVE');
	$('#hidden_id').val(0); 
    $('#department_name').val('');
    $('#department_status').val(0);
	$('#myModal2').modal({ backdrop: 'static',keyboard: true,show: true });
}

function deleteRecord(id){
	var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/masters/department/daleteRecord",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
		location.reload(); 
    }
    });
}

</script>
