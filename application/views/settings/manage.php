<style type="text/css">
     .nav-tabs > .nav-item > .nav-link.active 
    {
        border-radius: 1px !important;
        background: #00bcd4 !important;
        color: white !important;
    }
    .nav-tabs > .nav-item > .nav-link {
        border-radius: 1px !important;
        padding: 11px 75px !important;
        background: #eee;
        color: #aaa;
    }
    .nav-tabs > .nav-item > .nav-link:hover {
        border-radius: 1px !important;
        background: #00bcd4 !important;
        color: white !important;
    }
    .finish-btn{
        {
            background: #00bcd4 !important;
            color: white !important;
            display: block;
            padding: 0.5em 1em;
            text-decoration: none;
            border-radius: 0;
        }
    }
</style>
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Manage Setting
                <small class="text-muted">Welcome to Manage Settings</small>
                </h2>
            </div>
        </div>
    </div>
     <!-- Tabs With Icon Title -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="body"> 
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#profile_with_icon_title" >1. General </a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_with_icon_title">2.  Mail Config </a></li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane in active" id="profile_with_icon_title">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <lable>Name</lable>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <lable>Maintanence mode</lable>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Maintanence mode">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <lable>Logo</lable>
                                    <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                        <div class="dz-message">
                                            <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> Drop files here or click to upload.</div>
                                        </div>
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div role="tabpanel" class="tab-pane" id="settings_with_icon_title"> 
                             <div class="row clearfix">
                                <div class="col-sm-6"> 
                                    <lable>SMTP Host</lable>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="SMTP Host">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <lable>SMTP User</lable>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="SMTP User">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <lable> SMTP Password</lable>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=" SMTP Password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <lable> SMTP Port</lable>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=" SMTP Port">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <lable> SMTP Timeout</lable>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=" SMTP Timeout">
                                    </div>
                                </div>
                                <div class="col-sm-6 inv" style="padding-left: 90%;" >
                                    <button class="btn finish-btn"  type="button">
                                        Finish
                                    </button>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- #END# Tabs With Icon Title -->
</section>

<script src="<?php echo base_url();?>assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js --> 