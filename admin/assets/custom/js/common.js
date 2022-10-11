//* Sign In Page ---------------------------------------------->
$(".signin_btn").on("click",()=>{
    $(".signin_btn_idle").css("display","none");
    $(".signin_btn_running").css("display","block");
    let email = $(".signin_email").val();
    let password = $(".signin_password").val();
    if(email == '' || password == '') {
        $(".signin_btn_idle").css("display","block");
        $(".signin_btn_running").css("display","none");

        $(".pop_notify").fadeIn().css({"background":"red"}).animate({"bottom":"2%"}).html("All fields need to be filled");
        setTimeout(()=>{
            $(".pop_notify").animate({"bottom":"-20%"}).fadeOut().html('');
        },3000);

    } else {
        $.post('backend/logincheck.php',
        {
            email : email,
            password : password
        }, function(result){
            if(result == 'success') {
                window.location.replace('dashboard');
            } else {
                $(".signin_btn_idle").css("display","block");
                $(".signin_btn_running").css("display","none");

                $(".pop_notify").fadeIn().css({"background":"red"}).animate({"bottom":"2%"}).html("Credentials seems to be incorrect");
                setTimeout(()=>{
                    $(".pop_notify").animate({"bottom":"-20%"}).fadeOut().html('');
                },3000);
            }
        });
    }
    
});
//Todo Sign In Page ---------------------------------------------->


//* Product Add/Update Slider ---------------------------------------------->
$("#discount_slider_input").on("change",function() {
    let discount_value = $(this).val();
    $("#discount_slider_perc").html(discount_value);
});
$(".discount_option").on("click",()=>{
    if($('.no_discount').is(':checked')) {
        $(".discount_slider").css("display","none");
        $("#discount_slider_perc").html('0');
    } 
    if($('.yes_discount').is(':checked')) {
        $(".discount_slider").css("display","block");
    }
});
//todo Product Add/Update Slider -------------------------------------------->

//* Menu Count Load ------------------------------------------------->
$(document).ready(function() {
    recieved_orders_count("order_status='Ordered' AND delivery_status='Pending'",'','id');
    running_orders_count("order_status!='Ordered' AND order_status != 'Cancelled' AND order_status != 'Completed' AND delivery_status!='Delivered' AND delivery_status!='Pending' AND delivery_status!='Cancelled'",'','id');
    cancelled_orders_count("order_status='Cancelled'",'','id');
    completed_orders_count("order_status='Completed'",'','id');
    active_users_count("status='Active'",'','id');
    de_active_user_count("status!='Active'",'','id');
    active_products_count("status='Active'",'','id');
    de_active_products_count("status!='Active'",'','id');
    highlighted_products_count("highlighted='1'",'','id');
    categories_count('1=1','','id');
    sub_categories_count('1=1','','id');
    approved_reviews_count("status='Approved'",'','id');
    pending_reviews_count("status='Pending'",'','id');
    rejected_reviews_count("status='Rejected'",'','id');
});
function recieved_orders_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'orders'
	}, function(result) {
		result = JSON.parse(result);
		$(".recieved_orders_count").html('Recieved ('+result.length+')');
	});
}
function running_orders_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'orders'
	}, function(result) {
		result = JSON.parse(result);
		$(".running_orders_count").html('Running ('+result.length+')');
	});
}
function cancelled_orders_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'orders'
	}, function(result) {
		result = JSON.parse(result);
		$(".cancelled_orders_count").html('Cancelled ('+result.length+')');
	});
}
function completed_orders_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'orders'
	}, function(result) {
		result = JSON.parse(result);
		$(".completed_orders_count").html('Completed ('+result.length+')');
	});
}

function active_users_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'users'
	}, function(result) {
		result = JSON.parse(result);
		$(".active_users_count").html('Active ('+result.length+')');
	});
}
function de_active_user_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'users'
	}, function(result) {
		result = JSON.parse(result);
		$(".de_active_user_count").html('De-Active ('+result.length+')');
	});
}

function active_products_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'products'
	}, function(result) {
		result = JSON.parse(result);
		$(".active_products_count").html('Active ('+result.length+')');
	});
}
function de_active_products_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'products'
	}, function(result) {
		result = JSON.parse(result);
		$(".de_active_products_count").html('De-Active ('+result.length+')');
	});
}
function highlighted_products_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'products'
	}, function(result) {
		result = JSON.parse(result);
		$(".highlighted_products_count").html('Highlighted ('+result.length+')');
	});
}

function categories_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'categories'
	}, function(result) {
		result = JSON.parse(result);
		$(".categories_count").html('Categories ('+result.length+')');
	});
}
function sub_categories_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'subcategories'
	}, function(result) {
		result = JSON.parse(result);
		$(".sub_categories_count").html('Sub Categories ('+result.length+')');
	});
}

function approved_reviews_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'reviews'
	}, function(result) {
		result = JSON.parse(result);
		$(".approved_reviews_count").html('Approved ('+result.length+')');
	});
}
function pending_reviews_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'reviews'
	}, function(result) {
		result = JSON.parse(result);
		$(".pending_reviews_count").html('Pending ('+result.length+')');
	});
}
function rejected_reviews_count(condition,limit,return_values) {
	$.post('backend/functions.php', {
		condition : condition,
		limit : limit,
		return_values : return_values,
		trigger : 'reviews'
	}, function(result) {
		result = JSON.parse(result);
		$(".rejected_reviews_count").html('Rejected ('+result.length+')');
	});
}
//Todo Menu Count Load ------------------------------------------------->