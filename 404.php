<?php get_header(); ?>
<section id="content-wrapper" role="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<article id="post-0" class="post not-found">
					<header class="header">
						<h1 class="entry-title"><?php _e( 'Not Found', 'conure' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'conure' ); ?></p>
						<?php get_search_form(); ?>
					</section>
				</article>
			</div>
		</div>
	</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>