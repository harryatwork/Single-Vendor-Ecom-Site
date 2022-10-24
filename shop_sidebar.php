<div class="col-lg-3 order-2 order-lg-1">
    <div class="shop-sidebar shop-sidebar-reverse">
        <!-- Shop Sidebar Area -->

        <div class="category mt-30">
            <h4>Filter</h4>
            <div class="price-filter">
                <div id="slider-range"></div>
                <div class="price-slider-amount">
                    <div class="label-input">
                        <label>price : </label>
                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                    </div>
                    <!-- <button type="button">Filter</button>  -->
                </div>
            </div>
        </div>

    <?php
        $sql_sidebar_variant_distinct = "SELECT DISTINCT(variant) FROM product_variants WHERE cat_id = ?";
        $stmt_sidebar_variant_distinct = $conn->prepare($sql_sidebar_variant_distinct);
        $stmt_sidebar_variant_distinct->bind_param("s",$url_cat_id);
        $stmt_sidebar_variant_distinct->execute();
        $result_sidebar_variant_distinct = $stmt_sidebar_variant_distinct->get_result();
        while($row_sidebar_variant_distinct = $result_sidebar_variant_distinct->fetch_assoc()) {
            $sidebar_variant_distinct = $row_sidebar_variant_distinct["variant"];
    ?>
        <div class="category mt-30">
            <h4><?= $sidebar_variant_distinct; ?></h4>
            <div class="category-list">
                <ul>
                <?php 
                    $sql_sidebar_variant_title = "SELECT DISTINCT(title) FROM product_variants WHERE variant = ? AND cat_id = ?";
                    $stmt_sidebar_variant_title = $conn->prepare($sql_sidebar_variant_title);
                    $stmt_sidebar_variant_title->bind_param("ss",$sidebar_variant_distinct,$url_cat_id);
                    $stmt_sidebar_variant_title->execute();
                    $result_sidebar_variant_title = $stmt_sidebar_variant_title->get_result();
                    while($row_sidebar_variant_title = $result_sidebar_variant_title->fetch_assoc()) {
                        $sidebar_variant_title = $row_sidebar_variant_title["title"];

                        $sidebar_variant_product_ids_array = [];
                        $sql_sidebar_variant_product_ids = "SELECT DISTINCT(p_id) FROM product_variants WHERE title = ? AND cat_id = ?";
                        $stmt_sidebar_variant_product_ids = $conn->prepare($sql_sidebar_variant_product_ids);
                        $stmt_sidebar_variant_product_ids->bind_param("ss",$sidebar_variant_title,$url_cat_id);
                        $stmt_sidebar_variant_product_ids->execute();
                        $result_sidebar_variant_product_ids = $stmt_sidebar_variant_product_ids->get_result();
                        while($row_sidebar_variant_product_ids = $result_sidebar_variant_product_ids->fetch_assoc()) {
                            array_push($sidebar_variant_product_ids_array,$row_sidebar_variant_product_ids["p_id"]);
                        }
                ?>
                    <li><a class="product_variant_filter" product-ids="<?= json_encode($sidebar_variant_product_ids_array); ?>" style="cursor:pointer;"><?= $sidebar_variant_title; ?> (<?= $result_sidebar_variant_product_ids->num_rows; ?>)</a></li>
                <?php } ?>
                </ul>
            </div>
        </div>
    <?php } ?>


        <div class="category">
            <h4>Categories</h4>
            <!-- Begin Category List Area -->
            <div class="category-list">
                <ul>
                <?php 
                    $sql_sidebar_cat = "SELECT * FROM categories";
                    $stmt_sidebar_cat = $conn->prepare($sql_sidebar_cat);
                    $stmt_sidebar_cat->execute();
                    $result_sidebar_cat = $stmt_sidebar_cat->get_result();
                    while($row_sidebar_cat = $result_sidebar_cat->fetch_assoc()) {
                        $sidebar_cat_id = $row_sidebar_cat["id"];
                        
                        $sql_sidebar_cat_products_count = "SELECT * FROM products WHERE cat_id = ?";
                        $stmt_sidebar_cat_products_count = $conn->prepare($sql_sidebar_cat_products_count);
                        $stmt_sidebar_cat_products_count->bind_param("i",$sidebar_cat_id);
                        $stmt_sidebar_cat_products_count->execute();
                        $result_sidebar_cat_products_count = $stmt_sidebar_cat_products_count->get_result();
                ?>
                    <li><a href="shop?category=<?= str_replace('\'', '',str_replace(' ', '-',$row_sidebar_cat["name"])); ?>/<?= $sidebar_cat_id; ?>" ><?= $row_sidebar_cat["name"]; ?> (<?= $result_sidebar_cat_products_count->num_rows; ?>)</a></li>
                <?php } ?>
                </ul>
            </div>
        </div>

        <!-- Shop Sidebar Area End-->
    </div>

    
    <div class="sidebar-compare top-rated top-rated-reverse">
        <h3 class="widget-title-2">
            <span>Top Rated Products</span>
        </h3>
        <ul>
            <li>
                <div class="top-rated-img">
                    <a href="#">
                        <img src="images/top-rated-pro/1.jpg" alt="">
                    </a>
                </div>
                <div class="top-rated-info">
                    <a href="#" title="Natus erro">
                        <span>Natus erro</span>
                    </a>
                    <!-- Begin Rating Area -->
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <!-- Rating Area End Here -->
                    <div class="price-box price-box-3">
                        <span class="price">$16.40</span>
                        <span class="old-price">$20.50</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="top-rated-img">
                    <a href="#">
                        <img src="images/top-rated-pro/2.jpg" alt="">
                    </a>
                </div>
                <div class="top-rated-info">
                    <a href="#" title="Natus erro">
                        <span>Natus erro</span>
                    </a>
                    <!-- Begin Rating Area -->
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <!-- Rating Area End Here -->
                    <div class="price-box price-box-3">
                        <span class="price">$16.40</span>
                        <span class="old-price">$20.50</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- Sidebar Compare Area End Here -->
    <!-- Begin Banner Static 2 Area -->
    <div class="banner-static-2 top-rated-banner top-rated-banner-reverse">
        <div class="banner-img">
            <div class="banner-box shop-banner-box">
                <a href="#">
                    <img src="images/banner/2_3.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
    <!-- Banner Static 2 Area End Here -->
    <!-- Begin Widge Tags Area -->
    <div class="widge widge-tags top-rated-tags top-rated-tags-reverse">
        <div class="widge-title">
            <span>Tags</span>
        </div>
        <div class="widge-list widge-tag-list">
            <ul>
                <li>
                    <a href="#">Fashion</a>
                </li>
                <li>
                    <a href="#">Food</a>
                </li>
                <li>
                    <a href="#">Holidays</a>
                </li>
                <li>
                    <a href="#">Light</a>
                </li>
                <li>
                    <a href="#">Travel</a>
                </li>
                <li>
                    <a href="#">Video-2</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Widge Tags End Here -->
</div>