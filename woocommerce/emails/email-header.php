<?php
/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 7.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
	</head>
	<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
		<table border="0" width="100%" cellspacing="0" cellpadding="20" bgcolor="#f7f6f1">
    		<tbody>
			    <tr>
			    <td align="center">
				    <table class="responsive-table" cellspacing="0" cellpadding="0" style="max-width:800px">
					    <tbody>
					    		<tr>
								    <td style="padding: 20px" align="center"><a href="https://store.tailormade.uk/"><img style="width:300px;height:65px;" src="https://store.tailormade.uk/wp-content/uploads/tailor-made-logo.svg" alt="" width="300" height="65" /></a></td>
								 </tr>
								 <tr>
								    <td style="padding: 60px 50px;border: 1px solid #ececec" align="center" bgcolor="#ffffff">
									    <table border="0" width="100%" cellspacing="0" cellpadding="0">
									    <tbody>
									    <tr>
										    <td class="padding-copy" style="font-size: 32px;font-family: Helvetica, Arial, sans-serif;color: #333333" align="center">
												<p style="font-size: 16px";><?php echo $email_subheading; ?></p>
				    							<?php echo esc_html( $email_heading ); ?>
				    						</td>
			    						</tr>
			    						<tr>
			    							<td class="padding-copy" style="padding: 20px 0 40px 0;font-size: 16px;line-height: 25px;font-family: Helvetica, Arial, sans-serif;color: #666666" align="left">