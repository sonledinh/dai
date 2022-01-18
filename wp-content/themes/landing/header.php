<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package landing
 */
$current_language = qtranxf_getLanguage();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 
<?php wp_body_open(); ?>

<header>
    <div class="header-top">
        <div class="container">
            <div class="h-menu">
                <div class="menu-pc">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            )
                        );
                    ?>
                </div>
                <div class="h-regis btn-main"><a href="javascript:void(0)">ĐĂNG KÝ HỒ SƠ</a></div>
                <div class="translate">
                    <?php echo qtranxf_generateLanguageSelectCode('image'); ?>
                    <!-- <ul> -->
                        <!-- <li><a href="javascript:void(0)"><img src="<?php echo __BASE_URL__ ?>/images/trans-1.png" class="img-fluid" alt=""></a></li> -->
                        <!-- <li><a href="javascript:void(0)"><img src="<?php echo __BASE_URL__ ?>/images/trans-2.png" class="img-fluid" alt=""></a></li> -->
                        
                    <!-- </ul> -->
                </div>
            </div>
        </div>
    </div>
</header>