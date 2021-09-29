<?php include_once 'header.php'; ?>


	   
		<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(assets/images/bg4.jpg);background-position: center;">
		<h2 class="l-text2 t-center">
			<?php echo lang("lang_h16"); ?>
		</h2>
		<p class="m-text13 t-center">
			<?php echo lang("lang_h17"); ?>
		</p>
	</section>



	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-12 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">


							<?php

							$options1 = array(
								"default" 		=> lang("lang_h18"),
								"popularity" 	=> lang("lang_h19"),
								"lowtohigh" 	=> lang("lang_h20"),
								"highttolow" 	=> lang("lang_h21")
							);

							$options2 = array(

								"" 				=> lang("lang_h22"),
								"0-50" 			=> "$0.00 - $50.00",
								"50-100" 		=> "$50.00 - $100.00",
								"100-150" 		=> "$100.00 - $150.00",
								"150-200" 		=> "$150.00 - $200.00",
								"200" 			=> "$200.00+"

							);

							$js1 = array(
								'id'       => 'pricerange',
								'class' => 'selection-2'
							);

							$js2 = array(
								'id'       => 'sorting',
								'class' => 'selection-2'
							);

							?>


							<form action="" id="sortingForm">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<?php echo form_dropdown("sorting", $options1, $this->input->get("sorting"), $js2); ?>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<?php echo form_dropdown("pricerange", $options2, $this->input->get("pricerange"), $js1); ?>
							</div>

							</form>

						</div>

						<span class="s-text8 p-t-5 p-b-5">
							<?php echo lang("lang_h23"); ?> 1–<?php echo count($products); ?> <?php echo lang("lang_h24"); ?> <?php echo count($products); ?> <?php echo lang("lang_h25"); ?>
						</span>
					</div>

					<!-- Product -->
					<div class="row">

						<?php foreach($products as $p) : ?>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative <?php if($p->discount != 0){ ?> block2-labelsale <?php } ?>">
									<a href="<?php echo base_url("$p->id"); ?>"><img src="uploads/<?php echo add_thumb($p->images , "_m") ?>" alt="<?php echo $p->title; ?>"></a>

									
								</div>

								<div class="block2-txt p-t-20">
									<a href="<?php echo base_url("$p->id"); ?>" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $p->title; ?>
									</a>
									
								
									<div>
										<?php show_reviews(get_vote_avg($p->id)); ?> (<?php echo $this->m_p->get_num("reviews", array("product" => $p->id)); ?> avis)
									</div>

									<?php if($p->discount == 0){ ?>
										<span class="block2-price m-text6 p-r-5 currency" data-currencyName="usd">
											<?php echo $p->price; ?>
										</span>
									<?php }else{ ?>
										<span class="block2-oldprice m-text7 p-r-5 currency" data-currencyName="usd">
											<?php echo $p->price; ?>
										</span>

										<span class="block2-newprice m-text8 p-r-5 currency" data-currencyName="usd">>
											<?php echo number_format($p->price - ($p->price * $p->discount / 100), 2); ?>
										</span>

									<?php } ?>
								</div>
							</div>
						</div>

						<?php endforeach; ?>

					</div>
				</div>
			</div>
		</div>
	</section>



<?php include_once 'footer.php'; ?>


<script type="text/javascript">



	$("#sorting").change(function() {

		$("#sortingForm").submit();

	});

	$("#pricerange").change(function() {

		$("#sortingForm").submit();

	});



</script>