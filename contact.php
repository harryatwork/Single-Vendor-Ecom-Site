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
                    <li><a href="shop">Contact</a></li>
                    <li class="active"><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>


    <!--Google Map Area Start-->
    <div class="google-map-area">
        <img src="images-main/temp/map.png" alt="" />
    </div>
    <!--Google Map Area Start-->
    <!--Contact Area Start-->
    <div class="contact-area">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-md-12 col-lg-6">
                    <div class="contact-form-wrap">
                        <h2 class="contact-title">TELL US YOUR FEEDBACK</h2>
                        <form id="contact-form" action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="con_name" placeholder="First Name*" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="con_name" placeholder="Last Name*" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="con_email" placeholder="Email*" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="con_subject" placeholder="Subject*" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form-style">
                                        <textarea name="con_message"
                                            placeholder="Type your message here.."></textarea>
                                        <button class="form-button" type="submit"><span>Send Email</span></button>
                                    </div>
                                </div>
                            </div>
                            <p class="form-messege mt-3"></p>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="raavin-address">
                        <h2 class="contact-title">CONTACT US</h2>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                            Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit
                            litterarum formas human.</p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                            <li><i class="fa fa-phone"></i> +(1234) 567 890</li>
                            <li><i class="fa fa-envelope-o"></i> contact@solepurpose.com</li>
                        </ul>
                        <div class="working-time">
                            <h3><strong>Working hours</strong></h3>
                            <p><strong>Monday – Saturday</strong>: &nbsp;08AM – 22PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Area End-->



<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

</body>

</html>
