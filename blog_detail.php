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


    <!-- Begin Blog Details Area -->
    <div class="blog-details pt-100 pb-100">
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
                    <!-- Begin Banner Static 2 Area -->
                    <div class="banner-static-2 top-rated-banner">
                        <div class="banner-img">
                            <div class="banner-box">
                                <a href="#">
                                    <img src="images/banner/2_3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Banner Static 2 Area End Here -->
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
                    <div class="blog-2-active owl-carousel">
                        <div class="single-item">
                            <div class="blog-details-img">
                                <img src="images/blog/5_1.jpg" alt="">
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="blog-details-img">
                                <img src="images/blog/6_1.jpg" alt="">
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="blog-details-img">
                                <img src="images/blog/7_1.jpg" alt="">
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="blog-details-img">
                                <img src="images/blog/4_1.jpg" alt="">
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="blog-details-img">
                                <img src="images/blog/8_1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Begin Blog Details Post Area -->
                    <div class="blog-post pt-50">
                        <div class="post-info">
                            <header class="entry-header">
                                <div class="post-date">
                                    <span class="day">26</span>
                                    <span class="month">Sep</span>
                                </div>
                                <div class="post-meta">
                                    <h1 class="entry-title">
                                        <a href="#">Blog Gallery Format</a>
                                    </h1>
                                    <div class="post-meta-small">
                                        <div class="post-author">
                                            <span class="post-small">Written by :</span>
                                            <a href="#">admin</a> 
                                        </div>
                                        <div class="post-category">
                                            <span class="post-small">in :</span>
                                            <a class="post-category-fashion" href="#"> Fashion,</a> 
                                            <a class="post-category-html" href="#"> HTML</a> 
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
                            </div>
                            <!-- Entry Summary Area End Here -->
                            <!-- Begin Blog Blockquote Area -->
                            <div class="blog-blockquote">
                                <blockquote>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                </blockquote>
                            </div>
                            <!-- Blog Blockquote Area End Here -->
                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                            <div class="post-meta-small post-meta-small-2 uppercase">
                                <div class="post-comment">
                                    <a href="#">3 comments</a> 
                                </div>
                                <div class="post-category">
                                    <span class="post-small">Tags :</span>
                                    <a href="#"> Fashion</a> 
                                </div>
                            </div>
                            <!-- Begin Social Share Area -->
                            <div class="social-share social-share-2 pt-40">
                                <h3>Share this post</h3>
                                <ul class="socil-icon2 blog-social-icon">
                                    <li><a href="#" data-bs-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" title="Pinterset"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!-- Social Share Area End Here -->
                            <!-- Begin Blog Author Information Arae -->
                            <div class="blog-author-info pt-40 pb-30">
                                <div class="author-avatar">
                                    <img src="images/product-details/admin.png" alt="">
                                </div>
                                <div class="author-desc-2">
                                    <h2>About the Author:<a href="#">admin</a></h2>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis.</p>
                                </div>
                            </div>
                            <!-- Blog Author Information Arae End Here -->
                            <!-- Begin Related Post Area -->
                            <div class="related-post pt-40 pb-40">
                                <h2><span>Related posts</span></h2>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="related-post-item">
                                            <div class="related-post-img img-full">
                                                <img src="images/blog-details/1.jpg" alt="">
                                            </div>
                                            <div class="post-date-2">
                                                <span class="day-2">28</span>
                                                <span class="month-2">AUG</span>
                                            </div>
                                            <h4 class="post-heading">
                                                <a href="#">Post with Gallery</a>
                                            </h4>
                                            <span class="pos-category"><a href="#">HTML5</a></span>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus.... </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="related-post-item">
                                            <div class="related-post-img img-full">
                                                <img src="images/blog-details/2.jpg" alt="">
                                            </div>
                                            <div class="post-date-2">
                                                <span class="day-2">28</span>
                                                <span class="month-2">AUG</span>
                                            </div>
                                            <h4 class="post-heading">
                                                <a href="#">Libero lorem</a>
                                            </h4>
                                            <span class="pos-category"><a href="#">Creative</a></span>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus.... </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="related-post-item">
                                            <div class="related-post-img img-full">
                                                <img src="images/blog-details/3.jpg" alt="">
                                            </div>
                                            <div class="post-date-2">
                                                <span class="day-2">28</span>
                                                <span class="month-2">AUG</span>
                                            </div>
                                            <h4 class="post-heading">
                                                <a href="#">Tortor posuere</a>
                                            </h4>
                                            <span class="pos-category"><a href="#">Creative,</a></span>
                                            <span class="pos-category"><a href="#">Image</a></span>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus.... </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Related Post Area End Here -->
                            <!-- Begin Related Post Comments Area -->
                            <div class="related-post-comments">
                                <h3 class="rp-comments-title">3 Comments</h3>
                                <ul class="rp-comment-list">
                                    <li>
                                        <div class="rp-user-img">
                                            <img src="images/blog-details/admin.png" alt="">
                                        </div>
                                        <div class="rp-user-info">
                                            <strong class="rp-user-name">Admin</strong>
                                            <span class="rp-time">October 6, 2018 at 1:38 am</span>
                                            <span class="rp-user-comment">Just a nice Post</span>
                                        </div>
                                        <div class="related-post-btn rp-user-btn">
                                            <a href="#">Reply</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rp-user-img">
                                            <img src="images/blog-details/user.png" alt="">
                                        </div>
                                        <div class="rp-user-info">
                                            <strong class="rp-user-name">User</strong>
                                            <span class="rp-time">October 6, 2018 at 3:25 am</span>
                                            <span class="rp-user-comment">Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</span>
                                        </div>
                                        <div class="related-post-btn rp-user-btn">
                                            <a href="#">Reply</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rp-user-img">
                                            <img src="images/blog-details/admin.png" alt="">
                                        </div>
                                        <div class="rp-user-info">
                                            <strong class="rp-user-name">Admin</strong>
                                            <span class="rp-time">October 6, 2018 at 2:18 pm</span>
                                            <span class="rp-user-comment">Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor.</span>
                                        </div>
                                        <div class="related-post-btn rp-user-btn">
                                            <a href="#">Reply</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Related Post Comments Area End Here -->
                            <!-- Begin Related Post Respond Area -->
                            <div class="rp-respond">
                                <h3 class="rp-respond-title">Leave a Reply</h3>
                                <form class="rp-respond-form" action="#">
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="rp-comment-form">
                                                <label for="comment">Comment</label>
                                                <textarea id="comment" name="comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="rp-comment-input">
                                                <label for="name">Name</label>
                                                <input id="name" name="name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="rp-comment-input">
                                                <label for="email">Email</label>
                                                <input id="email" name="email" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="rp-comment-input">
                                                <label for="url">Website</label>
                                                <input id="url" name="url" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="form-button rp-comment-btn" type="submit"><span>Post Comment</span></button>
                                </form>
                            </div>
                            <!-- Related Post Respond Area End Here -->
                        </div>
                    </div>
                    <!-- Blog Details Post Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Area End Here -->

<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

</body>

</html>
