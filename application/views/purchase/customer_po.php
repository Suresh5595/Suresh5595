<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
    <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Customer PO
                <small class="text-muted">Welcome to Customer PO List</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
               <!-- <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" onclick="addItemRow();" type="button">-->
                <button onclick="window.location.href='<?php echo base_url();?>index.php/cust_po'" class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
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
                   <form method="post" id="update_form">
                        <table id="raw_material_table" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th style="width:5px;">S.No.</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Due on</th>
                                    <th>Qty</th>
                                    <th>Rate</th>
                                    <th>Per</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                   </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>