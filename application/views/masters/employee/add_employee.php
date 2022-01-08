<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>

<style>
.card .header {
	padding: 5px;
}
.wizard.vertical > .steps {
    width: 20%;
}
.wizard.vertical > .content {
    width: 80%;
}
.wizard .steps a {
    margin-left: 0px;
    margin-right: 0px;
    padding-left: 2px;
    padding-right: 2px;
    padding-top: 2px;
    padding-bottom: 2px;
    margin-bottom: 2px;
    font-size: 12px;
}
.card .body {
    padding: 5px;
	font-size: 12px;
}
.wizard .content .body {
    padding: 5px;
}
.body .form-group .form-control, .body .input-group .form-control {
    padding: 5px;
}
.body .form-control {
	border-radius: .25rem;
}
.body .input-group, .form-group {
    margin-top: 6px;
}
.body textarea.form-control {
	border: 1px solid #E3E3E3;
}
.badge-info {
    border-color: #2E8B57;
    color: #FCFCFC;
    background-color: #2E8B57;
    width: 100%;
    font-size: 12px;
}

</style>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
    <div class="container-fluid">
		 <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>ADD Employee</strong></h2>
                    </div>
                    <div class="body">
                        <div id="wizard_vertical">
                            <h2>PERSONAL DETAIL</h2>
                            <section>
                                <div class="row clearfix">
									<div class="col-sm-4">
										<b>First Name</b>
										<div class="form-group">
											<input type="text" class="form-control" name="fname">
										</div>
									</div>
									<div class="col-sm-4">
										<b>Last Name</b>
										<div class="form-group">
											<input type="text" class="form-control" name="lname" >
										</div>
									</div>
									<div class="col-sm-2">
										<b>Date of Birth</b>
										<div class="form-group">
											<input type="text" class="form-control datetimepicker" name="dob">
										</div>
									</div>
									<div class="col-sm-2">
										<b>Age</b>
										<div class="form-group">
											<input type="text" class="form-control" name="age">
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-2">
										<b>Gender</b>
											<select class="form-control show-tick" name="gender">
												<option>- Select - </option>
												<option>Male</option>
												<option value="F">Female</option>
											</select>
									</div>
									<div class="col-sm-2">
									    <b>Marital Status</b>
										<select class="form-control show-tick" name="marital_status">
											<option value="">- Select - </option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
									<div class="col-sm-3">
										<b>Mobile No</b>
										<div class="form-group">
											<input type="text" class="form-control" name="phone">
										</div>
									</div>
									<div class="col-sm-2">
										<b>Alt Mobile No</b>
										<div class="form-group">
											<input type="text" class="form-control" name="alt_phone">
										</div>
									</div>
									<div class="col-sm-3">
										<b>Emergency Contact</b>
										<div class="form-group">
											<input type="text" class="form-control" name="emergency_contact">
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-3">
										<b>Blood Group</b>
										<select class="form-control show-tick" name="blood_group">
											<option value="">- Select -</option>
											<option value="b+">B+</option>
											<option value="ab+">AB+</option>
										</select>
									</div>
									<div class="col-sm-3">
										<b>Email ID</b>
										<div class="form-group">
											<input type="text" class="form-control" name="mail">
										</div>
									</div>
									<div class="col-sm-3">
										<b>Qualification</b>
										<select class="form-control show-tick" name="qualification">
											<option value="">- Select -</option>
											<option value="degree">Degree</option>
											<option value="diploma">Diploma</option>
										</select>
									</div>
									<div class="col-sm-3">
										<b>Member is from</b>
										<select class="form-control show-tick" name="member">
											<option value="">- Select -</option>
											<option value="north-east">north-east</option>
											<option value="nepal">nepal</option>
											<option value-"bhutan">bhutan</option>
										</select>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-6">
										<b>present address</b>
										<div class="form-group">
											<textarea rows="4" class="form-control no-resize"></textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<b>permament address</b>
										<div class="form-group">
											<textarea rows="4" class="form-control no-resize"></textarea>
										</div>
									</div>
								</div>
                            </section>
                            <h2>FAMILY DETAIL</h2>
                            <section>
								<div class="row clearfix">
									<div class="col-sm-12">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>S No.</th>
													<th>Relationship</th>
													<th>Name as per Aadhar</th>
													<th>DOB</th>
													<th>Aadhar No.</th>
													<th>Verified</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td><input type="text" class="form-control" name="relationship"></td>
													<td><input type="text" class="form-control" name="relat_name"></td>
													<td><input type="text" class="form-control" name="relat_dob"></td>
													<td><input type="text" class="form-control" name="relat_aadhar_no"></td>
													<td><input type="checkbox" class="form-control" name="relat_verify"></td>
													<td><a href="javascript:void(0);"><span class="badge badge-danger">REMOVE</span></a></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<th colspan="6"></th>
													<th><a href="javascript:void(0);"><span class="badge badge-info">ADD</span></a></th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
                            </section>
                            <h2>WORK EXPERIENCE DETAIL</h2>
                            <section>
                                <div class="row clearfix">
									<div class="col-sm-12">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>S No.</th>
													<th>Company</th>
													<th>Designation</th>
													<th>From</th>
													<th>To</th>
													<th>Experience</th>
													<th>Salary</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td><input type="text" class="form-control" name="work_company"></td>
													<td><input type="text" class="form-control" name="work_designation"></td>
													<td><input type="text" class="form-control" name="work_from"></td>
													<td><input type="text" class="form-control" name="work_to"></td>
													<td><input type="text" class="form-control" name="work_experience"></td>
													<td><input type="text" class="form-control" name="work_salary"></td>
													<td><a href="javascript:void(0);"><span class="badge badge-danger">REMOVE</span></a></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<th colspan="7"></th>
													<th><a href="javascript:void(0);"><span class="badge badge-info">ADD</span></a></th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
                            </section>
                            <h2>KYC DETAIL</h2>
                            <section>
                                <div class="row clearfix">
									<div class="col-sm-12">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>S No.</th>
													<th>Document Name</th>
													<th>Upload Document</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td><input type="text" class="form-control" name="doc_name"></td>
													<td><input type="file" class="form-control" name="doc_file"></td>
													<td><a href="javascript:void(0);"><span class="badge badge-danger">REMOVE</span></a></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<th colspan="3"></th>
													<th><a href="javascript:void(0);"><span class="badge badge-info">ADD</span></a></th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
                            </section>
							<h2>BANK DETAILS DETAIL</h2>
                            <section>
                                <div class="row clearfix">
									<div class="col-sm-4">
										<b>Account Name</b>
										<div class="form-group">
											<input type="text" class="form-control" name="acc_name">
										</div>
									</div>
									<div class="col-sm-4">
										<b>Account Number</b>
										<div class="form-group">
											<input type="text" class="form-control" name="acc_no" >
										</div>
									</div>
									<div class="col-sm-4">
										<b>Bank Name</b>
										<div class="form-group">
											<input type="text" class="form-control" name="bank_name">
										</div>
									</div>
								</div>
								<div class="row clearfix">
								    <div class="col-sm-4">
										<b>IFSC</b>
										<div class="form-group">
											<input type="text" class="form-control" name="acc_ifsc">
										</div>
									</div>
									<div class="col-sm-4">
										<b>Branch</b>
										<div class="form-group">
											<input type="text" class="form-control" name="branch">
										</div>
									</div>
									<div class="col-sm-4">
										<b>Gpay Number</b>
										<div class="form-group">
											<input type="text" class="form-control" name="gpay">
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-6">
										<b>UPI Id</b>
										<div class="form-group">
											<input type="text" class="form-control" name="upi">
										</div>
									</div>
								</div>
                            </section>
							<h2>NOMINEE DETAILS DETAIL</h2>
                            <section>
                                <div class="row clearfix">
									<div class="col-sm-4">
										<b>Nominee</b>
										<div class="form-group">
											<select class="form-control" name="nominee">
												<option value=''>-Select-</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-12">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Relationship</th>
													<th>Name as per Aadhar</th>
													<th>DOB</th>
													<th>Aadhar No.</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
                            </section>
							<h2>HR ENTRY</h2>
                            <section>
                                <div class="row clearfix">
									<div class="col-sm-4">
										<b>Emp Code</b>
										<div class="form-group">
											<input type="text" class="form-control" name="emp_code">
										</div>
									</div>
									<div class="col-sm-4">
										<b>Department</b>
										<div class="form-group">
											<select class="form-control" name="emp_department">
												<option value="">-Select-</option>
											</select>
										</div>
									</div>
									<div class="col-sm-4">
										<b>Designation</b>
										<div class="form-group">
											<select class="form-control" name="emp_designation">
												<option value="">-Select-</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-3">
										<b>Basic salary</b>
										<div class="form-group">
											<input type="text" class="form-control" name="emp_basic_salary">
										</div>
									</div>
									<div class="col-sm-3">
										<b>Password</b>
										<div class="form-group">
											<input type="text" class="form-control" name="emp_password" >
										</div>
									</div>
									<div class="col-sm-3">
										<b>Training Branch</b>
										<div class="form-group">
											<select class="form-control" name="emp_training_branch">
												<option value="">-Select-</option>
											</select>
										</div>
									</div>
									<div class="col-sm-3">
										<b>Joining Branch</b>
										<div class="form-group">
											<select class="form-control" name="emp_joining_branch">
												<option value="">-Select-</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-3">
										<b>Time From</b>
										<div class="form-group">
											<input type="text" class="form-control" name="emp_time_from">
										</div>
									</div>
									<div class="col-sm-3">
										<b>Time To</b>
										<div class="form-group">
											<input type="text" class="form-control" name="emp_time_to" >
										</div>
									</div>
									<div class="col-sm-3">
										<b>Doj</b>
										<div class="form-group">
											<input type="text" class="form-control" name="emp_doj">
										</div>
									</div>
									<div class="col-sm-3">
										<b>Attendance Type</b>
										<div class="form-group">
											<select class="form-control" name="emp_joining_branch">
												<option value="">-Select-</option>
												<option value="Timing">-Timing-</option>
												<option value="Duration">-Duration-</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-4">
										<b>Working Hours</b>
										<div class="form-group">
											<input type="number" min="1" class="form-control" name="emp_working_hours" >
										</div>
									</div>
									<div class="col-sm-4">
										<b>Job Status</b>
										<div class="form-group">
											<select class="form-control" name="emp_status">
												<option value="0">-Active-</option>
												<option value="1">-In-Active-</option>
											</select>
										</div>
									</div>
								</div>
                            </section>
							<h2>RECEIVED DOCUMENTS DETAIL</h2>
                            <section>
                                <div class="row clearfix">
									<div class="col-sm-12">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>S No.</th>
													<th>Document Name</th>
													<th>Upload Document</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td><input type="text" class="form-control" name="rec_doc_name"></td>
													<td><input type="file" class="form-control" name="rec_doc_file"></td>
													<td><a href="javascript:void(0);"><span class="badge badge-danger">REMOVE</span></a></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<th colspan="3"></th>
													<th><a href="javascript:void(0);"><span class="badge badge-info">ADD</span></a></th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<script type="text/javascript">
        $(function () {
$('.datetimepicker').bootstrapMaterialDatePicker({
        format: 'DD / MM / YYYY',
        clearButton: true,
        weekStart: 1,
        time: false
    });
});
</script>
