<?php

/**---------------------------------------------------------------------------------------------------------------
 *
 * Login
 *
 * ---------------------------------------------------------------------------------------------------------------*/

/**---------------------------------------------------------------------------------------------------------------
 * Change the expiration of the login cookie to much longer than 2 weeks
 * ---------------------------------------------------------------------------------------------------------------*/
add_filter('auth_cookie_expiration', 'poptheme_wassup_auth_cookie_expiration');
function poptheme_wassup_auth_cookie_expiration($time) {

    // 20 years (similar to GitHub)
    return 20 * 365 * DAY_IN_SECONDS;
}

/**---------------------------------------------------------------------------------------------------------------
 * Change the Wordpress logo to MESYM logo in wp-login.php
 * ---------------------------------------------------------------------------------------------------------------*/
add_action( 'login_enqueue_scripts', 'gd_login_logo' );
function gd_login_logo() { 
	
	$logo = gd_logo('large');
	$logo = apply_filters('gd_login_logo', $logo);
	?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo $logo[0] ?>);
            width: <?php echo $logo[1] ?>px;
            height: <?php echo $logo[2] ?>px;
            background-size: <?php echo $logo[1] ?>px <?php echo $logo[2] ?>px;
            *margin-left: 10px;
        }
    </style>
<?php }
add_filter( 'login_headerurl', 'gd_login_logo_url' );
function gd_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headertitle', 'gd_login_logo_url_title' );
function gd_login_logo_url_title() {
    return get_bloginfo( 'name' );
}