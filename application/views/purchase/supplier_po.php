<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
    <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Supplier PO
                <small class="text-muted">Welcome to Supplier PO List</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <!--<button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" onclick="addItemRow();" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>   -->
                <button onclick="window.location.href='<?php echo base_url();?>index.php/sup_po'" class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
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
                                    <th style="width:1px;"></th>
                                    <th style="width:5px;">S.No.</th>
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
                                <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                            </tbody>
                        </table>
                   </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>