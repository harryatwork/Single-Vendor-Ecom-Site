<?php include("head.php"); ?>

<body>

<?php include("header.php"); ?>

<style>
.owl-nav {
    display:none;
}
</style>

     <!-- Begin Slider Area -->
     <div class="slider-area">
        <div class="slider-active slider-active-2 owl-carousel">
            <!-- Begin Single Slide Area -->
            <div class="single-slide align-center animation-style-01 bg-3">
                <div class="slider-progress"></div>
                <div class="container">
                    <div class="slider-content-2">
                        <h3>Create impossible</h3>
                        <h1>Blue Nike</h1>
                        <div class="slider-icon">
                            <img class="img-slide" src="images/slider/slider-icon-1.png" alt="">
                        </div>
                        <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula</p>
                        <div class="default-btn-2 slide-btn">
                            <a class="links links-4" href="#">Shop mens</a>
                            <a class="links links-4 links-4_2" href="#">Shop all Soccer</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Area End Here -->
            <!-- Begin Single Slide Area -->
            <div class="single-slide align-center animation-style-02 bg-4">
                <div class="slider-progress"></div>
                <div class="container">
                    <div class="slider-content-2 slider-content-2_1">
                        <h3>Sale up to 50% off</h3>
                        <h1>Soocer</h1>
                        <div class="slider-icon">
                            <img class="img-slide" src="images/slider/slider-icon-2.png" alt="">
                        </div>
                        <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula</p>
                        <div class="default-btn-2 slide-btn">
                            <a class="links links-4" href="#">Shop mens</a>
                            <a class="links links-4 links-4_2 links-4_3" href="#">Shop all Soccer</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Single Slide Area End Here -->
        </div>
    </div>
    <!-- Slider Area End Here -->

<?php
    $sql_categories_index = "SELECT * FROM categories";
    $stmt_categories_index = $conn->prepare($sql_categories_index);
    $stmt_categories_index->execute();
    $result_categories_index = $stmt_categories_index->get_result();
    while($row_categories_index = $result_categories_index->fetch_assoc()) {
        $category_index_id = $row_categories_index["id"];
?>
    <section class="featured-pro featured-pro-2 pt-95">
        <div class="container-fluid  pl-40 pr-40">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pos-title pos-title-2">
                        <h2><?= $row_categories_index["name"]; ?> products</h2>
                    </div>
                    <div class="row">
                        <div class="col-product col-lg-4">
                            <div class="pos-content">
                                <div class="featured-pro-active-2 owl-carousel">
                                    
                                <?php for($p=1;$p<5;$p++) { ?>

                                    <div class="featured-group-pro">
                                    <?php
                                        $sql_products = "SELECT * FROM products WHERE cat_id = ? LIMIT $p,1";
                                        $stmt_products = $conn->prepare($sql_products);
                                        $stmt_products->bind_param("s",$category_index_id);
                                        $stmt_products->execute();
                                        $result_products = $stmt_products->get_result();
                                        while($row_products = $result_products->fetch_assoc()) {
                                            $p_id = $row_products["id"]; 
                                            if($row_products['discount'] == 0) {
                                                $product_price = $row_products['price'];
                                            } else { 
                                                $product_price = round(($row_products['price'] - (($row_products['price'])*(($row_products['discount'])/100))),2);
                                            }
                                            $zero = 0;
                                            $sql_products_variant = "SELECT * FROM product_variants WHERE p_id = ? AND stock != ? LIMIT 1";
                                            $stmt_products_variant = $conn->prepare($sql_products_variant);
                                            $stmt_products_variant->bind_param("si",$p_id,$zero);
                                            $stmt_products_variant->execute();
                                            $result_products_variant = $stmt_products_variant->get_result();
                                            while($row_products_variant = $result_products_variant->fetch_assoc()) { 
                                                $products_variant_title = $row_products_variant['title'];
                                                $products_variant_variant = $row_products_variant['variant'];
                                            }
                                    ?>
                                        <div class="single-product single-featured-pro-2">
                                            <div class="product-img">
                                                <a href="product?title=<?= str_replace(' ', '-',$row_products['name']); ?>/<?= $row_products['id']; ?>">
                                                    <img class="primary-img" onerror="this.src='admin/assets/images/product.png'" src="images-main/products/<?= $row_products['image']; ?>" alt="">
                                                    <img class="secondary-img" onerror="this.src='admin/assets/images/product.png'" src="images-main/products/<?= $row_products['image']; ?>" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <div class="product-action-inner">
                                                        <div class="cart">
                                                            <a class="add_to_cart_quick" p-price="<?= $product_price; ?>" p-variant-title="<?= $products_variant_title; ?>" p-variant-type="<?= $products_variant_variant; ?>" p-title="<?= $row_products['name']; ?>" p-image="<?= $row_products['image']; ?>" p-id="<?= $row_products['id']; ?>" u-id="<?= $u_id; ?>" c-id="<?= $row_products['cat_id']; ?>" sub-c-id="<?= $row_products['subcat_id']; ?>" style="cursor:pointer;">
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                        <ul class="add-to-links">
                                                            <li class="rav-wishlist"  >
                                                                <a class="add_to_wishlist_quick" p-variant-title="<?= $products_variant_title; ?>" p-variant-type="<?= $products_variant_variant; ?>" p-title="<?= $row_products['name']; ?>" p-image="<?= $row_products['image']; ?>" p-id="<?= $row_products['id']; ?>" u-id="<?= $u_id; ?>" c-id="<?= $row_products['cat_id']; ?>" sub-c-id="<?= $row_products['subcat_id']; ?>" title="Add To Wishlist" style="cursor:pointer;">
                                                                    <i class="fa fa-heart-o"></i>
                                                                </a>
                                                            </li>
                                                            <li class="rav-quickviewbtn">
                                                                <a target="_blank" href="product?title=<?= str_replace(' ', '-',$row_products['name']); ?>/<?= $row_products['id']; ?>" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-contents">
                                                <h5 class="product-name">
                                                    <a href="#" title="<?= $row_products['name']; ?>"><?= $row_products['name']; ?></a>
                                                </h5>
                                                <div class="price-box">
                                                <?php if($row_products['discount'] == 0) { ?>
                                                    <span class="price">$<?= $row_products['price']; ?></span>
                                                <?php } else { ?> 
                                                    <span class="price">$<?= round(($row_products['price'] - (($row_products['price'])*(($row_products['discount'])/100))),2); ?></span>
                                                    <span class="old-price">$<?= $row_products['price']; ?></span>
                                                <?php } ?>
                                                </div>
                                            <?php
                                                $star_rating_overall = 0;
                                                $sql_product_rating = "SELECT * FROM reviews WHERE p_id = ?";
                                                $stmt_product_rating = $conn->prepare($sql_product_rating);
                                                $stmt_product_rating->bind_param("s",$row_products['id']);
                                                $stmt_product_rating->execute();
                                                $result_product_rating = $stmt_product_rating->get_result();
                                                while($row_product_rating = $result_product_rating->fetch_assoc()) {
                                                    $star_rating = $row_product_rating["rating"];
                                                    $star_rating_overall = $star_rating_overall + $star_rating;
                                                }
                                                $star_rating_count = $result_product_rating->num_rows;
                                                if($star_rating_count == 0) {
                                                    $star_rating_average = 0;
                                                } else {
                                                    $star_rating_average = round($star_rating_overall/$star_rating_count);
                                                }
                                            ?>
                                                <div class="rating">
                                                    <i class="fa fa-star" style="<?php if($star_rating_average >= 1) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                                    <i class="fa fa-star" style="<?php if($star_rating_average >= 2) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                                    <i class="fa fa-star" style="<?php if($star_rating_average >= 3) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                                    <i class="fa fa-star" style="<?php if($star_rating_average >= 4) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                                    <i class="fa fa-star" style="<?php if($star_rating_average >= 5) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>

                                <?php } ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-static col-lg-8">
                            <div class="banner-static-2 ">
                                <div class="banner-img">
                                    <div class="banner-box">
                                        <a href="#">
                                            <img src="images/banner/2_2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


    <!-- Begin Random Product Section -->
    <section class="featured-pro random-pro random-pro-reverse pt-30 pb-60">
        <div class="container-fluid  pl-40 pr-40">
            <div class="pos-title pos-title-2">
                <h2>Popular Products</h2>
            </div>
            <div class="row featured-pos-content featured-pos-content-2">
                <div class="col-lg-12 p-0">
                    <div class="pos-content">
                        <div class="random-pro-active owl-carousel">

                        <?php
                            $sql_products = "SELECT * FROM products ORDER BY id DESC LIMIT 8";
                            $stmt_products = $conn->prepare($sql_products);
                            $stmt_products->execute();
                            $result_products = $stmt_products->get_result();
                            while($row_products = $result_products->fetch_assoc()) {
                                $p_id = $row_products["id"]; 
                                if($row_products['discount'] == 0) {
                                    $product_price = $row_products['price'];
                                } else { 
                                    $product_price = round(($row_products['price'] - (($row_products['price'])*(($row_products['discount'])/100))),2);
                                }
                                $zero = 0;
                                $sql_products_variant = "SELECT * FROM product_variants WHERE p_id = ? AND stock != ? LIMIT 1";
                                $stmt_products_variant = $conn->prepare($sql_products_variant);
                                $stmt_products_variant->bind_param("si",$p_id,$zero);
                                $stmt_products_variant->execute();
                                $result_products_variant = $stmt_products_variant->get_result();
                                while($row_products_variant = $result_products_variant->fetch_assoc()) { 
                                    $products_variant_title = $row_products_variant['title'];
                                    $products_variant_variant = $row_products_variant['variant'];
                                }
                        ?>
                            <div class="single-product single-featured-pro-2">
                                <div class="product-img">
                                    <a href="product?title=<?= str_replace(' ', '-',$row_products['name']); ?>/<?= $row_products['id']; ?>">
                                        <img class="primary-img" onerror="this.src='admin/assets/images/product.png'" src="images-main/products/<?= $row_products['image']; ?>" alt="">
                                        <img class="secondary-img" onerror="this.src='admin/assets/images/product.png'" src="images-main/products/<?= $row_products['image']; ?>" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="product-action-inner">
                                            <div class="cart">
                                                <a class="add_to_cart_quick" p-price="<?= $product_price; ?>" p-variant-title="<?= $products_variant_title; ?>" p-variant-type="<?= $products_variant_variant; ?>" p-title="<?= $row_products['name']; ?>" p-image="<?= $row_products['image']; ?>" p-id="<?= $row_products['id']; ?>" u-id="<?= $u_id; ?>" c-id="<?= $row_products['cat_id']; ?>" sub-c-id="<?= $row_products['subcat_id']; ?>" style="cursor:pointer;">
                                                    <span>Add To Cart</span>
                                                </a>
                                            </div>
                                            <ul class="add-to-links">
                                                <li class="rav-wishlist" >
                                                    <a class="add_to_wishlist_quick" p-variant-title="<?= $products_variant_title; ?>" p-variant-type="<?= $products_variant_variant; ?>" p-title="<?= $row_products['name']; ?>" p-image="<?= $row_products['image']; ?>" p-id="<?= $row_products['id']; ?>" u-id="<?= $u_id; ?>" c-id="<?= $row_products['cat_id']; ?>" sub-c-id="<?= $row_products['subcat_id']; ?>" title="Add To Wishlist" style="cursor:pointer;">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                </li>
                                                <li class="rav-quickviewbtn">
                                                    <a target="_blank" href="product?title=<?= str_replace(' ', '-',$row_products['name']); ?>/<?= $row_products['id']; ?>" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-contents">
                                    <h5 class="product-name">
                                        <a href="#" title="<?= $row_products['name']; ?>"><?= $row_products['name']; ?></a>
                                    </h5>
                                    <div class="price-box" style="width: 100%;">
                                    <?php if($row_products['discount'] == 0) { ?>
                                        <span class="price">$<?= $row_products['price']; ?></span>
                                    <?php } else { ?> 
                                        <span class="price">$<?= round(($row_products['price'] - (($row_products['price'])*(($row_products['discount'])/100))),2); ?></span>
                                        <span class="old-price">$<?= $row_products['price']; ?></span>
                                    <?php } ?>
                                    </div>
                                <?php
                                    $star_rating_overall = 0;
                                    $sql_product_rating = "SELECT * FROM reviews WHERE p_id = ?";
                                    $stmt_product_rating = $conn->prepare($sql_product_rating);
                                    $stmt_product_rating->bind_param("s",$row_products['id']);
                                    $stmt_product_rating->execute();
                                    $result_product_rating = $stmt_product_rating->get_result();
                                    while($row_product_rating = $result_product_rating->fetch_assoc()) {
                                        $star_rating = $row_product_rating["rating"];
                                        $star_rating_overall = $star_rating_overall + $star_rating;
                                    }
                                    $star_rating_count = $result_product_rating->num_rows;
                                    if($star_rating_count == 0) {
                                        $star_rating_average = 0;
                                    } else {
                                        $star_rating_average = round($star_rating_overall/$star_rating_count);
                                    }
                                ?>
                                    <div class="rating">
                                        <i class="fa fa-star" style="<?php if($star_rating_average >= 1) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                        <i class="fa fa-star" style="<?php if($star_rating_average >= 2) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                        <i class="fa fa-star" style="<?php if($star_rating_average >= 3) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                        <i class="fa fa-star" style="<?php if($star_rating_average >= 4) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                        <i class="fa fa-star" style="<?php if($star_rating_average >= 5) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Random Product Section End Here -->


<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

</body>

</html>
