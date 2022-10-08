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
                    <li class="active"><a href="#">Shop</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="shop-topbar-area shop-topbar-area-reverse pt-100 pb-100">
        <div class="container">
            <div class="row">

<?php include("shop_sidebar.php"); ?>

                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="shop-topbar-wrapper shop-list-topbar-wrapper">
                        <div class="grid-list">
                            <ul class="nav">
                                <li>
                                    <a class="active show" data-bs-toggle="tab" href="#grid" title="Grid">
                                        <i class="fa fa-th-large"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#list" title="List">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="toolbar-short-area d-md-flex align-items-center">
                            <div class="toolbar-shorter">
                                <label>Sort By:</label>
                                <select class="nice-select wide">
                                    <option data-display="Select">Select</option>
                                    <option value="price:asc">Price: Lowest first</option>
                                    <option value="price:desc">Price: Highest first</option>
                                    <option value="name:asc">Product Name: A to Z</option>
                                    <option value="name:desc">Product Name: Z to A</option>
                                    <option value="quantity:desc">In stock</option>
                                    <option value="reference:asc">Reference: Lowest first</option>
                                    <option value="reference:desc">Reference: Highest first</option>
                                </select>
                            </div>
                            <p class="show-product">Showing 1&ndash;9 of 42 results</p>
                        </div>
                    </div>
                                

                    <div class="shop-product">
                        <div class="tab-content">
                            <div id="grid" class="tab-pane show fade in active">
                                <div class="grid-view">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="single-product single-product-3">
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/1_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/1_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-contents">
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="single-product single-product-3">
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/2_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/2_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-contents">
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="single-product single-product-3">
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/3_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/3_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-contents">
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="single-product single-product-3">
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/4_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/4_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-contents">
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="single-product single-product-3">
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/5_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/5_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-contents">
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="single-product single-product-3">
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/5_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/5_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-contents">
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="single-product single-product-3">
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/6_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/6_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-contents">
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="single-product single-product-3">
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/7_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/7_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-contents">
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="single-product single-product-3">
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/8_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/8_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-contents">
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>

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
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Single Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <!-- Begin Single Product Area -->
                                            <div class="single-product single-product-3">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/9_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/9_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <!-- Begin Product Action Area -->
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Product Action Area End Here -->
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-contents">
                                                    <!-- Begin Product Name Area -->
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>
                                                    <!-- Product Name Area End Here -->
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
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Single Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <!-- Begin Single Product Area -->
                                            <div class="single-product single-product-3">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/10_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/10_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <!-- Begin Product Action Area -->
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Product Action Area End Here -->
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-contents">
                                                    <!-- Begin Product Name Area -->
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>
                                                    <!-- Product Name Area End Here -->
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
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Single Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <!-- Begin Single Product Area -->
                                            <div class="single-product single-product-3">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="product">
                                                        <img class="primary-img" src="images/product/1_1.jpg" alt="">
                                                        <img class="secondary-img" src="images/product/1_2.jpg" alt="">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <!-- Begin Product Action Area -->
                                                    <div class="product-action">
                                                        <div class="product-action-inner">
                                                            <div class="cart">
                                                                <a href="cart">
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                            <ul class="add-to-links">
                                                                <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                 
                                                                <li class="rav-quickviewbtn">
                                                                    <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Product Action Area End Here -->
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-contents">
                                                    <!-- Begin Product Name Area -->
                                                    <h5 class="product-name">
                                                        <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                    </h5>
                                                    <!-- Product Name Area End Here -->
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
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Single Product Area End Here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="list" class="tab-pane fade">
                                <div class="list-view">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img pro-list-item pro-list-sidebar-items">
                                                <a href="product">
                                                    <img class="primary-img" src="images/product/1_1.jpg" alt="">
                                                    <img class="secondary-img" src="images/product/1_2.jpg" alt="">
                                                </a>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <!-- Begin Product List Content Area -->
                                            <div class="pro-list-content">
                                                <!-- Begin Product Name Area -->
                                                <h5 class="product-name">
                                                    <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                </h5>
                                                <!-- Product Name Area End Here -->
                                                <!-- Begin List Rating Area -->
                                                <div class="rating list-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <!-- List Rating Area End Here -->
                                                <!-- Begin Price list Box Area -->
                                                <div class="price-box list-price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                                <!-- Price List Box Area End Here -->
                                                <!-- Begin List Text -->
                                                <div class="list-text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eaque cumque provident sed, nemo amet iure neque excepturi minus et quos recusandae enim praesentium laudantium sapiente voluptates facere impedit ab!</p>
                                                </div>
                                                <!-- List Text End Here -->
                                                <!-- Begin Product Action Area -->
                                                <div class="product-action product-action-2">
                                                    <div class="product-action-inner">
                                                        <div class="cart">
                                                            <a href="cart">
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                        <ul class="add-to-links">
                                                            <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                             
                                                            <li class="rav-quickviewbtn">
                                                                <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Action Area End Here -->
                                            </div>
                                            <!-- Product List Content Area End Here -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img pro-list-item pro-list-sidebar-items">
                                                <a href="product">
                                                    <img class="primary-img" src="images/product/2_1.jpg" alt="">
                                                    <img class="secondary-img" src="images/product/2_2.jpg" alt="">
                                                </a>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <!-- Begin Product List Content Area -->
                                            <div class="pro-list-content">
                                                <!-- Begin Product Name Area -->
                                                <h5 class="product-name">
                                                    <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                </h5>
                                                <!-- Product Name Area End Here -->
                                                <!-- Begin List Rating Area -->
                                                <div class="rating list-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <!-- List Rating Area End Here -->
                                                <!-- Begin Price list Box Area -->
                                                <div class="price-box list-price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                                <!-- Price List Box Area End Here -->
                                                <!-- Begin List Text -->
                                                <div class="list-text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eaque cumque provident sed, nemo amet iure neque excepturi minus et quos recusandae enim praesentium laudantium sapiente voluptates facere impedit ab!</p>
                                                </div>
                                                <!-- List Text End Here -->
                                                <!-- Begin Product Action Area -->
                                                <div class="product-action product-action-2">
                                                    <div class="product-action-inner">
                                                        <div class="cart">
                                                            <a href="cart">
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                        <ul class="add-to-links">
                                                            <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                             
                                                            <li class="rav-quickviewbtn">
                                                                <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Action Area End Here -->
                                            </div>
                                            <!-- Product List Content Area End Here -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img pro-list-item pro-list-sidebar-items">
                                                <a href="product">
                                                    <img class="primary-img" src="images/product/3_1.jpg" alt="">
                                                    <img class="secondary-img" src="images/product/3_2.jpg" alt="">
                                                </a>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <!-- Begin Product List Content Area -->
                                            <div class="pro-list-content">
                                                <!-- Begin Product Name Area -->
                                                <h5 class="product-name">
                                                    <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                </h5>
                                                <!-- Product Name Area End Here -->
                                                <!-- Begin List Rating Area -->
                                                <div class="rating list-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <!-- List Rating Area End Here -->
                                                <!-- Begin Price list Box Area -->
                                                <div class="price-box list-price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                                <!-- Price List Box Area End Here -->
                                                <!-- Begin List Text -->
                                                <div class="list-text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eaque cumque provident sed, nemo amet iure neque excepturi minus et quos recusandae enim praesentium laudantium sapiente voluptates facere impedit ab!</p>
                                                </div>
                                                <!-- List Text End Here -->
                                                <!-- Begin Product Action Area -->
                                                <div class="product-action product-action-2">
                                                    <div class="product-action-inner">
                                                        <div class="cart">
                                                            <a href="cart">
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                        <ul class="add-to-links">
                                                            <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                             
                                                            <li class="rav-quickviewbtn">
                                                                <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Action Area End Here -->
                                            </div>
                                            <!-- Product List Content Area End Here -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img pro-list-item pro-list-sidebar-items">
                                                <a href="product">
                                                    <img class="primary-img" src="images/product/4_1.jpg" alt="">
                                                    <img class="secondary-img" src="images/product/4_2.jpg" alt="">
                                                </a>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <!-- Begin Product List Content Area -->
                                            <div class="pro-list-content">
                                                <!-- Begin Product Name Area -->
                                                <h5 class="product-name">
                                                    <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                </h5>
                                                <!-- Product Name Area End Here -->
                                                <!-- Begin List Rating Area -->
                                                <div class="rating list-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <!-- List Rating Area End Here -->
                                                <!-- Begin Price list Box Area -->
                                                <div class="price-box list-price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                                <!-- Price List Box Area End Here -->
                                                <!-- Begin List Text -->
                                                <div class="list-text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eaque cumque provident sed, nemo amet iure neque excepturi minus et quos recusandae enim praesentium laudantium sapiente voluptates facere impedit ab!</p>
                                                </div>
                                                <!-- List Text End Here -->
                                                <!-- Begin Product Action Area -->
                                                <div class="product-action product-action-2">
                                                    <div class="product-action-inner">
                                                        <div class="cart">
                                                            <a href="cart">
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                        <ul class="add-to-links">
                                                            <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                             
                                                            <li class="rav-quickviewbtn">
                                                                <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Action Area End Here -->
                                            </div>
                                            <!-- Product List Content Area End Here -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img pro-list-item pro-list-sidebar-items">
                                                <a href="product">
                                                    <img class="primary-img" src="images/product/6_1.jpg" alt="">
                                                    <img class="secondary-img" src="images/product/6_2.jpg" alt="">
                                                </a>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <!-- Begin Product List Content Area -->
                                            <div class="pro-list-content">
                                                <!-- Begin Product Name Area -->
                                                <h5 class="product-name">
                                                    <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                </h5>
                                                <!-- Product Name Area End Here -->
                                                <!-- Begin List Rating Area -->
                                                <div class="rating list-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <!-- List Rating Area End Here -->
                                                <!-- Begin Price list Box Area -->
                                                <div class="price-box list-price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                                <!-- Price List Box Area End Here -->
                                                <!-- Begin List Text -->
                                                <div class="list-text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eaque cumque provident sed, nemo amet iure neque excepturi minus et quos recusandae enim praesentium laudantium sapiente voluptates facere impedit ab!</p>
                                                </div>
                                                <!-- List Text End Here -->
                                                <!-- Begin Product Action Area -->
                                                <div class="product-action product-action-2">
                                                    <div class="product-action-inner">
                                                        <div class="cart">
                                                            <a href="cart">
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                        <ul class="add-to-links">
                                                            <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                             
                                                            <li class="rav-quickviewbtn">
                                                                <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Action Area End Here -->
                                            </div>
                                            <!-- Product List Content Area End Here -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img pro-list-item pro-list-sidebar-items">
                                                <a href="product">
                                                    <img class="primary-img" src="images/product/7_1.jpg" alt="">
                                                    <img class="secondary-img" src="images/product/7_2.jpg" alt="">
                                                </a>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <!-- Begin Product List Content Area -->
                                            <div class="pro-list-content">
                                                <!-- Begin Product Name Area -->
                                                <h5 class="product-name">
                                                    <a href="product" title="Printed Chiffon Dress">Printed Chiffon Dress</a>
                                                </h5>
                                                <!-- Product Name Area End Here -->
                                                <!-- Begin List Rating Area -->
                                                <div class="rating list-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <!-- List Rating Area End Here -->
                                                <!-- Begin Price list Box Area -->
                                                <div class="price-box list-price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                                <!-- Price List Box Area End Here -->
                                                <!-- Begin List Text -->
                                                <div class="list-text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eaque cumque provident sed, nemo amet iure neque excepturi minus et quos recusandae enim praesentium laudantium sapiente voluptates facere impedit ab!</p>
                                                </div>
                                                <!-- List Text End Here -->
                                                <!-- Begin Product Action Area -->
                                                <div class="product-action product-action-2">
                                                    <div class="product-action-inner">
                                                        <div class="cart">
                                                            <a href="cart">
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                        <ul class="add-to-links">
                                                            <li  class="rav-wishlist"><a href="wishlist" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                             
                                                            <li class="rav-quickviewbtn">
                                                                <a href=".html" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Action Area End Here -->
                                            </div>
                                            <!-- Product List Content Area End Here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Menu Content Area End Here -->
                    </div>
                    <!-- Begin Pagination Area -->
                    <div class="pagination-area pagination-area-reverse">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 p-0">
                                    <div class="product-pagination">
                                        <ul>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

</body>

</html>
