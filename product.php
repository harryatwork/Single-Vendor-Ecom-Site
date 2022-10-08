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
                    <li><a href="shop">Shop</a></li>
                    <li class="active"><a href="#">Product Details</a></li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Begin Product Details Area -->
    <div class="product-details pt-100">
        <div class="container">
            <div class="row">
                <!-- Begin Modal Image Area -->
                <div class="col-lg-5">
                    <!-- Begin Product Details Left Area -->
                    <div class="product-details-right">
                        <!-- Begin Modal Tab Content Area -->
                        <div class="tab-content product-details-large" id="myTabContent">
                            <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                                <!--Single Product Image Start-->
                                <div class="single-product-img img-full">
                                <img src="images/single-product/large/1.jpg" alt="">
                                <a class="popup-img venobox vbox-item" href="images/single-product/large/1.jpg" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                                <!--Single Product Image End-->
                            </div>
                            <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                                <!--Single Product Image Start-->
                                <div class="single-product-img img-full">
                                <img src="images/single-product/large/2.jpg" alt="">
                                <a class="popup-img venobox vbox-item" href="images/single-product/large/2.jpg" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                                <!--Single Product Image End-->
                            </div>
                            <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                                <!--Single Product Image Start-->
                                <div class="single-product-img img-full">
                                <img src="images/single-product/large/3.jpg" alt="">
                                <a class="popup-img venobox vbox-item" href="images/single-product/large/3.jpg" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                                <!--Single Product Image End-->
                            </div>
                            <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                <!--Single Product Image Start-->
                                <div class="single-product-img img-full">
                                <img src="images/single-product/large/4.jpg" alt="">
                                <a class="popup-img venobox vbox-item" href="images/single-product/large/4.jpg" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                                <!--Single Product Image End-->
                            </div>
                            <div class="tab-pane fade" id="single-slide5" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                <!--Single Product Image Start-->
                                <div class="single-product-img img-full">
                                <img src="images/single-product/large/5.jpg" alt="">
                                <a class="popup-img venobox vbox-item" href="images/single-product/large/5.jpg" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                                <!--Single Product Image End-->
                            </div>
                            <div class="tab-pane fade" id="single-slide6" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                <!--Single Product Image Start-->
                                <div class="single-product-img img-full">
                                <img src="images/single-product/large/6.jpg" alt="">
                                <a class="popup-img venobox vbox-item" href="images/single-product/large/6.jpg" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                                <!--Single Product Image End-->
                            </div>
                        </div>
                        <!-- Modal Tab Content Area End Here -->
                        <!-- Begin Modal Tab Menu Area -->
                        <div class="single-product-menu">
                            <div class="nav single-slide-menu owl-carousel" role="tablist">
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
                            </div>
                        </div>
                        <!-- Modal Tab Menu End Here -->
                    </div>
                    <!-- Product Details Left Area End Here -->
                </div>
                <!-- Modal Image Area End Here -->
                <!-- Begin Product Details Right -->
                <div class="col-lg-7">
                    <div class="product-details-right">
                        <!-- Begin Product Content Area -->
                        <div class="product-details-contents">
                            <!-- Begin Product Name Area -->
                            <h5 class="product-details-name">
                                <a href="#" title="Ornare sed consequat">Ornare sed consequat</a>
                            </h5>
                            <!-- Product Name Area End Here -->
                            <!-- Begin Rating Area -->
                            <div class="rating-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <!-- Rating Area End Here -->
                            <!-- Begin Review Area -->
                            <div class="review">
                                <a href="#">(1 customer reviews)</a>
                            </div>
                            <!-- Review Area End Here -->
                            <!-- Begin Price Box Area -->
                            <div class="price-box-2">
                                <span class="price">$515.00</span>
                            </div>
                            <!-- Price Box Area End Here -->
                            <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                            <p class="stock">200 in stock</p>
                            <form class="pro-details-cart" action="#" method="post">
                                <div class="group-table">
                                    <div class="group-row">
                                        <div class="quantity">
                                            <input class="input-text qty text" step="1" min="1" max="200" name="quantity" value="1" title="Qty" size="4" type="number">
                                        </div>
                                        <div class="qty-label">
                                            <label>
                                                <a href="#">Pellentesque posuere</a>
                                            </label>
                                        </div>
                                        <div class="qty-price">
                                            <div class="special-price">$40.00</div>
                                            <div class="old-price">$45.00</div>
                                        </div>
                                    </div>
                                    <div class="group-row">
                                        <div class="quantity">
                                            <input class="input-text qty text" step="1" min="1" max="200" name="quantity" value="1" title="Qty" size="4" type="number">
                                        </div>
                                        <div class="qty-label">
                                            <label>
                                                <a href="#">Kaoreet lobortis</a>
                                            </label>
                                        </div>
                                        <div class="qty-price">
                                            <div class="special-price">$40.00</div>
                                            <div class="old-price">$45.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="qty-cart-btn">
                                    <a href="#">Add To Cart</a>
                                </div>
                                <div class="group-btn">
                                    <div class="qty-cart-btn qty-cart-btn-2">
                                        <a href="#"><i class="fa fa-heart-o"></i>Add To Wishlist</a>
                                    </div>
                                </div>
                                <div class="product-meta">
                                    <ul>
                                        <li class="posted-in">
                                            Categories:
                                            <a href="#">Men</a>
                                        </li>
                                        <li class="tagged-as">
                                            Tags:
                                            <a href="#">fashion</a>
                                            <a href="#">Hamdbag</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-product-sharing">
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
                            </form>
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
                            <li class="desc-tab active"><a data-bs-toggle="tab" href="#description">Description</a></li>
                            <li class="review-tab"><a data-bs-toggle="tab" href="#riview">Review (1)</a></li>
                        </ul>
                    </div>
                    <!-- Begin Vertical Tab Content Area -->
                    <div class="col-lg-9">
                        <div class="tab-content vertical-tab-desc">
                            <div id="description" class="tab-pane show fade in active">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                            </p>
                            <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.
                            </p>
                            </div>
                            <div id="riview" class="tab-pane fade">
                            <!-- Begin Reviws Area -->
                            <div class="reviews">
                                <div class="comments">
                                    <h2>2 reviews for Ornare sed consequat</h2>
                                    <div class="comment-list">
                                        <div class="user-img">
                                            <img src="images/product-details/user.png" alt="">
                                        </div>
                                        <div class="user-details">
                                            <p class="user-info"><span>User -</span>March 23, 2015: </p>
                                            <div class="rating user-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="user-comment">Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</span>
                                        </div>
                                    <div class="comment-list comment-list-2">
                                        <div class="user-img">
                                            <img src="images/product-details/admin.png" alt="">
                                        </div>
                                        <div class="user-details">
                                            <p class="user-info"><span>Admin -</span>March 23, 2015: </p>
                                            <div class="rating user-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="user-comment admin-comment">Thank You.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Reviws Area End Here -->
                            <!-- Begin Feedback Area -->
                            <div class="feedback-area">
                                <div class="feedback">
                                    <h3 class="feedback-title">Our Feedback</h3>
                                    <form action="#">
                                        <p class="your-opinion">
                                            <label>Your Rating</label>
                                            <span>
                                                <select class="star-rating">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </span>
                                        </p>
                                        <p class="feedback-form">
                                            <label for="feedback">Your Review</label>
                                            <textarea id="feedback" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                        </p>
                                        <div class="feedback-input">
                                            <p class="feedback-form-author">
                                                <label for="author">Name<span class="required">*</span>
                                                </label>
                                                <input id="author" name="author" value="" size="30" aria-required="true" type="text">
                                            </p>
                                            <p class="feedback-form-author feedback-form-email">
                                                <label for="email">Email<span class="required">*</span>
                                                </label>
                                                <input id="email" name="email" value="" size="30" aria-required="true" type="text">
                                            </p>
                                            <div class="qty-cart-btn feedback-btn">
                                                <a href="#">Submit</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Feedback Area End Here -->
                            </div>
                        </div>
                    </div>
                    <!-- Vertical Tab Content Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Vertical Tab Area End Here -->

    

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
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-product">
                        <!-- Begin Featured Product Image Area -->
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="images/product/9_1.jpg" alt="">
                                <img class="secondary-img" src="images/product/9_2.jpg" alt="">
                            </a>
                            <div class="sticker"><span>Sale</span></div>
                            <!-- Begin Product Action Area -->
                            <div class="product-action">
                                <div class="product-action-inner">
                                    <div class="cart">
                                        <a href="#">
                                            <span>Add To Cart</span>
                                        </a>
                                    </div>
                                    <ul class="add-to-links">
                                        <li  class="rav-wishlist"><a href="#" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                          
                                        <li class="rav-quickviewbtn">
                                            <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product Action Area End Here -->
                        </div>
                        <!-- Featured Product Image Area End Here -->
                        <!-- Begin Featured Product Content Area -->
                        <div class="product-contents">
                            <!-- Begin Featured Product Name Area -->
                            <h5 class="product-name">
                                <a href="#" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                            </h5>
                            <!-- Featured Product Name Area End Here -->
                            <!-- Begin Price Box Area -->
                            <div class="price-box">
                                <span class="price">$16.40</span>
                                <span class="old-price">$20.50</span>
                            </div>
                            <!-- Price Box Area End Here -->
                            <!-- Begin Rating Area -->
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <!-- Rating Area End Here -->
                        </div>
                        <!-- Featured Product Content Area End Here -->
                    </div>
                </div>
                <!-- Single Related Product Area End Here -->
                <!-- Begin Single Related Product Area -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-product">
                        <!-- Begin Featured Product Image Area -->
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="images/product/10_1.jpg" alt="">
                                <img class="secondary-img" src="images/product/10_2.jpg" alt="">
                            </a>
                            <div class="sticker"><span>Sale</span></div>
                            <!-- Begin Product Action Area -->
                            <div class="product-action">
                                <div class="product-action-inner">
                                    <div class="cart">
                                        <a href="#">
                                            <span>Add To Cart</span>
                                        </a>
                                    </div>
                                    <ul class="add-to-links">
                                        <li  class="rav-wishlist"><a href="#" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                          
                                        <li class="rav-quickviewbtn">
                                            <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product Action Area End Here -->
                        </div>
                        <!-- Featured Product Image Area End Here -->
                        <!-- Begin Featured Product Content Area -->
                        <div class="product-contents">
                            <!-- Begin Featured Product Name Area -->
                            <h5 class="product-name">
                                <a href="#" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                            </h5>
                            <!-- Featured Product Name Area End Here -->
                            <!-- Begin Price Box Area -->
                            <div class="price-box">
                                <span class="price">$16.40</span>
                                <span class="old-price">$20.50</span>
                            </div>
                            <!-- Price Box Area End Here -->
                            <!-- Begin Rating Area -->
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <!-- Rating Area End Here -->
                        </div>
                        <!-- Featured Product Content Area End Here -->
                    </div>
                </div>
                <!-- Single Related Product Area End Here -->
                <!-- Begin Single Related Product Area -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-product">
                        <!-- Begin Featured Product Image Area -->
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="images/product/5_1.jpg" alt="">
                                <img class="secondary-img" src="images/product/5_2.jpg" alt="">
                            </a>
                            <!-- Begin Product Action Area -->
                            <div class="product-action">
                                <div class="product-action-inner">
                                    <div class="cart">
                                        <a href="#">
                                            <span>Add To Cart</span>
                                        </a>
                                    </div>
                                    <ul class="add-to-links">
                                        <li  class="rav-wishlist"><a href="#" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                          
                                        <li class="rav-quickviewbtn">
                                            <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product Action Area End Here -->
                        </div>
                        <!-- Featured Product Image Area End Here -->
                        <!-- Begin Featured Product Content Area -->
                        <div class="product-contents">
                            <!-- Begin Featured Product Name Area -->
                            <h5 class="product-name">
                                <a href="#" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                            </h5>
                            <!-- Featured Product Name Area End Here -->
                            <!-- Begin Price Box Area -->
                            <div class="price-box">
                                <span class="price">$16.40</span>
                                <span class="old-price">$20.50</span>
                            </div>
                            <!-- Price Box Area End Here -->
                            <!-- Begin Rating Area -->
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <!-- Rating Area End Here -->
                        </div>
                        <!-- Featured Product Content Area End Here -->
                    </div>
                </div>
                <!-- Single Related Product Area End Here -->
                <!-- Begin Single Related Product Area -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-product">
                        <!-- Begin Featured Product Image Area -->
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="images/product/8_1.jpg" alt="">
                                <img class="secondary-img" src="images/product/8_2.jpg" alt="">
                            </a>
                            <div class="sticker"><span>Sale</span></div>
                            <!-- Begin Product Action Area -->
                            <div class="product-action">
                                <div class="product-action-inner">
                                    <div class="cart">
                                        <a href="#">
                                            <span>Add To Cart</span>
                                        </a>
                                    </div>
                                    <ul class="add-to-links">
                                        <li  class="rav-wishlist"><a href="#" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                          
                                        <li class="rav-quickviewbtn">
                                            <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product Action Area End Here -->
                        </div>
                        <!-- Featured Product Image Area End Here -->
                        <!-- Begin Featured Product Content Area -->
                        <div class="product-contents">
                            <!-- Begin Featured Product Name Area -->
                            <h5 class="product-name">
                                <a href="#" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                            </h5>
                            <!-- Featured Product Name Area End Here -->
                            <!-- Begin Price Box Area -->
                            <div class="price-box">
                                <span class="price">$16.40</span>
                                <span class="old-price">$20.50</span>
                            </div>
                            <!-- Price Box Area End Here -->
                            <!-- Begin Rating Area -->
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <!-- Rating Area End Here -->
                        </div>
                        <!-- Featured Product Content Area End Here -->
                    </div>
                </div>
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
