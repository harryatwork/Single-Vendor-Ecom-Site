<?php include("head.php"); ?>

<style>
.header-sticky {
    background-color: rgba(0, 0, 0, 0.7) !important;
    box-shadow: 0 8px 6px -6px rgb(0 0 0 / 40%) !important;
}
.page-banner {
    margin-top:10%;
}

.object {
  animation: MoveUpDown 5s linear infinite;
  position: absolute;
  left: 10%;
  bottom: 0;
}

@keyframes MoveUpDown {
  0%, 100% {
    bottom: 0;
  }
  50% {
    bottom: 50px;
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
                    <li class="active">Sign Up</li>
                </ul>
            </div>
        </div>
    </div>



    <!--Login Register Area Strat-->
    <div class="login-register-area pt-80 pb-95">
        <div class="container">
            <div class="row">
                <!--Login Form Start-->
                <div class="col-md-6 col-sm-6">
                    <div class="customer-login-register" style="padding:36px;position:relative;height: 350px;">
                        <img class="img-slide object" src="images/slider/slider-icon-1.png" alt="" style="width:400px;">
                    </div>
                </div>
                <!--Login Form End-->
                <!--Register Form Start-->
                <div class="col-md-6 col-sm-6">
                    <div class="customer-login-register register-pt-0" style="box-shadow: 0px 0px 5px 4px rgb(0 0 0 / 20%);border-radius: 10px;padding: 36px;">
                        <div class="form-register-title">
                            <h2>Sign Up</h2>
                        </div>
                        <div class="register-form">
                            <form>
                                <div class="form-fild">
                                    <label>First Name <span class="required">*</span></label>
                                    <input name="username" class="signin_f_name" value="" type="text">
                                </div>  
                                <div class="form-fild">
                                    <label>Email address <span class="required">*</span></label>
                                    <input name="username" class="signin_email" value="" type="text">
                                </div>
                                <div class="form-fild">
                                    <label>Password <span class="required">*</span></label>
                                    <input name="password" class="signin_password" value="" type="password">
                                </div>
                                <div class="register-submit">
                                    <button type="button" class="form-button signup_btn">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Register Form End-->
            </div> 
        </div>
    </div>
    <!--Login Register Area End-->

<?php include("pop_notifications.php"); ?>

<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

</body>

</html>
