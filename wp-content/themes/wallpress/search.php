<?php
/**
 * Template Name: Sidebar left + Content
 *
 * @package WallPress
 * @since WallPress 1.0.3
 */

get_header(); ?>

	<?php get_sidebar(); ?>

		<div id="container" class="clearfix">

			<div id="content" class="masonry">

			<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content' ); ?>

				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<div class="navigation">
					<?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'wallpress' ) ); ?>
					<?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'wallpress' ) ); ?>
				</div>
				<a href="#header" class="scroll-top"><?php _e( 'Top', 'wallpress' ); ?></a>
				<?php endif; ?>

			<?php endwhile; else :?>
				
				<h1 class="entry-title"><?php _e( 'Nothing Found', 'wallpress' ); ?></h1>

				<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'wallpress' ); ?></p>	
			
			<?php endif; ?>			

			</div>
			<!-- #content -->
		</div>
		<!-- #container -->

<?php get_footer(); ?>