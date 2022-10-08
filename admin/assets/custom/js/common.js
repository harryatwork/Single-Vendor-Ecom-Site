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
var slider = document.getElementById("discount_slider_input");
var output = document.getElementById("discount_slider_perc");
output.innerHTML = slider.value;
slider.oninput = function() {
  output.innerHTML = this.value;
}
//todo Product Add/Update Slider -------------------------------------------->
