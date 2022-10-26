$(document).on("click",".add_to_cart_quick",function() {
    $(this).removeClass("add_to_cart_quick");
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
    let p_quantity = parseInt($(this).attr("p-quantity"));
    if(isNaN(p_quantity)){
        p_quantity = 1;
        $(this).css("background","green");
    } else {
        p_quantity = p_quantity;
    }
    console.log(p_quantity);
    $.post('backend/add_to_cart_quick.php',{
        p_id : p_id,
        u_id : u_id,
        c_id : c_id,
        sub_c_id : sub_c_id,
        p_variant_title : p_variant_title,
        p_variant_type : p_variant_type,
        p_title : p_title,
        p_image : p_image,
        p_quantity : p_quantity
    },(result)=>{
        var header_cart_count = parseInt($(".header_cart_count").html());
        var total_cart_product_price = parseInt($(".total_cart_product_price").html());
        $(".header_cart_count").html(header_cart_count+1);
        $(".total_cart_product_price").html(total_cart_product_price+(p_price*p_quantity));

        $(".header_cart_list").append(`<div class="cart-item-${result}">
                                            <div class="cart-img">
                                                <a target="_blank" href="product?title=${p_title}/${p_id}">
                                                    <img onerror="this.src='admin/assets/images/product.png'" src="images-main/products/${p_image}" alt="" style="width:100px;">
                                                </a>
                                            </div>
                                            <div class="cart-info">
                                                <div class="pro-item">
                                                    <span class="quantity-formated">${p_quantity}x</span>
                                                    <a class="pro-name" target="_blank" href="product?title=${p_title}/${p_id}" title="${p_title}">${p_title}</a>
                                                </div>
                                                <div class="pro-atributes">
                                                    <a target="_blank" href="product?title=${p_title}/${p_id}" title="${p_title}">S, Beige</a>
                                                </div>
                                                <div class="pro-price">
                                                    <span>$${p_price}</span>
                                                </div>
                                                <div class="remove-link">
                                                    <a class="cart_remove" cart-id="${result}" item-value="${p_price}" item-quantity="${p_quantity}" title="Remove this product from my cart" style="cursor:pointer;"></a>
                                                </div>
                                            </div><br/>
                                        </div>`);
        console.log(result);
    })
});
$(document).on("click",".cart_remove",function(){
    let cart_id = $(this).attr("cart-id");
    let item_value = parseInt($(this).attr("item-value"));
    let item_quantity = parseInt($(this).attr("item-quantity"));
    $.post('backend/remove_from_cart.php',{
        cart_id : cart_id
    },()=>{
        $(".cart-item-"+cart_id).remove();
        var header_cart_count = parseInt($(".header_cart_count").html());
        var total_cart_product_price = parseInt($(".total_cart_product_price").html());
        $(".header_cart_count").html(header_cart_count-1);
        $(".total_cart_product_price").html(total_cart_product_price-(item_value*item_quantity));
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
});


// Product Page -----------------------------------------------------

$(document).on("click",".product_variants_radio",function(){
    let product_variants_radio = $(this).val();
    let product_variants_stock = parseInt($(this).parents(".product_variants_indi").eq(0).find(".product_variants_stock").html());
    let product_variants_title = $(this).parents(".product_variants_indi").eq(0).find(".product_variants_title").html();
    let product_variants_variant = $(this).parents(".product_variants_indi").eq(0).find(".product_variants_variant").html();
    $(".product_variants_indi").css("border","1px solid gray");
    $(".product_variants_indi_"+product_variants_radio).css("border","4px solid #7ec87e");
    $(".available_stock").val(product_variants_stock);
    $(".quantity-input").val(1);
    $(".product_variant_status").val(1);
    $(".add_to_cart_quick_pre").addClass("add_to_cart_quick");
    $(".add_to_cart_quick").removeClass("add_to_cart_quick_pre");
    $(".add_to_cart_quick").attr("p-variant-title",product_variants_title);
    $(".add_to_cart_quick").attr("p-variant-type",product_variants_variant);
});

$(".quantity_btn_minus").on("click",()=>{
    if ($(".product_variant_status").val() == 0) { 
        $(".product_stock_message").css("display","block");
        $(".product_stock_message").html("Please select a Product variant");
        setTimeout(()=>{
            $(".product_stock_message").css("display","none");
            $(".product_stock_message").html("");
        },2000);
    } else {
        let current_quantity = parseInt($(".quantity-input").val());
        if(current_quantity <= 1) {
            $(".quantity-input").val('1');
            $(".product_stock_message").css("display","block");
            $(".product_stock_message").html("Minimum one quanity is needed");
            setTimeout(()=>{
                $(".product_stock_message").css("display","none");
                $(".product_stock_message").html("");
            },2000);
        } else {
            $(".quantity-input").val(current_quantity-1);
            $(".add_to_cart_quick").attr("p-quantity",current_quantity-1);
        }
    }
});
$(".quantity_btn_add").on("click",()=>{
    if ($(".product_variant_status").val() == 0) { 
        $(".product_stock_message").css("display","block");
        $(".product_stock_message").html("Please select a Product variant");
        setTimeout(()=>{
            $(".product_stock_message").css("display","none");
            $(".product_stock_message").html("");
        },2000);
    } else {
        let available_stock = parseInt($(".available_stock").val());
        let current_quantity = parseInt($(".quantity-input").val());
        if(current_quantity >= available_stock) {
            $(".quantity-input").val(available_stock);
            $(".product_stock_message").css("display","block");
            $(".product_stock_message").html("Max quantity reached");
            setTimeout(()=>{
                $(".product_stock_message").css("display","none");
                $(".product_stock_message").html("");
            },2000);
        } else {
            $(".quantity-input").val(current_quantity+1);
            $(".add_to_cart_quick").attr("p-quantity",current_quantity+1);
        }
    }
});

$(document).on("click",".add_to_cart_quick_pre",()=>{
    $(".product_stock_message").css("display","block");
    $(".product_stock_message").html("Please select a Product variant");
    setTimeout(()=>{
        $(".product_stock_message").css("display","none");
        $(".product_stock_message").html("");
    },2000);
})

//Wishlist page ------------------------------------------------------->

$(document).on("click",".remove_from_wishlist",function(){
    let wishlist_id = $(this).attr("wishlist-id");
    $.post('backend/remove_from_wishlist.php',{
        wishlist_id : wishlist_id
    },()=>{
        $(".wishlist-item-"+wishlist_id).remove();
    })
});

$(document).on("click",".move_to_cart",function(){
    let wishlist_id = $(this).attr("wishlist-id");
    let p_id = $(this).attr("p-id");
    let u_id = $(this).attr("u-id");
    let c_id = $(this).attr("c-id");
    let sub_c_id = $(this).attr("sub-c-id");
    let p_variant_title = $(this).attr("p-variant-title");
    let p_variant_type = $(this).attr("p-variant-type");
    let p_title = $(this).attr("p-title");
    let p_image = $(this).attr("p-image");
    let p_price = parseInt($(this).attr("p-price"));
    let p_quantity = 1;
    $.post('backend/add_to_cart_quick.php',{
        p_id : p_id,
        u_id : u_id,
        c_id : c_id,
        sub_c_id : sub_c_id,
        p_variant_title : p_variant_title,
        p_variant_type : p_variant_type,
        p_title : p_title,
        p_image : p_image,
        p_quantity : p_quantity
    },(result)=>{
        var header_cart_count = parseInt($(".header_cart_count").html());
        var total_cart_product_price = parseInt($(".total_cart_product_price").html());
        $(".header_cart_count").html(header_cart_count+1);
        $(".total_cart_product_price").html(total_cart_product_price+(p_price*p_quantity));
        $(".header_cart_list").append(`<div class="cart-item-${result}">
                                            <div class="cart-img">
                                                <a target="_blank" href="product?title=${p_title}/${p_id}">
                                                    <img onerror="this.src='admin/assets/images/product.png'" src="images-main/products/${p_image}" alt="" style="width:100px;">
                                                </a>
                                            </div>
                                            <div class="cart-info">
                                                <div class="pro-item">
                                                    <span class="quantity-formated">${p_quantity}x</span>
                                                    <a class="pro-name" target="_blank" href="product?title=${p_title}/${p_id}" title="${p_title}">${p_title}</a>
                                                </div>
                                                <div class="pro-atributes">
                                                    <a target="_blank" href="product?title=${p_title}/${p_id}" title="${p_title}">S, Beige</a>
                                                </div>
                                                <div class="pro-price">
                                                    <span>$${p_price}</span>
                                                </div>
                                                <div class="remove-link">
                                                    <a class="cart_remove" cart-id="${result}" item-value="${p_price}" item-quantity="${p_quantity}" title="Remove this product from my cart" style="cursor:pointer;"></a>
                                                </div>
                                            </div><br/>
                                        </div>`);

        $.post('backend/remove_from_wishlist.php',{
            wishlist_id : wishlist_id
        },()=>{
            $(".wishlist-item-"+wishlist_id).remove();
        })
    });
});