<?php include("head.php"); ?>

<style>
.header-sticky {
    background-color: rgba(0, 0, 0, 0.7) !important;
    box-shadow: 0 8px 6px -6px rgb(0 0 0 / 40%) !important;
}
.page-banner {
    margin-top:10%;
}
.stock::after {
    position:relative;
}


/* radio button boxes ---- */
.grid {
  display: flex;
  grid-gap: var(--card-padding);
  margin: 0 auto;
  max-width: 60em;
  padding: 0;
  @media (min-width: 42em) {
    grid-template-columns: repeat(3, 1fr);
  }
}

.card {
  padding:5px 15px;
  margin: 0 10px 10px 0;
  border-radius: 7px;
  background-color: #fff;
  border-radius: var(--card-radius);
  position: relative;
  border-radius:7px;
}
.card:hover {
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
}

.radio {
  font-size: inherit;
  margin: 0;
  position: absolute;
  right: calc(var(--card-padding) + var(--radio-border-width));
  top: calc(var(--card-padding) + var(--radio-border-width));
}

@supports(-webkit-appearance: none) or (-moz-appearance: none) { 
  .radio {
    -webkit-appearance: none;
    -moz-appearance: none;
    background: #fff;
    border: var(--radio-border-width) solid var(--color-gray);
    border-radius: 50%;
    cursor: pointer;
    height: var(--radio-size);
    outline: none;
    transition: 
      background 0.2s ease-out,
      border-color 0.2s ease-out;
    width: var(--radio-size); 
  }
  .radio::after {
      border: var(--radio-border-width) solid #fff;
      border-top: 0;
      border-left: 0;
      content: '';
      display: block;
      height: 0.75rem;
      left: 25%;
      position: absolute;
      top: 50%;
      transform: 
        rotate(45deg)
        translate(-50%, -50%);
      width: 0.375rem;
   }
  .radio:checked {
      background: var(--color-green);
      border-color: var(--color-green);
  }

  
  .card:hover .radio {
    border-color: var(--color-dark-gray);
  }
  .card:hover .radio:checked {
      border-color: var(--color-green);
  }
}

.plan-details {
  border: var(--radio-border-width) solid var(--color-gray);
  border-radius: var(--card-radius);
  cursor: pointer;
  display: flex;
  flex-direction: column;
  padding: var(--card-padding);
  transition: border-color 0.2s ease-out;
}

.card:hover .plan-details {
  border-color: var(--color-dark-gray);
}

.radio:checked ~ .plan-details {
  border-color: var(--color-green);
}

.radio:focus ~ .plan-details {
  box-shadow: 0 0 0 2px var(--color-dark-gray);
}

.radio:disabled ~ .plan-details {
  color: var(--color-dark-gray);
  cursor: default;
}

.radio:disabled ~ .plan-details .plan-type {
  color: var(--color-dark-gray);
}

.card:hover .radio:disabled ~ .plan-details {
  border-color: var(--color-gray);
  box-shadow: none;
}

.card:hover .radio:disabled {
    border-color: var(--color-gray);
  }

.plan-type {
  color: var(--color-green);
  font-size: 1.5rem;
  font-weight: bold;
  line-height: 1em;
}

.plan-cost {
  font-size: 2.5rem;
  font-weight: bold;
  padding: 0.5rem 0;
}

.slash {
  font-weight: normal;
}

.plan-cycle {
  font-size: 2rem;
  font-variant: none;
  border-bottom: none;
  cursor: inherit;
  text-decoration: none;
}

.hidden-visually {
  border: 0;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  white-space: nowrap;
  width: 1px;
}

/* Product quantity buttons ----- */
.quantity-control {
  display: flex;
  background: #eaeaea;
  border-radius: 10px;
  padding: 1rem 0.4rem;
  margin: 0 10px;
}

.quantity-btn {
  background: transparent;
  border: none;
  outline: none;
  margin: 0;
  padding: 0px 8px;
  cursor: pointer;
}
.quantity-btn svg {
  width: 15px;
  height: 15px;
}
.quantity-input {
  outline: none;
  user-select: none;
  text-align: center;
  width: 47px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: transparent;
  border: none;
  padding: 0 3px;
  margin: 5px 0;
}
.quantity-input::-webkit-inner-spin-button,
.quantity-input::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

<body>

<?php include("header.php"); 

    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url = explode("/", $url);
    $url_p_id = $url[count($url)-1];
    $url_p_name_array = $url[count($url)-2];
    $url_p_name_array = explode("=", $url_p_name_array);
    $url_p_name = $url_p_name_array[count($url_p_name_array)-1];
?>

    <div class="page-banner">
        <div class="container">
            <div class="page-banner-content">
                <ul>
                    <li><a href="index">Home</a></li>
                    <li><a>Shop</a></li>
                    <li class="active"><a><?= $url_p_name; ?></a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php
        $sql_product = "SELECT * FROM products WHERE id = ?";
        $stmt_product = $conn->prepare($sql_product);
        $stmt_product->bind_param("i",$url_p_id);
        $stmt_product->execute();
        $result_product = $stmt_product->get_result();
        while($row_product = $result_product->fetch_assoc()) {
            $product_cat_id = $row_product["cat_id"];
            $product_subcat_id = $row_product["subcat_id"];

            if($row_product['discount'] == 0) {
                $product_price = $row_product['price'];
            } else { 
                $product_price = round(($row_product['price'] - (($row_product['price'])*(($row_product['discount'])/100))),2);
            }

            $star_rating_overall = 0;
            $sql_product_rating = "SELECT * FROM reviews WHERE p_id = ?";
            $stmt_product_rating = $conn->prepare($sql_product_rating);
            $stmt_product_rating->bind_param("s",$row_product['id']);
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

    <!-- Begin Product Details Area -->
    <div class="product-details pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product-details-right">
                        <div class="tab-content product-details-large" id="myTabContent">

                            <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                                <div class="single-product-img img-full">
                                <img onerror="this.src='admin/assets/images/product.png'" src="images-main/products/<?= $row_product['image']; ?>" alt="">
                                <a class="popup-img venobox vbox-item" onerror="this.src='admin/assets/images/product.png'" src="images-main/products/<?= $row_product['image']; ?>" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                        <!--
                            <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                                <div class="single-product-img img-full">
                                <img src="images/single-product/large/2.jpg" alt="">
                                <a class="popup-img venobox vbox-item" href="images/single-product/large/2.jpg" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                                <div class="single-product-img img-full">
                                <img src="images/single-product/large/3.jpg" alt="">
                                <a class="popup-img venobox vbox-item" href="images/single-product/large/3.jpg" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                <div class="single-product-img img-full">
                                <img src="images/single-product/large/4.jpg" alt="">
                                <a class="popup-img venobox vbox-item" href="images/single-product/large/4.jpg" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide5" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                <div class="single-product-img img-full">
                                <img src="images/single-product/large/5.jpg" alt="">
                                <a class="popup-img venobox vbox-item" href="images/single-product/large/5.jpg" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide6" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                <div class="single-product-img img-full">
                                <img src="images/single-product/large/6.jpg" alt="">
                                <a class="popup-img venobox vbox-item" href="images/single-product/large/6.jpg" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                        -->
                        </div>

                        <div class="single-product-menu">
                            <div class="nav single-slide-menu owl-carousel" role="tablist">
                            <!--
                                <div class="single-tab-menu img-full">
                                    <a class="active" data-bs-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="images/single-product/small/1.jpg" alt=""></a>
                                </div>
                            
                                <div class="single-tab-menu img-full">
                                    <a data-bs-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="images/single-product/small/2.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-bs-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="images/single-product/small/3.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-bs-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="images/single-product/small/4.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-bs-toggle="tab" id="single-slide-tab-5" href="#single-slide5"><img src="images/single-product/small/5.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-bs-toggle="tab" id="single-slide-tab-6" href="#single-slide6"><img src="images/single-product/small/6.jpg" alt=""></a>
                                </div>
                            -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="product-details-right">
                        <div class="product-details-contents">
                            <h5 class="product-details-name">
                                <a title="<?= $row_product['name']; ?>"><?= $row_product['name']; ?></a>
                            </h5>
                            <div class="rating-2">
                                <i class="fa fa-star" style="<?php if($star_rating_average >= 1) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                <i class="fa fa-star" style="<?php if($star_rating_average >= 2) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                <i class="fa fa-star" style="<?php if($star_rating_average >= 3) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                <i class="fa fa-star" style="<?php if($star_rating_average >= 4) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                <i class="fa fa-star" style="<?php if($star_rating_average >= 5) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                            </div>
                            <div class="review">
                                <a>(<?= $star_rating_overall; ?> customer reviews)</a>
                            </div>
                            <div class="price-box-2">
                            <?php if($row_product['discount'] == 0) { ?>
                                <span class="price">$<?= $row_product['price']; ?></span>
                            <?php } else { ?>
                                <span class="price">$<?= round(($row_product['price'] - (($row_product['price'])*(($row_product['discount'])/100))),2); ?></span>
                                <span class="old-price">$<?= $row_product['price']; ?></span>
                            <?php } ?>
                            </div>
                            <!-- Price Box Area End Here -->
                            <p class="short-desc">
                                <?= $row_product['description']; ?>
                            </p>

                            <div class="grid">
                            <?php 
                                $sql_product_variants = "SELECT * FROM product_variants WHERE p_id = ?";
                                $stmt_product_variants = $conn->prepare($sql_product_variants);
                                $stmt_product_variants->bind_param("i",$url_p_id);
                                $stmt_product_variants->execute();
                                $result_product_variants = $stmt_product_variants->get_result();
                                while($row_product_variants = $result_product_variants->fetch_assoc()) {
                            ?>
                                <label class="card product_variants_indi product_variants_indi_<?= $row_product_variants['id']; ?>">
                                    <input name="variant_types" class="radio product_variants_radio" type="radio" value="<?= $row_product_variants['id']; ?>" checked>
                                    <span class="plan-details">
                                        <span class="plan-type product_variants_title"><?= $row_product_variants['title']; ?></span>
                                        <span class="product_variants_variant"><?= $row_product_variants['variant']; ?></span>
                                        <p class="stock"><span class="product_variants_stock"><?= $row_product_variants['stock']; ?></span> in stock</p>
                                    </span>
                                </label>
                            <?php } ?>
                                
                                </div>


                                <div class="group-table">
                                    <div class="group-row" style="display: flex;">
                                        <div class="quantity-control" data-quantity="">
                                            <input type="hidden" class="available_stock" value="1" />
                                            <input type="hidden" class="product_variant_status" value="0" />
                                            <button class="quantity-btn quantity_btn_minus">
                                                <svg viewBox="0 0 409.6 409.6">
                                                    <g><g><path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" /></g></g>
                                                </svg>
                                            </button>
                                            <input type="number" readonly class="quantity-input" data-quantity-target="" value="1" step="1" min="1" max="" name="quantity">
                                            <button class="quantity-btn quantity_btn_add">
                                                <svg viewBox="0 0 426.66667 426.66667">
                                                    <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="qty-cart-btn" style="height: 80px;width: 300px;text-align: center;border-radius:7px;">
                                            <a class="add_to_cart_quick_pre" p-quantity="1" p-price="<?= $product_price; ?>" p-variant-title="" p-variant-type="" p-title="<?= $row_product['name']; ?>" p-image="<?= $row_product['image']; ?>" p-id="<?= $row_product['id']; ?>" u-id="<?= $u_id; ?>" c-id="<?= $row_product['cat_id']; ?>" sub-c-id="<?= $row_product['subcat_id']; ?>" style="margin-top: 8px;color: white;cursor:pointer;">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="product_stock_message" style="color: red;font-size: 14px;width: 100%;margin: 0;margin-left: 3%;"></p>

                                <div class="group-btn">
                                    <div class="qty-cart-btn qty-cart-btn-2">
                                        <a class="add_to_wishlist_quick" p-variant-title="" p-variant-type="" p-title="<?= $row_product['name']; ?>" p-image="<?= $row_product['image']; ?>" p-id="<?= $row_product['id']; ?>" u-id="<?= $u_id; ?>" c-id="<?= $row_product['cat_id']; ?>" sub-c-id="<?= $row_product['subcat_id']; ?>" style="cursor:pointer;"><i class="fa fa-heart-o"></i>Add To Wishlist</a>
                                    </div>
                                </div>
                                <div class="product-meta">
                                    <ul>
                                        <li class="posted-in">
                                            Categories:
                                            <?php 
                                                $sql_product_cat = "SELECT * FROM categories WHERE id = ?";
                                                $stmt_product_cat = $conn->prepare($sql_product_cat);
                                                $stmt_product_cat->bind_param("i",$product_cat_id);
                                                $stmt_product_cat->execute();
                                                $result_product_cat = $stmt_product_cat->get_result();
                                                while($row_product_cat = $result_product_cat->fetch_assoc()) {
                                                    $product_cat = $row_product_cat["name"];
                                            ?>
                                            <a href="#"><?= $product_cat; ?></a>
                                            <?php } ?>
                                        </li>
                                        <li class="tagged-as">
                                            Sub Category:
                                            <?php 
                                                $sql_product_subcat = "SELECT * FROM subcategories WHERE id = ?";
                                                $stmt_product_subcat = $conn->prepare($sql_product_subcat);
                                                $stmt_product_subcat->bind_param("i",$product_subcat_id);
                                                $stmt_product_subcat->execute();
                                                $result_product_subcat = $stmt_product_subcat->get_result();
                                                while($row_product_subcat = $result_product_subcat->fetch_assoc()) {
                                                    $product_subcat = $row_product_subcat["name"];
                                            ?>
                                            <a href="#"><?= $product_subcat; ?></a>
                                            <?php } ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-product-sharing" style="display:none;">
                                    <h3>Share this product :</h3>
                                    <ul class="social-icon">
                                        <li class="facebook">
                                            <a class="_blank" data-bs-toggle="tooltip" href="https://www.facebook.com/" title="Facebook" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twetter">
                                            <a class="_blank" data-bs-toggle="tooltip" href="https://www.twitter.com/" title="Twetter" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="rss">
                                            <a class="_blank" data-bs-toggle="tooltip" href="https://www.rss.com/" title="RSS" target="_blank">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a class="_blank" data-bs-toggle="tooltip" href="https://www.youtube.com/" title="Youtube" target="_blank">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a class="_blank" data-bs-toggle="tooltip" href="https://www.plus.google.com/discover" title="Google Plus" target="_blank">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        <!-- Product Content Area End Here -->
                    </div>
                </div>
                <!-- Product Details Right End Here -->
            </div>
        </div>
    </div>
    <!-- Product Details Area End Here -->


    <!-- Begin Vertical Tab Area -->
    <div class="vertical-tab-area">
        <div class="container">
            <div class="vertical-tab-item">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <ul class="nav vertical-product-tabs">
                            <li class="desc-tab active"><a data-bs-toggle="tab" href="#description">Shipping</a></li>
                            <li class="review-tab"><a data-bs-toggle="tab" href="#riview">Review (<?= $star_rating_overall; ?>)</a></li>
                        </ul>
                    </div>
                    <!-- Begin Vertical Tab Content Area -->
                    <div class="col-lg-9">
                        <div class="tab-content vertical-tab-desc">
                            <div id="description" class="tab-pane show fade in active">
                            <p>
                                <?= $row_product['shipping']; ?>
                            </p>
                            </div>
                            <div id="riview" class="tab-pane fade">
                            <!-- Begin Reviws Area -->
                            <div class="reviews">
                                <div class="comments">
                                    <!-- <h2>2 reviews for Ornare sed consequat</h2> -->
                                    <div class="comment-list">
                                    <?php
                                        $sql_product_rating = "SELECT * FROM reviews WHERE p_id = ? AND status = 'Approved'";
                                        $stmt_product_rating = $conn->prepare($sql_product_rating);
                                        $stmt_product_rating->bind_param("s",$row_product['id']);
                                        $stmt_product_rating->execute();
                                        $result_product_rating = $stmt_product_rating->get_result();
                                        while($row_product_rating = $result_product_rating->fetch_assoc()) {
                                            $star_rating = $row_product_rating["rating"];
                                            $star_rating_date = $row_product_rating["date"];
                                            $star_rating_review = $row_product_rating["review"];
                                    ?>
                                        <div class="user-img">
                                            <img src="images/product-details/user.png" alt="">
                                        </div>
                                        <div class="user-details">
                                            <p class="user-info"><span>User -</span><?= $star_rating_date; ?>: </p>
                                            <div class="rating user-rating">
                                                <i class="fa fa-star" style="<?php if($star_rating >= 1) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                                <i class="fa fa-star" style="<?php if($star_rating >= 2) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                                <i class="fa fa-star" style="<?php if($star_rating >= 3) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                                <i class="fa fa-star" style="<?php if($star_rating >= 4) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                                <i class="fa fa-star" style="<?php if($star_rating >= 5) { ?> color:#e9b436; <?php } else { ?> color:gray; <?php } ?>" ></i>
                                            </div>
                                            <span class="user-comment"><?= $star_rating_review; ?></span>
                                        </div>
                                  <?php } ?>
                                </div>
                            </div>
                            <!-- Reviws Area End Here -->
                            
                            </div>
                        </div>
                    </div>
                    <!-- Vertical Tab Content Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Vertical Tab Area End Here -->

<?php } ?>
    

    <!-- Begin Related Product Section -->
    <section class="new-product featured-pro-3 related-product related-product-2 pb-80">
        <div class="container">
            <!-- Begin Featured Product Title Area -->
            <div class="pos-title pos-title-2">
                <h2>Related Products</h2>
            </div>
            <!-- Featured Product Title Area End Here -->
            <!-- Begin Featured Product Content Area -->
            <div class="row">
                <!-- Begin Single Related Product Area -->
                <?php
                    $sql_products = "SELECT * FROM products WHERE cat_id = ? LIMIT 0,8";
                    $stmt_products = $conn->prepare($sql_products);
                    $stmt_products->bind_param("s",$product_cat_id);
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
                <div class="col-lg-3 col-md-6 col-sm-6">
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
                </div>
                <?php } ?>

                <!-- Single Related Product Area End Here -->
            </div>
            <!-- Featured Product Content Area End Here -->
        </div>
    </section>
    <!-- Related Product Section End Here -->

<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

</body>

</html>
