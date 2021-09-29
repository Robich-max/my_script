<?php include_once 'dynamic_top.php'; ?> 

      
       <table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
         <tr style="border-collapse:collapse;"> 
          <td align="center" style="padding:0;Margin:0;"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"> 
             <tr style="border-collapse:collapse;"> 
              <td align="left" style="Margin:0;padding-bottom:20px;padding-top:40px;padding-left:40px;padding-right:40px;"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="520" valign="top" align="center" style="padding:0;Margin:0;"> 
                  <?php echo $message_text; ?>
                   </td> 
                 </tr> 
               </table></td> 
             </tr> 

            <?php foreach($info as $key) :  ?>
             <tr style="border-collapse:collapse;"> 
              <td align="left" bgcolor="<?php echo $temp->order_confirm_color;?>" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;background-color:<?php echo $temp->order_confirm_color;?>;"> 
               <!--[if mso]><table dir="rtl" width="560" cellpadding="0" cellspacing="0"><tr><td dir="ltr" width="270" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="270" align="left" class="es-m-p20b" style="padding:0;Margin:0;"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="right" class="es-m-txt-c" style="padding:0;Margin:0;"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#FFFFFF;"><strong><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:24px;text-decoration:none;color:#FFFFFF;" href="<?php echo base_url("home/trackOrder") ?>?code=<?php echo $key->id; ?>"> #<?php echo $key->id; ?></a></strong></h2></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td dir="ltr" width="20"></td><td dir="ltr" width="270" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" align="left" class="es-left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="270" align="left" style="padding:0;Margin:0;"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="left" class="es-m-txt-c" style="padding:0;Margin:0;"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#FFFFFF;"><?php echo $temp->order_confirm;?> </h2></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 

             <?php

             $prds = json_decode($key->products, TRUE);

             foreach($prds as $k) {

              $prinfo = $this->m_p->s_a("products", array("id" => $k['id']), 1);

              foreach ($prinfo as $j) {
                $p = $j;
              }

              ?>
             <tr style="border-collapse:collapse;"> 
              <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;"> 
               <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="120" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="120" class="es-m-p20b" align="left" style="padding:0;Margin:0;"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="padding:0;Margin:0;font-size:0;"><a target="_blank" href="<?php echo base_url("$p->id"); ?>" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:14px;text-decoration:none;color:#9CD9C2;"><img class="adapt-img" src="<?php echo base_url("uploads"); ?>/<?php echo add_thumb($p->images); ?>" alt="<?php echo $p->title; ?>" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;" width="120" title="<?php echo $p->title; ?>"></a></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 

               <!--[if mso]></td><td width="20"></td><td width="420" valign="top"><![endif]-->

               <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="420" align="left" style="padding:0;Margin:0;"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:5px;"><h2 class="product-name" style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#6AA38B;"><?php echo $p->title; ?></h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="left" style="padding:0;Margin:0;"><h3 class="price" style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:18px;font-style:normal;font-weight:normal;color:#9CD9C2;"><?php if($p->discount == 0){ ?><span data-currencyName="usd"><?php if($c_type == "EUR"){ ?>  <?php echo  $p->price/1.44.'€'; }else{echo $p->price.'$'; }?> <?php }else { ?> <?php if($c_type == "EUR"){ echo  number_format(($p->price - ($p->price * $p->discount / 100))/1.440, 2) . '€';}else{ echo  number_format($p->price - ($p->price * $p->discount / 100), 2) . '$'; } ?> <?php } ?></span></h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="left" style="padding:0;Margin:0;padding-top:5px;padding-bottom:10px;"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;"> Quantité : <?php echo $k['q']; ?></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
            <?php } ?>

            <tr style="height: 20px;">
              
            </tr>

<!---->

            <tr style="border-collapse:collapse;"> 
              <td align="left" bgcolor="<?php echo $temp->total_color?>" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;background-color:<?php echo $temp->total_color;?>;"> 
               <!--[if mso]><table dir="rtl" width="560" cellpadding="0" cellspacing="0"><tr><td dir="ltr" width="270" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="270" align="left" class="es-m-p20b" style="padding:0;Margin:0;"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="right" class="es-m-txt-c" style="padding:0;Margin:0;"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#FFFFFF;"><strong><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:24px;text-decoration:none;color:#FFFFFF;" href=""><span data-currencyName="usd"> 
                      <?php echo $exp; ?></span></a></strong></h2></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td dir="ltr" width="20"></td><td dir="ltr" width="270" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" align="left" class="es-left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="270" align="left" style="padding:0;Margin:0;"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="left" class="es-m-txt-c" style="padding:0;Margin:0;"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#FFFFFF;">Livraison</h2></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
<!---->

            <tr style="border-collapse:collapse;"> 
              <td align="left" bgcolor="<?php echo $temp->total_color;?>" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;background-color:<?php echo $temp->total_color;?>;"> 
               <!--[if mso]><table dir="rtl" width="560" cellpadding="0" cellspacing="0"><tr><td dir="ltr" width="270" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="270" align="left" class="es-m-p20b" style="padding:0;Margin:0;"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="right" class="es-m-txt-c" style="padding:0;Margin:0;"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#FFFFFF;"><strong><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:24px;text-decoration:none;color:#FFFFFF;" href=""><span data-currencyName="usd"> 
                      <?php echo $tot; // if($c_type=="EUR"){ echo   number_format($key->totalPrice/1.44,2).'€';}else { ?><?php //echo $key->totalPrice . '$';} ?></span></a></strong></h2></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td dir="ltr" width="20"></td><td dir="ltr" width="270" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" align="left" class="es-left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="270" align="left" style="padding:0;Margin:0;"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="left" class="es-m-txt-c" style="padding:0;Margin:0;"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#FFFFFF;">Total</h2></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
             <tr style="border-collapse:collapse;"> 
              <td align="left" style="Margin:0;padding-left:20px;padding-right:20px;padding-top:40px;padding-bottom:40px;"> 
               <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="560" align="center" valign="top" style="padding:0;Margin:0;"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="padding:0;Margin:0;"> 
                       <span class="msohide es-button-border" style="border-style:solid;border-color:<?php echo $temp->explore_color;?>;background:<?php echo $temp->explore_color;?>;border-width:3px;display:inline-block;border-radius:0px;width:auto;mso-hide:all;"><a href="<?php echo $temp->explore_link; ?>" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:14px;color:#FFFFFF;border-style:solid;border-color:<?php echo $temp->explore_color;?>;border-width:15px 45px 15px 50px;display:inline-block;background:<?php echo $temp->explore_color;?>;border-radius:0px;font-weight:bold;font-style:normal;line-height:17px;width:auto;text-align:center;"><?php echo $temp->explore_text;?></a></span> 
                       </td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 

           </table></td> 
         </tr> 
       </table>

      <?php endforeach; ?>


<?php include_once 'bottom_dynamic.php'; ?>
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
