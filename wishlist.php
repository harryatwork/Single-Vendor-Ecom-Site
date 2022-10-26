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
                    <li class="active"><a >Wish List</a></li>
                </ul>
            </div>
        </div>
    </div>


    <!--Wishlist Area Strat-->
    <div class="wishlist-area pt-100 pb-100">
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
                                        <!-- <th class="raavin-product-stock-status">Stock Status</th> -->
                                        <th class="raavin-product-add-cart">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql_wishlist = "SELECT * FROM wishlist WHERE u_id = ?";
                                    $stmt_wishlist = $conn->prepare($sql_wishlist);
                                    $stmt_wishlist->bind_param("s",$u_id);
                                    $stmt_wishlist->execute();
                                    $result_wishlist = $stmt_wishlist->get_result();

                                    $total_wishlist_product_price = 0;
                                    while($row_wishlist = $result_wishlist->fetch_assoc()) {
                                        $wishlist_p_id = $row_wishlist['p_id'];

                                        $sql_wishlist_product = "SELECT * FROM products WHERE id = ?";
                                        $stmt_wishlist_product = $conn->prepare($sql_wishlist_product);
                                        $stmt_wishlist_product->bind_param("s",$wishlist_p_id);
                                        $stmt_wishlist_product->execute();
                                        $result_wishlist_product = $stmt_wishlist_product->get_result();
                                        while($row_wishlist_product = $result_wishlist_product->fetch_assoc()) {
                                            $wishlist_product_discount = $row_wishlist_product["discount"];
                                            $wishlist_product_price = $row_wishlist_product["price"];
                                            
                                            if($wishlist_product_discount == 0) {
                                                $wishlist_product_price = $wishlist_product_price;
                                            } else { 
                                                $wishlist_product_price = round(($wishlist_product_price - (($wishlist_product_price)*(($wishlist_product_discount)/100))),2);
                                            }
                                        $total_wishlist_product_price_indi = $wishlist_product_price * $row_wishlist['quantity'];
                                        $total_wishlist_product_price = $total_wishlist_product_price + $total_wishlist_product_price_indi;
                                ?>
                                    <tr class="wishlist-item-<?= $row_wishlist['id']; ?>">
                                        <td class="raavin-product-remove remove_from_wishlist" wishlist-id="<?= $row_wishlist['id']; ?>" style="cursor:pointer;">
                                            <a><i class="fa fa-times"></i></a>
                                        </td>
                                        <td class="raavin-product-thumbnail">
                                            <a href="product?title=<?= str_replace(' ', '-',$row_wishlist['title']); ?>/<?= $wishlist_p_id; ?>">
                                                <img onerror="this.src='admin/assets/images/product.png'" src="images-main/products/<?= $row_wishlist['image']; ?>" alt="" style="width:100px;" />
                                            </a>
                                        </td>
                                        <td class="raavin-product-name"><a href="product?title=<?= str_replace(' ', '-',$row_wishlist['title']); ?>/<?= $wishlist_p_id; ?>"><?= $row_wishlist['title']; ?></a></td>
                                        <td class="raavin-product-price"><span class="amount">$<?= $wishlist_product_price; ?></span></td>
                                        <!-- <td class="raavin-product-stock-status"><span class="in-stock">in stock</span></td> -->
                                        <td class="raavin-product-add-cart move_to_cart" p-price="<?= $row_wishlist_product['price']; ?>" p-variant-title="<?= $row_wishlist['variant_title']; ?>" p-variant-type="<?= $row_wishlist['variant_type']; ?>" p-title="<?= $row_wishlist_product['name']; ?>" p-image="<?= $row_wishlist_product['image']; ?>" p-id="<?= $row_wishlist_product['id']; ?>" u-id="<?= $u_id; ?>" c-id="<?= $row_wishlist_product['cat_id']; ?>" sub-c-id="<?= $row_wishlist_product['subcat_id']; ?>" wishlist-id="<?= $row_wishlist['id']; ?>" style="cursor:pointer;"><a>move to cart</a></td>
                                    </tr>
                                <?php } } ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Wishlist Area End-->

<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

</body>

</html>