<?php include("head.php"); ?>

<style>
.header-sticky {
    background-color: rgba(0, 0, 0, 0.7) !important;
    box-shadow: 0 8px 6px -6px rgb(0 0 0 / 40%) !important;
}
.page-banner {
    margin-top:10%;
}

.spinner {
  animation: rotate 2s linear infinite;
  z-index: 2;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -25px 0 0 -25px;
  width: 50px;
  height: 50px;
}
.path {
    stroke: red;
    stroke-linecap: round;
    animation: dash 1.5s ease-in-out infinite;
}

@keyframes rotate {
  100% {
    transform: rotate(360deg);
  }
}

@keyframes dash {
  0% {
    stroke-dasharray: 1, 150;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 90, 150;
    stroke-dashoffset: -35;
  }
  100% {
    stroke-dasharray: 90, 150;
    stroke-dashoffset: -124;
  }
}
</style>

<body>

<?php include("header.php"); ?>


<div class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <ul>
                <li><a href="index">Home</a></li>
                <li class="active"><a >Checkout</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Checkout Area Strat-->
<div class="checkout-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="coupon-accordion">
                    <?php if(isset($_SESSION["login"])) {  

                        $sql_users = "SELECT * FROM users WHERE id = ?";
                        $stmt_users = $conn->prepare($sql_users);
                        $stmt_users->bind_param("i",$u_id);
                        $stmt_users->execute();
                        $result_users = $stmt_users->get_result();
                        while($row_users = $result_users->fetch_assoc()){
                            $user_f_name = $row_users["f_name"];
                            $user_l_name = $row_users["l_name"];
                            $user_address1 = $row_users["address1"];
                            $user_address2 = $row_users["address2"];
                            $user_city = $row_users["city"];
                            $user_state = $row_users["state"];
                            $user_country = $row_users["country"];
                            $user_mobile = $row_users["mobile"];
                            $user_pincode = $row_users["pincode"];
                            $user_email = $row_users["email"];
                        }
                    } else { 
                        $user_f_name = '';
                        $user_l_name = '';
                        $user_address1 = '';
                        $user_address2 = '';
                        $user_city = '';
                        $user_state = '';
                        $user_country = '';
                        $user_mobile = '';
                        $user_pincode = '';
                        $user_email = '';
                     } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <form action="#">
                    <div class="checkbox-form">
                        <h3>Shipping Details</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="country-select clearfix">
                                    <label>Country <span class="required">*</span></label>
                                    <select class="nice-select wide">
                                        <option value="Canada" data-display="Canada">Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>First Name <span class="required">*</span></label>
                                    <input placeholder="" class="address_f_name" value="<?= $user_f_name; ?>" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input placeholder="" class="address_l_name" value="<?= $user_l_name; ?>" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input placeholder="Street" class="address_address1" value="<?= $user_address1; ?>" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <input placeholder="Apartment, suite, unit etc. (optional)" value="<?= $user_address2; ?>" class="address_address2" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" class="address_city" value="<?= $user_city; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>
                                    <input placeholder="" class="address_state" value="<?= $user_state; ?>" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input placeholder="" class="address_pincode" value="<?= $user_pincode; ?>" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="" class="address_email" <?php if(isset($_SESSION["login"])) { ?> readonly <?php } else { } ?> type="email" value="<?= $user_email; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone  <span class="required">*</span></label>
                                    <input type="text" class="address_mobile" value="<?= $user_mobile; ?>" />
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $sql_cart = "SELECT * FROM cart WHERE u_id = ?";
                                $stmt_cart = $conn->prepare($sql_cart);
                                $stmt_cart->bind_param("s",$u_id);
                                $stmt_cart->execute();
                                $result_cart = $stmt_cart->get_result();

                                $total_cart_product_price = 0;
                                while($row_cart = $result_cart->fetch_assoc()) {
                                    $cart_p_id = $row_cart['p_id'];

                                    $sql_cart_product = "SELECT * FROM products WHERE id = ?";
                                    $stmt_cart_product = $conn->prepare($sql_cart_product);
                                    $stmt_cart_product->bind_param("s",$cart_p_id);
                                    $stmt_cart_product->execute();
                                    $result_cart_product = $stmt_cart_product->get_result();
                                    while($row_cart_product = $result_cart_product->fetch_assoc()) {
                                        $cart_product_discount = $row_cart_product["discount"];
                                        $cart_product_price = $row_cart_product["price"];
                                        if($cart_product_discount == 0) {
                                            $cart_product_price = $cart_product_price;
                                        } else { 
                                            $cart_product_price = round(($cart_product_price - (($cart_product_price)*(($cart_product_discount)/100))),2);
                                        }
                                ?>
                                <tr class="cart_item">
                                    <td class="cart-product-name"> <?= $row_cart_product["name"]; ?><strong class="product-quantity"> × <?= $row_cart['quantity']; ?></strong></td>
                                    <td class="cart-product-total"><span class="amount">$<?= $cart_product_price*$row_cart['quantity']; ?></span></td>  
                                </tr>
                                <?php 
                                    }
                                $total_cart_product_price_indi = $cart_product_price * $row_cart['quantity'];
                                $total_cart_product_price = $total_cart_product_price + $total_cart_product_price_indi;
                                } 
                                ?>
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal</th>
                                    <td><span class="amount">$<?= $total_cart_product_price; ?></span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">$<?= $total_cart_product_price; ?></span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div class="order-button-payment" style="position:relative;">
                                <input type="button" class="place_order" u-id="<?= $u_id; ?>" value="Place Order" />
                                <div class="place_order_spinner" style="display:none;position: absolute;top: 64%;left: 70%;">
                                    <svg class="spinner" viewBox="0 0 50 50">
                                        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                                    </svg>
                                </div>
                                <p class="checkout_alert" style="display:none;text-align: center;padding: 14px;font-size: 16px;color: red;"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Checkout Area End-->

<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

<script>
function empty_field_alert(ofclass,ofcontent){
    $("."+ofclass).css("border","2px solid red");
    $(".checkout_alert").text(ofcontent);
    $(".checkout_alert").fadeIn();
    $(".place_order").prop("disabled",false);
    $(".place_order_spinner").css("display","none");
    $(".place_order").val("Place Order");
    setTimeout(()=>{
        $("."+ofclass).css("border","1px solid #e5e5e5");
        $(".checkout_alert").text('');
        $(".checkout_alert").fadeOut();
    },2000);
}

$(".place_order").on("click",function(){
    $(".place_order").prop("disabled",true);
    $(".place_order_spinner").css("display","block");
    $(".place_order").val("Processing");
    var u_id = $(this).attr("u-id");
    var address_f_name = $(".address_f_name").val();
    var address_l_name = $(".address_l_name").val();
    var address_address1 = $(".address_address1").val();
    var address_address2 = $(".address_address2").val();
    var address_city = $(".address_city").val();
    var address_state = $(".address_state").val();
    var address_pincode = $(".address_pincode").val();
    var address_mobile = $(".address_mobile").val();
    var address_email = $(".address_email").val();

    if(address_f_name == '') {
        empty_field_alert('address_f_name','First Name can\'t be empty');
    } else if(address_l_name == '') {
        empty_field_alert('address_l_name','Last Name can\'t be empty');
    } else if(address_address1 == '') {
        empty_field_alert('address_address1','Address can\'t be empty');
    } else if(address_address2 == '') {
        empty_field_alert('address_address2','Address can\'t be empty');
    } else if(address_city == '') {
        empty_field_alert('address_city','City can\'t be empty');
    } else if(address_state == '') {
        empty_field_alert('address_state','State can\'t be empty');
    } else if(address_pincode == '') {
        empty_field_alert('address_pincode','Pincode can\'t be empty');
    } else if(address_mobile == '') {
        empty_field_alert('address_mobile','Mobile can\'t be empty');
    } else if(address_email == '') {
        empty_field_alert('address_email','Email can\'t be empty');
    } else {

        $.post('backend/order_insert.php',{
            u_id : u_id,
            address_f_name : address_f_name,
            address_l_name : address_l_name,
            address_address1 : address_address1,
            address_address2 : address_address2,
            address_city : address_city,
            address_state : address_state,
            address_pincode : address_pincode,
            address_mobile : address_mobile,
            address_email : address_email
        },(result)=>{
            console.log(result);
            $(".place_order_spinner").css("display","none");
            $(".place_order").val("Order Placed Successfully");
        });

    }
}); 
</script>

</body>

</html>
