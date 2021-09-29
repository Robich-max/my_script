<?php include_once 'header.php'; ?>


	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(assets/images/bg4.jpg);background-position: center;">
		<h2 class="l-text2 t-center">
			<?php echo lang("lang_h33"); ?>
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">

				<div class="col-md-9 mx-auto p-b-30">

					<div class=content>
						
						<h3><?php echo lang("lang_h33"); ?></h3>
						<br>
						<br>

						<p>

							<?php echo $settings->about; ?>

						</p>

					</div>

										
				</div>
			</div>

		</div>
	</section>



<?php include_once 'footer.php'; ?>