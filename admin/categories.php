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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Categories</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="dashboard" class="text-muted text-hover-primary">Dashboard</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Categories</li>
										</ul>
									</div>
                                    <a href="category_add" class="btn btn-primary"> 
                                        Add New
                                    </a>
								</div>
							</div>

                            <div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-xxl">
									<div class="card card-flush">
										
                                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
										<!--
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<div class="input-group w-250px">
													<input class="form-control form-control-solid rounded rounded-end-0 flatpickr-input" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" type="hidden"><input class="form-control form-control-solid rounded rounded-end-0 form-control input" placeholder="Pick date range" tabindex="0" type="text" readonly="readonly">
													<button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
														<span class="svg-icon svg-icon-2">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor"></rect>
																<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor"></rect>
															</svg>
														</span>
													</button>
												</div>
											</div>
                                        -->
                                        
										</div>
										
										<div class="card-body pt-0">
											<div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                <div class="table-responsive">
                                                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_sales_table">
												        <thead>
                                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 102.016px;">Sl</th>
                                                                <th class="min-w-175px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 207.656px;">Name</th>
                                                                <th class="text-end min-w-70px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 74.0859px;">Stock</th>
                                                                <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 102.047px;">Actions</th>
                                                            </tr>
												        </thead>
												        <tbody class="fw-semibold text-gray-600 categories_list">
                                                            <tr>
                                                                <td>
                                                                    <div class="loader"> 
                                                                        <svg class="circular" viewBox="25 25 50 50">
                                                                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                                                                        </svg> 
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                    
                                                        </tbody>
												
                                                    </table>
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
    <script>
        var date = new Date(), y = date.getFullYear(), m = date.getMonth();
        var firstDay = new Date(y, m+1, -29).toISOString().slice(0, 10);
        var lastDay = new Date(y, m+1, 0).toISOString().slice(0, 10);
        $(document).ready(function() {
            categories_list("1=1",'','id,name,image');
        });

        function categories_list(condition,limit,return_values) {
            $.post('backend/functions.php', {
                condition : condition,
                limit : limit,
                return_values : return_values,
                trigger : 'categories'
            }, function(result) {
                result = JSON.parse(result);
                var final_html = '';
                for(let r=0;r<result.length;r++) { 
                    let c_id = result[r][0];
                    let stock_condition = 'c_id ='+c_id;
                    $.post('backend/functions.php', {
                        condition : stock_condition,
                        limit : limit,
                        return_values : 'id',
                        trigger : 'products'
                    }, function(result_) {
                        var stock_result = JSON.parse(result_);

                        var html = `<tr class="odd">
                                        <td data-kt-ecommerce-order-filter="order_id">
                                            <a class="text-gray-800 text-hover-primary fw-bold">`+r+`</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                    <a>
                                                        <div class="symbol-label">
                                                            <img src="../images-main/categories/`+result[r][2]+`" alt="Product Name" class="w-100">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ms-5">
                                                    <a class="text-gray-800 text-hover-primary fs-5 fw-bold">`+result[r][1]+`</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">`+stock_result.length+`</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="category_detail?id=`+result[r][0]+`" class="btn btn-primary"> 
                                                view
                                            </a>
                                        </td>
                                    </tr>`;
                        final_html = final_html+html;
                    });
                }
                setTimeout(()=>{
                    $(".categories_list").html(final_html);
                },1000);
            });
        }
    </script>
</body>
</html>