<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Newsblock
 */

get_header(); ?>

<div id="primary" class="cs-content-area">

	<?php do_action( 'csco_main_before' ); ?>

	<?php
	if ( is_home() ) {
		?>
		<h3><?php esc_html_e( 'Latest News', 'newsblock' ); ?></h3>
		<?php
	}

	if ( have_posts() ) {
		// Set options.
		$options = csco_get_archive_options();

		// Location.
		$main_classes = ' cs-posts-area__' . $options['location'];

		// Layout.
		$main_classes .= ' cs-posts-area__' . $options['layout'];

		// Image Width.
		if ( $options['image_width'] && ( 'list' === $options['layout'] ) ) {
			$main_classes .= ' cs-posts-area__image-width-' . $options['image_width'];
		}

		// Borders Between.
		if ( $options['borders'] ) {
			$main_classes .= ' cs-display-borders-between-posts';
		}

		// Fullwith or withsidebar.
		if ( 'disabled' !== csco_get_page_sidebar() ) {
			$main_classes .= ' cs-posts-area__withsidebar';
		} else {
			$main_classes .= ' cs-posts-area__fullwidth';
		}
		?>
		<div class="cs-posts-area cs-posts-area-posts">
			<div class="cs-posts-area__outer">
				<div class="cs-posts-area__main <?php echo esc_attr( $main_classes ); ?>">
					<?php
					// Start the Loop.
					while ( have_posts() ) {
						the_post();

						set_query_var( 'options', $options );

						if ( 'full' === $options['layout'] ) {
							get_template_part( 'template-parts/archive/content-full' );
						} else {
							get_template_part( 'template-parts/archive/content' );
						}
					}
					?>
				</div>
			</div>

			<?php
			/* Posts Pagination */
			if ( 'standard' === get_theme_mod( csco_get_archive_option( 'pagination_type' ), 'load-more' ) ) {
				?>
				<div class="cs-posts-area__pagination">
					<?php
						the_posts_pagination(
							array(
								'prev_text' => esc_html__( 'Previous', 'newsblock' ),
								'next_text' => esc_html__( 'Next', 'newsblock' ),
							)
						);
					?>
				</div>
				<?php
			}
			?>
		</div>
		<?php
	} else {
		?>
		<div class="entry-content cs-content-not-found">
			<p><?php esc_html_e( 'It seems we cannot find what you are looking for. Perhaps searching can help.', 'newsblock' ); ?></p>

			<?php get_search_form(); ?>
		</div>
		<?php
	}
	?>

	<?php do_action( 'csco_main_after' ); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
