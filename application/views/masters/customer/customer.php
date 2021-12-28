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
                            
            </div>
        </div>
    </div>
    <div class="container-fluid">
	<form method="POST" onSubmit="return form_validate(custome_form);"action="<?php echo base_url();?>index.php/masters/customer/update" id="custome_form">
        <div class="row clearfix" id="form_content">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Create </strong>Customer</small> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="name" field_required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="email">
                                </div>
                            </div>
							<div class="col-sm-4">
                                 <select class="form-control show-tick">
                                    <option value="0">- State -</option>
									<?php if($states){ ?>
										<?php foreach($states as $state_val){ ?>
											<option value="<?php echo $state_val->state_id;?>"><?php echo $state_val->state_name;?></option>
										<?php } ?>
									<?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="contact">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Gst No">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Pan No">
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                 <select class="form-control show-tick">
                                    <option value="0">- Active -</option>
									<option value="1">-In-Active - </option>
                                </select>
                            </div>
							
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Address..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="SPOC name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="SPOC Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="SPOC Designation">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="SPOC contact">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <button type="submit" name="submit" class="btn btn-primary btn-round">Submit</button>
                                <button type="submit" name="reset" id="cancel_form" class="btn btn-default btn-round btn-simple">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</form>
        </div>
	</form>
    </div>
</section>

