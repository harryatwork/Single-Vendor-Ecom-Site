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


<div class="main-container full-width">
	<div class="title-breadcrumb">
		<div class="container">
			<div class="title-breadcrumb-inner">
				<header class="entry-header">
					<h1 class="entry-title">My Account</h1>
				</header>
				<div class="breadcrumbs">
                    <a href="index">Home</a>
                    <span class="separator">/</span>
                    <span> My Account</span>
                </div>			
            </div>
		</div>
	</div>
	<div class="page-content">
		<div class="container">
            <article id="post-22" class="post-22 page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="woocommerce">
                        <nav class="woocommerce-MyAccount-navigation">
                            <ul>
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                    <a href="orders">Orders</a>
                                </li>
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                    <a href="addresses">Addresses</a>
                                </li>
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account is-active">
                                    <a href="account_details">Account Details</a>
                                </li>
                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                    <a href="logout">Logout</a>
                                </li>
                            </ul>
                        </nav>
                        
                        <div class="woocommerce-MyAccount-content">
                            <div class="woocommerce-EditAccountForm edit-account" >
                                <p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
                                    <label for="account_first_name">First name <span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" value="">
                                </p>
                                <p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
                                    <label for="account_last_name">Last name <span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="">
                                </p>
                                <div class="clear"></div>
                                <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                    <label for="account_email">Email address <span class="required">*</span></label>
                                    <input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" value="test@gmail.com">
                                </p>
                                <div class="clear"></div>
                                <p>
                                    <button type="button" class="woocommerce-Button button" >Update Details</button>
                                </p>
                                <fieldset>
                                    <legend>Password Change</legend>
                                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="password_current">Current Password (leave blank to leave unchanged)</label>
                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current">
                                    </p>
                                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="password_1">New Password (leave blank to leave unchanged)</label>
                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1">
                                    </p>
                                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="password_2">Confirm New Password</label>
                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2">
                                    </p>
                                </fieldset>
                                <div class="clear"></div>
                                <p>
                                    <button type="button" class="woocommerce-Button button" >Update Password</button>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </article>					
        </div>
	</div>

    
</div>


<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

</body>

</html>