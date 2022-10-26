<?php include("head.php"); ?>

<style>
    .header-sticky {
        background-color: rgba(0, 0, 0, 0.7) !important;
        box-shadow: 0 8px 6px -6px rgb(0 0 0 / 40%) !important;
    }
    .page-banner {
        margin-top:10%;
    }
    .total_products_count {
        color: white;
        font-weight: 800;
        background: #21a88f;
        padding: 3px 7px;
        border-radius: 4px;
    }
</style>

<body>

<?php include("header.php"); ?>

<?php
    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url = explode("/", $url);
    $url_cat_id = $url[count($url)-1];
    $url_cat_name_array = $url[count($url)-2];
    $url_cat_name_array = explode("=", $url_cat_name_array);
    $url_cat_name = $url_cat_name_array[count($url_cat_name_array)-1];

    if(isset($_GET["category"])) {
        $getter = 'cat_id';
    } elseif (isset($_GET["subcategory"])) {
        $getter = 'subcat_id';
    } else {
        $getter = 'NA';
    }
?>

    <div class="page-banner">
        <div class="container">
            <div class="page-banner-content">
                <ul>
                    <li><a href="index">Home</a></li>
                    <li><a href="shop">Shop</a></li>
                    <li class="active"><a><?= $url_cat_name; ?></a></li>
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
                       
                        <div class="toolbar-short-area d-md-flex align-items-center">
                            <p class="show-product">Total <span class="total_products_count"></span> Products</p>
                            <div class="toolbar-shorter">
                                <label>Sort By:</label>
                                <select class="nice-select wide products_sort">
                                    <option value="ORDER BY id DESC" data-display="Select">Latest</option>
                                    <option value="ORDER BY price ASC">Price: Lowest first</option>
                                    <option value="ORDER BY price DESC">Price: Highest first</option>
                                    <option value="ORDER BY name ASC">Product Name: A to Z</option>
                                    <option value="ORDER BY name DESC">Product Name: Z to A</option>
                                </select>
                            </div>
                        </div>
                    </div>
                                

                    <div class="shop-product">
                        <div class="tab-content">
                            <div id="grid" class="tab-pane show fade in active">
                                <div class="grid-view">

                                    <input type="hidden" class="u_id" value="<?= $u_id; ?>" />
                                    <input type="hidden" class="getter" value="<?= $getter; ?>" />
                                    <input type="hidden" class="getter_id" value="<?= $url_cat_id; ?>" />
                                    <div class="row shop_products_list"></div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                        <!-- Tab Menu Content Area End Here -->
                </div>
                <!-- Begin Pagination Area -->
                <div class="pagination-area pagination-area-reverse" style="display:none;">
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

<script>
$(document).ready(function() {
    let u_id = $(".u_id").val();
    let getter = $(".getter").val();
    let getter_id = $(".getter_id").val();
    let sort_by = $(".products_sort").val();

    load_products(u_id,getter,getter_id,sort_by);
});

$(".products_sort").on("change",function(){
    let u_id = $(".u_id").val();
    let getter = $(".getter").val();
    let getter_id = $(".getter_id").val();
    let sort_by = $(".products_sort").val();

    load_products(u_id,getter,getter_id,sort_by);
});

// $(".price_filter").on("change",function(){
//     console.log(1);
//     console.log($(this).val());
// });

function load_products(u_id,getter,getter_id,sort_by) {

    $.post('backend/shop_products_load.php',{ 
        u_id : u_id,
        getter : getter,
        getter_id : getter_id,
        sort_by : sort_by
    },(result)=>{
        result = JSON.parse(result);
        console.log(result);
        var products = '';
        for(let i=0;i<result.length;i++){
            if(result[i][8] == 0) { 
                var price_variation = `<span class="price">$${result[i][3]}</span>`;
            } else {
                var price_variation = `<span class="price">$${result[i][9]}</span><span class="old-price">$${result[i][3]}</span>`;
            }

            var rating_ = '';
            for(let r=1;r<6;r++) { 
                if(result[i][10] >= r) {
                    rating_ = rating_+`<i class="fa fa-star" style="color:#e9b436;" ></i>`;
                } else {
                    rating_ = rating_+`<i class="fa fa-star" style="color:gray;" ></i>`;
                }
            }

            products = products+`<div class="col-lg-4 col-md-6 col-sm-6 product_common product_id_${result[i][0]}">
                                    <div class="single-product single-product-3">
                                        <div class="product-img">
                                            <a href="product?title=${result[i][11]}/${result[i][0]}">
                                                <img class="primary-img" onerror="this.src='admin/assets/images/product.png'" src="images-main/products/${result[i][2]}" alt="">
                                                <img class="secondary-img" onerror="this.src='admin/assets/images/product.png'" src="images-main/products/${result[i][2]}" alt="">
                                            </a>
                                            <div class="sticker"><span></span></div>
                                            <div class="product-action">
                                                <div class="product-action-inner">
                                                    <div class="cart">
                                                        <a class="add_to_cart_quick" p-price="${result[i][3]}" p-variant-title="${result[i][4]}" p-variant-type="${result[i][5]}" p-title="${result[i][1]}" p-image="${result[i][2]}" p-id="${result[i][0]}" u-id="${u_id}" c-id="${result[i][6]}" sub-c-id="${result[i][7]}" style="cursor:pointer;">
                                                            <span>Add To Cart</span>
                                                        </a>
                                                    </div>
                                                    <ul class="add-to-links">
                                                        <li class="rav-wishlist"  >
                                                            <a class="add_to_wishlist_quick" p-variant-title="${result[i][4]}" p-variant-type="${result[i][5]}" p-title="${result[i][1]}" p-image="${result[i][2]}" p-id="${result[i][0]}" u-id="${u_id}" c-id="${result[i][6]}" sub-c-id="${result[i][7]}" title="Add To Wishlist" style="cursor:pointer;">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                        </li>
                                                        <li class="rav-quickviewbtn">
                                                            <a target="_blank" href="product?title=${result[i][11]}/${result[i][0]}" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-contents">
                                            <h5 class="product-name">
                                                <a href="#" title="${result[i][1]}">${result[i][1]}</a>
                                            </h5>
                                            <div class="price-box">
                                                ${price_variation}
                                            </div>
                                            <div class="rating">
                                                ${rating_}
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
        }

        $(".shop_products_list").html(products);
        $(".total_products_count").html(result.length);
    });
}
</script>

</body>

</html>
