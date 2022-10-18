
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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Sales</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="dashboard" class="text-muted text-hover-primary">Dashboard</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Sales</li>
										</ul>
									</div>
								</div>
							</div>

                            <div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-xxl">
									<div class="card card-flush">
                                    
                                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
    											<!-- <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_sales_daterangepicker"> -->
    											<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    											<span class="svg-icon svg-icon-2">
    												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    													<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor"></rect>
    													<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor"></path>
    													<path opacity="0.3" d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="currentColor"></path>
    												</svg>
    											</span>
    											Export Report</button>
    											<div id="kt_ecommerce_report_sales_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
    												<div class="menu-item px-3">
    													<a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
    												</div>
    												<div class="menu-item px-3">
    													<a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
    												</div>
    												<div class="menu-item px-3">
    													<a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
    												</div>
    												<div class="menu-item px-3">
    													<a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
    												</div>
    											</div>
    										</div>
    									</div>

										<div class="card-body pt-0">
											<div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                
                                                
                                                <div class="card-body pt-0">
													<table class="table table-row-dashed fs-6 gy-5 my-0" id="kt_ecommerce_add_product_reviews">																	<thead>
															<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
																<th class="min-w-175px" style="text-align:center;">Date</th>
																<th class="min-w-125px" style="text-align:center;">No.of Orders</th>
																<th class="min-w-125px" style="text-align:center;">Products Sold</th>
																<th class="min-w-175px" style="text-align:center;">Revenue</th>
															</tr>
														</thead>
														<tbody>
														<?php
															$sql_orders_dist_date = "SELECT DISTINCT(date) FROM orders WHERE order_status = 'Confirmed' AND delivery_status = 'Delivered' ORDER BY date DESC";
															$result_orders_dist_date = $conn->query($sql_orders_dist_date);
															if($result_orders_dist_date->num_rows > 0) {
															while($row_orders_dist_date = $result_orders_dist_date->fetch_assoc()) {
																$o_date = $row_orders_dist_date["date"];

																$sql_orders_count = "SELECT DISTINCT(o_id) FROM orders WHERE date = '$o_date'";
																$result_orders_count = $conn->query($sql_orders_count);
																$orders_count = $result_orders_dist_date->num_rows;

																$sql_products_count = "SELECT * FROM orders WHERE date = '$o_date'";
																$result_products_count = $conn->query($sql_products_count);
																$products_count = $result_products_count->num_rows;

																$total_revenue = 0;
																$sql_orders_total = "SELECT * FROM orders WHERE date = '$o_date'";
																$result_orders_total = $conn->query($sql_orders_total);
																if($result_orders_total->num_rows > 0) {
																while($row_orders_total = $result_orders_total->fetch_assoc()) {
																	$orders_price = $row_orders_total["price"];
																	$orders_quantity = $row_orders_total["quantity"];
																	$orders_total = $orders_price * $orders_quantity;
																	$total_revenue = $total_revenue + $orders_total;
																} } else { }
														?>
															<tr>
															    <td class="" style="text-align:center;">
																	<span class="fw-semibold text-muted"><?= $o_date; ?></span>
																</td>
																<td class="" style="text-align:center;">
																	<span class="fw-semibold text-muted"><?= $orders_count; ?></span>
																</td>
																<td class="" style="text-align:center;">
																	<span class="fw-semibold text-muted"><?= $products_count; ?></span>
																</td>
																<td class="" style="text-align:center;">
																	<span class="fw-semibold text-muted">$<?= $total_revenue; ?></span>
																</td>
															</tr>
														<?php } } else { } ?>
															
														</tbody>
													</table>
												</div>
                                                
                                                
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                        <div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_sales_table_paginate">
                                                            <ul class="pagination">
                                                                <li class="paginate_button page-item previous disabled" id="kt_ecommerce_sales_table_previous">
                                                                    <a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="0" tabindex="0" class="page-link">
                                                                        <i class="previous"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="paginate_button page-item active">
                                                                    <a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                                </li>
                                                                <li class="paginate_button page-item ">
                                                                    <a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                                </li>
                                                                <li class="paginate_button page-item ">
                                                                    <a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                                </li>
                                                                <li class="paginate_button page-item ">
                                                                    <a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                                </li>
                                                                <li class="paginate_button page-item ">
                                                                    <a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                                </li>
                                                                <li class="paginate_button page-item next" id="kt_ecommerce_sales_table_next">
                                                                    <a href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="6" tabindex="0" class="page-link">
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



    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/sales/listing.js"></script>
		
	<?php include("footer.php"); ?>

	
</body>
</html>