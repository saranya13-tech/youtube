<style type="text/css">
	.imglogo{
		width:100px;
		hight:50px;
	}
</style>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Favourite Space</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>templates/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>templates/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>templates/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>templates/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url()?>templates/assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>templates/assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url()?>templates/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>templates/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>templates/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url()?>templates/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>templates/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<style>
.card {
  box-shadow: 0 0 0 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width:15%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


</style>
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->

<div class="logo">
<div class="card pull-right">
<div class="m-card-user__pic">
																<img src="<?php echo base_url()?>templates/demo3/assets/app/media/img/users/profile.png" width="70" height="70" />
															</div>
                              <a href="<?php echo base_url().'home/profile'?>" class="btn ">
																	Profile
																	</a>
                                  <a href="<?php echo base_url().'login/logout'?>" class="btn ">
																		Logout
																	</a> 
  
</div>

	<h2>My Favourites</h2>
	<a href="<?php echo base_url().'home/add'?>">
			
			<button type="submit" class="btn red">
			Add New <i class="m-icon-swapright m-icon-white"></i>
			</button>
			</a>
   								
										
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->

<div>

<?php foreach($userdetails as $value){?>
  <a class="btn delete_button" title="delete" href="home/delete?id=<?php echo $value->id; ?>" onclick="return confirm(\'Are you sure you want to delete this item?\');"><i class="fa fa-trash-o"></i> </a>
     
<iframe width="250" height="200"
src="<?php echo $value->video_url;?>">
</iframe>


<?php }?>
</div>

<script src="<?php echo base_url()?>templates/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>templates/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>templates/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>templates/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>templates/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>templates/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url()?>templates/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>templates/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>templates/assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url()?>templates/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>templates/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>templates/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>templates/assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
  Login.init();
  Demo.init();
       // init background slide images
       $.backstretch([
        "<?php echo base_url()?>templates/assets/admin/pages/media/bg/1.jpg",
       
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
