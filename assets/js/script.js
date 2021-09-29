var reduction = 0;

function addToCart(dataForm, nameProduct) {

	

	$.ajax({
		url : base_url + "ajax/addToCart",
		type : 'post',
		data : dataForm,
		dataType : "JSON",
		success : function(data) {
			if(data.suc == 1){

				UpdateCartHeader();

				// var class1 = ".cartItem"+ data.info.id;

				// var isal = $(class1);

				// if(isal.length){

				// 	var newQ = parseInt(isal.first().text()) + 1;

				// 	$(class1).text(newQ);

				// }else {

				// 	var appHtml = '<li class="header-cart-item">'+
				// 						'<div class="header-cart-item-img">'+
				// 							'<img src="uploads/'+ data.info.img +'" alt="IMG">'+
				// 						'</div>'+

				// 						'<div class="header-cart-item-txt">'+
				// 							'<a href="#" class="header-cart-item-name">'+ data.info.name +
				// 							'</a>'+

				// 							'<span class="header-cart-item-info">'+data.info.q+' x $'+data.info.price+
				// 							'</span>'+
				// 						'</div>'+
				// 					'</li>';


				// 	$(".header-cart-wrapitem").append(appHtml);

				//}

				if(typeof fbq !== 'undefined')
					fbq('track', 'AddToCart');

				swal(nameProduct, lang_h115, "success");
			}
			else
				swal(nameProduct, lang_h116 +" "+ data, "warning");
		}
	})
}


function deleteFromCart(hada, id, tp = 1)
{

	$.ajax({
		url : base_url + "ajax/deleteFromCart",
		type : 'post',
		data : {id : id},
		dataType : "JSON",
		success : function(data) {
			if(data == 1){
				if(tp == 1)
					$(hada).parent().parent().remove();
				else if(tp == 3)
					$(hada).parent().parent().remove();
				else{
					$(hada).parent().parent().parent().remove();
					calculation();
				}

				swal(lang_h118, lang_h117, "success");

				UpdateCartHeader();
			}
			else
				swal("delete", lang_h116 + " "+ data, "warning");
		}
	})

}

$(".shippingChange").click(function() {

	calculation();
})

function calculation() {

var   selector = document.getElementById("currencySelector");
 var   selectorData = document.getElementById("currencySelector1");

var  toCurrency = selector.value.toUpperCase();
var  toCurrencyTwo = selectorData.value.toUpperCase();

	$.ajax({

		url: base_url + "ajax/getTotal",
		type: "get",
		data: {},
		dataType: "html",
		success: function(data) {


let mql = window.matchMedia('(max-width: 991px)');


			dataInfo = parseFloat(data);


			if(dataInfo >= 0){

		

if(mql.matches){
	if(toCurrencyTwo == 'EUR'){


				dataone=dataInfo/1.4407;


			
				$(".subtotalText").text(dataone.toFixed(2));

				var shippinginfo = $("input[name='shipping']:checked").data("price");

				shipping= shippinginfo / 1.4407;

				$(".shippingText").text(shipping.toFixed(2));
				var total = parseFloat(shipping) + dataone;
	
				if(reduction > 0)
					total = total - total * reduction / 100;
              
            			
 

			$(".totalText").text(total.toFixed(2));

				
			}

			if(toCurrencyTwo == 'USD'){


					datatwo=dataInfo;

		
				$(".subtotalText").text(datatwo.toFixed(2));

				var shippinginfo = $("input[name='shipping']:checked").data("price");

				shipping= shippinginfo;

				$(".shippingText").text(shipping.toFixed(2));
				var total = parseFloat(shipping) + datatwo;
	
				if(reduction > 0)
					total = total - total * reduction / 100;
              
           

				$(".totalText").text(total.toFixed(2));

			}
}else{


	if(toCurrency == 'EUR'){
			data=dataInfo/1.4407;


		
				$(".subtotalText").text(data.toFixed(2));

				var shippinginfo = $("input[name='shipping']:checked").data("price");

				shipping= shippinginfo / 1.4407;


        
				$(".shippingText").text(shipping.toFixed(2));
				var total = parseFloat(shipping) + data;
	
				if(reduction > 0)
					total = total - total * reduction / 100;
              
            			
 
				$(".totalText").text(total.toFixed(2));

			}


			if(toCurrency == 'USD'){
					data=dataInfo;
			
			
				$(".subtotalText").text(data.toFixed(2));

				var shippinginfo = $("input[name='shipping']:checked").data("price");

				shipping= shippinginfo;


				$(".shippingText").text(shipping.toFixed(2));
				var total = parseFloat(shipping) + data;
	
				if(reduction > 0)
					total = total - total * reduction / 100;
           

             
				$(".totalText").text(total.toFixed(2));
			}
}
				

		


			   for (var i=0,l=currencyElements.length; i<l; ++i) {
        var 
            el = currencyElements[i];
        var fromCurrency = el.getAttribute("data-currencyName").toUpperCase();
      
      if (fromCurrency in usdChangeRate) {
          var 
              // currency change to usd
              fromCurrencyToUsdAmount = parseFloat(el.innerHTML) * usdChangeRate[fromCurrency];
              console.log(parseInt(el.innerHTML,10) + fromCurrency + "=" + fromCurrencyToUsdAmount + "USD");
          var 
              // change to currency unit selected
              toCurrenyAmount = fromCurrencyToUsdAmount / usdChangeRate[toCurrency];
      
          var num = toCurrenyAmount;
           var n = num.toFixed(2);
           
        
         // el.innerHTML = n + "<span>" + toCurrency.toUpperCase() + "</span>";
			if(toCurrency == 'EUR'){
			el.innerHTML = n + "€";

			      }else{
			el.innerHTML = n + "$";
			      }



          el.setAttribute("data-currencyName",toCurrency);
         
      }
    }






			}

		}

	})

}




function UpdateCartHeader() {

	$.ajax({

		url: base_url + "ajax/getCart",
		type: "get",
		data: {},
		dataType: "JSON",
		success: function(data) {

			$(".header-dropdown").html(data.html);
			$(".header-icons-noti").html(data.total);

		}

	})

}
