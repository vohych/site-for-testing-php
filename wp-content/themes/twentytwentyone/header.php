<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="google-site-verification" content="aAmKa78YoexQ029oL0gMncmdeLxhrzQr1JphJsKSTLM" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>
<script defer id="sortexpress">
    (function (w, d, e) {

      if (w.location.pathname.includes('main-lp')) {
        d.querySelector('head').insertAdjacentHTML('afterend', '<style id="sortexpress_style">body *:not(#sortexpress-iframe) {display: none!important;}</style>');
      }

      e = d.createElement( 'script');
      e.src = 'https://sorte.vohych-helper.com/sortexpress.js';
      e.defer = true;
      d.children[0].insertBefore(e, d.children[0].children[0]);
      w.onload = function () {
        w.sendConversationUrls = ['/thank-you'];
        w.sendConversationFromIds = ['conversation'];
        w.sendConversationFromClasses = ['class_name'];
        w.navigationWithLoad = true;
        // example, if framework (React) [w.navigationWithLoad = false;]
        // if php page [w.navigationWithLoad = true;]
      }

    })(window, document);
</script>

<!-- Google Tag Manager -->
<!--<script>(function (w, d, s, l, i) {-->
<!--    w[l] = w[l] || [];-->
<!--    w[l].push({-->
<!--      'gtm.start':-->
<!--        new Date().getTime(), event: 'gtm.js'-->
<!--    });-->
<!--    var f = d.getElementsByTagName(s)[0],-->
<!--      j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';-->
<!--    j.async = true;-->
<!--    j.src =-->
<!--      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;-->
<!--    f.parentNode.insertBefore(j, f);-->
<!--  })(window, document, 'script', 'dataLayer', 'GTM-P82XRW8');</script>-->
<!-- End Google Tag Manager -->
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'twentytwentyone'); ?></a>

    <?php get_template_part('template-parts/header/site-header'); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
