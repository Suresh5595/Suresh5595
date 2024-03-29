<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
	<div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Raw Material
                <small class="text-muted">Welcome to Raw Material List</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" onclick="addraw_materialRow();" type="button">
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
									<th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
			       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>  
$(document).ready(function(){ 
	<?php
	if($this->session->flashdata('err_alert')){ ?>
		  var text = "<?php echo $this->session->flashdata('err_alert');?>";
		  showNotification('alert-danger',text,'top','right','','');
    <?php
	}
	if($this->session->flashdata('success_alert')){ ?>
		  var text = "<?php echo $this->session->flashdata('success_alert');?>";
		  showNotification('alert-success',text,'top','right','','');
	<?php } ?>
	fetch_data();
	function fetch_data(){
        $.ajax({
            url:"<?php echo base_url();?>index.php/masters/raw_material/getlist",
            method:"POST",
            dataType:"json",
            success:function(data){
				var html = '';
                for(var count = 0; count < data.length; count++)
                {
                    html += '<tr>';
                    html += '<td><input type="checkbox" id="'+data[count].id+'" data-raw_material_code="'+data[count].raw_material_code+'" data-raw_material_name="'+data[count].raw_material_name+'" data-raw_material_status="'+data[count].raw_material_status+'" class="check_box"  /></td>';
					html += '<td>'+data[count].id+'</td>';
                    html += '<td>'+data[count].raw_material_code+'</td>';
                    html += '<td>'+data[count].raw_material_name+'</td>';
					if(data[count].raw_material_status == 1){
						 html += '<td><lable class="btn btn-success small-label">Active</label></td>';
					}else{
						 html += '<td><lable class="btn btn-danger small-label">In-Active</label></td>';
					}
					html += '<td><a href="javascript:void(0);" onclick="edit('+data[count].id+')" ><span class="badge badge-info">EDIT</span></a>&numsp;<a href="javascript:void(0);" onclick="deleteRecord('+data[count].id+')"><span class="badge badge-danger">DELETE</span></a></td>';
                }
                $('tbody').html(html);
			}
	    });
    }
	$(document).on('click', '.check_box', function(){
		var html = '';
		if(this.checked)
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-raw_material_code="'+$(this).data('raw_material_code')+'" data-raw_material_name="'+$(this).data('raw_material_name')+'" data-raw_material_status="'+$(this).data('raw_material_status')+'" class="check_box" checked /></td>';
			html += '<td>'+$(this).attr('id')+'</td>';
            html += '<td><input type="text" name="raw_material_code[]" class="form-control field_required form-control-bg-white" value="'+$(this).data("raw_material_code")+'" /></td>';
            html += '<td><input type="text" name="raw_material_name[]" class="form-control field_required form-control-bg-white" value="'+$(this).data("raw_material_name")+'" /></td>';
            html += '<td><select name="raw_material_status[]" id="raw_material_status_'+$(this).attr('id')+'" class="form-control field_required form-control-bg-white"><option value="1">Active</option><option value="0">IN-active</option></select><input type="hidden" name="hidden_id[]" value="'+$(this).attr('id')+'" /></td>';
			html +='<td><button type="button" class="btn btn-primary btn-label" onclick="update();">UPDATE</button>&numsp;&numsp;<a href="javascript:void(0);" onclick="edit('+$(this).attr('id')+')" ><span class="badge badge-warning">CANCEL</span></a></td>';
        }
        else
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-raw_material_code="'+$(this).data('raw_material_code')+'" data-raw_material_name="'+$(this).data('raw_material_name')+'" data-raw_material_status="'+$(this).data('raw_material_status')+'" class="check_box" /></td>';
			html += '<td>'+$(this).attr('id')+'</td>';
            html += '<td>'+$(this).data('raw_material_code')+'</td>';
            html += '<td>'+$(this).data('raw_material_name')+'</td>';
			if($(this).data('raw_material_status') == 1){
				html += '<td><lable class="btn btn-success small-label">Active</label></td>';
			}else{
				html += '<td><lable class="btn btn-danger small-label">In-Active</label></td>';
			}
			html += '<td><a href="javascript:void(0);" onclick="edit('+$(this).attr('id')+')" ><span class="badge badge-info">EDIT</span></a>&numsp;<a href="javascript:void(0);" onclick="deleteRecord('+$(this).attr('id')+')"><span class="badge badge-danger">DELETE</span></a></td>';
        }
        $(this).closest('tr').html(html);
        $('#raw_material_status_'+$(this).attr('id')+'').val($(this).data('raw_material_status'));
    });
});

function edit(id){
	$('#'+id).trigger('click');
}

function deleteRecord(id){
	if (confirm('Are you sure you want to delete this raw_material?')) {
		  $.ajax({
		  url:"<?php echo base_url();?>index.php/masters/raw_material/daleteRecord",
		  method:"POST",
		  data:'id='+id,
		  success:function(html){
		  window.location.reload();
		  }
		  });
	}
}

function update(){
	var flag = true;
	$('#update_form').find('.field_required').each(function(){
		if($(this).val() == ''){
			 $(this).parent('td').addClass('td-has-danger');
			 $(this).addClass('forn-control-danger');
			 flag = false;
	    }else{
			$(this).parent('td').removeClass('td-has-danger');
			 $(this).removeClass('forn-control-danger');
		}
	});
	if(flag == true){
		 if($('.check_box:checked').length > 0){
			 $.ajax({
			   url:"<?php echo base_url();?>index.php/masters/raw_material/update",
			   method:"POST",
			   data:$('#update_form').serialize(),
			   success:function(html){
				   window.location.reload();
			   }
			 });
		 }
    }
}

function addraw_materialRow(){
	var html = '<tr>';
	html += '<td><input type="checkbox"  class="check_box" checked /></td>';
	html += '<td></td>';
    html += '<td><input type="text" name="raw_material_code[]" class="form-control field_required form-control-bg-white" /></td>';
    html += '<td><input type="text" name="raw_material_name[]" class="form-control field_required form-control-bg-white" /></td>';
    html += '<td><select name="raw_material_status[]" class="form-control  form-control-bg-white"><option value="1">Active</option><option value="0">IN-active</option></select><input type="hidden" name="hidden_id[]" value="0" /></td>';
	html +='<td><button type="button" class="btn btn-primary btn-label" onclick="update();">SAVE</button>&numsp;&numsp;<a href="javascript:void(0);" onclick="$(this).parent().parent().remove();" ><span class="badge badge-danger">REMOVE</span></a></td>';
	html +='</tr>';
	$('tbody').append(html);
}
</script>
