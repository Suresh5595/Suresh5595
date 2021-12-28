<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.0.1/css/fixedColumns.dataTables.min.css">

<style type="text/css">
     th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        margin: 0 auto;
    }
</style>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
    <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Manage Employee
                <small class="text-muted">Welcome to Manage Employee</small>
                </h2>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <table class="table table-bordered table-striped table-hover stripe row-border order-column" id="aaa" >
                        <thead>
                            <tr>
                                <th data-visible="true">S.No.</th>
                                <th data-visible="true">Employee Code</th>
                                <th data-visible="true">First Name</th>
                                <th data-visible="true">Last Name</th>
                                <th data-visible="true">Phone Number</th>
                                <th data-visible="true">Email</th>
                                 <th data-visible="true">Department</th>
                                <th data-visible="true">Designation</th>
                                <th data-visible="false">DOB</th>
                                <th data-visible="false">Age</th>
                                <th data-visible="false">Gender</th>
                                <th data-visible="false">Marital Status</th>
                                <th data-visible="false">Alt Phone Number</th>
                                <th data-visible="false">Blood Group</th>
                                <th data-visible="false">Qualification</th>
                                <th data-visible="false">Emergency Contact Number</th>
                                <th data-visible="false">Member is from north-east/nepal/bhutan</th>
                                <th data-visible="false">Present Address</th>
                                <th data-visible="false">Permament address</th>
                                <th data-visible="false">Recruotment Source</th>
                                <th data-visible="false">DOJ EEPL</th>
                                <th data-visible="false">Probation upto</th>
                                <th data-visible="false">Extended to</th>
                                <th data-visible="false">Employment Confirmed Date</th>
                                <th data-visible="false">Contract renewal Date</th>
                                <th data-visible="false">Relieved Date</th>
                                <th data-visible="false">Rejoining Date</th>
                                <th data-visible="false">Length of service in days</th>
                                <th data-visible="false">Length of service ( YEARS-MONTHS-DAYS)</th>
                                <th data-visible="false">Offer letter no.</th>
                                <th data-visible="false">Joining Date</th>
                                <th data-visible="false">Salary as on joining</th>
                                <th data-visible="true">Employee Status</th>
                                <th data-visible="true">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.No.</th>
                                <th>Employee Code</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>Phone Number</th>
                                <th>Alt Phone Number</th>
                                <th>Email</th>
                                <th>Blood Group</th>
                                <th>Qualification</th>
                                <th>Emergency Contact Number</th>
                                <th>Member is from north-east/nepal/bhutan</th>
                                <th>Present Address</th>
                                <th>Permament address</th>
                                <th>Deportment</th>
                                <th>Designation</th>
                                <th>Recruotment Source</th>
                                <th>DOJ EEPL</th>
                                <th>Probation upto</th>
                                <th>Extended to</th>
                                <th>Employment Confirmed Date</th>
                                <th>Contract renewal Date</th>
                                <th>Relieved Date</th>
                                <th>Rejoining Date</th>
                                <th>Length of service in days</th>
                                <th>Length of service ( YEARS-MONTHS-DAYS)</th>
                                <th>Offer letter no.</th>
                                <th>Joining Date</th>
                                <th>Salary as on joining</th>
                                <th>Employee Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>0001</td>
                                <td>TEST</td>
                                <td>Tst</td>
                                <td>9876543210</td>
                                <td>test@mail.in</td>
                                <td>Cbe</td>
                                <td>Coimbatore</td>
                                <td>Active</td>
                                <td>654321</td>
                                <td>1</td>
                                <td>TEST</td>
                                <td>0001</td>
                                <td>Coimbatore</td>
                                <td>Cbe</td>
                                <td>Coimbatore</td>
                                <td>Tamilnadu</td>
                                <td>654321</td>
                                <td>9876543210</td>
                                <td>Active</td>
                                <td>1</td>
                                <td>TEST</td>
                                <td>0001</td>
                                <td>Coimbatore</td>
                                <td>Cbe</td>
                                <td>Coimbatore</td>
                                <td>Tamilnadu</td>
                                <td>654321</td>
                                <td>9876543210</td>
                                <td>Active</td>
                                <td>654321</td>
                                <td>9876543210</td>
                                <td>Active</td>
                                <td>
                                    <a href="javascript:void(0);" id="edit_form"><span class="badge badge-success">EDIT</span></a>&numsp;
                                    <a href="javascript:void(0);"><span class="badge badge-danger">DELETE</span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function() {
    var table=$('#aaa').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy',
            'excelHtml5',
            'print'
        ],
        scrollY:        "200px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   {
            left: 1,
            right: 1
        }

    } );
} );
</script>
<!-- <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"/> -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"/>
<script src="https://cdn.datatables.net/fixedcolumns/4.0.1/js/dataTables.fixedColumns.min.js"/>
