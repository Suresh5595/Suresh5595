<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
    <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Machine
                <small class="text-muted">Welcome to Machine List</small>
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
                   <div class="body">
                        <table id="item_table" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th style="width:5px;">S.No.</th>
									<th>Machine Name</th>
                                    <th>Operation</th>
									<th>Category</th>
									<th>Make</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php if($results){ ?>
								<?php foreach($results as $key => $val){ ?>
									<tr>
										<td><?php echo $key+1;?></td>
										<td><?php echo $val->machine_name;?></td>
										<td><?php echo $val->operation;?></td>
										<td><?php echo $val->category;?></td>
										<td><?php echo $val->make;?></td>
										<td>
											<?php if($val->machine_status == 0) { ?>
												<lable class="btn btn-success small-label">Active</label>
											<?php }else{ ?>
												<lable class="btn btn-danger small-label">In-Active</label>
											<?php }?>
										</td>
										<td><a href="javascript:void(0);" onclick="edit(<?php echo $val->machine_id;?>)" ><span class="badge badge-info">EDIT</span></a>&numsp;<a href="javascript:void(0);" onclick="deleteRecord(<?php echo $val->machine_id;?>)"><span class="badge badge-danger">DELETE</span></a></td>
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
<!-- popup section -->
<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header" style="border-bottom-style: solid;border-bottom-width: 1px;padding-top: 10px;padding-left: 10px;padding-right: 10px;">
				<button style="margin-left: 0px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;padding-top: 0px;padding-left: 0px;padding-bottom: 0px;padding-right: 0px;top: 10px;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 style="font-size: 15px;color: #1fa7b2;margin-bottom: 10px;"><strong id="popup_title">ADD Machine</strong></h2>
			</div>

			<div class="modal-body">
			<form method="post" onSubmit="return form_validate();" id="machine_form" action="<?php echo base_url();?>index.php/masters/machine/update">
				<input type="hidden" name="hidden_id" value="0" id="hidden_id">
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>Machine Name</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="machine_name" name="machine_name">
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>Operation</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="operation" name="operation">
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-sm-12">
						<b>Category</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="category" name="category">
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>Make</b>
						<div class="form-group">
							<input type="text" class="form-control field_required" id="make" name="make">
						</div>
					</div>
				</div>
				
				<div class="row clearfix">
					<div class="col-sm-12">
						<b>Machine Status</b>
						<div class="form-group">
							<select class="form-control" name="machine_status" id="machine_status">
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
	$('#machine_form').find('.field_required').each(function(){
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
	$('#popup_title').html('EDIT MACHINE');
	$('#popup_btn').html('UPDATE');
	$('#hidden_id').val(0); 
	$('#machine_name').val('');
    $('#operation').val('');
	$('#category').val('');
	$('#make').val('');
    $('#machine_status').val(0);
	var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/masters/machine/edit",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
         $('#myModal2').modal({ backdrop: 'static',keyboard: true,show: true });
         $('#hidden_id').val(data.machine_id); 
		 $('#machine_name').val(data.machine_name);
		 $('#operation').val(data.operation);
		 $('#category').val(data.category);
		 $('#make').val(data.make);
         $('#machine_status').val(data.machine_status);
       }
     });
}

function addRow(){
	$('#popup_title').html('');
	$('#popup_btn').html('');
	$('#popup_title').html('ADD MACHINE');
	$('#popup_btn').html('SAVE');
	$('#hidden_id').val(0); 
	$('#machine_name').val('');
    $('#operation').val('');
	$('#category').val('');
	$('#make').val('');
    $('#machine_status').val(0);
	$('#myModal2').modal({ backdrop: 'static',keyboard: true,show: true });
}

function deleteRecord(id){
	var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/masters/machine/daleteRecord",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
		location.reload(); 
    }
    });
}

</script>
