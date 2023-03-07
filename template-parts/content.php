<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Megla Blog
 */
if ( ! is_singular( ) ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<div class="featured-image epcl-flex">
		    <?php if(has_post_thumbnail() ): ?>
			<div class="thumb translate-effect epcl-loader loaded">
				<?php the_post_thumbnail( );?>
			</div>
			<?php endif; ?>
			<div class="entry-header text-center">
				<?php
					the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				?>
				<div class="entry-meta button">
					<?php megla_blog_category(); ?> <i class="fa fa-arrows-h" aria-hidden="true"></i> <?php megla_blog_posted_on(); ?>

				</div><!-- .entry-meta -->
			</div>
		</div>
	</header>

	<div class="entry-content text-center">
		<?php the_excerpt(); ?>  
	</div><!-- .entry-content -->
</article>
<?php else: ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(has_post_thumbnail() ): ?>
		<div class="thumb translate-effect epcl-loader loaded">
			<?php the_post_thumbnail( );?>
		</div>
	<?php endif; ?>
	<div class="single-content text-center">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );

			endif; 

			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php megla_blog_category(); ?> <i class="fa fa-arrows-h" aria-hidden="true"></i> <?php megla_blog_posted_on(); ?>
				</div>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php

			if(is_single( )){
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'megla-blog' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
			}
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'megla-blog' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
		<?php if ( is_singular() ) : ?>
			<footer class="entry-footer">
				<?php megla_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>