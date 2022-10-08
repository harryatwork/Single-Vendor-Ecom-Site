<?php include("head.php"); ?>

	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				

                <?php include("header.php"); ?>

				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					<?php include("menu.php"); ?>

                    <?php $user_id = $_GET["user_id"]; ?>

                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<div class="d-flex flex-column flex-column-fluid">
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">User : <?= $user_id; ?></h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="dashboard" class="text-muted text-hover-primary">Dashboard</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Users</li>
										</ul>
									</div>
								</div>
							</div>


                            <div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-xxl">
									<div class="d-flex flex-column flex-xl-row">
										<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
											<div class="card mb-5 mb-xl-8">
												<div class="card-body pt-15">
													<div class="d-flex flex-center flex-column mb-5">
														<div class="symbol symbol-100px symbol-circle mb-7">
															<img src="assets/images/user.png" alt="image">
														</div>
														<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">Max Smith</a>
														<div class="fs-5 fw-semibold text-muted mb-6">City name</div>
														<div class="d-flex flex-wrap flex-center">
															<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
																<div class="fs-4 fw-bold text-gray-700">
																	<span class="w-75px">6,900</span>
																</div>
																<div class="fw-semibold text-muted">Spending</div>
															</div>
															<div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
																<div class="fs-4 fw-bold text-gray-700">
																	<span class="w-50px">130</span>
																</div>
																<div class="fw-semibold text-muted">Orders</div>
															</div>
														</div>
														
													</div>
													
													
													<div class="d-flex flex-stack fs-4 py-3">
														<div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details </div>
                                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" data-kt-initialized="1">
															<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Edit</a>
														</span>
													</div>
													
													<div class="separator separator-dashed my-3"></div>
													
													<div id="kt_customer_view_details" class="collapse show">
														<div class="py-5 fs-6">
															
															<div class="badge badge-light-info d-inline">Active User</div>
															
															<div class="fw-bold mt-5">Account ID</div>
															<div class="text-gray-600">ID-45453423</div>
															
															<div class="fw-bold mt-5">Email</div>
															<div class="text-gray-600">
																<a href="#" class="text-gray-600 text-hover-primary">info@user.com</a>
															</div>
															
															<div class="fw-bold mt-5">Billing Address</div>
															<div class="text-gray-600">101 Collin Street, 
                                                                <br>Melbourne 3000 VIC
                                                                <br>Australia
                                                            </div>
														</div>
													</div>
												</div>
											</div>
										
										</div>
										
										
										<div class="flex-lg-row-fluid ms-lg-15">
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab" aria-selected="true" role="tab">Overview</a>
												</li>

												<li class="nav-item ms-auto">
													<!-- <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions  </a> -->
												</li>
											</ul>
											
											
											<div class="tab-content" id="myTabContent">
												<div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
													<div class="card pt-4 mb-6 mb-xl-9">
														<div class="card-header border-0">
															<div class="card-title">
																<h2>Order Records</h2>
															</div>
														</div>
														
														<div class="card-body pt-0 pb-5">
															<div id="kt_table_customers_payment_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                <div class="table-responsive">
                                                                    <table class="table align-middle table-row-dashed gy-5 dataTable no-footer" id="kt_table_customers_payment">
                                                                        <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                                                            <tr class="text-start text-muted text-uppercase gs-0">
                                                                                <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Invoice No.: activate to sort column ascending" style="width: 100px;">Order No.</th>
                                                                                <th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 81.8594px;">Status</th>
                                                                                <th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 78.8906px;">Amount</th>
                                                                                <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 100px;">Date</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="fs-6 fw-semibold text-gray-600">
                                                                            <tr class="odd">
                                                                                <td>
                                                                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">3492</a>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="badge badge-light-success">Successful</span>
                                                                                </td>
                                                                                <td>$1,200.00</td>
                                                                                <td data-order="2020-12-14T20:43:00+05:30">14 Dec 2020, 8:43 pm</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
                                                                    <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                                        <div class="dataTables_paginate paging_simple_numbers" id="kt_table_customers_payment_paginate">
                                                                            <ul class="pagination">
                                                                                <li class="paginate_button page-item previous disabled" id="kt_table_customers_payment_previous">
                                                                                    <a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="0" tabindex="0" class="page-link">
                                                                                        <i class="previous"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="paginate_button page-item active">
                                                                                    <a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                                                </li>
                                                                                <li class="paginate_button page-item ">
                                                                                    <a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                                                </li>
                                                                                <li class="paginate_button page-item next" id="kt_table_customers_payment_next">
                                                                                    <a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="3" tabindex="0" class="page-link">
                                                                                        <i class="next"></i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
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
									
									
									
									<div class="modal fade" id="kt_modal_adjust_balance" tabindex="-1" aria-hidden="true">
										
										<div class="modal-dialog modal-dialog-centered mw-650px">
											
											<div class="modal-content">
												
												<div class="modal-header">
													
													<h2 class="fw-bold">Adjust Balance</h2>
													
													
													<div id="kt_modal_adjust_balance_close" class="btn btn-icon btn-sm btn-active-icon-primary">
														
														<span class="svg-icon svg-icon-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
															</svg>
														</span>
														
													</div>
													
												</div>
												
												
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													
													<div class="d-flex text-center mb-9">
														<div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
															<div class="fs-6 fw-semibold mb-2 text-muted">Current Balance</div>
															<div class="fs-2 fw-bold" kt-modal-adjust-balance="current_balance">US$ 32,487.57</div>
														</div>
														<div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
															<div class="fs-6 fw-semibold mb-2 text-muted">New Balance 
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter an amount to preview the new balance." data-kt-initialized="1"></i></div>
															<div class="fs-2 fw-bold" kt-modal-adjust-balance="new_balance">--</div>
														</div>
													</div>
													
													
													<form id="kt_modal_adjust_balance_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
														
														<div class="fv-row mb-7 fv-plugins-icon-container">
															
															<label class="required fs-6 fw-semibold form-label mb-2">Adjustment type</label>
															
															
															<select class="form-select form-select-solid fw-bold select2-hidden-accessible" name="adjustment" aria-label="Select an option" data-control="select2" data-dropdown-parent="#kt_modal_adjust_balance" data-placeholder="Select an option" data-hide-search="true" data-select2-id="select2-data-13-nqpw" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																<option data-select2-id="select2-data-15-kbwb"></option>
																<option value="1">Credit</option>
																<option value="2">Debit</option>
															</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-wjyc" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-adjustment-jo-container" aria-controls="select2-adjustment-jo-container"><span class="select2-selection__rendered" id="select2-adjustment-jo-container" role="textbox" aria-readonly="true" title="Select an option"><span class="select2-selection__placeholder">Select an option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
															
														<div class="fv-plugins-message-container invalid-feedback"></div></div>
														
														
														<div class="fv-row mb-7 fv-plugins-icon-container">
															
															<label class="required fs-6 fw-semibold form-label mb-2">Amount</label>
															
															
															<input id="kt_modal_inputmask" type="text" class="form-control form-control-solid" name="amount" value="" inputmode="text">
															
														<div class="fv-plugins-message-container invalid-feedback"></div></div>
														
														
														<div class="fv-row mb-7">
															
															<label class="fs-6 fw-semibold form-label mb-2">Add adjustment note</label>
															
															
															<textarea class="form-control form-control-solid rounded-3 mb-5"></textarea>
															
														</div>
														
														
														<div class="fs-7 text-muted mb-15">Please be aware that all manual balance changes will be audited by the financial team every fortnight. Please maintain your invoices and receipts until then. Thank you.</div>
														
														
														<div class="text-center">
															<button type="reset" id="kt_modal_adjust_balance_cancel" class="btn btn-light me-3">Discard</button>
															<button type="submit" id="kt_modal_adjust_balance_submit" class="btn btn-primary">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														
													</form>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
									
									
									<div class="modal fade" id="kt_modal_update_customer" tabindex="-1" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<div class="modal-content">
												<form class="form" action="#" id="kt_modal_update_customer_form">
													<div class="modal-header" id="kt_modal_update_customer_header">
														<h2 class="fw-bold">Update Customer Status</h2>
														<div id="kt_modal_update_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
															<span class="svg-icon svg-icon-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
																</svg>
															</span>
														</div>
													</div>
													<div class="modal-body py-10 px-lg-17">
														<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_customer_header" data-kt-scroll-wrappers="#kt_modal_update_customer_scroll" data-kt-scroll-offset="300px" style="max-height: 421px;">
															<div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_user_info">User Information 
                                                                <span class="ms-2 rotate-180">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </div>
															<div id="kt_modal_update_customer_user_info" class="collapse show">
																<div class="fv-row mb-7">
																	<label class="fs-6 fw-semibold mb-2">Status</label>
                                                                    <select class="form-control form-control-solid">
                                                                        <option value="Active">Active</option>
                                                                        <option value="De-Active">De-Active</option>
                                                                    </select>
																</div>
															</div>
														</div>
													</div>
													
													
													<div class="modal-footer flex-center">
														<button type="reset" id="kt_modal_update_customer_cancel" class="btn btn-light me-3">Discard</button>														
														<button type="submit" id="kt_modal_update_customer_submit" class="btn btn-primary">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait... 
                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                            </span>
														</button>
													</div>
												</form>
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