<?php include_once 'pageheader.php'; ?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(assets/images/bg4.jpg);background-position: center;">
		<h2 class="l-text2 t-center">
			<?php echo lang("lang_h5"); ?>
		</h2>
	</section>
	<style type="text/css" media="screen">
		.s-text7 {

    color: #0e0b0b;

}
	</style>

	<!-- content page -->
	
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">

				
				<div class="col-md-6 mx-auto p-b-30">

				

					<?php echo $settings->map; ?>
				</div>
				<div class="col-md-6 mx-auto p-b-30">

					<?php echo $info->desc; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">

				<div class="col-md-6 mx-auto p-b-30">

					<?php

					if(isset($msg))
						echo $msg;

					?>

					<form class="leave-comment" method="post" action="">
						<h4 class="m-text26 p-b-36 p-t-15">
							<?php echo lang("lang_h39"); ?>
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="<?php echo lang("lang_h40"); ?>">
							<?php echo form_error("name", "<small class='red'>", "</small>"); ?><br>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" placeholder="<?php echo lang("lang_h41"); ?>">
							<?php echo form_error("phone", "<small class='red'>", "</small>"); ?><br>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="<?php echo lang("lang_h42"); ?>">
							<?php echo form_error("email", "<small class='red'>", "</small>"); ?><br>
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="msg" placeholder="<?php echo lang("lang_h43"); ?>"></textarea>
						<?php echo form_error("msg", "<small class='red'>", "</small>"); ?><br>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								<?php echo lang("lang_h44"); ?>
							</button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</section>



<?php include_once 'footer.php'; ?>