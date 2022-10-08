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


    <!-- Begin Blog Area -->
    <div class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <!-- Begin Widge Search Area -->
                    <div class="widge widge-search">
                        <div class="widge-title">
                            <span>Search</span>
                        </div>
                        <form class="widge-form" role="search" method="get" action="#">
                            <input type="text" name="Search" value="Search..." onblur="if(this.value==''){this.value='Search...'}" onfocus="if(this.value=='Search...'){this.value=''}">
                            <span><i class="fa fa-search"></i></span>
                        </form>
                    </div>
                    <!-- Widge Search Area End Here -->
                    <!-- Begin Widge Archives Area -->
                    <div class="widge widge-archives">
                        <div class="widge-title">
                            <span>Blog Archives</span>
                        </div>
                        <div class="widge-list">
                            <ul>
                                <li>
                                    <a href="#">March 2018</a>
                                    <span>(1)</span>
                                </li>
                                <li>
                                    <a href="#">December 2017</a>
                                    <span>(1)</span>
                                </li>
                                <li>
                                    <a href="#">November 2017</a>
                                    <span>(1)</span>
                                </li>
                                <li>
                                    <a href="#">September 2017</a>
                                    <span>(1)</span>
                                </li>
                                <li>
                                    <a href="#">August 2017</a>
                                    <span>(1)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Widge Archives Area End Here -->
                    <!-- Begin Widge Recent Post Area -->
                    <div class="widge widge-recent-post">
                        <div class="widge-title">
                            <span>Recent Post</span>
                        </div>
                        <div class="widge-list">
                            <ul>
                                <li>
                                    <a href="#">Blog image post</a>
                                </li>
                                <li>
                                    <a href="#">Post with Galleryt</a>
                                </li>
                                <li>
                                    <a href="#">Post with Audio</a>
                                </li>
                                <li>
                                    <a href="#">Post with Video</a>
                                </li>
                                <li>
                                    <a href="#">Maecenas ultricies</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Widge Recent Post Area End Here -->
                    <!-- Begin Widge Facebook Like Box Area -->
                    <div class="widge widge-fb-like-box">
                        <div class="widge-title">
                            <span>Facebook Like Box</span>
                        </div>
                        <div class="widge-list">
                            <ul>
                                <li>
                                    <div class="fb-page">
                                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhastech.company%2F&amp;tabs=timeline&amp;width=340&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" height="280" style="border:none;overflow:hidden"></iframe>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Widge Facebook Like Box End Here -->
                    <!-- Begin Widge Instagram Area -->
                    <div class="widge widge-instagram">
                        <div class="widge-title">
                            <span>Instagram</span>
                        </div>
                        <div class="widge-list">
                            <ul>
                                <li>
                                    <span>Unable to show Instagram photos</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Widge Instagram End Here -->
                    <!-- Begin Widge Tags Area -->
                    <div class="widge widge-tags">
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
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="blog-2-item">
                        <div class="row">
                            <!-- Begin Blog Image Area -->
                            <div class="col-lg-5">
                                <div class="blog-image-2 img-full">
                                    <a href="blog_detail">
                                        <img src="images/blog/5_1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Blog Image Area End Here -->
                            <!-- Begin Blog Post Area -->
                            <div class="col-lg-7">
                                <div class="blog-post-2">
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="post-date">
                                                <span class="day">26</span>
                                                <span class="month">Sep</span>
                                            </div>
                                            <div class="post-meta">
                                                <h1 class="entry-title">
                                                    <a href="blog_detail">Blog image post</a>
                                                </h1>
                                                <div class="post-meta-small">
                                                    <div class="post-author">
                                                        <span class="post-small">Written by :</span>
                                                        <a href="#">admin</a> 
                                                    </div>
                                                    <div class="post-category">
                                                        <span class="post-small">in :</span>
                                                        <a class="post-category-fashion" href="#"> Fashion,</a> 
                                                        <a class="blog" href="#"> HTML</a> 
                                                    </div>
                                                    <div class="post-comment">
                                                        <a href="#">0 comments</a> 
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        <!-- Begin Entry Summary Area -->
                                        <div class="entry-summary">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis</p>
                                            <div class="read-more">
                                                <a href="blog_detail">Read More</a>
                                            </div>
                                        </div>
                                        <!-- Entry Summary Area End Here -->
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Post Area End Here -->
                        </div>
                    </div>
                    <div class="blog-2-item">
                        <div class="row">
                            <!-- Begin Blog Image Area -->
                            <div class="col-lg-5">
                                <div class="blog-2-active owl-carousel">
                                    <!-- Begin Single Item Area -->
                                    <div class="single-item">
                                        <div class="blog-image-2 img-full">
                                            <a href="blog_detail">
                                                <img src="images/blog/7_1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Item Area End Here -->
                                    <!-- Begin Single Item Area -->
                                    <div class="single-item">
                                        <div class="blog-image-2 img-full">
                                            <a href="blog_detail">
                                                <img src="images/blog/6_1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Item Area End Here -->
                                    <!-- Begin Single Item Area -->
                                    <div class="single-item">
                                        <div class="blog-image-2 img-full">
                                            <a href="blog_detail">
                                                <img src="images/blog/5_1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Item Area End Here -->
                                    <!-- Begin Single Item Area -->
                                    <div class="single-item">
                                        <div class="blog-image-2 img-full">
                                            <a href="blog_detail">
                                                <img src="images/blog/4_1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Item Area End Here -->
                                    <!-- Begin Single Item Area -->
                                    <div class="single-item">
                                        <div class="blog-image-2 img-full">
                                            <a href="blog_detail">
                                                <img src="images/blog/3_1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Item Area End Here -->
                                </div>
                            </div>
                            <!-- Blog Image Area End Here -->
                            <!-- Begin Blog Post Area -->
                            <div class="col-lg-7">
                                <div class="blog-post-2">
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="post-date">
                                                <span class="day">01</span>
                                                <span class="month">Sep</span>
                                            </div>
                                            <div class="post-meta">
                                                <h1 class="entry-title">
                                                    <a href="#">Post with Gallery</a>
                                                </h1>
                                                <div class="post-meta-small">
                                                    <div class="post-author">
                                                        <span class="post-small">Written by :</span>
                                                        <a href="#">admin</a> 
                                                    </div>
                                                    <div class="post-category">
                                                        <span class="post-small">in :</span>
                                                        <a class="post-category-fashion" href="#"> Fashion,</a> 
                                                        <a class="blog" href="#"> HTML</a> 
                                                    </div>
                                                    <div class="post-comment">
                                                        <a href="#">0 comments</a> 
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        <!-- Begin Entry Summary Area -->
                                        <div class="entry-summary">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis</p>
                                            <div class="read-more">
                                                <a href="blog_detail">Read More</a>
                                            </div>
                                        </div>
                                        <!-- Entry Summary Area End Here -->
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Post Area End Here -->
                        </div>
                    </div>
                    <div class="blog-2-item">
                        <div class="row">
                            <!-- Begin Blog Image Area -->
                            <div class="col-lg-5">
                                <div class="blog-image-2 img-full">
                                    <a href="blog_detail">
                                        <img src="images/blog/1_1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Blog Image Area End Here -->
                            <!-- Begin Blog Post Area -->
                            <div class="col-lg-7">
                                <div class="blog-post-2">
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="post-date">
                                                <span class="day">01</span>
                                                <span class="month">Sep</span>
                                            </div>
                                            <div class="post-meta">
                                                <h1 class="entry-title">
                                                    <a href="#">Post with Some</a>
                                                </h1>
                                                <div class="post-meta-small">
                                                    <div class="post-author">
                                                        <span class="post-small">Written by :</span>
                                                        <a href="#">admin</a> 
                                                    </div>
                                                    <div class="post-category">
                                                        <span class="post-small">in :</span>
                                                        <a class="post-category-fashion" href="#"> Fashion,</a> 
                                                        <a class="blog" href="#"> HTML</a> 
                                                    </div>
                                                    <div class="post-comment">
                                                        <a href="#">0 comments</a> 
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        <!-- Begin Entry Summary Area -->
                                        <div class="entry-summary">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis</p>
                                            <div class="read-more">
                                                <a href="blog_detail">Read More</a>
                                            </div>
                                        </div>
                                        <!-- Entry Summary Area End Here -->
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Post Area End Here -->
                        </div>
                    </div>
                    <div class="blog-2-item">
                        <div class="row">
                            <!-- Begin Blog Image Area -->
                            <div class="col-lg-5">
                                <div class="post-thumbnail">
                                    <div class="post-video ratio ratio-16x9">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/j57HMjVM7Is" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Image Area End Here -->
                            <!-- Begin Blog Post Area -->
                            <div class="col-lg-7">
                                <div class="blog-post-2">
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="post-date">
                                                <span class="day">01</span>
                                                <span class="month">Sep</span>
                                            </div>
                                            <div class="post-meta">
                                                <h1 class="entry-title">
                                                    <a href="#">Post with Video</a>
                                                </h1>
                                                <div class="post-meta-small">
                                                    <div class="post-author">
                                                        <span class="post-small">Written by :</span>
                                                        <a href="#">admin</a> 
                                                    </div>
                                                    <div class="post-category">
                                                        <span class="post-small">in :</span>
                                                        <a class="post-category-fashion" href="#"> Fashion,</a> 
                                                        <a class="blog" href="#"> HTML</a> 
                                                    </div>
                                                    <div class="post-comment">
                                                        <a href="#">0 comments</a> 
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        <!-- Begin Entry Summary Area -->
                                        <div class="entry-summary">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis</p>
                                            <div class="read-more">
                                                <a href="blog_detail">Read More</a>
                                            </div>
                                        </div>
                                        <!-- Entry Summary Area End Here -->
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Post Area End Here -->
                        </div>
                    </div>
                    <div class="blog-2-item">
                        <div class="row">
                            <!-- Begin Blog Image Area -->
                            <div class="col-lg-5">
                                <div class="blog-image-2 img-full">
                                    <a href="blog_detail">
                                        <img src="images/blog/6_1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Blog Image Area End Here -->
                            <!-- Begin Blog Post Area -->
                            <div class="col-lg-7">
                                <div class="blog-post-2">
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="post-date">
                                                <span class="day">01</span>
                                                <span class="month">Sep</span>
                                            </div>
                                            <div class="post-meta">
                                                <h1 class="entry-title">
                                                    <a href="#">Maecenas ultricies</a>
                                                </h1>
                                                <div class="post-meta-small">
                                                    <div class="post-author">
                                                        <span class="post-small">Written by :</span>
                                                        <a href="#">admin</a> 
                                                    </div>
                                                    <div class="post-category">
                                                        <span class="post-small">in :</span>
                                                        <a class="post-category-fashion" href="#"> Fashion,</a> 
                                                        <a class="blog" href="#"> HTML</a> 
                                                    </div>
                                                    <div class="post-comment">
                                                        <a href="#">0 comments</a> 
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        <!-- Begin Entry Summary Area -->
                                        <div class="entry-summary">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis</p>
                                            <div class="read-more">
                                                <a href="blog_detail">Read More</a>
                                            </div>
                                        </div>
                                        <!-- Entry Summary Area End Here -->
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Post Area End Here -->
                        </div>
                    </div>
                    <div class="blog-2-item">
                        <div class="row">
                            <!-- Begin Blog Image Area -->
                            <div class="col-lg-5">
                                <div class="blog-image-2 img-full">
                                    <a href="blog_detail">
                                        <img src="images/blog/4_1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Blog Image Area End Here -->
                            <!-- Begin Blog Post Area -->
                            <div class="col-lg-7">
                                <div class="blog-post-2">
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="post-date">
                                                <span class="day">12</span>
                                                <span class="month">Sep</span>
                                            </div>
                                            <div class="post-meta">
                                                <h1 class="entry-title">
                                                    <a href="#">Etiam magna</a>
                                                </h1>
                                                <div class="post-meta-small">
                                                    <div class="post-author">
                                                        <span class="post-small">Written by :</span>
                                                        <a href="#">admin</a> 
                                                    </div>
                                                    <div class="post-category">
                                                        <span class="post-small">in :</span>
                                                        <a class="post-category-fashion" href="#"> Fashion,</a> 
                                                        <a class="blog" href="#"> HTML</a> 
                                                    </div>
                                                    <div class="post-comment">
                                                        <a href="#">0 comments</a> 
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        <!-- Begin Entry Summary Area -->
                                        <div class="entry-summary">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis</p>
                                            <div class="read-more">
                                                <a href="blog_detail">Read More</a>
                                            </div>
                                        </div>
                                        <!-- Entry Summary Area End Here -->
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Post Area End Here -->
                        </div>
                    </div>
                    <!-- Begin Pagination Area -->
                    <div class="product-pagination blog-pagination">
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Pagination Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End Here -->


<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

</body>

</html>
