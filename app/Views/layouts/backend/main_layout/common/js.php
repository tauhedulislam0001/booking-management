 <!--**********************************
        Scripts
    ***********************************-->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <!-- custom js -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/custom.min.js"></script>
    <!-- Required vendors -->
    <script data-cfasync="false" src="<?php echo base_url(); ?>/assets/backend/js/email-decode.min.js')}}"></script>
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>/assets/backend/vendor/global/global.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/backend/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/backend/js/custom.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/backend/js/deznav-init.js"></script>
	<script src="<?php echo base_url(); ?>/assets/backend/vendor/owl-carousel/owl.carousel.js"></script>

    <!-- Datatable -->
    <script src="{{ asset("assets/backend/vendor/datatables/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/backend/js/plugins-init/datatables.init.js") }}"></script>

	<!-- Chart piety plugin files -->
    <script src="<?php echo base_url(); ?>/assets/backend/vendor/peity/jquery.peity.min.js"></script>

	<!-- Apex Chart -->
	<script src="<?php echo base_url(); ?>/assets/backend/vendor/apexchart/apexchart.js"></script>

	<!-- Dashboard 1 -->
	<script src="<?php echo base_url(); ?>/assets/backend/js/dashboard/dashboard-1.js"></script>

	<script>

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

		function carouselReview(){
			/*  event-bx one function by = owl.carousel.js */
			jQuery('.event-bx').owlCarousel({
				loop:true,
				margin:30,
				nav:true,
				center:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
				dots:true,
				responsive:{
					0:{
						items:1
					},
					720:{
						items:2
					},

					1150:{
						items:3
					},

					1200:{
						items:2
					},
					1749:{
						items:3
					}
				}
			})
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000);
		});
	</script>
