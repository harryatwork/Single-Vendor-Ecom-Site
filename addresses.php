<?php include("head.php"); ?>

<style>
.header-sticky {
    background-color: rgba(0, 0, 0, 0.7) !important;
    box-shadow: 0 8px 6px -6px rgb(0 0 0 / 40%) !important;
}
.page-banner {
    margin-top:10%;
}

.user_account_menu:hover {
    background: #ffeeb9;
    border-radius: 5px;
    font-weight: 600;
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
                    <div class="woocommerce" style="display: flex;margin-top: 15%;">
                        <nav class="woocommerce-MyAccount-navigation" style="width: 30%;">
                            <ul>
                                <li class="user_account_menu woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders" style="padding: 5%;border-bottom: 1px solid #e4e4e4;font-size: 16px;cursor:pointer;">
                                    <a href="orders">Orders</a>
                                </li>
                                <li class="user_account_menu woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address" style="padding: 5%;border-bottom: 1px solid #e4e4e4;font-size: 16px;cursor:pointer;">
                                    <a href="addresses">Addresses</a>
                                </li>
                                <li class="user_account_menu woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account is-active" style="padding: 5%;border-bottom: 1px solid #e4e4e4;font-size: 16px;cursor:pointer;">
                                    <a href="account_details">Account Details</a>
                                </li>
                                <li class="user_account_menu woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout" style="padding: 5%;border-bottom: 1px solid #e4e4e4;font-size: 16px;cursor:pointer;">
                                    <a href="logout">Logout</a>
                                </li>
                            </ul>
                        </nav>
                        
                    <?php
                        $sql_user = "SELECT * FROM users WHERE id = ?";
                        $stmt_user = $conn->prepare($sql_user);
                        $stmt_user->bind_param("i",$u_id);
                        $stmt_user->execute();
                        $result_user = $stmt_user->get_result();
                        while($row_user = $result_user->fetch_assoc()){
                    ?>

                        <input type="hidden" class="u_id" value="<?= $u_id; ?>" />

                        <div class="woocommerce-MyAccount-content" style="width: 50%;padding-left: 5%;">
                            <div class="woocommerce-EditAccountForm edit-account" >
                                <p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
                                    <label for="account_first_name">Address 1 <span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text account_address_1" name="" id="" value="<?= $row_user["address1"]; ?>">
                                </p>
                                <p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
                                    <label for="account_last_name">Address 2 <span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text account_address_2" name="" id="" value="<?= $row_user["address2"]; ?>">
                                </p>
                                <p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
                                    <label for="account_last_name">Mobile <span class="required">*</span></label>
                                    <input type="number" class="woocommerce-Input woocommerce-Input--text input-text account_mobile" name="" id="" value="<?= $row_user["mobile"]; ?>">
                                </p>
                                <div class="clear"></div>
                                <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                    <label for="account_email">City <span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--email input-text account_city" name="" id="" value="<?= $row_user["city"]; ?>">
                                </p>
                                <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                    <label for="account_email">State <span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--email input-text account_state" name="" id="" value="<?= $row_user["state"]; ?>">
                                </p>
                                <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                    <label for="account_email">Country <span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--email input-text account_country" name="" id="" value="Canada">
                                </p>
                                <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                    <label for="account_email">Pincode <span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--email input-text account_pincode" name="" id="" value="<?= $row_user["pincode"]; ?>">
                                </p>

                                <div class="clear"></div>
                                <p>
                                    <button type="button" class="woocommerce-Button button update_user_address_btn" style="background: #cb9a00;border: none;color: white;padding: 10px 15px;">Update Address</button>
                                </p>
                            </div>

                          
                        </div>

                    <?php } ?>

                    </div>
                </div>
            </article>					
        </div>
	</div>

    
</div>


<?php include("footer.php"); ?>

<?php include("foot.php"); ?>

<?php include("pop_notifications.php"); ?>

</body>

</html>