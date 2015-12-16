<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" >
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
  	<?php global $up_options; ?>
</head>

<body <?php body_class(); ?>>

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-6 logo" >
				<a href="<?php echo site_url() ?>">
					<img src="<?php echo custom_logo(); ?>" alt="Image">
				</a>
			</div>
			<div class="col-md-6">
				<div>
					<span><?php if ($up_options->phone_number != ''): echo $up_options->phone_number; endif; ?></span>
				</div>
				<div>	
					<?php get_social_icons(); ?>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
			</div>
		</div>
	</div>
</header>