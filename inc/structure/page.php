<?php

if ( ! function_exists( 'aemi_page_header' ) ) {
	function aemi_page_header()
	{
		if ( !is_front_page() ) {
			?><header class="post-header">
				<?php aemi_featured_image(); ?>
				<div class="post-info">
					<?php the_title( '<h2 class="post-title">', '</h2>' ); ?>
					<?php aemi_meta_header(); ?>
				</div>
			</header><?php
		}
	}
}

if ( ! function_exists( 'aemi_page_content' ) )
{
	function aemi_page_content()
	{
		?><main class="post-content">
			<?php the_content(); ?>
			<?php aemi_page_navigation(); ?>
		</main><?php
	}
}
