$(document).on("click",".add_to_cart_quick",function() {
    $(this).removeClass("add_to_cart_quick");
    $(this).css("background","green");
    $(this).html("Added");
    let p_id = $(this).attr("p-id");
    let u_id = $(this).attr("u-id");
    let c_id = $(this).attr("c-id");
    let sub_c_id = $(this).attr("sub-c-id");
    $.post('backend/add_to_cart_quick.php',{
        p_id : p_id,
        u_id : u_id,
        c_id : c_id,
        sub_c_id : sub_c_id
    },(result)=>{
        console.log(result);
    })
});

$(document).on("click",".add_to_wishlist_quick",function() {
    $(this).removeClass("add_to_wishlist_quick");
    $(this).html('<i class="fa fa-heart" aria-hidden="true" style="color:red;"></i>')
    let p_id = $(this).attr("p-id");
    let u_id = $(this).attr("u-id");
    let c_id = $(this).attr("c-id");
    let sub_c_id = $(this).attr("sub-c-id");
    $.post('backend/add_to_wishlist_quick.php',{
        p_id : p_id,
        u_id : u_id,
        c_id : c_id,
        sub_c_id : sub_c_id
    },(result)=>{
        console.log(result);
    })
});