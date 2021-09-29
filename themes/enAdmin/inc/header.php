<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta http-equiv="Content-Language" content="en-us">
	<base href="<?php echo base_url(); ?>themes/enAdmin/">


	<title>HB Admin - V 2.0</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/dropzone/dropzone.css">
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
	<link href="css/hobrt.css" rel="stylesheet">


	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<style type="text/css" media="screen">
	.tox-notifications-container{
	display: none;
}	
	</style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/tinymce.min.js" referrerpolicy="origin"></script>

	<script type="text/javascript">
		<?php
			$fmt = numfmt_create( 'en_US', NumberFormatter::CURRENCY );
			$currency = setting("currency");
		?>

		var base_url = "<?php echo base_url(); ?>";
		var Currency = "<?=$currency;?>"
	</script>

<script src="https://www.amcharts.com/lib/3/ammap.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldHigh.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>


</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url("admin"); ?>">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">HB Admin <sup>V2.0</sup></div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url("admin"); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider">

				<!-- Heading -->
				<div class="sidebar-heading">
					Interface
				</div>

				<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwos" aria-expanded="true" aria-controls="collapseTwos">
						<i class="fas fa-fw fa-cog"></i>
						<span>admin Setting</span>
					</a>
					<div id="collapseTwos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item" href="<?php echo base_url("admin/topBarSetting") ?>">Top Bar</a>
							<a class="collapse-item" href="<?php echo base_url("admin/menuSettingTwo") ?>">Header Menu</a>
							<a class="collapse-item" href="<?php echo base_url("admin/slidsBarSetting") ?>">Slids Bar</a>
							<a class="collapse-item" href="<?php echo base_url("admin/allbackgroundSetting") ?>">All Background</a>
							<a class="collapse-item" href="<?php echo base_url("admin/barInfoSlids") ?>">Bar Info slids</a>
							<a class="collapse-item" href="<?php echo base_url("admin/homeSlider") ?>">Home slider</a>
							
						</div>
					</div>
				</li>
				
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo2">
						<i class="fas fa-fw fa-cog"></i>
						<span>Banner Setting</span>
					</a>
					<div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item" href="<?php echo base_url("admin/bannerOneSetting") ?>">Banner One</a>
						
							<a class="collapse-item" href="<?php echo base_url("admin/bannerThreeSetting") ?>">Banner Three</a>
							
							<a class="collapse-item" href="<?php echo base_url("admin/bannerFiveSetting") ?>">Banner Five</a>
						</div>
					</div>
				</li>
				
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<i class="fas fa-fw fa-cog"></i>
						<span><?php echo lang("admin_h1"); ?></span>
					</a>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header"><?php echo lang("admin_h1"); ?>:</h6>
							<a class="collapse-item" href="<?php echo base_url("admin/products") ?>"><?php echo lang("admin_h2"); ?></a>
							<a class="collapse-item" href="<?php echo base_url("admin/add_product") ?>"><?php echo lang("admin_h3"); ?></a>
						</div>
					</div>
				</li>

				<!-- Nav Item - Utilities Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
						<i class="fas fa-fw fa-wrench"></i>
						<span><?php echo lang("admin_h4"); ?></span>
					</a>
					<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header"><?php echo lang("admin_h4"); ?>:</h6>
						


							<a class="collapse-item" href="<?php echo base_url("admin/ordersInfo"); ?>">Order Info</a>


							
						</div>
					</div>
				</li>

				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="true" aria-controls="collapseTwo3">
						<i class="fas fa-fw fa-cog"></i>
						<span>Menu/<?php echo lang("admin_h11"); ?>/sub..</span>
					</a>
					<div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							
							<a class="collapse-item" href="<?php echo base_url("admin/addMenu") ?>">Add Menu</a>
							<a class="collapse-item" href="<?php echo base_url("admin/cat"); ?>"><?php echo lang("admin_h12"); ?></a>
							<a class="collapse-item" href="<?php echo base_url("admin/add_cat"); ?>"><?php echo lang("admin_h13"); ?></a>
						    <a class="collapse-item" href="<?php echo base_url("admin/subCat") ?>">Add New Sub Category</a>

						</div>
					</div>
				</li>

				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo31" aria-expanded="true" aria-controls="collapseTwo31">
						<i class="fas fa-fw fa-arrow-down"></i>
						<span>Discounts </span>
					</a>
					<div id="collapseTwo31" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header">Discounts:</h6>
							<a class="collapse-item" href="<?php echo base_url("admin/discounts"); ?>">Coupons list</a>
							<a class="collapse-item" href="<?php echo base_url("admin/add_discount"); ?>">Add coupon</a>
						</div>
					</div>
				</li>
				<!-- Divider -->
				<hr class="sidebar-divider">

				<!-- Heading -->
				<div class="sidebar-heading">
					Addons
				</div>

				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
						<i class="fas fa-fw fa-folder"></i>
						<span><?php echo lang("admin_h16"); ?></span>
					</a>
					<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item" href="<?php echo base_url("admin/pages"); ?>"><?php echo lang("admin_h20"); ?></a>
							<a class="collapse-item" href="<?php echo base_url("admin/add_page"); ?>"><?php echo lang("admin_h21"); ?></a>
							<a class="collapse-item" href="<?php echo base_url("admin/blogPage"); ?>">Blog Page</a>
							<a class="collapse-item" href="<?php echo base_url("admin/faqPage"); ?>">Faq Page</a>
							<a class="collapse-item" href="<?php echo base_url("admin/contactPage"); ?>">Contact Page</a>
						</div>
					</div>
				</li>

			
			
				
				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesaaa" aria-expanded="true" aria-controls="collapsePagesaaa">
						<i class="fas fa-fw fa-folder"></i>
						<span>Emails/slids/shipping ...</span>
					</a>
					<div id="collapsePagesaaa" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item" href="<?php echo base_url("admin/slids"); ?>">Slids</a>
							<a class="collapse-item" href="<?php echo base_url("admin/customerReviews") ?>">Customer Reviews</a>

							<a class="collapse-item" href="<?php echo base_url("admin/productReviews") ?>">Product Reviews</a>
							<a class="collapse-item" href="<?php echo base_url("admin/slider"); ?>">Home reviews</a>
							<a class="collapse-item" href="<?php echo base_url("admin/importReviews"); ?>">Import reviews</a>
							
							<a class="collapse-item" href="<?php echo base_url("admin/shipping"); ?>">Shipping methods</a>
							<a class="collapse-item" href="<?php echo base_url("admin/thanksPage"); ?>">Thanks page</a>
							<a class="collapse-item" href="<?php echo base_url("admin/responces"); ?>">Thanks page responses</a>
							<a class="collapse-item" href="<?php echo base_url("admin/upload_images"); ?>">Upload images</a>
						</div>
					</div>
				</li>


				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesa" aria-expanded="true" aria-controls="collapsePagesa">
						<i class="fas fa-fw fa-folder"></i>
						<span><?php echo lang("admin_h18"); ?></span>
					</a>
					<div id="collapsePagesa" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item" href="<?php echo base_url("admin/admins"); ?>"><?php echo lang("admin_h22"); ?></a>
							<a class="collapse-item" href="<?php echo base_url("admin/add_admin"); ?>"><?php echo lang("admin_h23"); ?></a>
							<a class="collapse-item" href="<?php echo base_url("admin/customers") ?>">Customer Info</a>
						</div>
					</div>
				</li>



				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesa20" aria-expanded="true" aria-controls="collapsePagesa">
						<i class="fas fa-fw fa-folder"></i>
						<span>Email Setting</span>
					</a>
					<div id="collapsePagesa20" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							
							<a class="collapse-item" href="<?php echo base_url("admin/emailConfig") ?>">Email config</a>


							<a class="collapse-item" href="<?php echo base_url("admin/welcomeEmail") ?>">Welcome Email</a>


							<a class="collapse-item" href="<?php echo base_url("admin/promotionEmail") ?>">Promotion Email</a>



							<a class="collapse-item" href="<?php echo base_url("admin/abandonEmail") ?>">Abandon Email</a>


							<a class="collapse-item" href="<?php echo base_url("admin/abandonEmailTwo") ?>">Abandon Email Two</a>


							<a class="collapse-item" href="<?php echo base_url("admin/abandonEmailThree") ?>">Abandon Email Three</a>


							<a class="collapse-item" href="<?php echo base_url("admin/abandonEmailFour") ?>">Abandon Email Four</a>

							<a class="collapse-item" href="<?php echo base_url("admin/email_templates"); ?>">Other Emails Text</a>
							<a class="collapse-item" href="<?php echo base_url("admin/order_email_templates"); ?>">Order Emails Text</a>

						</div>
					</div>
				</li>

				<!-- Nav Item - Charts -->
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url("admin/setting"); ?>">
						<i class="fas fa-fw fa-chart-area"></i>
						<span><?php echo lang("admin_h19"); ?></span>
					</a>
				</li>


					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">

					<!-- Sidebar Toggler (Sidebar) -->
					<div class="text-center d-none d-md-inline">
						<button class="rounded-circle border-0" id="sidebarToggle"></button>
					</div>

				</ul>
    <!-- End of Sidebar -->