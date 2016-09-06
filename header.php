<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-topbar navbar-dark navbar-fixed-top">
  <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
      <div class='site-logo pull-left'>
          <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
      </div>
  <?php else : ?>
      <hgroup>
          <div class='site-title pull-left'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></div>
          <div class='site-description pull-left'><?php bloginfo( 'description' ); ?></div>
      </hgroup>
  <?php endif; ?>

  <button class="pull-right navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapsingNavbar">&#9776;</button>

  <div class="xxs-pull-none pull-right xxs-clearfix collapse navbar-toggleable-xs" id="collapsingNavbar">
    <?php
        wp_nav_menu( array(
            'theme_location'		=> 'navbar',
            'menu_class'				=> 'nav navbar-nav', 
            'echo'							=> true,
            'fallback_cb'				=> '__return_false',
          	'items_wrap'				=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'							=> 1, 
        ) );
    ?>
      <?php //get_template_part('navbar-search'); ?>
  </div>
</nav>
  
<?php /*
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar, 
then you probably don't require a site title. Alternatively you can use the example below. 
See also the accompanying CSS example in theme/css/b4st.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
*/ ?>
