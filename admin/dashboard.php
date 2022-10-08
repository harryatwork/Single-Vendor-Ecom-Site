<?php include("head.php"); ?>

	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				

                <?php include("header.php"); ?>

				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					<?php include("menu.php"); ?>


					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<div class="d-flex flex-column flex-column-fluid">
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="dashboard" class="text-muted text-hover-primary">Home</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Dashboard</li>
										</ul>
									</div>
									
								</div>
								
							</div>
							
							
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-xxl">
									<div class="row g-5 g-xl-12">
										
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
											<div class="card card-flush h-md-50 mb-5 mb-xl-10" style="height: auto !important;">
												<div class="card-header pt-5">
													<div class="card-title d-flex flex-column">
														<div class="d-flex align-items-center">
															<span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2 total_earnings">
																<div class="loader"> 
																	<svg class="circular" viewBox="25 25 50 50">
																		<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
																	</svg> 
																</div>
															</span>
														</div>
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Total Earnings</span>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-4 col-lg-4 col-xl-4 col-xxl-3 mb-md-5 mb-xl-10">
											<div class="card card-flush h-md-50 mb-xl-10" style="height: auto !important;">
												<div class="card-header pt-5">
													<div class="card-title d-flex flex-column">
														<div class="d-flex align-items-center">
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2 total_orders_count">
																<div class="loader"> 
																	<svg class="circular" viewBox="25 25 50 50">
																		<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
																	</svg> 
																</div>
															</span>
														</div>
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Orders This Month</span>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-2 col-lg-2 col-xl-2 col-xxl-3 mb-md-5 mb-xl-10">
											<div class="card card-flush h-md-50 mb-xl-10" style="height: auto !important;">
												<div class="card-header pt-5">
													<div class="card-title d-flex flex-column">
														<div class="d-flex align-items-center">
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,836</span>
														</div>
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Visits this month</span>
													</div>
												</div>
											</div>
										</div>



										<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
											<div class="card card-flush overflow-hidden h-md-100">
												<div class="card-header py-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Sales This Months</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
													</h3>
													<div class="card-toolbar">
														
													</div>
												</div>
												<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
													<div class="px-9 mb-5">
														<div class="d-flex mb-2">
															<span class="fs-4 fw-semibold text-gray-400 me-1">$</span>
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">14,094</span>
														</div>
														<span class="fs-6 fw-semibold text-gray-400">Another $48,346 to Goal</span>
													</div>
													
													<div class="card card-bordered">
														<!-- Todo Supposed to be graph here. --> 
													</div>

												</div>
											</div>
										</div>




									</div>
									
								</div>
							</div>
						</div>
						
					</div>




				</div>


			</div>
			<!--end::Page-->
		</div>
		
		
		<!--end::App-->

		
	<?php include("footer.php"); ?>


<script>
var date = new Date(), y = date.getFullYear(), m = date.getMonth();
var firstDay = new Date(y, m+1, -29).toISOString().slice(0, 10);
var lastDay = new Date(y, m+1, 0).toISOString().slice(0, 10);

$(document).ready(function() {
	orders_total("order_status='Confirmed' AND delivery_status='Delivered'",'','price,quantity');
	orders_count("order_status='Confirmed' AND delivery_status='Delivered' AND date between '"+firstDay+"' and '"+lastDay+"'",'','id');
});

function orders_total(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'orders'
	}, function(result) {
		result = JSON.parse(result);
		var total = 0;
		for(let r=0;r<result.length;r++) {
			var total_indi = 1;
			for(let r_=0;r_<result[0].length;r_++) {
				total_indi = total_indi*result[r][r_];
			}
			total = total + total_indi;
		}
		$(".total_earnings").html(total);
	});
}

function orders_count(condition,limit,return_values) {
	console.log(condition);
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'orders'
	}, function(result) {
		result = JSON.parse(result);
		$(".total_orders_count").html(result.length);
	});
}
</script>
	
	</body>
</html>