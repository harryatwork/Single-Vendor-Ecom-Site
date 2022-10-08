<?php include("head.php"); ?>

	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				

                <?php include("header.php"); ?>

				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					<?php include("menu.php"); ?>

                    <?php $o_id = $_GET["o_id"]; ?>

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
										</ul>
									</div>
								</div>
							</div>


                            <div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-xxl">
									<div class="d-flex flex-column gap-7 gap-lg-10">
										<div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary" aria-selected="true" role="tab">Order Summary</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history" aria-selected="false" role="tab" tabindex="-1">Order History</a>
												</li>
											</ul>
										</div>
										<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                            
											<div class="card card-flush py-4 flex-row-fluid">
												<div class="card-header">
													<div class="card-title">
														<h2>Order Details (#14534)</h2>
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
																	<td class="fw-bold text-end">14/09/2022</td>
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
																	<td class="fw-bold text-end">Online 
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
																			<a class="text-gray-600 text-hover-primary">Dan Wilson</a>
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
																		<a class="text-gray-600 text-hover-primary">dam@consilting.com</a>
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
																	<td class="fw-bold text-end">+6141 234 567</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											
											
											<!-- <div class="card card-flush py-4 flex-row-fluid">
												<div class="card-header">
													<div class="card-title">
														<h2>Documents</h2>
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
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor"></path>
																				<path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor"></path>
																				<path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		Invoice 
																		<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="View the invoice generated by this order." data-kt-initialized="1"></i></div>
																	</td>
																	<td class="fw-bold text-end">
																		<a class="text-gray-600 text-hover-primary">#INV-000414</a>
																	</td>
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
																		Shipping 
																		<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="View the shipping manifest generated by this order." data-kt-initialized="1"></i></div>
																	</td>
																	<td class="fw-bold text-end">
																		<a class="text-gray-600 text-hover-primary">#SHP-0025410</a>
																	</td>
																</tr>
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<span class="svg-icon svg-icon-2 me-2">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.3" d="M21.6 11.2L19.3 8.89998V5.59993C19.3 4.99993 18.9 4.59993 18.3 4.59993H14.9L12.6 2.3C12.2 1.9 11.6 1.9 11.2 2.3L8.9 4.59993H5.6C5 4.59993 4.6 4.99993 4.6 5.59993V8.89998L2.3 11.2C1.9 11.6 1.9 12.1999 2.3 12.5999L4.6 14.9V18.2C4.6 18.8 5 19.2 5.6 19.2H8.9L11.2 21.5C11.6 21.9 12.2 21.9 12.6 21.5L14.9 19.2H18.2C18.8 19.2 19.2 18.8 19.2 18.2V14.9L21.5 12.5999C22 12.1999 22 11.6 21.6 11.2Z" fill="currentColor"></path>
																				<path d="M11.3 9.40002C11.3 10.2 11.1 10.9 10.7 11.3C10.3 11.7 9.8 11.9 9.2 11.9C8.8 11.9 8.40001 11.8 8.10001 11.6C7.80001 11.4 7.50001 11.2 7.40001 10.8C7.20001 10.4 7.10001 10 7.10001 9.40002C7.10001 8.80002 7.20001 8.4 7.30001 8C7.40001 7.6 7.7 7.29998 8 7.09998C8.3 6.89998 8.7 6.80005 9.2 6.80005C9.5 6.80005 9.80001 6.9 10.1 7C10.4 7.1 10.6 7.3 10.8 7.5C11 7.7 11.1 8.00005 11.2 8.30005C11.3 8.60005 11.3 9.00002 11.3 9.40002ZM10.1 9.40002C10.1 8.80002 10 8.39998 9.90001 8.09998C9.80001 7.79998 9.6 7.70007 9.2 7.70007C9 7.70007 8.8 7.80002 8.7 7.90002C8.6 8.00002 8.50001 8.2 8.40001 8.5C8.40001 8.7 8.30001 9.10002 8.30001 9.40002C8.30001 9.80002 8.30001 10.1 8.40001 10.4C8.40001 10.6 8.5 10.8 8.7 11C8.8 11.1 9 11.2001 9.2 11.2001C9.5 11.2001 9.70001 11.1 9.90001 10.8C10 10.4 10.1 10 10.1 9.40002ZM14.9 7.80005L9.40001 16.7001C9.30001 16.9001 9.10001 17.1 8.90001 17.1C8.80001 17.1 8.70001 17.1 8.60001 17C8.50001 16.9 8.40001 16.8001 8.40001 16.7001C8.40001 16.6001 8.4 16.5 8.5 16.4L14 7.5C14.1 7.3 14.2 7.19998 14.3 7.09998C14.4 6.99998 14.5 7 14.6 7C14.7 7 14.8 6.99998 14.9 7.09998C15 7.19998 15 7.30002 15 7.40002C15.2 7.30002 15.1 7.50005 14.9 7.80005ZM16.6 14.2001C16.6 15.0001 16.4 15.7 16 16.1C15.6 16.5 15.1 16.7001 14.5 16.7001C14.1 16.7001 13.7 16.6 13.4 16.4C13.1 16.2 12.8 16 12.7 15.6C12.5 15.2 12.4 14.8001 12.4 14.2001C12.4 13.3001 12.6 12.7 12.9 12.3C13.2 11.9 13.7 11.7001 14.5 11.7001C14.8 11.7001 15.1 11.8 15.4 11.9C15.7 12 15.9 12.2 16.1 12.4C16.3 12.6 16.4 12.9001 16.5 13.2001C16.6 13.4001 16.6 13.8001 16.6 14.2001ZM15.4 14.1C15.4 13.5 15.3 13.1 15.2 12.9C15.1 12.6 14.9 12.5 14.5 12.5C14.3 12.5 14.1 12.6001 14 12.7001C13.9 12.8001 13.8 13.0001 13.7 13.2001C13.6 13.4001 13.6 13.8 13.6 14.1C13.6 14.7 13.7 15.1 13.8 15.4C13.9 15.7 14.1 15.8 14.5 15.8C14.8 15.8 15 15.7 15.2 15.4C15.3 15.2 15.4 14.7 15.4 14.1Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		Reward Points 
																		<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Reward value earned by customer when purchasing this order." data-kt-initialized="1"></i></div>
																	</td>
																	<td class="fw-bold text-end">600</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div> -->


										</div>


										<div class="tab-content">
											<div class="tab-pane fade active show" id="kt_ecommerce_sales_order_summary" role="tab-panel">
												<div class="d-flex flex-column gap-7 gap-lg-10">
													<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
														<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
															<div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
																<img src="assets/media/icons/duotune/ecommerce/ecm001.svg" class="w-175px">
															</div>
															<div class="card-header">
																<div class="card-title">
																	<h2>Payment Address</h2>
																</div>
															</div>
															<div class="card-body pt-0">Unit 1/23 Hastings Road,
															<br>Melbourne 3000,
															<br>Victoria,
															<br>Australia.</div>
														</div>
														<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
															<div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
																<img src="assets/media/icons/duotune/ecommerce/ecm006.svg" class="w-175px">
															</div>
															<div class="card-header">
																<div class="card-title">
																	<h2>Shipping Address</h2>
																</div>
															</div>
															<div class="card-body pt-0">Unit 1/23 Hastings Road,
															<br>Melbourne 3000,
															<br>Victoria,
															<br>Australia.</div>
														</div>
													</div>
													<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
														<div class="card-header">
															<div class="card-title">
																<h2>Order #14534</h2>
															</div>
														</div>
														<div class="card-body pt-0">
															<div class="table-responsive">
																<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
																	<thead>
																		<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
																			<th class="min-w-175px">Product</th>
																			<th class="min-w-100px text-end">SKU</th>
																			<th class="min-w-70px text-end">Qty</th>
																			<th class="min-w-100px text-end">Unit Price</th>
																			<th class="min-w-100px text-end">Total</th>
																		</tr>
																	</thead>
																	<tbody class="fw-semibold text-gray-600">
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<a hclass="symbol symbol-50px">
																						<span class="symbol-label" style="background-image:url(assets/media/stock/ecommerce/1.gif);"></span>
																					</a>
																					<div class="ms-5">
																						<a class="fw-bold text-gray-600 text-hover-primary">Product 1</a>
																						<div class="fs-7 text-muted">Delivery Date: 14/09/2022</div>
																					</div>
																				</div>
																			</td>
																			<td class="text-end">01515006</td>
																			<td class="text-end">2</td>
																			<td class="text-end">$120.00</td>
																			<td class="text-end">$240.00</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<a class="symbol symbol-50px">
																						<span class="symbol-label" style="background-image:url(assets/media/stock/ecommerce/100.gif);"></span>
																					</a>
																					<div class="ms-5">
																						<a class="fw-bold text-gray-600 text-hover-primary">Footwear</a>
																						<div class="fs-7 text-muted">Delivery Date: 14/09/2022</div>
																					</div>
																				</div>
																			</td>
																			<td class="text-end">04250003</td>
																			<td class="text-end">1</td>
																			<td class="text-end">$24.00</td>
																			<td class="text-end">$24.00</td>
																		</tr>
																		<tr>
																			<td colspan="4" class="text-end">Subtotal</td>
																			<td class="text-end">$264.00</td>
																		</tr>
																		<tr>
																			<td colspan="4" class="text-end">VAT (0%)</td>
																			<td class="text-end">$0.00</td>
																		</tr>
                                                                        <tr>
																			<td colspan="4" class="text-end">Shipping Rate</td>
																			<td class="text-end">$5.00</td>
																		</tr>
																		<tr>
																			<td colspan="4" class="fs-3 text-dark text-end">Grand Total</td>
																			<td class="text-dark fs-3 fw-bolder text-end">$269.00</td>
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



    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/sales/listing.js"></script>
		
	<?php include("footer.php"); ?>

	
</body>
</html>