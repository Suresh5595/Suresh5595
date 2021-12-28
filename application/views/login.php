<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Compass Bootstrap4 Admin ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/authentication.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/color_skins.css">
	<style>
	.authentication .card-plain.card-plain {
		 background-color: #0f151a38;
		 padding: 10px 10px 10px 10px;
	 }
	 .input-group-addon i{
		 margin-left: 10px;
	 }
	</style>
</head>

<body class="theme-cyan authentication sidebar-collapse">
<div class="page-header">
    <div class="page-header-image" style="background-image:url(<?php echo base_url();?>assets/images/animation-bg.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="POST" action="<?php echo base_url();?>index.php/login/validation">
                    <div class="header">
                        <h5>Welcome...!</h5><small><?php echo project_name;?></small>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <input type="text" class="form-control" name="username" placeholder="Enter User Name" required autocomplete="off">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg">
                            <input type="password" placeholder="Password" name="password" class="form-control" required autocomplete="off"/>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <input type="submit" name="submit" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light" value="SIGN IN">
                        <h6 class="m-t-20"><a href="<?php echo base_url();?>index.php/login/forgot-password" class="link">Forgot Password?</a></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>Developed & Powered by  <a href="https://nexusglobalsolutions.com/" target="_blank">SMAR TECHNOLOGIES PRIVATE LIMITED</a></span>
            </div>
        </div>
    </footer>
</div>

<!-- Jquery Core Js -->
<script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap-notify/bootstrap-notify.js"></script> <!-- Bootstrap Notify Plugin Js -->

<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="<?php echo base_url();?>assets/js/pages/ui/notifications.js"></script>
<script>
$(document).ready(function(){ 
	<?php
	if($this->session->flashdata('alert')){ ?>
		  var text = "<?php echo $this->session->flashdata('alert');?>";
		  showNotification('alert-danger',text,'top','right','','');
    <?php
	}
	if($this->session->flashdata('success')){ ?>
		  var text = "<?php echo $this->session->flashdata('success');?>";
		  showNotification('alert-success',text,'top','right','','');
	<?php } ?>
});
//=============================================================================
$('.form-control').on("focus", function() {
    $(this).parent('.input-group').addClass("input-group-focus");
}).on("blur", function() {
    $(this).parent(".input-group").removeClass("input-group-focus");
});
</script>
</body>
</html>
