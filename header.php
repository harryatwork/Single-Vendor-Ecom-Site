<!-- Begin Header Area -->
<header>
    <div class="main-header main-header-2 stick header-sticky">
        <div class="container-fluid pl-40 pr-40">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block d-xl-block">
                    <div class="main-menu main-menu-2">
                        <nav>
                            <ul>
                                <li class="active">
                                <a href="index">Home</a>
                                </li>
                                <li><a href="#">Shop</a>
                                    <ul class="dropdown megamenu">
                                    <?php 
                                        $sql_categories = "SELECT * FROM categories";
                                        $stmt_categories = $conn->prepare($sql_categories);
                                        $stmt_categories->execute();
                                        $result_categories = $stmt_categories->get_result();
                                        while($row_categories = $result_categories->fetch_assoc()) {
                                            $cat_id = $row_categories["id"];
                                    ?>
                                        <li>
                                            <h3 class="megamenu-title"><a href="shop?category=<?= str_replace('\'', '',str_replace(' ', '-',$row_categories["name"])); ?>/<?= $cat_id; ?>"><?= $row_categories["name"]; ?></a></h3>
                                            <ul>
                                            <?php
                                                $sql_subcategories = "SELECT * FROM subcategories WHERE cat_id = ?";
                                                $stmt_subcategories = $conn->prepare($sql_subcategories);
                                                $stmt_subcategories->bind_param("s",$cat_id);
                                                $stmt_subcategories->execute();
                                                $result_subcategories = $stmt_subcategories->get_result();
                                                while($row_subcategories = $result_subcategories->fetch_assoc()) {
                                            ?>
                                                <li class="submenu-title"><a href="shop?subcategory=<?= str_replace('\'', '',str_replace(' ', '-',$row_categories["name"])); ?>/<?= str_replace('\'', '',(str_replace(' ', '-',$row_subcategories["name"]))); ?>/<?= $row_subcategories["id"]; ?>" ><?= $row_subcategories["name"]; ?></a></li>
                                            <?php } ?>
                                            </ul>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog">Blog</a>
                                </li>
                                <li>
                                    <a href="faq">FAQ</a>
                                </li>
                                <li>
                                    <a href="contact">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-2">
                    <div class="logo logo-2">
                    <a class="logo_switch" active-logo="logo_1">
                        <img src="images-main/general/logo_1.png" class="logo_1" alt="" style="width: 100px;height: auto;margin-left: 20%;cursor:pointer;">
                        <img src="images-main/general/logo_2.png" class="logo_2" alt="" style="display:none;width: 200px;height: auto;margin-left: 20%;cursor:pointer;">
                    </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-10">
                    <div class="header-right">
                        <div class="main-menu primary-menu primary-menu-2">
                            <nav>
                                <ul>
                                    <?php
                                        $sql_cart = "SELECT * FROM cart WHERE u_id = ?";
                                        $stmt_cart = $conn->prepare($sql_cart);
                                        $stmt_cart->bind_param("s",$u_id);
                                        $stmt_cart->execute();
                                        $result_cart = $stmt_cart->get_result();
                                    ?>
                                    <li>
                                        <a href="cart"><i class="fa fa-shopping-bag"></i>Cart (<span class="header_cart_count"><?= $result_cart->num_rows; ?></span>)</a>
                                        <ul class="dropdown cart-dropdown">
                                            <li>
                                                <div class="header_cart_list">
                                                <?php
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
                                                    <div class="cart-item-<?= $row_cart['id']; ?>">
                                                        <div class="cart-img">
                                                            <a target="_blank" href="product?title=<?= $row_cart['title']; ?>/<?= $cart_p_id; ?>">
                                                                <img onerror="this.src='admin/assets/images/product.png'" src="images-main/products/<?= $row_cart['image']; ?>" alt="" style="width:100px;">
                                                            </a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <div class="pro-item">
                                                                <span class="quantity-formated"><?= $row_cart['quantity']; ?>x</span>
                                                                <a class="pro-name" target="_blank" href="product?title=<?= $row_cart['title']; ?>/<?= $cart_p_id; ?>" title="<?= $row_cart['title']; ?>"><?= $row_cart['title']; ?></a>
                                                            </div>
                                                            <div class="pro-atributes">
                                                                <a target="_blank" href="product?title=<?= $row_cart['title']; ?>/<?= $cart_p_id; ?>" title="Product Detail"><?= $row_cart['variant_type']; ?>, <?= $row_cart['variant_title']; ?></a>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span>$<?= $cart_product_price; ?></span>
                                                            </div>
                                                            <div class="remove-link">
                                                                <a class="cart_remove" cart-id="<?= $row_cart['id']; ?>" item-value="<?= $cart_product_price; ?>" title="Remove this product from my cart" style="cursor:pointer;"></a>
                                                            </div>
                                                        </div>
                                                        <br/>
                                                    </div>
                                                <?php } ?>

                                                </div>
                                                <div class="cart-inner-bottom">
                                                    <div class="cart-shipping cart-item">
                                                        <div class="total">
                                                            <span>Shipping</span>
                                                            <span class="amount">$10.00</span>
                                                        </div>
                                                        <div class="total">
                                                            <span>Total</span>
                                                            <span class="amount">$<span class="total_cart_product_price"><?= $total_cart_product_price; ?></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="cart-btn">
                                                        <a class="links links-3" href="checkout">Check Out</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="main-menu primary-menu primary-menu-2">
                            <nav>
                                <ul>
                                    <li><a href="#"><i class="fa fa-search"></i>Search</a>
                                        <ul class="dropdown header-search">
                                            <li>
                                                <form action="#">
                                                    <input type="text" name="Enter key words" value="Enter key words..." onblur="if(this.value==''){this.value='Enter key words...'}" onfocus="if(this.value=='Enter key words...'){this.value=''}">
                                                </form>
                                                <button><i class="fa fa-search"></i></button>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="main-menu primary-menu primary-menu-2">
                            <nav>
                                <ul>
                                    <li><a href="#"><i class="fa fa-cog"></i>My Account</a>
                                        <ul class="dropdown primary-dropdown">
                                        <?php if(isset($_SESSION["login"])) { ?>
                                            <li><a href="account"><i class="fa fa-user"></i>Account</a></li>
                                        <?php } else { ?>
                                            <li><a href="signin"><i class="fa fa-unlock"></i>Sign In</a></li>
                                            <li><a href="signup"><i class="fa fa-user"></i>Sign Up</a></li>
                                        <?php } ?>
                                            <li><a href="wishlist"><i class="fa fa-heart"></i>Wishlist</a></li>
                                            <!-- <li><a href="#"><i class="fa fa-check-square"></i>Checkout</a></li> -->
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="mobile-menu">
                        <nav>
                            <ul>
                                <li class="active">
                                <a href="index">Home</a>
                            </li>
                                <li>
                                    <a href="shop">Shop</a>
                                </li>
                                <li>
                                    <a href="blogs">Blog</a>
                                </li>
                                <li>
                                    <a href="contact">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End Here -->