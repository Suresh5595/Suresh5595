<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>

<!-- Main Content -->
<section class="content">
    <div class="block-header">
	<div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Supplier PO</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2 style="background-color: #1cc3d2; padding: 10px;"><strong style="color: white">Supplier PO </strong>Info</small> </h2>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Invoice No">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-calendar"></i>
                            </span>
                            <input type="text" class="form-control datetimepicker" placeholder="Date">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="PO No">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-calendar"></i>
                            </span>
                            <input type="text" class="form-control datetimepicker" placeholder="PO Date">
                        </div>
                        <select class="form-control show-tick">
                            <option value="">- Delivery -</option>
                            <option value="company">Company</option>
                            <option value="site">Site</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2 style="background-color: #1cc3d2; padding: 10px;"><strong style="color: white">Supplier </strong>Info</small> </h2>
                    </div>
                   <div class="body">
                        <div id="supplier">
                            <div class="row clearfix">
                                <div class="col-lg-6">
                                    <input type="radio" name="supplier" checked="checked" value="existing"  />
                                    <label>Existing Supplier</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="radio" name="supplier" value="new" />
                                    <label>New Supplier</label>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div id="existing" class="desc" >
                                            <label>Contact No</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-search"></i>
                                                </span>
                                            </div>
                                    </div>
                                    <div id="new" class="desc" style="padding-top: 15px; padding-bottom: 15px;">
                                        <button  class="btn btn-primary btn-round" id="myBtn" data-toggle="modal" data-target="#myModal">Click here to add new supplier</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-6" style="padding-top: 20px;">
                                    Supplier :
                                </div>
                                <div class="col-lg-6" style="padding-top: 20px;">
                                    Address :
                                </div>
                                <div class="col-lg-6" style="padding-top: 20px;">
                                    State :
                                </div>
                                <div class="col-lg-6" style="padding-top: 20px;">
                                    Contact :
                                </div>
                                <div class="col-lg-6" style="padding-top: 20px;">
                                    GSTIN : 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2 style="background-color: #1cc3d2; padding: 10px;"><strong style="color: white">Product </strong>Info</small> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Enter the Code</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-addon">
                                            <i class="zmdi zmdi-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row clearfix" >
                                    <div class="col-lg-12" style="padding-top: 25px;">
                                        Product Type  
                                    </div> 
                                    <div class="col-lg-12" style="padding-top: 25px;"> 
                                        Product 
                                    </div> 
                                    
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row clearfix">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Qty</label>
                                    <input type="text" class="form-control" placeholder="Qty">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>P.Price</label>
                                    <input type="text" class="form-control" placeholder="P.Price">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <select class="form-control show-tick">
                                        <option value="">-Status-</option>
                                        <option value="1">Active</option>
                                        <option value="0">In-Active</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <table class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Qty</th>
                                        <th>Rate</th>
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
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2 style="background-color: #1cc3d2; padding: 10px;"><strong style="color: white">Amount </strong>Info</small> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="row clearfix">
                                    
                                <div class="row clearfix">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Pre.Balance</label>
                                            <input type="text" class="form-control" placeholder="Pre.Balance" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Paid</label>
                                            <input type="text" class="form-control" placeholder="Paid">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Paid Mode</label>
                                            <select class="form-control show-tick">
                                                <option value="Cash">Cash</option>
                                                <option value="NEFT">NEFT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Total payable</label>
                                            <input type="text" class="form-control" placeholder="Total payable" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Balance</label>
                                            <input type="text" class="form-control" placeholder="Balance" readonly>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row clearfix">
                                    <div class="col-sm-12" style="text-align: right;">
                                        <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                        <button type="submit" id="cancel_form" class="btn btn-default btn-round btn-simple">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style=" max-width: 84% !important;margin-top: 5% !important;margin-left: 10% !important;margin-right: 0% !important;padding-right: 0px !important;">
    <div class="modal-dialog" style="margin-left: 150px; max-width: 100%; margin: 0;">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1cc3d2;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel" style="margin-top: 5px !important;">Add New Supplier</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card">
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
                                    <label for="status">Status</label>
                                </div>
                                </div>
                            </div>
                            <hr style="border-top: 1px solid rgb(38, 216, 232);">
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
                            <hr style="border-top: 1px solid rgb(38, 216, 232);">
                            <div class="row clearfix">
                                <div class="col-sm-12" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary btn-round">Save</button>
                                    <button type="submit" id="cancel_form" class="btn btn-default btn-round btn-simple">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#new").hide();
    $("input[name$='supplier']").click(function() {
        var test = $(this).val();
        $("div.desc").hide();
        $("#" + test).show();
    });
});
$(document).ready(function () {
    $("#myBtn").click(function(){
         $('#myModal').modal('show');
    });
});
$(function () {
$('.datetimepicker').bootstrapMaterialDatePicker({
        format: 'DD / MM / YYYY',
        clearButton: true,
        weekStart: 1,
        time: false
    });
});
</script>