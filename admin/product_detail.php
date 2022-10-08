<?php include("head.php"); ?>

	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				

                <?php include("header.php"); ?>

				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					<?php include("menu.php"); ?>

                    <?php $p_id = $_GET["p_id"]; ?>

                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<div class="d-flex flex-column flex-column-fluid">
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Product : </h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="dashboard" class="text-muted text-hover-primary">Dashboard</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Product</li>
										</ul>
									</div>
								</div>
							</div>


                            <div id="kt_app_content" class="app-content flex-column-fluid" data-select2-id="select2-data-kt_app_content">
								<div id="kt_app_content_container" class="app-container container-xxl" data-select2-id="select2-data-kt_app_content_container">
									<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" data-kt-redirect="products.html" data-select2-id="select2-data-kt_ecommerce_add_product_form">
										<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
											<div class="card card-flush py-4">
												<div class="card-header">
													<div class="card-title">
														<h2>Images</h2>
													</div>
												</div>
												<div class="card-body text-center pt-0">
													
                                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
														<div class="image-input-wrapper w-150px h-150px" style="background-image: url(assets/images/product.png)"></div>
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-kt-initialized="1">
															<i class="bi bi-pencil-fill fs-7"></i>
															<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
															<input type="hidden" name="avatar_remove">
														</label>
													</div>
													
												</div>
												
											</div>
											
											<div class="card card-flush py-4">
												<div class="card-header">
													<div class="card-title">
														<h2>Status</h2>
													</div>
													<div class="card-toolbar">
														<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
													</div>
												</div>
												<div class="card-body pt-0">
													<select class="form-select mb-2 " >
														<option value="Active" selected="selected" data-select2-id="select2-data-11-9id2">Active</option>
														<option value="De-Active">De-Active</option>
													</select>
													<div class="text-muted fs-7">Set the product status.</div>
												</div>
											</div>
											
											<div class="card card-flush py-4">
												
                                                <div class="card-header">
													<div class="card-title">
														<h2>Product Details</h2>
													</div>
												</div>
												
												<div class="card-body pt-0">
													<label class="form-label">Category</label>
													<select class="form-select mb-2 " >
														<option value="Active" selected="selected" data-select2-id="select2-data-11-9id2">Category 1</option>
														<option value="De-Active">Category 2</option>
													</select>
													
                                                    <label class="form-label">Sub Category</label>
													<select class="form-select mb-2 " >
														<option value="Active" selected="selected" data-select2-id="select2-data-11-9id2">Category 1</option>
														<option value="De-Active">Category 2</option>
													</select>
												</div>

											</div>
										</div>
										
										
										<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10" data-select2-id="select2-data-140-q0in">
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general" aria-selected="false" role="tab" tabindex="-1">General</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced" aria-selected="true" role="tab">Advanced</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_reviews" aria-selected="false" role="tab" tabindex="-1">Reviews</a>
												</li>
											</ul>
											
											<div class="tab-content" data-select2-id="select2-data-139-3tdr">

												<div class="tab-pane fade active show" id="kt_ecommerce_add_product_general" role="tab-panel">
													<div class="d-flex flex-column gap-7 gap-lg-10">
														<div class="card card-flush py-4">
															<div class="card-header">
																<div class="card-title">
																	<h2>General</h2>
																</div>
															</div>
															<div class="card-body pt-0">
																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<label class="required form-label">Product Name</label>
																	<input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="Sample product">
                                                                </div>
																<div>
																	<label class="form-label">Description</label>
																	<textarea class="form-control" placeholder="Enter Description here" style="height: 150px;"></textarea>
                                                                </div>
															</div>
														</div>
														
														<div class="card card-flush py-4">
															<div class="card-header">
																<div class="card-title">
																	<h2>Pricing</h2>
																</div>
															</div>
															<div class="card-body pt-0">
																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<label class="required form-label">Base Price</label>
																	<input type="text" name="price" class="form-control mb-2" placeholder="Product price" value="199.99">
																</div>
																<div class="fv-row mb-10">
																	<label class="fs-6 fw-semibold mb-2">Discount Type 
																	    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Select a discount type that will be applied to this product" data-kt-initialized="1"></i>
                                                                    </label>
																	<div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']" data-kt-initialized="1">
																		<div class="col">
																			<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="discount_option" value="1">
																				</span>
																				<span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">No Discount</span>
																				</span>
																			</label>
																		</div>
																		<div class="col">
																			<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 active" data-kt-button="true">
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="discount_option" value="2" checked="checked">
																				</span>
																				<span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">Percentage 
                                                                                        <span id="discount_slider_perc">0</span> %
                                                                                    </span>
																				</span>
																			</label>
																		</div>
																	</div>
																</div>
																
																
																<div class="mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
																	<label class="form-label">Set Discount Percentage</label>
																	<input id="discount_slider_input" type="range" min="0" max="100" value="0" style="width:100%;">
																	<div class="text-muted fs-7">Set a percentage discount to be applied on this product.</div>
																</div>
																
															</div>
														</div>
													</div>
												</div>
												
										<!-- Adv section ----->

												<div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel" data-select2-id="select2-data-kt_ecommerce_add_product_advanced">
													<div class="d-flex flex-column gap-7 gap-lg-10" data-select2-id="select2-data-138-likx">
														<div class="card card-flush py-4">
															<div class="card-header">
																<div class="card-title">
																	<h2>Inventory</h2>
																</div>
															</div>
															<div class="card-body pt-0">
																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<label class="required form-label">SKU</label>
																	<input type="text" name="sku" class="form-control mb-2" placeholder="SKU Number" value="011985001">
																	<div class="text-muted fs-7">Enter the product SKU.</div>
																</div>
															</div>
														</div>
														
														<div class="card card-flush py-4" data-select2-id="select2-data-137-tq74">
															<div class="card-header">
																<div class="card-title">
																	<h2>Variations</h2>
																</div>
															</div>
															
															<div class="card-body pt-0" data-select2-id="select2-data-136-oy1f">
																<div class="" data-kt-ecommerce-catalog-add-product="auto-options" data-select2-id="select2-data-135-lnzj">
																	<label class="form-label">Add Product Variations</label>
																	<div id="kt_ecommerce_add_product_options" data-select2-id="select2-data-kt_ecommerce_add_product_options">
																		<div class="form-group" data-select2-id="select2-data-134-k5cr">
																			<div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3" data-select2-id="select2-data-133-blfw">
																			    <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5" data-select2-id="select2-data-167-r6df">
																					
                                                                                    <div class="w-100 w-md-200px" data-select2-id="select2-data-166-snhd">
																						<select class="form-select select2-hidden-accessible" name="kt_ecommerce_add_product_options[0][product_option]" data-placeholder="Select a variation" data-kt-ecommerce-catalog-add-product="product_option" data-select2-id="select2-data-162-rulv" tabindex="-1" aria-hidden="true">
																							<option data-select2-id="select2-data-164-ypvo"></option>
																							<option value="color" data-select2-id="select2-data-168-jqig">Color</option>
																							<option value="size" data-select2-id="select2-data-169-3bxf">Size</option>
																							<option value="material" data-select2-id="select2-data-170-1xba">Material</option>
																							<option value="style" data-select2-id="select2-data-171-o4g6">Style</option>
																						</select>
                                                                                        <span class="select2 select2-container select2-container--bootstrap5 select2-container--below" dir="ltr" data-select2-id="select2-data-163-rnhk" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_ecommerce_add_product_options0product_option-7o-container" aria-controls="select2-kt_ecommerce_add_product_options0product_option-7o-container"><span class="select2-selection__rendered" id="select2-kt_ecommerce_add_product_options0product_option-7o-container" role="textbox" aria-readonly="true" title="Select a variation"><span class="select2-selection__placeholder">Select a variation</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																					</div>
																					
																					<input type="text" class="form-control mw-100 w-200px" name="kt_ecommerce_add_product_options[0][product_option_value]" placeholder="Title">
                                                                                    <input type="number" class="form-control mw-100px" name="kt_ecommerce_add_product_options[0][product_option_value]" placeholder="Quantity">
                                                                                    <input type="number" class="form-control mw-100px" name="kt_ecommerce_add_product_options[0][product_option_value]" placeholder="Price">
																					
																					<button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
																						<span class="svg-icon svg-icon-1">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor"></rect>
																								<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor"></rect>
																							</svg>
																						</span>
																					</button>

																				</div>
                                                                            </div>
																		</div>
																		
																		<div class="form-group mt-5">
																			<button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                                                                        <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                                                    </svg>
                                                                                </span>
                                                                                Add another variation
                                                                            </button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														
														<div class="card card-flush py-4">
															<div class="card-header">
																<div class="card-title">
																	<h2>Shipping & Returns</h2>
																</div>
															</div>
															<div class="card-body pt-0">
																<textarea class="form-control" placeholder="Enter Details here" style="height: 150px;" ></textarea>
															</div>
														</div>
														
													</div>
												</div>
												
												
												<div class="tab-pane fade" id="kt_ecommerce_add_product_reviews" role="tab-panel">
													<div class="d-flex flex-column gap-7 gap-lg-10">
														<div class="card card-flush py-4">
															<div class="card-header">
																<div class="card-title">
																	<h2>Customer Reviews</h2>
																</div>
																<div class="card-toolbar">
																	<span class="fw-bold me-5">Overall Rating:</span>
																	
                                                                    <div class="rating">
																		<div class="rating-label checked">
																			<span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																				</svg>
																			</span>
																		</div>
																		<div class="rating-label checked">
																			<span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																				</svg>
																			</span>
																		</div>
																		<div class="rating-label checked">
																			<span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																				</svg>
																			</span>
																		</div>
																		<div class="rating-label checked">
																			<span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																				</svg>
																			</span>
																		</div>
																		<div class="rating-label">
																			<span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																				</svg>
																			</span>
																		</div>
																	</div>
																	
																</div>
															</div>
															
															<div class="card-body pt-0">
																<table class="table table-row-dashed fs-6 gy-5 my-0" id="kt_ecommerce_add_product_reviews">																	<thead>
																		<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
																			<th class="min-w-125px">Rating</th>
																			<th class="min-w-175px">Customer</th>
																			<th class="min-w-175px">Comment</th>
																			<th class="min-w-100px text-end fs-7">Date</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td data-order="rating-5">
																				<div class="rating">
																					<div class="rating-label checked">
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																							</svg>
																						</span>
																					</div>
																					<div class="rating-label checked">
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																							</svg>
																						</span>
																					</div>
																					<div class="rating-label checked">
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																							</svg>
																						</span>
																					</div>
																					<div class="rating-label checked">
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																							</svg>
																						</span>
																					</div>
																					<div class="rating-label checked">
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																							</svg>
																						</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<a class="d-flex text-dark text-gray-800 text-hover-primary">
																					<div class="symbol symbol-circle symbol-25px me-3">
																						<div class="symbol-label bg-light-danger">
																							<span class="text-danger">M</span>
																						</div>
																					</div>
																					<span class="fw-bold">Melody Macy</span>
																				</a>
																			</td>
																			<td class="text-gray-600 fw-bold">I like this design</td>
																			<td class="text-end">
																				<span class="fw-semibold text-muted">Today</span>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="d-flex justify-content-end">
												<a href="productsq=active" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
												<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
													<span class="indicator-label">Save Changes</span>
													<span class="indicator-progress">Please wait... 
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
												</button>
											</div>

										</div>
									</form>
								</div>
							</div>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/sales/listing.js"></script>
		
	<?php include("footer.php"); ?>




</body>
</html>