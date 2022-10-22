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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Sub Category : </h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="dashboard" class="text-muted text-hover-primary">Dashboard</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Sub Category</li>
										</ul>
									</div>
								</div>
							</div>


                            <div id="kt_app_content" class="app-content flex-column-fluid" data-select2-id="select2-data-kt_app_content">
								<div id="kt_app_content_container" class="app-container container-xxl" data-select2-id="select2-data-kt_app_content_container">
									<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" data-kt-redirect="" data-select2-id="select2-data-kt_ecommerce_add_product_form">
										<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
											<div class="card card-flush py-4">
												<div class="card-header">
													<div class="card-title">
														<h2>Image</h2>
													</div>
												</div>
												<div class="card-body text-center pt-0">
													
                                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
														<div class="image-input-wrapper w-150px h-150px" style="background-image: url(assets/images/product.png)"></div>
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-kt-initialized="1">
															<i class="bi bi-pencil-fill fs-7"></i>
															<input type="file" id="subcat_pic" name="avatar"  accept=".png, .jpg, .jpeg">
															<!-- <input type="hidden" name="avatar_remove"> -->
														</label>
													</div>
													
												</div>
												
											</div>
									
										</div>
										
										
										<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10" data-select2-id="select2-data-140-q0in">
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general" aria-selected="false" role="tab" tabindex="-1">General</a>
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
																	<label class="required form-label">Category</label>
                                                                    <select class="category form-control mb-2">
																	<?php	
																		$sql_cat = "SELECT * FROM categories";
																		$result_cat = $conn->query($sql_cat);
																		if($result_cat->num_rows > 0){
																		while($row_cat = $result_cat->fetch_assoc()) {
																			$cat_id = $row_cat["id"];
																			$cat_name = $row_cat["name"];
																	?>
                                                                        <option value="<?= $cat_id; ?>"><?= $cat_name; ?></option>
																	<?php } } else { }  ?>
                                                                    </select>
                                                                </div>
															</div>

															<div class="card-body pt-0">
																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<label class="required form-label">Sub Category Name</label>
																	<input type="text" name="" class="subcat_name form-control mb-2" placeholder="Sub Category name" >
                                                                </div>
															</div>

														</div>
														
													</div>
												</div>
											
											</div>
											
											<div class="d-flex justify-content-end">
												<a href="subcategories" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
												<button type="button" id="kt_ecommerce_add_product_submit" class="subcategory_submit_btn btn btn-primary">
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
	$(".subcategory_submit_btn").on("click",()=>{ 
		$(".indicator-label").css("display","none");
		$(".indicator-progress").css("display","block");
		var fd = new FormData();
		var category = $(".category").val();
		var subcategory = $(".subcat_name").val();
		var files = $('#subcat_pic')[0].files;

		fd.append('subcat_pic',files[0]);
		fd.append('category',category);
		fd.append('subcategory',subcategory);

		$.ajax({
			url:'backend/subcat_insert.php',
			type:'post',
			data:fd,
			contentType: false,
			processData: false,
			success:function(response) {
				$(".pop_notify").fadeIn().css({"background":"green"}).animate({"bottom":"2%"}).html(response);
                setTimeout(()=>{
                    $(".pop_notify").animate({"bottom":"-20%"}).fadeOut().html('');
					window.location.href='subcategories';
                },3000);
				$(".subcategory_submit_btn").html("Uploaded");
				$(".subcategory_submit_btn").attr("disabled",'disabled');
				$(".indicator-label").css("display","block");
				$(".indicator-progress").css("display","none");
			}
		});
	});
	</script>



</body>
</html>