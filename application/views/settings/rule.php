<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
	<div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Rule
                <small class="text-muted">Welcome to Rule List</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" id="get_form" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button> 
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" id="close_form" type="button" style="display:none;">
                        <i class="zmdi zmdi-minus"></i>
                    </button>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
		<div class="row clearfix" id="form_content" style="display:none;">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h2><strong>Create </strong>Rule</small> </h2>
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control show-tick">
                                    <option value="">- Status -</option>
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                <button type="submit" id="cancel_form" class="btn btn-default btn-round btn-simple">Cancel</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                   <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
							    <tr>
                                    <th>S.No.</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>TEST</td>
                                    <td>Active</td>
                                    <td>
										<a href="javascript:void(0);" id="edit_form"><span class="badge badge-success">EDIT</span></a>&numsp;
										<a href="javascript:void(0);"><span class="badge badge-danger">DELETE</span></a>
									</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$('#get_form').click(function(){
    $('#form_content').css('display','block');
    $('#get_form').css('display','none');
    $('#close_form').css('display','block');
    
});
$('#edit_form').click(function(){
    $('#form_content').css('display','block');
   $('#get_form').css('display','none');
    $('#close_form').css('display','block');
   
});
$('#cancel_form').click(function(){
    $('#form_content').css('display','none');
    $('#close_form').css('display','none');
    $('#get_form').css('display','block');
   
});
$('#close_form').click(function(){
    $('#form_content').css('display','none');
    $('#close_form').css('display','none');
    $('#get_form').css('display','block');
});
</script>
