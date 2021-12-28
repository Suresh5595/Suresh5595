<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>

<section class="content">
    <div class="block-header">
	<div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Againts Po</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2 style="background-color: #1cc3d2; padding: 10px;"><strong style="color: white">Process </strong>Info</small> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Enter the PO Number</label>
                                    <div class="row clearfix">
                                        <div class="col-lg-10">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-search"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-primary btn-round pull-right">Serach</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-4" style="padding-top: 20px;">
                                            Supplier :
                                        </div>
                                        <div class="col-lg-4" style="padding-top: 20px;">
                                            Address :
                                        </div>
                                        <div class="col-lg-4" style="padding-top: 20px;">
                                            State :
                                        </div>
                                        <div class="col-lg-4" style="padding-top: 20px;">
                                            Contact :
                                        </div>
                                        <div class="col-lg-4" style="padding-top: 20px;">
                                            GSTIN : 
                                        </div>
                                        <div class="col-lg-4" style="padding-top: 20px;">
                                            PO No : 
                                        </div>
                                    </div>
                                    <div class="row clearfix" >
                                        <table class="table table-bordered table-striped table-hover dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Sno</th>
                                                    <th>Code</th>
                                                    <th>Name</th>
                                                    <th>Request Qty</th>
                                                    <th>Pre Received Qty</th>
                                                    <th>Received Qty</th>
                                                    <th>Pending Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1001</td>
                                                    <td>Mobile</td>
                                                    <td class="number">10</td>
                                                    <td class="pre_res">5</td>
                                                    <td><input type="" name="sum" class="form-control"></td>
                                                    <td class="chance" id="chance">5</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
<script type="text/javascript">
    
    $('input[name=sum]').on("keyup", function(){
        var $this = $(this);
        var $parent = $this.parents('tr');
        var $chance = $parent.find('.chance');
        var $number = $parent.find('.number'); 
        var $pre_res = $parent.find('.pre_res');     
        $chance.text($number.text() - $pre_res.text() - $this.val());
    });
</script>