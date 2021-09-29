      <!-- Footer -->
    <footer class="sticky-footer bg-white">
      	<div class="container my-auto">
      		<div class="copyright text-center my-auto">
      			<span>Copyright &copy; Your Website 2020-2021</span>
      		</div>
      	</div>
      </footer>
      <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="<?php echo base_url("user/logout"); ?>">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="vendor/dropzone/dropzone.js"></script>

<!-- <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>


<!--<script src="js/demo/chart-pie-demo.js"></script>-->

<script>
	
	$(".btn-danger").click(function() {
		var yes = confirm("are you sure ? this action can't be undo ");

		if(!yes)
			return false;
	})

	var obj = [
		{
			title: "Products",
			url: "products"
		},
		{
			title: "Add product",
			url: "add_product"
		},
		{
			title: "Orders",
			url: "orders"
		},
		{
			title: "Pending orders",
			url: "orders/1"
		},
		{
			title: "Awaiting shipping",
			url: "orders/2"
		},
		{
			title: "Shipped orders",
			url: "orders/3"
		},
		{
			title: "Delevired orders",
			url: "orders/0"
		},
		{
			title: "Canceled orders",
			url: "orders/1"
		},
		{
			title: "Categories",
			url: "cat"
		},
		{
			title: "Add category",
			url: "add_cat"
		},
		{
			title: "Slids",
			url: "slids"
		},
		{
			title: "home reviews",
			url: "slider"
		},
		{
			title: "Shipping methods",
			url: "shipping"
		},
		{
			title: "Analytics",
			url: "dashboard"
		},
		{
			title: "Thank you page",
			url: "thanksPage"
		},
		{
			title: "Pages",
			url: "pages"
		},
		{
			title: "Add page",
			url: "add_page"
		},
		{
			title: "Admins",
			url: "admins"
		},
		{
			title: "Add admin",
			url: "add_admin"
		},
		{
			title: "Settings",
			url: "setting"
		}
	];

	function findInObj(value) {
		var s = $(".searchTop").val();
		return value.title.toLowerCase().startsWith(s.toLowerCase());
	}

	function findInObjMobile(value) {
		var s = $(".searchTopMobile").val();
		return value.title.toLowerCase().startsWith(s.toLowerCase());
	}

	$(document).on("keyup", ".searchTopMobile", function() {

		$(".dropStyle").slideDown("slow");

		$(".dropStyle").html("");

		var filtred = obj.filter(findInObjMobile).slice(0, 5);

		console.log(filtred);

		filtred.forEach(function(v, i) {

			var ht = '<a href="'+ base_url + "admin/" + v.url +'" class="list-group-item list-group-item-action">' + v.title + '</a>';

			$(".dropStyle").append(ht);

		})

	})

	$(".searchTop").keyup(function() {

		$(".dropStyle").slideDown("slow");

		$(".dropStyle").html("");

		var filtred = obj.filter(findInObj).slice(0, 5);

		console.log(filtred);

		filtred.forEach(function(v, i) {

			var ht = '<a href="'+ base_url + "admin/" + v.url +'" class="list-group-item list-group-item-action">' + v.title + '</a>';

			$(".dropStyle").append(ht);

		})

	});

</script>
<script>
	tinymce.init({
	selector: 'textarea',
	plugins: [
	'advlist autolink lists link image charmap print preview anchor',
	'searchreplace visualblocks advcode fullscreen',
	'insertdatetime media table contextmenu powerpaste '
	],
	
	menubar: true,
	toolbar: 'code',
	toolbar_mode: 'floating',
	content_css: [
	'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
	'<?php echo base_url();?>assets/css/codepen.min.css']
	});
	
	</script>



</body>

</html>