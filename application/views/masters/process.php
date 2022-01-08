<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
    <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Process
                <small class="text-muted">Welcome to Process</small>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
						<div class="row clearfix">
							<div class="col-sm-4">
								<b>Item</b>
								<div class="form-group">
									<select class="form-control field_required" name="item" id="item">
									<option value="">-Select-</option>
										<?php if($items){ ?>
											<?php foreach($items as $item_val){ ?>
												<option value="<?php echo $item_val->item_id;?>"><?php echo $item_val->item_name;?></option>
											<?php } ?>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-sm-12">
								<table class="table">
									<thead>
										<tr>
											<th style="text-align:center;" colspan="2">Detail</th>
											<th  style="width:15%;text-align:center;">Raw Material</th>
											<th  style="width:15%;text-align:center;">Machine</th>
											<th style="width:15%;text-align:center;">Consumable</th>
											<th  style="width:15%;text-align:center;">Waste</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="2">
												<input type="text" class="form-control" name="process_name" placeholder="Enter the Process Name">
											</td>
											<td>
												<input type="checkbox" class="form-control" id="is_raw_material" name="is_raw_material">
											</td>
											<td>
												<input type="checkbox" class="form-control" id="is_machine" name="is_machine">
											</td>
											<td>
												<input type="checkbox" class="form-control" id="is_consumable" name="is_consumable">
											</td>
											<td>
												<input type="checkbox" class="form-control" id="is_waste"  name="is_waste">
											</td>
											<td>
												<button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button"><i class="zmdi zmdi-plus"></i></button>
											</td>
										</tr>
										<tr class="machine_section" style="display:none;">
											<td colspan="7">Machine Detail</td>
										</tr>
										<tr class="machine_section" style="display:none;">
											<td></td>
											<td>
												<select class="form-control field_required" name="machine_name" id="machine_name">
													<option value="">-Select-</option>
													<?php if($machines){ ?>
														<?php foreach($machines as $machine_val){ ?>
															<option value="<?php echo $machine_val->machine_id;?>"><?php echo $machine_val->machine_name;?></option>
														<?php } ?>
													<?php } ?>
												</select>
											</td>
											<td colspan="3">
												<input type="text" class="form-control" name="machine_operation" readonly="readonly">
											</td>
											<td>
												<button style="background: green;" onclick="add_machine_row();" class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button"><i class="zmdi zmdi-plus"></i></button>
											</td>
										</tr>
										<tr id="raw_material_head" class="raw_material_section" style="display:none;">
											<td colspan="7">Raw Material Detail</td>
										</tr>
										<tr class="raw_material_section" style="display:none;">
											<td></td>
											<td>
												<select class="form-control field_required" name="raw_material" id="raw_material">
													<option value="">-Select-</option>
													<?php if($raw_items){ ?>
														<?php foreach($raw_items as $raw_items_val){ ?>
															<option value="<?php echo $raw_items_val->item_id;?>"><?php echo $raw_items_val->item_name;?></option>
														<?php } ?>
													<?php } ?>
												</select>
											</td>
											<td colspan="3">
												<input type="text" class="form-control" name="raw_material_qty" placeholder="Enter the Raw Material Qty">
											</td>
											<td>
												<button  style="background: green;" onclick="add_raw_material_row();" class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button"><i class="zmdi zmdi-plus"></i></button>
											</td>
										</tr>
										<tr id="consumables_head" class="consumable_section" style="display:none;">
											<td colspan="7">Consumables Material Detail</td>
										</tr>
										<tr class="consumable_section" style="display:none;">
											<td></td>
											<td>
												<select class="form-control field_required" name="consumables_items" id="consumables_items">
													<option value="">-Select-</option>
													<?php if($consumables_items){ ?>
														<?php foreach($consumables_items as $consumables_items_val){ ?>
															<option value="<?php echo $consumables_items_val->item_id;?>"><?php echo $consumables_items_val->item_name;?></option>
														<?php } ?>
													<?php } ?>
												</select>
											</td>
											<td colspan="3">
												<input type="text" class="form-control" name="consumables_items_qty" placeholder="Enter the Consumables Item Qty">
											</td>
											<td>
												<button  style="background: green;" onclick="add_consumable_row();" class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button"><i class="zmdi zmdi-plus"></i></button>
											</td>
										</tr>
										<tr id="waste_head" class="waste_section" style="display:none;">
											<td colspan="7">Waste Detail</td>
										</tr>
										<tr>
											<td colspan="7" class="waste_section" style="display:none;">
												<input type="text" class="form-control" name="waste" placeholder="Enter the Waste Qty">
											</td>
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
</section>
<script>
function add_machine_row(){
	var str ='';
		str +='<tr class="machine_section">';
		str +='<td></td>';
		str +='<td>';
		str +='<select class="form-control field_required" name="machine_name" id="machine_name">';
		str +='<option value="">-Select-</option>';
		<?php if($machines){ ?>
		<?php foreach($machines as $machine_val){ ?>
		str +='<option value="<?php echo $machine_val->machine_id;?>"><?php echo $machine_val->machine_name;?></option>';
		<?php } ?>
		<?php } ?>
		str +='</select>';
		str +='</td>';
		str +='<td colspan="3">';
		str +='<input type="text" class="form-control" name="machine_operation" readonly="readonly">';
		str +='</td>';
		str +='<td>';
		str +='<button onclick="$(this).closest(\'tr\').remove();" style="background: red;" class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button"><i class="zmdi zmdi-delete"></i></button>';
		str +='</td>';
		str +='</tr>';
		$('#raw_material_head').before(str);
}

function add_raw_material_row(){
	var str ='';
	str +='<tr class="raw_material_section">';
	str +='<td></td>';
	str +='<td>';
	str +='<select class="form-control field_required" name="raw_material" id="raw_material">';
	str +='<option value="">-Select-</option>';
	<?php if($raw_items){ ?>
	<?php foreach($raw_items as $raw_items_val){ ?>
	str +='<option value="<?php echo $raw_items_val->item_id;?>"><?php echo $raw_items_val->item_name;?></option>';
	<?php } ?>
	<?php } ?>
	str +='</select>';
	str +='</td>';
	str +='<td colspan="3">';
	str +='<input type="text" class="form-control" name="raw_material_qty" placeholder="Enter the Raw Material Qty">';
	str +='</td>';
	str +='<td>';
	str +='<button onclick="$(this).closest(\'tr\').remove();" style="background: red;" class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button"><i class="zmdi zmdi-delete"></i></button>';
	str +='</td>';
	str +='</tr>';
	$('#consumables_head').before(str);
}

function add_consumable_row(){
	var str ='';
	str +='<tr class="consumable_section">';
	str +='<td></td>';
	str +='<td>';
	str +='<select class="form-control field_required" name="consumables_items" id="consumables_items">';
	str +='<option value="">-Select-</option>';
	<?php if($consumables_items){ ?>
	<?php foreach($consumables_items as $consumables_items_val){ ?>
	str +='<option value="<?php echo $consumables_items_val->item_id;?>"><?php echo $consumables_items_val->item_name;?></option>';
	<?php } ?>
	<?php } ?>
	str +='</select>';
	str +='</td>';
	str +='<td colspan="3">';
	str +='<input type="text" class="form-control" name="consumables_items_qty" placeholder="Enter the Consumables Item Qty">';
	str +='</td>';
	str +='<td>';
	str +='<button onclick="$(this).closest(\'tr\').remove();" style="background: red;" class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button"><i class="zmdi zmdi-delete"></i></button>';
	str +='</td>';
	str +='</tr>';
	$('#waste_head').before(str);
}

$('#is_machine').click(function(){
	if($(this).is(':checked')){
		$('.machine_section').show();
	}else{
		$('.machine_section').hide();
	}
});
$('#is_raw_material').click(function(){
	if($(this).is(':checked')){
		$('.raw_material_section').show();
	}else{
		$('.raw_material_section').hide();
	}
});
$('#is_consumable').click(function(){
	if($(this).is(':checked')){
		$('.consumable_section').show();
	}else{
		$('.consumable_section').hide();
	}
});
$('#is_waste').click(function(){
	if($(this).is(':checked')){
		$('.waste_section').show();
	}else{
		$('.waste_section').hide();
	}
});
</script>
