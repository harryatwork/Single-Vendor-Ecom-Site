<?php include("head.php"); ?>

<style>
.header-sticky {
    background-color: rgba(0, 0, 0, 0.7) !important;
    box-shadow: 0 8px 6px -6px rgb(0 0 0 / 40%) !important;
}
.page-banner {
    margin-top:10%;
}
</style>

<body>

<?php include("header.php"); ?>

    <div class="page-banner">
        <div class="container">
            <div class="page-banner-content">
                <ul>
                    <li><a href="index">Home</a></li>
                    <li class="active"><a >Cart</a></li>
                </ul>
            </div>
        </div>
    </div>


    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="raavin-product-remove">remove</th>
                                        <th class="raavin-product-thumbnail">images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="raavin-product-price">Unit Price</th>
                                        <th class="raavin-product-quantity">Quantity</th>
                                        <th class="raavin-product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql_cart = "SELECT * FROM cart WHERE u_id = ?";
                                    $stmt_cart = $conn->prepare($sql_cart);
                                    $stmt_cart->bind_param("s",$u_id);
                                    $stmt_cart->execute();
                                    $result_cart = $stmt_cart->get_result();

                                    $total_cart_product_price = 0;
                                    while($row_cart = $result_cart->fetch_assoc()) {
                                        $cart_p_id = $row_cart['p_id'];

                                        $sql_cart_product = "SELECT * FROM products WHERE id = ?";
                                        $stmt_cart_product = $conn->prepare($sql_cart_product);
                                        $stmt_cart_product->bind_param("s",$cart_p_id);
                                        $stmt_cart_product->execute();
                                        $result_cart_product = $stmt_cart_product->get_result();
                                        while($row_cart_product = $result_cart_product->fetch_assoc()) {
                                            $cart_product_discount = $row_cart_product["discount"];
                                            $cart_product_price = $row_cart_product["price"];
                                            if($cart_product_discount == 0) {
                                                $cart_product_price = $cart_product_price;
                                            } else { 
                                                $cart_product_price = round(($cart_product_price - (($cart_product_price)*(($cart_product_discount)/100))),2);
                                            }
                                        }
                                        $total_cart_product_price_indi = $cart_product_price * $row_cart['quantity'];
                                        $total_cart_product_price = $total_cart_product_price + $total_cart_product_price_indi;
                                ?>
                                    <tr class="cart-item-<?= $row_cart['id']; ?>">
                                        <td class="raavin-product-remove cart_remove" cart-id="<?= $row_cart['id']; ?>" item-value="<?= $cart_product_price; ?>" item-quantity="<?= $row_cart['quantity']; ?>""><a href="#"><i class="fa fa-times"></i></a></td>
                                        <td class="raavin-product-thumbnail">
                                            <a href="product?title=<?= str_replace(' ', '-',$row_cart['title']); ?>/<?= $cart_p_id; ?>">
                                                <img onerror="this.src='admin/assets/images/product.png'" src="images-main/products/<?= $row_cart['image']; ?>" alt="" style="width:100px;" />
                                            </a>
                                        </td>
                                        <td class="raavin-product-name"><a href="product?title=<?= str_replace(' ', '-',$row_cart['title']); ?>/<?= $cart_p_id; ?>">Aliquam lobortis est</a></td>
                                        <td class="raavin-product-price"><span class="amount">$<?= $cart_product_price; ?></span></td>
                                        <td class="raavin-product-quantity">
                                            <input class="input-text qty text" style="text-align:center;" readonly step="1" min="1" max="200" name="quantity" value="<?= $row_cart['quantity']; ?>" title="Qty" size="4" type="number">
                                        </td>
                                        <td class="product-subtotal"><span class="amount">$<?= $cart_product_price*$row_cart['quantity']; ?></span></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="row" style="display:none;">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                        <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                    </div>
                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>Subtotal <span>$<?= $total_cart_product_price; ?></span></li>
                                        <li>Total <span>$<?= $total_cart_product_price; ?></span></li>
                                    </ul>
                                    <a href="checkout">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->


<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

</body>

</html>