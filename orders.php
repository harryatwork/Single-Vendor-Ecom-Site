<?php include("head.php"); ?>

<style>
.header-sticky {
    background-color: rgba(0, 0, 0, 0.7) !important;
    box-shadow: 0 8px 6px -6px rgb(0 0 0 / 40%) !important;
}
.page-banner {
    margin-top:10%;
}

.user_account_menu:hover {
    background: #ffeeb9;
    border-radius: 5px;
    font-weight: 600;
}
</style>

<body>

<?php include("header.php"); ?>


<div class="main-container full-width">
	<div class="title-breadcrumb">
		<div class="container">
			<div class="title-breadcrumb-inner">
				<header class="entry-header">
					<h1 class="entry-title">My Account</h1>
				</header>
				<div class="breadcrumbs">
                    <a href="index">Home</a>
                    <span class="separator">/</span>
                    <span>Orders</span>
                </div>			
            </div>
		</div>
	</div>
	<div class="page-content">
		<div class="container">
            <article id="post-22" class="post-22 page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="woocommerce" style="display: flex;margin-top: 15%;">
                        <nav class="woocommerce-MyAccount-navigation" style="width: 30%;">
                            <ul>
                                <li class="user_account_menu woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders" style="padding: 5%;border-bottom: 1px solid #e4e4e4;font-size: 16px;cursor:pointer;">
                                    <a href="orders">Orders</a>
                                </li>
                                <li class="user_account_menu woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address" style="padding: 5%;border-bottom: 1px solid #e4e4e4;font-size: 16px;cursor:pointer;">
                                    <a href="addresses">Addresses</a>
                                </li>
                                <li class="user_account_menu woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account is-active" style="padding: 5%;border-bottom: 1px solid #e4e4e4;font-size: 16px;cursor:pointer;">
                                    <a href="account_details">Account Details</a>
                                </li>
                                <li class="user_account_menu woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout" style="padding: 5%;border-bottom: 1px solid #e4e4e4;font-size: 16px;cursor:pointer;">
                                    <a href="logout">Logout</a>
                                </li>
                            </ul>
                        </nav>

                        <table class="woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table" style="width: 90%;">
                            <thead>
                                <tr>
                                    <th class="order-number" style="padding: 14px;text-align: center;"><span class="nobr">Order</span></th>
                                    <th class="order-date" style="padding: 14px;text-align: center;"><span class="nobr">Date</span></th>
                                    <th class="order-status" style="padding: 14px;text-align: center;"><span class="nobr">Status</span></th>
                                    <th class="order-total" style="padding: 14px;text-align: center;"><span class="nobr">Total</span></th>
                                    <th class="order-actions" style="padding: 14px;text-align: center;"><span class="nobr">&nbsp;</span></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $sql_orders_distinct = "SELECT DISTINCT(o_id) FROM orders WHERE u_id = ?";
                                $stmt_orders_distinct = $conn->prepare($sql_orders_distinct);
                                $stmt_orders_distinct->bind_param("i",$u_id);
                                $stmt_orders_distinct->execute();
                                $result_orders_distinct = $stmt_orders_distinct->get_result();
                                while($row_orders_distinct = $result_orders_distinct->fetch_assoc()) {
                                    $o_id = $row_orders_distinct["o_id"];

                                    $total = 0;
                                    $total_quant = 0;
                                    $order_date = '';
                                    $order_status = '';
                                    $sql_orders = "SELECT * FROM orders WHERE o_id = ?";
                                    $stmt_orders = $conn->prepare($sql_orders);
                                    $stmt_orders->bind_param("i",$o_id);
                                    $stmt_orders->execute();
                                    $result_orders = $stmt_orders->get_result();
                                    while($row_orders = $result_orders->fetch_assoc()) {
                                        $order_price = $row_orders['price'];
                                        $order_quantity = $row_orders['quantity'];
                                        $total_quant = $total_quant + $order_quantity;
                                        $total_indi = $order_price * $order_quantity;
                                        $total = $total_indi + $total;

                                        $order_date = $row_orders["date"];
                                        $order_status = $row_orders["order_status"];
                                    }

                            ?>
                                
                                <tr class="order">
                                    <td class="order-number" data-title="Order" style="padding: 14px;text-align: center;">
                                        <a href="order_details?id=<?= $o_id; ?>" target="_blank">#<?= $o_id; ?></a>
                                    </td>
                                    <td class="order-date" data-title="Date" style="padding: 14px;text-align: center;">
                                        <time datetime="2022-10-29" title="1667035057"><?= $order_date; ?></time>
                                    </td>
                                    <td class="order-status" data-title="Status" style="padding: 14px;text-align: center;">
                                        <?= $order_status; ?>
                                    </td>
                                    <td class="order-total" data-title="Total" style="padding: 14px;text-align: center;">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            <?= $total; ?></span> for 
                                            <?= $total_quant; ?> item
                                    </td>
                                    <td class="order-actions" data-title="&nbsp;" style="padding: 14px;text-align: center;">
                                        <a href="order_details?id=<?= $o_id; ?>"  target="_blank" class="button view" 
                                            style="background: #cb9a00;color: white;padding: 10px;border-radius: 5px;">View</a>	
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>					
        </div>
	</div>

    
</div>


<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

<?php include("pop_notifications.php"); ?>

</body>

</html>