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


						<?php 
							$sql_products = "SELECT * FROM products WHERE id = '$p_id'";
							$result_products = $conn->query($sql_products);
							if($result_products->num_rows > 0){
							while($row_products = $result_products->fetch_assoc()) {
								$products_id = $row_products["id"];
								$products_name = $row_products["name"];
								$products_pic = $row_products["image"];
								$products_price = $row_products["price"];
								$products_status = $row_products["status"];
								$products_sku = $row_products["sku"];
								$products_cat_id = $row_products["cat_id"];
								$products_subcat_id = $row_products["subcat_id"];
								$products_description = $row_products["description"];
								$products_sku = $row_products["sku"];
								$products_discount = $row_products["discount"];
								$products_brand = $row_products["brand"];
								$products_shipping = $row_products["shipping"];

								$sql_cat_echo = "SELECT * FROM categories WHERE id = '$products_cat_id'";
								$result_cat_echo = $conn->query($sql_cat_echo);
								if($result_cat_echo->num_rows > 0){
								while($row_cat_echo = $result_cat_echo->fetch_assoc()) {
									$cat_name_echo = $row_cat_echo["name"];
								} } else { }
								$sql_subcat_echo = "SELECT * FROM subcategories WHERE id = '$products_subcat_id'";
								$result_subcat_echo = $conn->query($sql_subcat_echo);
								if($result_subcat_echo->num_rows > 0){
								while($row_subcat_echo = $result_subcat_echo->fetch_assoc()) {
									$subcat_cat_name_echo = $row_subcat_echo["name"];
								} } else { } 
						?>

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
														<div class="image-input-wrapper w-150px h-150px" style="background-image: url(../images-main/products/<?= $products_pic; ?>)"></div>
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-kt-initialized="1">
															<i class="bi bi-pencil-fill fs-7"></i>
															<input type="file" id="product_pic" name="avatar" accept=".png, .jpg, .jpeg">
															<!-- <input type="hidden" name="avatar_remove"> -->
															<input type="hidden" class="p_id" value="<?= $p_id; ?>" />
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
													<select class="form-select mb-2 product_status">
														<option value="<?= $products_status; ?>" selected="selected" data-select2-id="select2-data-11-9id2"><?= $products_status; ?></option>
														<option value="Active">Active</option>
														<option value="De-Active">De-Active</option>
													</select>
													<div class="text-muted fs-7">Set the product status</div>
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
													<select class="form-select mb-2 cat_id" >
														<option value="<?= $products_cat_id;?>"><?= $cat_name_echo; ?></option>
													<?php	
														$sql_cat = "SELECT * FROM categories";
														$result_cat = $conn->query($sql_cat);
														if($result_cat->num_rows > 0){
														while($row_cat = $result_cat->fetch_assoc()) {
															$cat_id = $row_cat["id"];
															$cat_name = $row_cat["name"];
													?>
														<option value="<?= $cat_id; ?>"><?= $cat_name; ?></option>
													<?php } } else { } ?>
													</select>
													
                                                    <label class="form-label">Sub Category</label>
													<select class="form-select mb-2 subcat_id" >
													<option value="<?= $products_subcat_id;?>"><?= $subcat_cat_name_echo; ?></option>
													<?php	
														$sql_subcat = "SELECT * FROM subcategories";
														$result_subcat = $conn->query($sql_subcat);
														if($result_subcat->num_rows > 0){
														while($row_subcat = $result_subcat->fetch_assoc()) {
															$subcat_cat_id = $row_subcat["cat_id"];
															$subcat_id = $row_subcat["id"];
															$subcat_name = $row_subcat["name"];
													?>
														<option style="display:none;" class="cat_id_all cat_id_<?= $subcat_cat_id; ?>" value="<?= $subcat_id; ?>"><?= $subcat_name; ?></option>
													<?php } } else { } ?>
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
																	<input type="text" name="product_name" class="product_name form-control mb-2" placeholder="Product name" value="<?= $products_name; ?>">
                                                                </div>
																<div>
																	<label class="form-label">Description</label>
																	<textarea class="form-control product_description" placeholder="Enter Description here" style="height: 150px;">
																		<?= $products_description; ?>
																	</textarea>
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
																	<input type="text" name="price" class="form-control mb-2 product_price" placeholder="Product price" value="<?= $products_price; ?>">
																</div>
																<div class="fv-row mb-10">
																	<label class="fs-6 fw-semibold mb-2">Discount Type 
																	    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Select a discount type that will be applied to this product" data-kt-initialized="1"></i>
                                                                    </label>
																	<div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']" data-kt-initialized="1">
																		<div class="col">
																			<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 <?php if($products_discount == 0) { ?> active <?php } else { } ?>" data-kt-button="true">
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input no_discount discount_option" type="radio" name="discount_option" value="1">
																				</span>
																				<span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">No Discount</span>
																				</span>
																			</label>
																		</div>
																		<div class="col">
																			<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 <?php if($products_discount == 0) { } else { ?> active <?php } ?>" data-kt-button="true">
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input yes_discount discount_option" type="radio" name="discount_option" value="2" checked="checked">
																				</span>
																				<span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">Percentage 
                                                                                        <span id="discount_slider_perc"><?= $products_discount; ?></span> %
                                                                                    </span>
																				</span>
																			</label>
																		</div>
																	</div>
																</div>
																
																
																<div class="mb-10 fv-row discount_slider" id="kt_ecommerce_add_product_discount_percentage">
																	<label class="form-label">Set Discount Percentage</label>
																	<input id="discount_slider_input" type="range" min="0" max="100" value="<?= $products_discount; ?>" style="width:100%;">
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
																	<input type="text" name="sku" class="form-control mb-2 product_sku" placeholder="SKU Number" value="<?= $products_sku; ?>">
																	<div class="text-muted fs-7">Enter the product SKU.</div>
																</div>
															</div>
															<div class="card-body pt-0">
																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<label class="required form-label">Brand</label>
																	<input type="text" name="brand" class="product_brand form-control mb-2" placeholder="Brand Name" value="<?= $products_brand; ?>">
																	<div class="text-muted fs-7">Enter the product Brand.</div>
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
																		
																		<div class="variants_div">
																		<?php	
																			$sql_product_variants = "SELECT * FROM product_variants WHERE p_id = '$p_id'";
																			$result_product_variants = $conn->query($sql_product_variants);
																			if($result_product_variants->num_rows > 0){
																			while($row_product_variants = $result_product_variants->fetch_assoc()) {
																				$variant_type = $row_product_variants["variant"];
																				$variant_title = $row_product_variants["title"];
																				$variant_stock = $row_product_variants["stock"];
																		?>
																			<div class="form-group variant_indi" style="margin-top:1%;">
																				<div class="d-flex flex-column gap-3">
																					<div class="form-group d-flex flex-wrap align-items-center gap-5">
																						
																						<div class="w-100 w-md-150px">
																							<select class="form-select variant_type variant_type[]" name="kt_ecommerce_add_product_options_1[]" >
																								<option value="<?= $variant_type; ?>"><?= $variant_type; ?></option>
																								<option value="color">Color</option>
																								<option value="size">Size</option>
																								<option value="material">Material</option>
																								<option value="style">Style</option>
																							</select>
																						</div>
																						
																						<input type="text" class="form-control variant_title mw-100 w-200px variant_title[]" name="kt_ecommerce_add_product_options_2[]" placeholder="Title" value="<?= $variant_title; ?>">
																						<input type="number" class="form-control variant_quantity mw-100px variant_quantity[]" name="kt_ecommerce_add_product_options_3[]" placeholder="Quantity" value="<?= $variant_stock; ?>">
																						
																						<button type="button" class="btn btn-sm btn-icon btn-light-danger variant_remove">
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
																		<?php } } else { } ?>
																		</div>
																		
																		<div class="form-group mt-5">
																			<button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary variant_add_btn">
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
																<textarea class="form-control product_shipping" placeholder="Enter Details here" style="height: 150px;" >
																	<?= $products_shipping; ?>
																</textarea>
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

																	<?php 
																		$sql_reviews = "SELECT * FROM reviews WHERE p_id = '$p_id' AND status = 'Approved'";
																		$result_reviews = $conn->query($sql_reviews);
																		if($result_reviews->num_rows > 0){
																		while($row_reviews = $result_reviews->fetch_assoc()){
																			$review_u_id = $row_reviews["u_id"];
																			$review_rating = $row_reviews["rating"];
																			$review_review = $row_reviews["review"];
																			$review_date = $row_reviews["date"];

																			$sql_reviews_user = "SELECT * FROM users WHERE id = '$review_u_id'";
																			$result_reviews_user = $conn->query($sql_reviews_user);
																			if($result_reviews_user->num_rows > 0){
																			while($row_reviews_user = $result_reviews_user->fetch_assoc()){
																				$review_user_name = $row_reviews_user["f_name"];
																			} } else { } 
																	?>
																		<tr>
																			<td data-order="rating-5">
																				<div class="rating">
																					<div class="rating-label <?php if($review_rating >= 1) { ?> checked <?php } else { } ?>">
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																							</svg>
																						</span>
																					</div>
																					<div class="rating-label <?php if($review_rating >= 2) { ?> checked <?php } else { } ?>">
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																							</svg>
																						</span>
																					</div>
																					<div class="rating-label <?php if($review_rating >= 3) { ?> checked <?php } else { } ?>">
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																							</svg>
																						</span>
																					</div>
																					<div class="rating-label <?php if($review_rating >= 4) { ?> checked <?php } else { } ?>">
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
																							</svg>
																						</span>
																					</div>
																					<div class="rating-label <?php if($review_rating >= 5) { ?> checked <?php } else { } ?>">
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
																							<span class="text-danger"><?= substr($review_user_name, 0, 1); ?></span>
																						</div>
																					</div>
																					<span class="fw-bold"><?= $review_user_name; ?></span>
																				</a>
																			</td>
																			<td class="text-gray-600 fw-bold"><?= $review_review; ?></td>
																			<td class="text-end">
																				<span class="fw-semibold text-muted"><?= $review_date; ?></span>
																			</td>
																		</tr>
																	<?php } } else { } ?>

																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="d-flex justify-content-end">
												<a href="products=q=active" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
												<button type="button" id="kt_ecommerce_add_product_submit" class="btn btn-primary product_submit_btn">
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


						<?php } } else { } ?>


    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/sales/listing.js"></script>
		
	<?php include("footer.php"); ?>
	<?php include("pop_notifications.php"); ?>

	<script>
		$(".cat_id").on("change",function(){
			let cat_id = $(this).val();4
			$(".cat_id_all").css("display","none"); 
			$(".cat_id_"+cat_id).css("display","block"); 
		});

		$(".variant_add_btn").on("click",()=>{
			$(".variants_div").append(`<div class="form-group variant_indi" style="margin-top:1%;">
										<div class="d-flex flex-column gap-3">
											<div class="form-group d-flex flex-wrap align-items-center gap-5">
												
												<div class="w-100 w-md-150px">
													<select class="form-select variant_type[]" name="kt_ecommerce_add_product_options_1[]">
														<option value="color">Color</option>
														<option value="size">Size</option>
														<option value="material">Material</option>
														<option value="style">Style</option>
													</select>
												</div>
												
												<input type="text" class="form-control mw-100 w-200px variant_title[]" name="kt_ecommerce_add_product_options_2[]" placeholder="Title">
												<input type="number" class="form-control mw-100px variant_quantity[]" name="kt_ecommerce_add_product_options_3[]" placeholder="Quantity">
												
												<button type="button" class="btn btn-sm btn-icon btn-light-danger variant_remove">
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor"></rect>
															<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor"></rect>
														</svg>
													</span>
												</button>

											</div>
										</div>
									</div>`);
		});

		$(document).on("click",".variant_remove",function(){
			$(this).closest(".variant_indi").remove();
		});

		$(".product_submit_btn").on("click",()=>{
			$(".indicator-label").css("display","none");
			$(".indicator-progress").css("display","block");
			var fd = new FormData();
			var p_id = $(".p_id").val();
			var cat_id = $(".cat_id").val();
			var subcat_id = $(".subcat_id").val();
			var product_status = $(".product_status").val();
			var product_name = $(".product_name").val();
			var product_description = $(".product_description").val();
			var product_price = $(".product_price").val();
			var discount_option = $(".discount_option").val();
			var product_discount_perc = parseInt($("#discount_slider_perc").html());
			var product_sku = $(".product_sku").val();
			var product_brand = $(".product_brand").val();
			var product_shipping = $(".product_shipping").val();
			var files = $('#product_pic')[0].files;

			var variant_type = $("select[name='kt_ecommerce_add_product_options_1[]']").map(function(){return $(this).val();}).get();
			var variant_title = $("input[name='kt_ecommerce_add_product_options_2[]']").map(function(){return $(this).val();}).get();
			var variant_quantity = $("input[name='kt_ecommerce_add_product_options_3[]']").map(function(){return $(this).val();}).get();

			console.log(variant_type);

			fd.append('product_pic',files[0]);
			fd.append('p_id',p_id);
			fd.append('cat_id',cat_id);
			fd.append('subcat_id',subcat_id);
			fd.append('product_status',product_status);
			fd.append('product_name',product_name);
			fd.append('product_description',product_description);
			fd.append('product_price',product_price);
			fd.append('discount_option',discount_option);
			fd.append('product_discount_perc',product_discount_perc);
			fd.append('product_sku',product_sku);
			fd.append('product_brand',product_brand);
			fd.append('product_shipping',product_shipping);

			variant_type.forEach((item) => fd.append("variant_type[]", item));
			variant_title.forEach((item) => fd.append("variant_title[]", item));
			variant_quantity.forEach((item) => fd.append("variant_quantity[]", item));

			$.ajax({
				url:'backend/product_update.php',
				type:'post',
				data:fd,
				contentType: false,
				processData: false,
				success:function(response) {
					$(".pop_notify").fadeIn().css({"background":"green"}).animate({"bottom":"2%"}).html(response);
					setTimeout(()=>{
						$(".pop_notify").animate({"bottom":"-20%"}).fadeOut().html('');
					},3000);
					$(".product_submit_btn").html("Uploaded");
					$(".product_submit_btn").attr("disabled",'disabled');
					$(".indicator-label").css("display","block");
					$(".indicator-progress").css("display","none");
				}
			});
		});
	</script>



</body>
</html>