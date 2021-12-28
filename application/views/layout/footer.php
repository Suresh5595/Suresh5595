
<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
<script src="<?php echo base_url();?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> 
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/tables/jquery-datatable.js"></script>
<script src="<?php echo base_url();?>assets/js/jszip.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-notify/bootstrap-notify.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/ui/notifications.js"></script>
<script src="<?php echo base_url();?>assets/plugins/multi-select/js/jquery.multi-select.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-spinner/js/jquery.spinner.js"></script> 
<script src="<?php echo base_url();?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> 
<script src="<?php echo base_url();?>assets/plugins/nouislider/nouislider.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/forms/advanced-form-elements.js"></script> 
<script src="<?php echo base_url();?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 
<script src="<?php echo base_url();?>assets/js/pages/forms/basic-form-elements.js"></script>
<script src="<?php echo base_url();?>assets/plugins/momentjs/moment.js"></script> 
<script>
function getForm(form_div_id,ele){
	$('.field_required').each(function(){
		$(this).val('');
		$(this).parent('div').removeClass('has-danger');
	    $(this).removeClass('forn-control-danger');
	});
	if($(ele).children().attr('class') == 'zmdi zmdi-plus'){
		  $('#'+form_div_id).css('display','block');
		  $(ele).children().removeClass('zmdi-plus');
		  $(ele).children().addClass('zmdi-minus');
	}else{
		$('#'+form_div_id).css('display','none');
		$(ele).children().addClass('zmdi-plus');
		$(ele).children().removeClass('zmdi-minus');
	}
}
function form_validate(form_id){ 
    var flag = true;
	$('#'+form_id).find('.field_required').each(function(){
		if($(this).val() == ''){
			 $(this).parent('div').addClass('has-danger');
			 $(this).addClass('forn-control-danger');
			 flag = false;
	    }else{
			$(this).parent('div').removeClass('has-danger');
			 $(this).removeClass('forn-control-danger');
		}
	});
	return flag;
}

</script>
</body>
</html>
