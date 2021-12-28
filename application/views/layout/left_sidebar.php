<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>Admin</h4>
                        <small>Super Admin</small>                        
                    </div>
                    <a href="javascript:void(0);" title="Events"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="javascript:void(0);" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                    <a href="javascript:void(0);" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="javascript:void(0);" title="Chat App"><i class="zmdi zmdi-comments"></i></a>
                    <a href="<?php echo base_url();?>index.php/login/logout" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li> <a href="<?php echo base_url();?>index.php/dashboard" class="menu"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="header">MASTERS</li>
            <li> <a href="<?php echo base_url();?>index.php/masters/department" class="menu"><i class="material-icons">local_library</i><span>Department</span></a></li>
            <li> <a href="<?php echo base_url();?>index.php/masters/designation" class="menu"><i class="material-icons">ac_unit</i><span>Designation</span></a></li>
            <li> <a href="<?php echo base_url();?>index.php/masters/source" class="menu"><i class="material-icons">language</i><span>Source</span></a></li>
            <li> <a href="<?php echo base_url();?>index.php/masters/item" class="menu"><i class="material-icons">add_shopping_cart</i><span>Item</span></a></li>
            <li> <a href="<?php echo base_url();?>index.php/masters/raw_material" class="menu"><i class="material-icons">album</i><span>Raw Material</span></a></li>
            <li> <a href="<?php echo base_url();?>index.php/masters/component" class="menu"><i class="material-icons">call_split</i><span>Component</span></a></li>
            <li> <a href="<?php echo base_url();?>index.php/masters/hsn" class="menu"><i class="material-icons">donut_small</i><span>HSN</span></a></li>
            <li> <a href="<?php echo base_url();?>index.php/masters/gst" class="menu"><i class="material-icons">dns</i><span>GST</span></a></li>
            <li> <a href="<?php echo base_url();?>index.php/masters/unit" class="menu"><i class="material-icons">ac_unit</i><span>Unit</span></a></li>
            <li> <a href="<?php echo base_url();?>index.php/masters/state" class="menu"><i class="zmdi zmdi-map"></i><span>State</span></a></li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">people</i><span>Employee</span> </a>
                <ul class="ml-menu">
                    <li><a href="<?php echo base_url();?>index.php/masters/manage_employee">Manage Employee</a></li>
                    <li><a href="<?php echo base_url();?>index.php/masters/employee">Add Employee</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">person</i><span>Customer</span></a>
                <ul class="ml-menu">
                    <li><a href="<?php echo base_url();?>index.php/masters/customer_view">Manage Customer</a></li>
                    <li><a href="<?php echo base_url();?>index.php/masters/customer">Add customer</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">person</i><span>Supplier</span> </a>
                <ul class="ml-menu">
                    <li><a href="<?php echo base_url();?>index.php/masters/supplier_view">Manage Supplier</a></li>
                    <li> <a href="<?php echo base_url();?>index.php/masters/supplier">Supplier</a></li>
            
                </ul>
            </li>
            <li class="header">PURCHASE</li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-card-travel"></i><span>Purchase</span> </a>
                <ul class="ml-menu">
                    <li><a href="<?php echo base_url();?>index.php/select_purchase">Purchase</a></li>
                    <li><a href="<?php echo base_url();?>index.php/purchase_view">Purchase View</a></li>
                    <li><a href="<?php echo base_url();?>index.php/customer_po">Customer PO</a></li>
                    <li><a href="<?php echo base_url();?>index.php/supplier_po">Suplier PO</a></li>
                </ul>
            </li>
            <li class="header">SETTINGS</li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-settings"></i><span>Settings</span> </a>
                <ul class="ml-menu">
                    <li><a href="<?php echo base_url();?>index.php/settings/manage">Manage Settings</a></li>
                    <li><a href="javascript:void(0);">Email Templates</a></li>
                    <li><a href="javascript:void(0);">Users</a></li>
                    <li><a href="<?php echo base_url();?>index.php/settings/menus">Menus</a></li>
                    <li><a href="<?php echo base_url();?>index.php/settings/rule">Rule</a></li>
                    <li><a href="<?php echo base_url();?>index.php/settings/permission">Menu Permission</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
