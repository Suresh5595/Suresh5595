<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

<!-- Main Content -->
<section class="content">
    <div class="block-header">
    <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Purchase List
                <small class="text-muted">Welcome to Purchase List</small>
                </h2>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                         <div class="col-lg-4">
                            <div class="form-group">
                                <label>From</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-calendar"></i>
                                    </span>
                                    <input type="date" class="form-control datetimepicker" placeholder="Please choose date & time...">
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4">
                            <div class="form-group">
                                <label>To</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-calendar"></i>
                                    </span>
                                    <input type="date" class="form-control datetimepicker" placeholder="Please choose date & time...">
                                </div>
                            </div>
                        </div>  
                    </div>
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th data-visible="true">S.No.</th>
                                    <th data-visible="true">Action</th>
                                    <th data-visible="true">Date</th>
                                    <th data-visible="true">P.No</th>
                                    <th data-visible="true">Supplier</th>
                                    <th data-visible="true">Qty Net Amount</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Action</th>
                                    <th>Date</th>
                                    <th>P.No</th>
                                    <th>Supplier</th>
                                    <th>Qty Net Amount</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/basic-form-elements.js"></script>
