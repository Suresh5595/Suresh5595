<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
	<div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Menu Permission
                <small class="text-muted">Welcome to Menu Permission List</small>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                   <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                             <thead>
                                <tr>
                                    <th>Menu</th>
                                    <th>List</th>
                                    <th>View</th>
                                    <th>Create</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Menu</th>
                                    <th>List</th>
                                    <th>View</th>
                                    <th>Create</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Company</td>
                                    <td><input type="checkbox" name="" checked=""></td>
                                    <td><input type="checkbox" name="" checked=""></td>
                                    <td><input type="checkbox" name="" checked=""></td>
                                    <td><input type="checkbox" name=""></td>
                                     <td><input type="checkbox" name=""></td>
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
