<?php include("head.php"); ?>

<style>
.progress_bar_color {
	background:gray;
}
</style>

	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				

                <?php include("header.php"); ?>

				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					<?php include("menu.php"); ?>

                    <?php $o_id = $_GET["id"]; ?>

                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<div class="d-flex flex-column flex-column-fluid">
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Order : </h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="dashboard" class="text-muted text-hover-primary">Dashboard</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Orders</li>
											<input type="hidden" class="o_id" value="<?= $o_id; ?>" />
										</ul>
									</div>
								</div>
							</div>


							<?php 
								$sql_orders_dist = "SELECT DISTINCT(o_id) FROM orders WHERE o_id = '$o_id'";
								$result_orders_dist = $conn->query($sql_orders_dist);
								if($result_orders_dist->num_rows > 0) {
								while($row_orders_dist = $result_orders_dist->fetch_assoc()) {
									$o_id = $row_orders_dist["o_id"];

									$total = 0;
									$sql_orders = "SELECT * FROM orders WHERE o_id = '$o_id'";
									$result_orders = $conn->query($sql_orders);
									if($result_orders->num_rows > 0) {
									while($row_orders = $result_orders->fetch_assoc()) {
										$user_id = $row_orders["u_id"];
										$address_id = $row_orders["a_id"];
										$order_status = $row_orders["order_status"];
										$order_date = $row_orders["date"];
										$price_indi = $row_orders["price"];
										$quantity_indi = $row_orders["quantity"];
										$total = $total + ($price_indi * $quantity_indi);

										$order_date = $row_orders["date"];
										$payment_type = $row_orders["payment_type"];
										$order_status = $row_orders["order_status"];
										$delivery_status = $row_orders["delivery_status"];

									} } else { }

									$sql_users = "SELECT * FROM users WHERE id = '$user_id' LIMIT 1";
									$result_users = $conn->query($sql_users);
									if($result_users->num_rows > 0) {
									while($row_users = $result_users->fetch_assoc()) {
										$user_f_name = $row_users["f_name"];
										$user_l_name = $row_users["l_name"];
										$user_email = $row_users["email"];
										$user_mobile = $row_users["mobile"];
									} } else { }

									$sql_addresses = "SELECT * FROM addresses WHERE id = '$address_id'";
									$result_addresses = $conn->query($sql_addresses);
									if($result_addresses->num_rows > 0) {
									while($row_addresses = $result_addresses->fetch_assoc()) {
										$order_address1 = $row_addresses["address1"];
										$order_address2 = $row_addresses["address2"];
										$order_city = $row_addresses["city"];
										$order_state = $row_addresses["state"];
										$order_country = $row_addresses["country"];
										$order_pincode = $row_addresses["pincode"];
									} } else { }
							?>


                            <div id="kt_app_content" class="app-content flex-column-fluid">

								<div style="text-align: center;">
									<a class="btn btn-icon btn-light pulse pulse-success order_status" order-status="Received">
										<span class="svg-icon svg-icon-1 order_status_received_color" style="<?php if($order_status == 'Received' || $order_status == 'Confirmed' || $delivery_status == 'In Transit'|| $delivery_status == 'Delivered') { echo 'background:royalblue;'; } else { echo 'background:gray;'; } ?> width: 10px;height: 10px;border-radius: 50%;"></span>
									<?php if($order_status == 'Received') { ?>
										<span class="pulse-ring"></span>
									<?php } else { } ?>
										<span style="position: absolute;width: 200px;top: 100%;">Received</span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_received_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_received_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_received_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_received_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_received_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success order_status" order-status="Confirmed">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_color" style="<?php if($order_status == 'Confirmed' || $delivery_status == 'In Transit'|| $delivery_status == 'Delivered') { echo 'background:royalblue;'; } else { echo 'background:gray;'; } ?> width: 10px;height: 10px;border-radius: 50%;"></span>
									<?php if($order_status == 'Confirmed') { ?>
										<span class="pulse-ring"></span>
									<?php } else { } ?>
										<span style="position: absolute;width: 200px;top: 100%;">Confirmed</span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_confirmed_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_confirmed_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_confirmed_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_confirmed_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_confirmed_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_confirmed_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success order_status" order-status="In Transit">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_color" style="<?php if($delivery_status == 'In Transit'|| $delivery_status == 'Delivered') { echo 'background:royalblue;'; } else { echo 'background:gray;'; } ?> width: 10px;height: 10px;border-radius: 50%;"></span>
									<?php if($delivery_status == 'In Transit') { ?>
										<span class="pulse-ring"></span>
									<?php } else { } ?>
										<span style="position: absolute;width: 200px;top: 100%;">In Transit</span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_in_transit_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_in_transit_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_in_transit_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_in_transit_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_in_transit_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success" style="width:20px;">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_in_transit_color" style="width: 5px;height: 5px;border-radius: 50%;"></span>
									</a>
									<a class="btn btn-icon btn-light pulse pulse-success order_status" order-status="Delivered">
										<span class="svg-icon svg-icon-1 progress_bar_color order_status_color" style="<?php if($delivery_status == 'Delivered') { echo 'background:royalblue;'; } else { echo 'background:gray;'; } ?> width: 10px;height: 10px;border-radius: 50%;"></span>
									<?php if($delivery_status == 'Delivered') { ?>
										<span class="pulse-ring"></span>
									<?php } else { } ?>
										<span style="position: absolute;width: 200px;top: 100%;">Delivered</span>
									</a>
								</div>

								<div id="kt_app_content_container" class="app-container container-xxl" style="margin-top: 5%">
									<div class="d-flex flex-column gap-7 gap-lg-10">
										<div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary" aria-selected="true" role="tab">Order Summary</a>
												</li>
												<!-- <li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history" aria-selected="false" role="tab" tabindex="-1">Order History</a>
												</li> -->
											</ul>
										</div>
										<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                            
											<div class="card card-flush py-4 flex-row-fluid">
												<div class="card-header">
													<div class="card-title">
														<h2>Order Details (#<?= $o_id; ?>)</h2>
													</div>
												</div>
												<div class="card-body pt-0">
													<div class="table-responsive">
														<table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
															<tbody class="fw-semibold text-gray-600">
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<span class="svg-icon svg-icon-2 me-2">
																			<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="currentColor"></path>
																				<path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		Date Added</div>
																	</td>
																	<td class="fw-bold text-end"><?= $order_date; ?></td>
																</tr>
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<span class="svg-icon svg-icon-2 me-2">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor"></path>
																				<path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor"></path>
																				<path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		Payment Method</div>
																	</td>
																	<td class="fw-bold text-end"><?= $payment_type; ?> 
																	<img src="assets/media/svg/card-logos/visa.svg" class="w-50px ms-2"></td>
																</tr>
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<span class="svg-icon svg-icon-2 me-2">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z" fill="currentColor"></path>
																				<path opacity="0.3" d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		Shipping Method</div>
																	</td>
																	<td class="fw-bold text-end">Flat Shipping Rate</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>

											<div class="card card-flush py-4 flex-row-fluid">
												<div class="card-header">
													<div class="card-title">
														<h2>Customer Details</h2>
													</div>
												</div>
												<div class="card-body pt-0">
													<div class="table-responsive">
														<table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
															<tbody class="fw-semibold text-gray-600">
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<span class="svg-icon svg-icon-2 me-2">
																			<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor"></path>
																				<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor"></path>
																				<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor"></rect>
																			</svg>
																		</span>
																		Customer</div>
																	</td>
																	<td class="fw-bold text-end">
																		<div class="d-flex align-items-center justify-content-end">
																			<div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
																				<a href="../customers/details.html">
																					<div class="symbol-label">
																						<img src="assets/images/user.png" alt="Dan Wilson" class="w-100">
																					</div>
																				</a>
																			</div>
																			<a class="text-gray-600 text-hover-primary"><?= $user_f_name; ?> <?= $user_l_name; ?></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<span class="svg-icon svg-icon-2 me-2">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
																				<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		Email</div>
																	</td>
																	<td class="fw-bold text-end">
																		<a class="text-gray-600 text-hover-primary"><?= $user_email; ?></a>
																	</td>
																</tr>
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		
																		<span class="svg-icon svg-icon-2 me-2">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z" fill="currentColor"></path>
																				<path opacity="0.3" d="M19 4H5V20H19V4Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		Phone</div>
																	</td>
																	<td class="fw-bold text-end"><?= $user_mobile; ?></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>


										<div class="tab-content">
											<div class="tab-pane fade active show" id="kt_ecommerce_sales_order_summary" role="tab-panel">
												<div class="d-flex flex-column gap-7 gap-lg-10">
													<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
														<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
															<div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
																<img src="assets/media/icons/duotune/ecommerce/ecm006.svg" class="w-175px">
															</div>
															<div class="card-header">
																<div class="card-title">
																	<h2>Shipping Address</h2>
																</div>
															</div>
															<div class="card-body pt-0"><?= $order_address1; ?> <?= $order_address2; ?>,
															<br><?= $order_city; ?>,
															<br><?= $order_state; ?>,
															<br><?= $order_country; ?>, <?= $order_pincode; ?>.
														</div>
														</div>
													</div>
													<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
														<div class="card-header">
															<div class="card-title">
																<h2>Order #<?= $o_id; ?></h2>
															</div>
														</div>
														<div class="card-body pt-0">
															<div class="table-responsive">
																<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
																	<thead>
																		<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
																			<th class="min-w-175px">Product</th>
																			<th class="min-w-175px">Variant</th>
																			<th class="min-w-70px text-end">Qty</th>
																			<th class="min-w-100px text-end">Unit Price</th>
																			<th class="min-w-100px text-end">Total</th>
																		</tr>
																	</thead>
																	<tbody class="fw-semibold text-gray-600">
																	<?php
																		$sql_orders = "SELECT * FROM orders WHERE o_id = '$o_id'";
																		$result_orders = $conn->query($sql_orders);
																		if($result_orders->num_rows > 0) {
																		while($row_orders = $result_orders->fetch_assoc()) {
																			$p_id = $row_orders["p_id"];
																			$price = $row_orders["price"];
																			$quantity = $row_orders["quantity"];
																			$variant_type = $row_orders["variant_type"];
																			$variant_title = $row_orders["variant_title"];

																		$sql_products = "SELECT * FROM products WHERE id = '$p_id'";
																		$result_products = $conn->query($sql_products);
																		if($result_products->num_rows > 0) {
																		while($row_products = $result_products->fetch_assoc()) {
																			$p_name = $row_products["name"];
																			$p_sku = $row_products["sku"];
																			$products_pic = $row_products["image"];
																		} } else { }
																	?>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<a hclass="symbol symbol-50px">
																						<span class="symbol-label" style="background-image:url(../images-main/products/<?= $products_pic; ?>);"></span>
																					</a>
																					<div class="ms-5">
																						<a class="fw-bold text-gray-600 text-hover-primary"><?= $p_name; ?></a>
																						<div class="fs-7 text-muted">SKU : <?= $p_sku; ?></div>
																					</div>
																				</div>
																			</td>
																			<td class="text-end"><?= $variant_type; ?> - <?= $variant_title; ?></td>
																			<td class="text-end"><?= $quantity; ?></td>
																			<td class="text-end">$<?= $price; ?></td>
																			<td class="text-end">$<?= ($price*$quantity); ?></td>
																		</tr>
																	<?php } } else { } ?>

																		<tr>
																			<td colspan="4" class="text-end">Subtotal</td>
																			<td class="text-end">$<?= $total; ?></td>
																		</tr>
																		<tr>
																			<td colspan="4" class="text-end">VAT (0%)</td>
																			<td class="text-end">$0.00</td>
																		</tr>
                                                                        <tr>
																			<td colspan="4" class="text-end">Shipping Rate</td>
																			<td class="text-end">$0.00</td>
																		</tr>
																		<tr>
																			<td colspan="4" class="fs-3 text-dark text-end">Grand Total</td>
																			<td class="text-dark fs-3 fw-bolder text-end">$<?= $total; ?></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
												<div class="d-flex flex-column gap-7 gap-lg-10">
													<div class="card card-flush py-4 flex-row-fluid">
														<div class="card-header">
															<div class="card-title">
																<h2>Order History</h2>
															</div>
														</div>
														<div class="card-body pt-0">
															<div class="table-responsive">
																<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
																	<thead>
																		<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
																			<th class="min-w-100px">Date Added</th>
																			<th class="min-w-175px">Comment</th>
																			<th class="min-w-70px">Order Status</th>
																			<th class="min-w-100px">Customer Notifed</th>
																		</tr>
																	</thead>
																	<tbody class="fw-semibold text-gray-600">
																		<tr>
																			<td>14/09/2022</td>
																			<td>Order completed</td>
																			<td>
																				<div class="badge badge-light-success">Completed</div>
																			</td>
																			<td>No</td>
																		</tr>
																		<tr>
																			<td>13/09/2022</td>
																			<td>Order received by customer</td>
																			<td>
																				<div class="badge badge-light-success">Delivered</div>
																			</td>
																			<td>Yes</td>
																		</tr>
																		<tr>
																			<td>12/09/2022</td>
																			<td>Order shipped from warehouse</td>
																			<td>
																				<div class="badge badge-light-primary">Delivering</div>
																			</td>
																			<td>Yes</td>
																		</tr>
																		<tr>
																			<td>11/09/2022</td>
																			<td>Payment received</td>
																			<td>
																				<div class="badge badge-light-primary">Processing</div>
																			</td>
																			<td>No</td>
																		</tr>
																		<tr>
																			<td>10/09/2022</td>
																			<td>Pending payment</td>
																			<td>
																				<div class="badge badge-light-warning">Pending</div>
																			</td>
																			<td>No</td>
																		</tr>
																		<tr>
																			<td>09/09/2022</td>
																			<td>Payment method updated</td>																			<td>
																				<div class="badge badge-light-warning">Pending</div>
																			</td>
																			<td>No</td>
																		</tr>
																		
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>



						<?php } } else { } ?>


    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/sales/listing.js"></script>
		
	<?php include("footer.php"); ?>
	<?php include("pop_notifications.php"); ?>

</body>
</html>