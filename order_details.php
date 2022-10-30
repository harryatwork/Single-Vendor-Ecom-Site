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
.progress_bar_color {
	background:gray;
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
                    <span>Order Detail</span>
                </div>			
            </div>
		</div>
	</div>
	<div class="page-content">
		<div class="container">
            <article id="post-22" class="post-22 page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="woocommerce" style="display: flex;margin-top: 15%;position:relative;">
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

                        <?php
                            $o_id = $_GET["id"];
                            $sql_orders_distinct = "SELECT * FROM orders WHERE o_id = ? LIMIT 1";
                            $stmt_orders_distinct = $conn->prepare($sql_orders_distinct);
                            $stmt_orders_distinct->bind_param("i",$o_id);
                            $stmt_orders_distinct->execute();
                            $result_orders_distinct = $stmt_orders_distinct->get_result();
                            while($row_orders_distinct = $result_orders_distinct->fetch_assoc()) {
                                $order_status = $row_orders_distinct["order_status"];
                                $delivery_status = $row_orders_distinct["delivery_status"];
                                $order_date = $row_orders_distinct["date"];
                        ?>

                        <div style="text-align: center;width: 100%;position: absolute;top: -12%;left: 8%;">
                            Order #<?= $o_id; ?> was placed on <?= $order_date; ?> and is currently at <span style="background: lightgreen;color: white;padding: 5px;border-radius: 5px;"> Order status : <?= $order_status; ?> </span> with <span style="background: orange;color: white;padding: 5px;border-radius: 5px;">Delivery status of <?= $delivery_status; ?> </span>.
                        </div>

                    <?php } ?>

                        <table class="woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table" style="width: 90%;">
                            <thead>
                                <tr>
                                    <th class="order-number" style="padding: 14px;text-align: center;"><span class="nobr">Product</span></th>
                                    <th class="order-date" style="padding: 14px;text-align: center;"><span class="nobr">Unit Price</span></th>
                                    <th class="order-status" style="padding: 14px;text-align: center;"><span class="nobr">Quantity</span></th>
                                    <th class="order-total" style="padding: 14px;text-align: center;"><span class="nobr">Total</span></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
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
                                    $cart_p_id = $row_orders["p_id"];
                                    $order_price = $row_orders['price'];
                                    $order_quantity = $row_orders['quantity'];
                                    $total_quant = $total_quant + $order_quantity;
                                    $total_indi = $order_price * $order_quantity;
                                    $total = $total_indi + $total;

                                    $order_date = $row_orders["date"];
                                    $order_status = $row_orders["order_status"];

                                    $sql_cart_product = "SELECT * FROM products WHERE id = ?";
                                    $stmt_cart_product = $conn->prepare($sql_cart_product);
                                    $stmt_cart_product->bind_param("i",$cart_p_id);
                                    $stmt_cart_product->execute();
                                    $result_cart_product = $stmt_cart_product->get_result();
                                    while($row_cart_product = $result_cart_product->fetch_assoc()) {
                            ?>
                                
                                <tr class="order">
                                    <td class="order-number" data-title="Order" style="padding: 14px;text-align: center;">
                                        <img onerror="this.src='admin/assets/images/product.png'" src="images-main/products/<?= $row_cart_product['image']; ?>" alt="" style="width:100px;" />
                                    </td>
                                    <td class="order-date" data-title="Date" style="padding: 14px;text-align: center;">
                                        <time datetime="2022-10-29" title="1667035057"><?= $order_price; ?></time>
                                    </td>
                                    <td class="order-status" data-title="Status" style="padding: 14px;text-align: center;">
                                        <?= $order_quantity; ?>
                                    </td>
                                    <td class="order-total" data-title="Total" style="padding: 14px;text-align: center;">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            <?= $total_indi; ?>
                                    </td>
                                </tr>
                            <?php } } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-5 ml-auto" style="float: right;padding: 0% 0 5% 0;">
                        <div class="cart-page-total">
                            <h2>Totals</h2>
                            <ul>
                                <li>Subtotal <span>$<?= $total; ?></span></li>
                                <li>Total <span>$<?= $total; ?></span></li>
                            </ul>
                        </div>
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