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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Add Product</h1>
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
															<input type="file" id="product_pic" name="avatar" accept=".png, .jpg, .jpeg">
															<!-- <input type="hidden" name="avatar_remove"> -->
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
													<select class="product_status form-select mb-2 " >
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
													<select class="form-select mb-2 cat_id" >
														<option selected disabled hidden>Choose One</option>
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
														<option selected disabled hidden>Choose One</option>
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
																	<input type="text" name="product_name" class="product_name form-control mb-2" placeholder="Product name" value="">
                                                                </div>
																<div>
																	<label class="form-label">Description</label>
																	<textarea class="product_description form-control" placeholder="Enter Description here" style="height: 150px;"></textarea>
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
																	<input type="text" name="price" class="product_price form-control mb-2" placeholder="Product price" value="199.99">
																</div>
																<div class="fv-row mb-10">
																	<label class="fs-6 fw-semibold mb-2">Discount Type 
																	    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Select a discount type that will be applied to this product" data-kt-initialized="1"></i>
                                                                    </label>
																	<div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']" data-kt-initialized="1">
																		<div class="col">
																			<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 active" data-kt-button="true">
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input no_discount discount_option" type="radio" name="discount_option" value="0" checked="checked">
																				</span>
																				<span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">No Discount</span>
																				</span>
																			</label>
																		</div>
																		<div class="col">
																			<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input yes_discount discount_option" type="radio" name="discount_option" value="1" >
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
																
																
																<div class="mb-10 fv-row discount_slider" id="kt_ecommerce_add_product_discount_percentage" style="display:none;">
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
																	<input type="text" name="sku" class="product_sku form-control mb-2" placeholder="SKU Number" placeholder="011985001">
																	<div class="text-muted fs-7">Enter the product SKU.</div>
																</div>
															</div>
															<div class="card-body pt-0">
																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<label class="required form-label">Brand</label>
																	<input type="text" name="brand" class="product_brand form-control mb-2" placeholder="Brand Name" placeholder="NIke, Puma">
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
																	<div  id="kt_ecommerce_add_product_options" data-select2-id="select2-data-kt_ecommerce_add_product_options">
																		
																		<div class="variants_div">
																			<div class="form-group variant_indi">
																				<div class="d-flex flex-column gap-3">
																					<div class="form-group d-flex flex-wrap align-items-center gap-5">
																						
																						<div class="w-100 w-md-150px">
																							<select class="form-select variant_type variant_type[]" name="kt_ecommerce_add_product_options_1[]" >
																								<option value="color" data-select2-id="select2-data-168-jqig">Color</option>
																								<option value="size" data-select2-id="select2-data-169-3bxf">Size</option>
																								<option value="material" data-select2-id="select2-data-170-1xba">Material</option>
																								<option value="style" data-select2-id="select2-data-171-o4g6">Style</option>
																							</select>
																						</div>
																						
																						<input type="text" class="form-control variant_title mw-100 w-200px variant_title[]" name="kt_ecommerce_add_product_options_2[]" placeholder="Title">
																						<input type="number" class="form-control variant_quantity mw-100px variant_quantity[]" name="kt_ecommerce_add_product_options_3[]" placeholder="Quantity">
																						
																					</div>
																				</div>
																			</div>
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
																<textarea class="product_shipping form-control" placeholder="Enter Details here" style="height: 150px;" ></textarea>
															</div>
														</div>
														
													</div>
												</div>
												
											</div>
											
											<div class="d-flex justify-content-end">
												<a href="products=q=active" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
												<button type="button" id="kt_ecommerce_add_product_submit" class="product_submit_btn btn btn-primary">
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

		$(".product_submit_btn").on("click",function(){
			$(".indicator-label").css("display","none");
			$(".indicator-progress").css("display","block");
			var fd = new FormData();
			
			var variant_type = $("select[name='kt_ecommerce_add_product_options_1[]']").map(function(){return $(this).val();}).get();
			var variant_title = $("input[name='kt_ecommerce_add_product_options_2[]']").map(function(){return $(this).val();}).get();
			var variant_quantity = $("input[name='kt_ecommerce_add_product_options_3[]']").map(function(){return $(this).val();}).get();

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

			fd.append('product_pic',files[0]);
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
				url:'backend/product_insert.php',
				type:'post',
				data:fd,
				contentType: false,
				processData: false,
				success:function(response) {
					$(".pop_notify").fadeIn().css({"background":"green"}).animate({"bottom":"2%"}).html(response);
					setTimeout(()=>{
						$(".pop_notify").animate({"bottom":"-20%"}).fadeOut().html('');
						window.location.href="products?q=active";
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