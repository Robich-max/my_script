<style>
	.btn-back-to-top {
		right: 86px;
		bottom: 70px;
	}
</style>
<!-- Footer -->
<footer class="footer-bg p-b-43 p-l-45 p-r-45">
	<div class="flex-w">
		<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30 footer-headline">
				<?php echo lang("lang_h87"); ?>
			</h4>

			<div>
				<p class="s-text7 w-size27 footer-text">
					<?php echo $settings->header; ?>
				</p>

			</div>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30 footer-headline">
				<?php echo $settings->footer_column_one; ?>
			</h4>

			<?php
			$cats = $this->m_p->s_a("cats", array("footer" => 1, "footer_column" => 0), FALSE);


			$menus = $this->m_p->s_a("mainmenu", array("footer" => 1, "active_status" => 1, "single" => 1, "footer_column" => 0));

			?>


			<ul>
				<?php if ($cats) { ?>
					<?php foreach ($cats as $cat) { ?>
						<li class="p-b-9">
							<a href="category/<?php echo $cat->id; ?>" class="s-text7 footer-text">
								<?php echo $cat->title; ?>
							</a>
						</li>

					<?php } ?>
				<?php } ?>

				<?php if ($menus) { ?>
					<?php foreach ($menus as $menu) { ?>
						<li class="p-b-9">
							<a href="<?php echo base_url("page/$menu->id"); ?>" class="s-text7 footer-text">
								<?php echo $menu->name; ?>
							</a>
						</li>

					<?php } ?>
				<?php } ?>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30 footer-headline">
				<?php echo lang("lang_h32"); ?>
			</h4>

			<?php
			$catstwo = $this->m_p->s_a("cats", array("footer" => 1, "footer_column" => 1), FALSE);


			$menustwo = $this->m_p->s_a("mainmenu", array("footer" => 1, "active_status" => 1, "single" => 1, "footer_column" => 1));

			?>

			<ul>
				<li class="p-b-9">
					<a href="<?php echo base_url("home/trackOrder"); ?>" class="s-text7 footer-text">
						<?php echo $settings->footer_column_two; ?>
					</a>
				</li>

				<?php if ($catstwo) { ?>
					<?php foreach ($catstwo as $cat) { ?>
						<li class="p-b-9">
							<a href="category/<?php echo $cat->id; ?>" class="s-text7 footer-text">
								<?php echo $cat->title; ?>
							</a>
						</li>

					<?php } ?>
				<?php } ?>

				<?php if ($menustwo) { ?>
					<?php foreach ($menustwo as $menu) { ?>
						<li class="p-b-9">
							<a href="<?php echo base_url("page/$menu->id"); ?>" class="s-text7 footer-text">
								<?php echo $menu->name; ?>
							</a>
						</li>

					<?php } ?>
				<?php } ?>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30 footer-headline">
				<?php echo $settings->footer_column_three; ?>
			</h4>

			<?php
			$catstr = $this->m_p->s_a("cats", array("footer" => 1, "footer_column" => 2), FALSE);


			$menustr = $this->m_p->s_a("mainmenu", array("footer" => 1, "active_status" => 1, "single" => 1, "footer_column" => 2));

			?>

			<ul>
				<?php if ($catstr) { ?>
					<?php foreach ($catstr as $cat) { ?>
						<li class="p-b-9">
							<a href="category/<?php echo $cat->id; ?>" class="s-text7 footer-text">
								<?php echo $cat->title; ?>
							</a>
						</li>

					<?php } ?>
				<?php } ?>

				<?php if ($menustr) { ?>
					<?php foreach ($menustr as $menu) { ?>
						<li class="p-b-9">
							<a href="<?php echo base_url("page/$menu->id"); ?>" class="s-text7 footer-text">
								<?php echo $menu->name; ?>
							</a>
						</li>

					<?php } ?>
				<?php } ?>

			</ul>
		</div>

		<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30 footer-headline">
				<?php echo lang("lang_h37"); ?>
			</h4>

			<form class="row">
				<div class="effect1 col-7">
					<input class="s-text7 bg6 w-full p-b-5" type="text" id="email_subs" name="email" placeholder="email@example.com" style="height: 45px;">
					<span class="effect1-line"></span>
				</div>

				<div class="col-5">
					<!-- Button -->
					<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4 subscribe-button" onclick="subscribe(event);">
						S'inscrire </button>
				</div>

			</form>


			<div class="p-t-30 center">
				<a href="<?php echo $settings->fb; ?>" target="_blanck" class="fs-18 color1 p-r-20 fa fa-facebook facebook-class"></a>
				<a href="<?php echo $settings->ig; ?>" target="_blanck" class="fs-18 color1 p-r-20 fa fa-instagram instagram-class"></a>
				<a href="<?php echo $settings->tw; ?>" target="_blanck" class="fs-18 color1 p-r-20 fa fa-twitter facebook-class"></a>
			</div>
		</div>
	</div>

	<div class="t-center p-l-15 p-r-15">
		<a>
			<img class="h-size2" src="assets/images/icons/paypal.png" alt="IMG-PAYPAL">
		</a>

		<a>
			<img class="h-size2" src="assets/images/icons/visa.png" alt="IMG-VISA">
		</a>

		<a>
			<img class="h-size2" src="assets/images/icons/mastercard.png" alt="IMG-MASTERCARD">
		</a>

		<a>
			<img class="h-size2" src="assets/images/icons/express.png" alt="IMG-EXPRESS">
		</a>

		<a>
			<img class="h-size2" src="assets/images/icons/discover.png" alt="IMG-DISCOVER">
		</a>
		<br>
		<div class="col-md-12 s-text7 footer-text" style="font-size: 12px;">

			<?php echo $settings->footer_text; ?> <a href="" class="s-text7 footer-text" target="_blanck"></a>
		</div>

	</div>
</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>

<?php if (is_null(get_cookie("accept_cookies"))) { ?>
	<style>
		.cookies-accept {
			background: #aaa;
			opacity: .8;
			line-height: 38px;
			position: fixed;
			bottom: 0;
			z-index: 9;
			width: 100vw;
			padding: 21px 8%;
		}

		.cookies-accept div {
			font-size: 12px;

		}
	</style>

	<div class="cookies-accept row">

		<div class="col-md-10">
			<a href="www.webcodecare.com" data-toggle="modal" data-target="#exampleModal" style="font-size: 12px;"><?php echo $settings->cookiesText; ?> </a>

		</div>

		<div class="col-md-2 text-center">
			<button class="btn btn-success mr-auto" onclick="acceptCookies();"><?php echo lang("lang_h74"); ?></button>
		</div>



	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo lang("lang_h77"); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="<?php echo lang("lang_h75"); ?>">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo $settings->cookiesPage; ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo lang("lang_h75"); ?></button>
					<button type="button" class="btn btn-primary" onclick="acceptCookies();"><?php echo lang("lang_h74"); ?></button>
				</div>
			</div>
		</div>
	</div>

<?php } ?>

<!--===============================================================================================-->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="assets/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="assets/vendor/select2/select2.min.js"></script>
<script type="text/javascript">
	$(".selection-1").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect1')
	});

	$(".selection-2").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect2')
	});
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="assets/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="assets/vendor/countdowntime/countdowntime.js"></script>

<script src="<?php echo base_url("home/js"); ?>"></script>
<!--===============================================================================================-->
<!-- 	<script type="text/javascript" src="assets/vendor/lightbox2/js/lightbox.min.js"></script> -->
<!--===============================================================================================-->
<script type="text/javascript" src="assets/vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript" src="assets/js/slick.min.js"></script>

<script src="assets/js/script.js"></script>

<script type="text/javascript">
	$('.variable-width').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		centerMode: true,
		variableWidth: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fa fa-arrow-right"></i></button>'
	});

	$('.multiple-items').slick({
		infinite: true,
		dots: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		prevArrow: '',
		autoplay: true,
		autoplaySpeed: 1500,
		nextArrow: '',
		responsive: [{
			breakpoint: 650,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				infinite: true
			}
		}]
	});


	$('.block2-btn-addcart').each(function() {
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function() {
			swal(nameProduct, "is added to cart !", "success");
		});
	});

	$('.block2-btn-addwishlist').each(function() {
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function() {
			swal(nameProduct, "is added to wishlist !", "success");
		});
	});


	$(document).on('click', ".btn-addcart-product-detail", function() {



		var upsels = $(this).data('upsels');


		var nameProduct = $('.product-detail-name').html();

		var dataForm = $("#productInfo").serialize();

		if (upsels > 0)
			$(".bd-example-modal-lg").modal("show");

		addToCart(dataForm, nameProduct);

		return false;
	});


	<?php if ($products) { ?>
		<?php foreach ($products as $pt => $p) : ?>
			$(document).on('click', ".btn-addcart-product-details<?php echo $pt; ?>", function() {



				var upsels = $(this).data('upsels');

				var nameProduct = $('.product-detail-name<?php echo $pt; ?>').html();

				var dataForm = $("#productInfo<?php echo $pt; ?>").serialize();



				if (upsels > 0)
					$(".bd-example-modal-lg").modal("show");

				addToCart(dataForm, nameProduct);

				return false;
			});
		<?php endforeach; ?>
	<?php }; ?>

	function acceptCookies() {
		$.post(base_url + "ajax/accept_cookies", {}, function(d) {
			$("#exampleModal").modal("hide");
			$(".cookies-accept").remove();
		})
	}

	function addToCartUpSell(t, id, nameProduct, q, uid) {
		$.ajax({

			url: base_url + "ajax/addToCartUpSell",
			type: 'post',
			data: {
				id: id,
				q: q,
				uid: uid,
			},
			dataType: "JSON",
			success: function(data) {
				if (data.suc == 1) {

					UpdateCartHeader();

					swal(nameProduct, "<?php echo lang("lang_h85"); ?>", "success");

					$(t).parent().remove();
				} else
					swal(nameProduct, "<?php echo lang("lang_h86"); ?>  : " + data, "warning");
			}
		})

	}

	function subscribe(e) {

		e.preventDefault();

		var email = $('#email_subs').val();

		$.post(base_url + "ajax/subs", {
			email: email
		}, function(data) {

			if (data == 1) {
				swal("<?php echo lang("lang_h78") ?>", "<?php echo lang("lang_h79") ?> .", "success");
			} else if (data == 3) {
				swal("<?php echo lang("lang_h80") ?>", "<?php echo lang("lang_h81") ?>", "error");
			} else if (data == 2) {
				swal("<?php echo lang("lang_h82") ?> !", "<?php echo lang("lang_h83") ?>.", "warning");
			} else {
				swal("<?php echo lang("lang_h78") ?>", "<?php echo lang("lang_h84") ?> .", "error");
			}

		})

		return false;

	}
</script>

<script type="text/javascript">
	$('#set-currency').on('change', function() {
		var selected = $(this).val();

		$.ajax({
			url: base_url + "home/setcurrency",
			type: 'post',
			data: {
				id: selected,
				q: 1
			},
			dataType: "JSON",
		})
	});
</script>

<script type="text/javascript">
	var selector = document.getElementById("currencySelector");
	var selectorData = document.getElementById("currencySelector1");

	var currencyElements = document.getElementsByClassName("currency");
	var usdChangeRate = {
		EUR: 1.4407,
		USD: 1.0
	};


	selector.onchange = function() {
		var toCurrency = selector.value.toUpperCase();

		for (var i = 0, l = currencyElements.length; i < l; ++i) {
			var
				el = currencyElements[i];
			var fromCurrency = el.getAttribute("data-currencyName").toUpperCase();

			if (fromCurrency in usdChangeRate) {
				var
					// currency change to usd
					fromCurrencyToUsdAmount = parseFloat(el.innerHTML) * usdChangeRate[fromCurrency];
				console.log(parseInt(el.innerHTML, 10) + fromCurrency + "=" + fromCurrencyToUsdAmount + "USD");
				var
					// change to currency unit selected
					toCurrenyAmount = fromCurrencyToUsdAmount / usdChangeRate[toCurrency];

				var num = toCurrenyAmount;
				var n = num.toFixed(2);


				// el.innerHTML = n + "<span>" + toCurrency.toUpperCase() + "</span>";
				if (toCurrency == 'EUR') {
					el.innerHTML = n + "€";

				} else {
					el.innerHTML = n + "$";
				}



				el.setAttribute("data-currencyName", toCurrency);

			}
		}
		if (typeof(Storage) !== "undefined") {
			// Store
			localStorage.setItem("currency", toCurrency);
			// Retrieve
			document.getElementById("result").innerHTML = localStorage.getItem("currency");
		} else {
			document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
		}

	};



	$('#currencySelector1').on('change', function() {
		
		var toCurrency = selectorData.value.toUpperCase();

		for (var i = 0, l = currencyElements.length; i < l; ++i) {
			var
				el = currencyElements[i];
			var fromCurrency = el.getAttribute("data-currencyName").toUpperCase();

			if (fromCurrency in usdChangeRate) {
				var
					// currency change to usd
					fromCurrencyToUsdAmount = parseFloat(el.innerHTML) * usdChangeRate[fromCurrency];
				console.log(parseInt(el.innerHTML, 10) + fromCurrency + "=" + fromCurrencyToUsdAmount + "USD");
				var
					// change to currency unit selected
					toCurrenyAmount = fromCurrencyToUsdAmount / usdChangeRate[toCurrency];

				var num = toCurrenyAmount;
				var n = num.toFixed(2);


				// el.innerHTML = n + "<span>" + toCurrency.toUpperCase() + "</span>";
				if (toCurrency == 'EUR') {
					el.innerHTML = n + "€";

				} else {
					el.innerHTML = n + "$";
				}



				el.setAttribute("data-currencyName", toCurrency);

			}
		}
		if (typeof(Storage) !== "undefined") {
			// Store
			localStorage.setItem("currency", toCurrency);
			// Retrieve
			document.getElementById("result").innerHTML = localStorage.getItem("currency");
		} else {
			document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
		}
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		var data = localStorage.getItem("currency");
		var data2 = localStorage.getItem("currency");


		if (data2 == 'EUR') {
			$("#currencySelector1 option[value=eur]").attr('selected', 'selected').change();
		} else {
			$("#currencySelector1 option[value=usd]").attr('selected', 'selected').change();
		}

		if (data == 'EUR') {
			$("#currencySelector option[value=eur]").attr('selected', 'selected').change();
		} else {
			$("#currencySelector option[value=usd]").attr('selected', 'selected').change();
		}


	});
</script>
<!--===============================================================================================-->
<script src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/index3bd7.js"></script>
<!-- GetButton.io widget -->
<script type="text/javascript">
	var Tawk_API = Tawk_API || {},
		Tawk_LoadStart = new Date();
	(function() {
		var s1 = document.createElement("script"),
			s0 = document.getElementsByTagName("script")[0];
		s1.async = true;
		s1.src = 'https://embed.tawk.to/5f38eed04c7806354da6baeb/default';
		s1.charset = 'UTF-8';
		s1.setAttribute('crossorigin', '*');
		s0.parentNode.insertBefore(s1, s0);
	})();
</script>

<!-- /GetButton.io widget -->
<script>
	if ($(window).width() < 500) {
		$(".J_scrollFun").removeClass("J_scrollFun");
	}
</script>
<script>
	function changeImageFunction(image) {

		let counterIndex = 0;
		$('.selectors').find('a').each(function() {
			let link = $(this).attr('href')
			let ary = link.split('/');
			let filename = ary[ary.length - 1];

			filename = filename.trim();
			image = image.trim();

			if (image == filename) {
				MagicZoom.switchTo('Zoom-1', counterIndex);
			}
			counterIndex++


		});

		// if (image) {
		// MagicZoom.switchTo('Zoom-1', 3);
		// }
	}
</script>

</body>

</html>



<script>
	$(document).ready(function() {

		function abandonEmailSend() {
			$.ajax({
				url: '<?php echo base_url("web/abandonEmailSend"); ?>',
				method: 'get',
				dataType: 'html',
				data: '',



			}, 5000);

		}

		function abandonEmailTwoSend() {
			$.ajax({
				url: '<?php echo base_url("web/abandonEmailTwoSend"); ?>',
				method: 'get',
				dataType: 'html',
				data: '',



			}, 5000);

		}

		function abandonEmailThreeSend() {
			$.ajax({
				url: '<?php echo base_url("web/abandonEmailThreeSend"); ?>',
				method: 'get',
				dataType: 'html',
				data: '',



			}, 5000);

		}

		function abandonEmailFourSend() {
			$.ajax({
				url: '<?php echo base_url("web/abandonEmailFourSend"); ?>',
				method: 'get',
				dataType: 'html',
				data: '',



			}, 5000);

		}

		refresh_timer = setInterval(abandonEmailSend, 5000);
		refresh_timer = setInterval(abandonEmailTwoSend, 5000);
		refresh_timer = setInterval(abandonEmailThreeSend, 5000);
		refresh_timer = setInterval(abandonEmailFourSend, 5000);

	});
	$(document).ready(function() {
		var data = localStorage.getItem("currency");

		if (data == 'EUR') {
			$("#currencySelector option[value=eur]").attr('selected', 'selected').change();
		} else {
			$("#currencySelector option[value=usd]").attr('selected', 'selected').change();
		}


	});
</script>
 