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
        <div class="row clearfix" id="form_content">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Create </strong>Customer</small> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="contact">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Gst No">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Pan No">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                 <select class="form-control show-tick">
                                    <option value="">- State -</option>
                                    <option value="tamilnadu">Tamilnadu</option>
                                    <option value="karnataka">Karnataka</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Address..."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="checkbox" style="padding-top: 100px;">
                                    <input id="status" type="checkbox">
                                    <label for="status">
                                            Status
                                    </label>
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
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                <button type="submit" id="cancel_form" class="btn btn-default btn-round btn-simple">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

