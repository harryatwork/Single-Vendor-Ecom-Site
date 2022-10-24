$(document).on("click",".add_to_cart_quick",function() {
    $(this).removeClass("add_to_cart_quick");
    $(this).css("background","green");
    $(this).html("Added");
    let p_id = $(this).attr("p-id");
    let u_id = $(this).attr("u-id");
    let c_id = $(this).attr("c-id");
    let sub_c_id = $(this).attr("sub-c-id");
    let p_variant_title = $(this).attr("p-variant-title");
    let p_variant_type = $(this).attr("p-variant-type");
    let p_title = $(this).attr("p-title");
    let p_image = $(this).attr("p-image");
    let p_price = parseInt($(this).attr("p-price"));
    $.post('backend/add_to_cart_quick.php',{
        p_id : p_id,
        u_id : u_id,
        c_id : c_id,
        sub_c_id : sub_c_id,
        p_variant_title : p_variant_title,
        p_variant_type : p_variant_type,
        p_title : p_title,
        p_image : p_image
    },(result)=>{
        var header_cart_count = parseInt($(".header_cart_count").html());
        var total_cart_product_price = parseInt($(".total_cart_product_price").html());
        $(".header_cart_count").html(header_cart_count+1);
        $(".total_cart_product_price").html(total_cart_product_price+p_price);

        $(".header_cart_list").append(`<div class="cart-item-${result}">
                                            <div class="cart-img">
                                                <a target="_blank" href="product?title=${p_title}/${p_id}">
                                                    <img onerror="this.src='admin/assets/images/product.png'" src="images-main/products/${p_image}" alt="" style="width:100px;">
                                                </a>
                                            </div>
                                            <div class="cart-info">
                                                <div class="pro-item">
                                                    <span class="quantity-formated">1x</span>
                                                    <a class="pro-name" target="_blank" href="product?title=${p_title}/${p_id}" title="${p_title}">${p_title}</a>
                                                </div>
                                                <div class="pro-atributes">
                                                    <a target="_blank" href="product?title=${p_title}/${p_id}" title="${p_title}">S, Beige</a>
                                                </div>
                                                <div class="pro-price">
                                                    <span>$${p_price}</span>
                                                </div>
                                                <div class="remove-link">
                                                    <a class="cart_remove" cart-id="${result}" item-value="${p_price}" title="Remove this product from my cart" style="cursor:pointer;"></a>
                                                </div>
                                            </div><br/>
                                        </div>`);
        console.log(result);
    })
});
$(document).on("click",".cart_remove",function(){
    let cart_id = $(this).attr("cart-id");
    let item_value = parseInt($(this).attr("item-value"));
    $.post('backend/remove_from_cart.php',{
        cart_id : cart_id
    },()=>{
        $(".cart-item-"+cart_id).remove();
        var header_cart_count = parseInt($(".header_cart_count").html());
        var total_cart_product_price = parseInt($(".total_cart_product_price").html());
        $(".header_cart_count").html(header_cart_count-1);
        $(".total_cart_product_price").html(total_cart_product_price-item_value);
    })
});

$(document).on("click",".add_to_wishlist_quick",function() {
    $(this).removeClass("add_to_wishlist_quick");
    $(this).html('<i class="fa fa-heart" aria-hidden="true" style="color:red;"></i>')
    let p_id = $(this).attr("p-id");
    let u_id = $(this).attr("u-id");
    let c_id = $(this).attr("c-id");
    let sub_c_id = $(this).attr("sub-c-id");
    let p_variant_title = $(this).attr("p-variant-title");
    let p_variant_type = $(this).attr("p-variant-type");
    let p_title = $(this).attr("p-title");
    let p_image = $(this).attr("p-image");
    $.post('backend/add_to_wishlist_quick.php',{
        p_id : p_id,
        u_id : u_id,
        c_id : c_id,
        sub_c_id : sub_c_id,
        p_variant_title : p_variant_title,
        p_variant_type : p_variant_type,
        p_title : p_title,
        p_image : p_image
    },(result)=>{
        console.log(result);
    })
});


// Shop Page --------------------------------------------------------

$(".product_variant_filter").on("click",function(){
    let product_ids = JSON.parse($(this).attr("product-ids"));
    $(".product_common").css("display","none");
    for(let variant_p_id=0;variant_p_id<product_ids.length;variant_p_id++){
        $(".product_id_"+product_ids[variant_p_id]).css("display","block");
    }
    console.log(product_ids);
});