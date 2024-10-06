<?php
/**
 * Template Tags
 *
 * Functions that are called directly from template parts or within actions.
 *
 * @package Newsblock
 */

if ( ! function_exists( 'csco_header_nav_menu' ) ) {
	class CSCO_NAV_Walker extends Walker_Nav_Menu {
		/**
		 * Starts the list before the elements are added.
		 *
		 * @since 3.0.0
		 *
		 * @see Walker::start_lvl()
		 *
		 * @param string   $output Used to append additional content (passed by reference).
		 * @param int      $depth  Depth of menu item. Used for padding.
		 * @param stdClass $args   An object of wp_nav_menu() arguments.
		 */
		public function start_lvl( &$output, $depth = 0, $args = null ) {
			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
				$t = '';
				$n = '';
			} else {
				$t = "\t";
				$n = "\n";
			}
			$indent = str_repeat( $t, $depth );

			$classes = array( 'sub-menu' );

			$scheme = csco_color_scheme(
				get_theme_mod( 'color_submenu_background', '#FFFFFF' ),
				get_theme_mod( 'color_submenu_background_dark', '#1c1c1c' )
			);

			/**
			 * Filters the CSS class(es) applied to a menu list element.
			 *
			 * @since 4.8.0
			 *
			 * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
			 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */
			$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			$output .= "{$n}{$indent}<ul$class_names {$scheme}>{$n}";
		}
	}

	/**
	 * Header Nav Menu
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_nav_menu( $settings = array() ) {
		if ( ! get_theme_mod( 'header_navigation_menu', true ) ) {
			return;
		}

		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu(
				array(
					'menu_class'      => 'cs-header__nav-inner',
					'theme_location'  => 'primary',
					'container'       => 'nav',
					'container_class' => 'cs-header__nav',
					'walker'          => new CSCO_NAV_Walker(),
				)
			);
		}
	}
}

if ( ! function_exists( 'csco_header_logo' ) ) {
	/**
	 * Header Logo
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_logo( $settings = array() ) {

		$logo_default_name = 'logo';
		$logo_dark_name    = 'logo_dark';
		$logo_class        = null;

		$settings = array_merge( array(
			'variant' => null,
		), $settings );

		// For large logo.
		if ( 'large' === $settings['variant'] ) {
			$logo_default_name = 'large_logo';
			$logo_dark_name    = 'large_logo_dark';
			$logo_class        = 'cs-logo-large';
		}

		// Get default logo.
		$logo_id = get_theme_mod( $logo_default_name );

		// Set mode of logo.
		$logo_mode = 'cs-logo-once';

		// Check display mode.
		if ( csco_dark_mode_enabled() && $logo_id ) {
			$logo_mode = 'cs-logo-default';
		}
		?>
		<div class="cs-logo <?php echo esc_attr( 'hide' === $settings['variant'] ? 'cs-logo-hide' : null ); ?>">
			<a class="cs-header__logo <?php echo esc_attr( $logo_mode ); ?> <?php echo esc_attr( $logo_class ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
				if ( $logo_id ) {
					csco_get_retina_image( $logo_id, array( 'alt' => get_bloginfo( 'name' ) ) );
				} else {
					bloginfo( 'name' );
				}
				?>
			</a>

			<?php
			if ( 'cs-logo-default' === $logo_mode ) {

				$logo_dark_id = get_theme_mod( $logo_dark_name ) ? get_theme_mod( $logo_dark_name ) : $logo_id;

				if ( $logo_dark_id ) {
					?>
						<a class="cs-header__logo cs-logo-dark <?php echo esc_attr( $logo_class ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php csco_get_retina_image( $logo_dark_id, array( 'alt' => get_bloginfo( 'name' ) ) ); ?>
						</a>
					<?php
				}
			}
			?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_header_offcanvas_toggle' ) ) {
	/**
	 * Header Offcanvas Toggle
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_offcanvas_toggle( $settings = array() ) {

		if ( csco_offcanvas_exists() ) {

			$class = null;

			if ( ! get_theme_mod( 'header_offcanvas', true ) ) {
				$class = ' cs-d-lg-none';
			}

			if ( ! is_active_sidebar( 'sidebar-offcanvas' ) ) {
				$class = ' cs-d-lg-none';
			}
			?>
				<span class="cs-header__offcanvas-toggle <?php echo esc_attr( $class ); ?>" role="button">
					<i class="cs-icon cs-icon-menu"></i>
				</span>
			<?php
		}
	}
}

if ( ! function_exists( 'csco_header_search_toggle' ) ) {
	/**
	 * Header Search Toggle
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_search_toggle( $settings = array() ) {
		if ( ! get_theme_mod( 'header_search_button', true ) ) {
			return;
		}
		?>
		<span class="cs-header__search-toggle" role="button">
			<i class="cs-icon cs-icon-search"></i>
		</span>
		<?php
	}
}

if ( ! function_exists( 'csco_header_scheme_toggle' ) ) {
	/**
	 * Header Scheme Toggle
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_scheme_toggle( $settings = array() ) {
		if ( ! csco_dark_mode_enabled() ) {
			return;
		}
		?>
			<span role="button" class="cs-header__scheme-toggle cs-site-scheme-toggle">
				<i class="cs-header__scheme-toggle-icon cs-icon cs-icon-sun"></i>
				<span class="cs-header__scheme-toggle-element"></span>
				<i class="cs-header__scheme-toggle-icon cs-icon cs-icon-moon"></i>
			</span>
		<?php
	}
}

if ( ! function_exists( 'csco_header_scheme_toggle_mobile' ) ) {
	/**
	 * Header Scheme Toggle Mobile
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_scheme_toggle_mobile( $settings = array() ) {
		if ( ! csco_dark_mode_enabled() ) {
			return;
		}
		?>
		<span role="button" class="cs-header__scheme-toggle cs-header__scheme-toggle-mobile cs-site-scheme-toggle">
			<i class="cs-header__scheme-toggle-icon cs-icon cs-icon-sun"></i>
			<i class="cs-header__scheme-toggle-icon cs-icon cs-icon-moon"></i>
		</span>
		<?php
	}
}

if ( ! function_exists( 'csco_header_multi_column_widgets' ) ) {
	/**
	 * Header Multi-Column Widgets
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_multi_column_widgets( $settings = array() ) {

		if ( ! get_theme_mod( 'header_multi_column_display', true ) ) {
			return;
		}

		if ( ! is_active_sidebar( 'sidebar-multicolumn' ) && ! is_active_sidebar( 'sidebar-multicolumn-2' ) && ! is_active_sidebar( 'sidebar-multicolumn-3' ) ) {
			return;
		}

		$scheme = csco_color_scheme(
			get_theme_mod( 'color_submenu_background', '#FFFFFF' ),
			get_theme_mod( 'color_submenu_background_dark', '#1c1c1c' )
		);
		?>
		<div <?php csco_site_submenu_class( array( 'cs-header__multi-column' ) ); ?>>
			<span class="cs-header__multi-column-toggle"><i class="cs-icon cs-icon-more-horizontal"></i>
			</span>
			<div class="cs-header__multi-column-container" <?php echo wp_kses( $scheme, 'post' ); ?>>
				<div class="cs-header__multi-column-row">
					<div class="cs-header__multi-column-col cs-header__widgets-column cs-widget-area">
						<?php dynamic_sidebar( 'sidebar-multicolumn' ); ?>
					</div>
					<div class="cs-header__multi-column-col cs-header__widgets-column cs-widget-area">
						<?php dynamic_sidebar( 'sidebar-multicolumn-2' ); ?>
					</div>
					<div class="cs-header__multi-column-col cs-header__widgets-column cs-widget-area">
						<?php dynamic_sidebar( 'sidebar-multicolumn-3' ); ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_header_single_column_widgets' ) ) {
	/**
	 * Header Single-Column Widgets
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_single_column_widgets( $settings = array() ) {

		if ( ! get_theme_mod( 'header_single_column_display', true ) ) {
			return;
		}

		if ( ! is_active_sidebar( 'sidebar-singlecolumn' ) ) {
			return;
		}

		// Background Image.
		$bg_image_id = get_theme_mod( 'header_single_column_image' );

		$scheme = csco_color_scheme(
			get_theme_mod( 'color_submenu_background', '#FFFFFF' ),
			get_theme_mod( 'color_submenu_background_dark', '#1c1c1c' )
		);
		?>
		<div <?php csco_site_submenu_class( array( 'cs-header__single-column' ) ); ?>>
			<span class="cs-header__single-column-label"><?php echo esc_html( get_theme_mod( 'header_single_column_title', esc_html__( 'Follow', 'newsblock' ) ) ); ?></span>
			<div class="cs-header__widgets" <?php echo wp_kses( $scheme, 'post' ); ?>>
				<?php if ( $bg_image_id ) { ?>
					<figure class="cs-header__widgets-img">
						<?php
							echo wp_get_attachment_image( $bg_image_id, 'large', array(
								'class' => 'pk-lazyload-disabled',
							) );
						?>
					</figure>
				<?php } ?>
				<div class="cs-header__widgets-content cs-header__widgets-column cs-widget-area">
					<?php dynamic_sidebar( 'sidebar-singlecolumn' ); ?>
				</div>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_header_button' ) ) {
	/**
	 * Header Button
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_button( $settings = array() ) {
		$button = get_theme_mod( 'header_button_label', '<i class="cs-icon cs-icon-mail"></i>' . esc_html__( 'Newsletter', 'newsblock' ) );
		$link   = get_theme_mod( 'header_button_link' );

		if ( $button && $link ) {
			?>
			<a href="<?php echo esc_url( $link ); ?>" class="cs-header__button" target="_blank">
				<?php echo wp_kses( $button, 'post' ); ?>
			</a>
			<?php
		}
	}
}

if ( ! function_exists( 'csco_header_social_links' ) ) {
	/**
	 * Header Social Links
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_header_social_links( $settings = array() ) {

		if ( ! get_theme_mod( 'header_social_links', false ) ) {
			return;
		}

		if ( ! csco_powerkit_module_enabled( 'social_links' ) ) {
			return;
		}

		$scheme  = get_theme_mod( 'header_social_links_scheme', 'default' );
		$maximum = get_theme_mod( 'header_social_links_maximum', 3 );
		$counts  = get_theme_mod( 'header_social_links_counts', true );
		?>
		<div class="cs-navbar-social-links">
			<?php powerkit_social_links( false, false, $counts, 'nav', $scheme, 'mixed', $maximum ); ?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_footer_logo' ) ) {
	/**
	 * Footer Logo
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_footer_logo( $settings = array() ) {
		$logo_id = get_theme_mod( 'footer_logo' );

		$logo_mode = 'cs-logo-once';

		if ( csco_dark_mode_enabled() && $logo_id ) {
			$logo_mode = 'cs-logo-default';
		}
		?>
		<div class="cs-logo">
			<a class="cs-footer__logo <?php echo esc_attr( $logo_mode ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
				if ( $logo_id ) {
					csco_get_retina_image( $logo_id, array( 'alt' => get_bloginfo( 'name' ) ) );
				} else {
					bloginfo( 'name' );
				}
				?>
			</a>

			<?php
			if ( 'cs-logo-default' === $logo_mode ) {

				$logo_dark_id = get_theme_mod( 'footer_logo_dark' ) ? get_theme_mod( 'footer_logo_dark' ) : $logo_id;

				if ( $logo_dark_id ) {
					?>
						<a class="cs-footer__logo cs-logo-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php csco_get_retina_image( $logo_dark_id, array( 'alt' => get_bloginfo( 'name' ) ) ); ?>
						</a>
					<?php
				}
			}
			?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_footer_description' ) ) {
	/**
	 * Footer Description
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_footer_description( $settings = array() ) {
		/* translators: %s: Author name. */
		$footer_text = get_theme_mod( 'footer_text', sprintf( esc_html__( 'Designed & Developed by %s', 'newsblock' ), '<a href="' . esc_url( csco_get_theme_data( 'AuthorURI' ) ) . '">Code Supply Co.</a>' ) );
		if ( $footer_text ) {
			?>
			<div class="cs-footer__desc">
				<?php echo do_shortcode( $footer_text ); ?>
			</div>
			<?php
		}
	}
}

if ( ! function_exists( 'csco_footer_nav_menu' ) ) {
	/**
	 * Footer Nav Menu
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_footer_nav_menu( $settings = array() ) {

		$settings = array_merge( array(
			'menu_class' => null,
		), $settings );

		if ( has_nav_menu( 'footer' ) ) {
			?>
			<div class="footer-nav-menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'footer',
						'container_class' => '',
						'menu_class'      => sprintf( 'cs-footer__nav %s', $settings['menu_class'] ),
						'container'       => '',
						'depth'           => 1,
					)
				);
				?>
			</div>
			<?php
		}
	}
}

if ( ! function_exists( 'csco_footer_social_links' ) ) {
	/**
	 * Footer Social Links
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_footer_social_links( $settings = array() ) {

		if ( ! get_theme_mod( 'footer_social_links', false ) ) {
			return;
		}

		if ( ! csco_powerkit_module_enabled( 'social_links' ) ) {
			return;
		}

		$scheme  = get_theme_mod( 'footer_social_links_scheme', 'default' );
		$maximum = get_theme_mod( 'footer_social_links_maximum', 3 );
		$counts  = get_theme_mod( 'footer_social_links_counts', true );
		?>
		<div class="cs-footer-social-links">
			<?php powerkit_social_links( false, false, $counts, 'nav', $scheme, 'mixed', $maximum ); ?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_footer_subscription_form' ) ) {
	/**
	 * Footer Subscription Form
	 *
	 * @param array $settings The advanced settings.
	 */
	function csco_footer_subscription_form( $settings = array() ) {

		if ( ! get_theme_mod( 'footer_subscribe', false ) ) {
			return;
		}

		$subscribe_heading = get_theme_mod( 'footer_subscribe_heading', '' );
		$subscribe_title   = get_theme_mod( 'footer_subscribe_title', esc_html__( 'Sign Up for Our Newsletters', 'newsblock' ) );
		$subscribe_text    = get_theme_mod( 'footer_subscribe_text', esc_html__( 'Get notified of the best deals on our WordPress themes.', 'newsblock' ) );
		$subscribe_name    = get_theme_mod( 'footer_subscribe_name', false );

		do_action( 'csco_post_subscribe_before' );
		?>
			<div class="cs-site-subscribe">
				<div class="cs-container">
					<div class="cs-site-subscribe__item">
						<?php if ( $subscribe_heading ) { ?>
							<div class="cs-site-subscribe__text">
								<span class="cs-subscribe-text"><?php echo wp_kses( $subscribe_heading, 'post' ); ?></span>
								<span class="cs-subscribe-arrow">
									<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/static/images/subscribe-arrow.svg" alt="subscribe">
								</span>
							</div>
						<?php } ?>

						<div class="cs-site-subscribe__form">
							<?php if ( $subscribe_title || $subscribe_text ) { ?>
								<div class="cs-site-subscribe__info">
									<?php if ( $subscribe_title ) { ?>
										<h4 class="cs-site-subscribe__title"><?php echo wp_kses( $subscribe_title, 'post' ); ?></h4>
									<?php } ?>

									<?php if ( $subscribe_text ) { ?>
										<span class="cs-site-subscribe__info-text"><?php echo wp_kses( $subscribe_text, 'post' ); ?></span>
									<?php } ?>
								</div>
							<?php } ?>

							<?php echo do_shortcode( sprintf( '[powerkit_subscription_form display_name="%1$s" %2$s="" text=""]', $subscribe_name, 'title' ) ); ?>
						</div>
					</div>
				</div>
			</div>
		<?php
	}
}

if ( ! function_exists( 'csco_the_post_format_icon' ) ) {
	/**
	 * Post Format Icon
	 *
	 * @param string $content After content.
	 */
	function csco_the_post_format_icon( $content = '' ) {
		$post_format = get_post_format();

		if ( 'gallery' === $post_format ) {
			$attachments = count(
				(array) get_children(
					array(
						'post_parent' => get_the_ID(),
						'post_type'   => 'attachment',
					)
				)
			);

			$content = $attachments ? sprintf( '<span>%s</span>', $attachments ) : '';
		}

		if ( $post_format ) {
			?>
			<span class="cs-entry-format">
				<a class="cs-format-icon cs-format-<?php echo esc_attr( $post_format ); ?>" href="<?php the_permalink(); ?>">
					<?php echo wp_kses( $content, 'post' ); ?>
				</a>
			</span>
			<?php
		}
	}
}

if ( ! function_exists( 'csco_post_subtitle' ) ) {
	/**
	 * Post Subtitle
	 */
	function csco_post_subtitle() {
		if ( ! is_single() ) {
			return;
		}

		if ( get_theme_mod( 'post_subtitle', true ) ) {
			$subtitle = apply_filters( 'plugins/wp_subtitle/get_subtitle', '', array(
				'before'  => '',
				'after'   => '',
				'post_id' => get_the_ID(),
			) );

			if ( $subtitle ) {
				?>
				<div class="cs-entry__subtitle">
					<?php echo wp_kses( $subtitle, 'post' ); ?>
				</div>
				<?php
			} elseif ( has_excerpt() ) {
				?>
				<div class="cs-entry__subtitle">
					<?php the_excerpt(); ?>
				</div>
				<?php
			}
		}
	}
}

if ( ! function_exists( 'csco_post_author' ) ) {
	/**
	 * Post Author Details
	 *
	 * @param int $id Author ID.
	 */
	function csco_post_author( $id = null ) {
		if ( ! $id ) {
			$id = get_the_author_meta( 'ID' );
		}
		?>
		<div class="cs-entry__author-inner">
			<a href="<?php echo esc_url( get_author_posts_url( $id ) ); ?>" class="cs-entry__author-photo">
				<?php echo get_avatar( $id, '100' ); ?>
			</a>
			<div class="cs-entry__author-info">
				<span class="cs-entry__author-position"><?php esc_html_e( 'Author', 'newsblock' ); ?></span>
				<div class="cs-entry__author-name-wrapper">
					<a href="<?php echo esc_url( get_author_posts_url( $id ) ); ?>" class="cs-entry__author-name">
						<?php the_author_meta( 'display_name', $id ); ?>
					</a>

					<?php if ( csco_powerkit_module_enabled( 'social_links' ) ) { ?>
						<div class="cs-entry__author-social">
							<?php powerkit_author_social_links( $id ); ?>
						</div>
					<?php } ?>
				</div>
				<?php if ( get_the_author_meta( 'description', $id ) ) { ?>
					<div class="cs-entry__author-description"><?php the_author_meta( 'description', $id ); ?></div>
				<?php } ?>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_archive_post_description' ) ) {
	/**
	 * Post Description in Archive Pages
	 */
	function csco_archive_post_description() {
		$description = get_the_archive_description();
		if ( $description ) {
			?>
			<div class="cs-page__archive-description">
				<?php echo do_shortcode( $description ); ?>
			</div>
			<?php
		}
	}
}

if ( ! function_exists( 'csco_archive_post_count' ) ) {
	/**
	 * Post Count in Archive Pages
	 */
	function csco_archive_post_count() {
		global $wp_query;
		$found_posts = $wp_query->found_posts;
		?>
		<div class="cs-page__archive-count">
			<?php
			/* translators: 1: Singular, 2: Plural. */
			echo esc_html( apply_filters( 'csco_article_full_count', sprintf( _n( '%s post', '%s posts', $found_posts, 'newsblock' ), $found_posts ), $found_posts ) );
			?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'csco_subcategories' ) ) {
	/**
	 * Subcategories
	 */
	function csco_subcategories() {

		if ( false === get_theme_mod( 'category_subcategories', false ) ) {
			return;
		}

		if ( ! is_category() ) {
			return;
		}

		$args = apply_filters(
			'csco_subcategories_args',
			array(
				'parent' => get_query_var( 'cat' ),
			)
		);

		$categories = get_categories( $args );

		if ( $categories ) {
			?>
			<div class="cs-page__subcategories">
				<?php csco_section_heading( esc_html__( 'Subcategories', 'newsblock' ) ); ?>

				<div class="cs-page__tags">
					<ul>
						<?php
						foreach ( $categories as $category ) {
							// Translators: category name.
							$title = sprintf( esc_html__( 'View all posts in %s', 'newsblock' ), $category->name );
							$link  = get_category_link( $category->term_id )
							?>
								<li>
									<a href="<?php echo esc_url( $link ); ?>" title="<?php echo esc_attr( $title ); ?>">
										<?php echo esc_html( $category->name ); ?>
									</a>
								</li>
							<?php
						}
						?>
					</ul>
				</div>
			</div>
			<?php
		}
	}
}
