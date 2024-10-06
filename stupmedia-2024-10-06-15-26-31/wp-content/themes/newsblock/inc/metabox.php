<?php
/**
 * Adding Custom Meta Boxes.
 *
 * @package Newsblock
 */

/**
 * Check display metabox layout options
 */
function csco_mb_display_layout_options() {
	// Check Coming Soon Page.
	if ( csco_powerkit_module_enabled( 'coming_soon' ) && powerkit_coming_soon_status() ) {

		$page_id = get_option( 'powerkit_coming_soon_page' );

		if ( (int) get_the_ID() === (int) $page_id ) {
			return;
		}
	}

	return true;
}

/**
 * ==================================
 * Layout Options
 * ==================================
 */

/**
 * Add new meta box
 */
function csco_mb_layout_options() {
	if ( ! csco_mb_display_layout_options() ) {
		return;
	}

	$function = sprintf( 'add_meta_%s', 'box' );

	$function( 'csco_mb_layout_options', esc_html__( 'Layout Options', 'newsblock' ), 'csco_mb_layout_options_callback', array( 'post', 'page', 'product' ), 'side' );
}
add_action( sprintf( 'add_meta_%s', 'boxes' ), 'csco_mb_layout_options', 100 );

/**
 * Callback meta box
 *
 * @param object $post The post object.
 */
function csco_mb_layout_options_callback( $post ) {

	$page_static = array();

	// Add pages static.
	$page_static[] = get_option( 'page_on_front' );
	$page_static[] = get_option( 'page_for_posts' );

	wp_nonce_field( 'layout_options', 'csco_mb_layout_options' );

	$sidebar            = get_post_meta( $post->ID, 'csco_singular_sidebar', true );
	$page_header_type   = get_post_meta( $post->ID, 'csco_page_header_type', true );
	$page_load_nextpost = get_post_meta( $post->ID, 'csco_page_load_nextpost', true );

	// Set Default.
	$sidebar            = $sidebar ? $sidebar : 'default';
	$page_header_type   = $page_header_type ? $page_header_type : 'default';
	$page_load_nextpost = $page_load_nextpost ? $page_load_nextpost : 'default';
	?>
		<h4><?php esc_html_e( 'Sidebar', 'newsblock' ); ?></h4>
		<select name="csco_singular_sidebar" id="csco_singular_sidebar" style="box-sizing: border-box;" class="regular-text">
			<option value="default" <?php selected( 'default', $sidebar ); ?>> <?php esc_html_e( 'Default', 'newsblock' ); ?></option>
			<option value="right" <?php selected( 'right', $sidebar ); ?>> <?php esc_html_e( 'Right Sidebar', 'newsblock' ); ?></option>
			<option value="left" <?php selected( 'left', $sidebar ); ?>> <?php esc_html_e( 'Left Sidebar', 'newsblock' ); ?></option>
			<option value="disabled" <?php selected( 'disabled', $sidebar ); ?>> <?php esc_html_e( 'No Sidebar', 'newsblock' ); ?></option>
		</select>

		<?php if ( ! in_array( (string) $post->ID, $page_static, true ) || 'posts' === get_option( 'show_on_front', 'posts' ) ) { ?>

			<?php if ( 'post' === $post->post_type || 'page' === $post->post_type ) { ?>
				<h4><?php esc_html_e( 'Page Header Type', 'newsblock' ); ?></h4>
				<select name="csco_page_header_type" id="csco_page_header_type" style="box-sizing: border-box;" class="regular-text">
					<option value="default" <?php selected( 'default', $page_header_type ); ?>> <?php esc_html_e( 'Default', 'newsblock' ); ?></option>
					<option value="simple" <?php selected( 'simple', $page_header_type ); ?>> <?php esc_html_e( 'Simple', 'newsblock' ); ?></option>
					<option value="standard" <?php selected( 'standard', $page_header_type ); ?>> <?php esc_html_e( 'Standard', 'newsblock' ); ?></option>
					<option value="overlay" <?php selected( 'overlay', $page_header_type ); ?>> <?php esc_html_e( 'Overlay', 'newsblock' ); ?></option>
					<option value="large" <?php selected( 'large', $page_header_type ); ?>> <?php esc_html_e( 'Large', 'newsblock' ); ?></option>
					<option value="large_overlay" <?php selected( 'large_overlay', $page_header_type ); ?>> <?php esc_html_e( 'Large Overlay', 'newsblock' ); ?></option>
					<option value="title" <?php selected( 'title', $page_header_type ); ?>> <?php esc_html_e( 'Page Title Only', 'newsblock' ); ?></option>
					<option value="none" <?php selected( 'none', $page_header_type ); ?>> <?php esc_html_e( 'None', 'newsblock' ); ?></option>
				</select>
			<?php } ?>

			<?php if ( 'post' === $post->post_type ) { ?>
				<h4><?php esc_html_e( 'Auto Load Next Post', 'newsblock' ); ?></h4>
				<select name="csco_page_load_nextpost" id="csco_page_load_nextpost" style="box-sizing: border-box;" class="regular-text">
					<option value="default" <?php selected( 'default', $page_load_nextpost ); ?>> <?php esc_html_e( 'Default', 'newsblock' ); ?></option>
					<option value="enabled" <?php selected( 'enabled', $page_load_nextpost ); ?>> <?php esc_html_e( 'Enabled', 'newsblock' ); ?></option>
					<option value="disabled" <?php selected( 'disabled', $page_load_nextpost ); ?>> <?php esc_html_e( 'Disabled', 'newsblock' ); ?></option>
				</select>
			<?php } ?>

		<?php } ?>
	<?php
}

/**
 * Save meta box
 *
 * @param int $post_id The post id.
 */
function csco_mb_layout_options_save( $post_id ) {

	// Bail if we're doing an auto save.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// if our nonce isn't there, or we can't verify it, bail.
	if ( ! isset( $_POST['csco_mb_layout_options'] ) || ! wp_verify_nonce( $_POST['csco_mb_layout_options'], 'layout_options' ) ) { // Input var ok; sanitization ok.
		return;
	}

	if ( isset( $_POST['csco_singular_sidebar'] ) ) { // Input var ok; sanitization ok.
		$sidebar = sanitize_text_field( $_POST['csco_singular_sidebar'] ); // Input var ok; sanitization ok.

		update_post_meta( $post_id, 'csco_singular_sidebar', $sidebar );
	}

	if ( isset( $_POST['csco_page_header_type'] ) ) { // Input var ok; sanitization ok.
		$page_header_type = sanitize_text_field( $_POST['csco_page_header_type'] ); // Input var ok; sanitization ok.

		update_post_meta( $post_id, 'csco_page_header_type', $page_header_type );
	}

	if ( isset( $_POST['csco_page_load_nextpost'] ) ) { // Input var ok; sanitization ok.
		$page_load_nextpost = sanitize_text_field( $_POST['csco_page_load_nextpost'] ); // Input var ok; sanitization ok.

		update_post_meta( $post_id, 'csco_page_load_nextpost', $page_load_nextpost );
	}
}
add_action( 'save_post', 'csco_mb_layout_options_save' );

/**
 * ==================================
 * Video Background
 * ==================================
 */

/**
 * Add video meta boxes
 */
function csco_meta_boxe_video_options() {
	$function = sprintf( 'add_meta_%s', 'box' );

	$function( 'csco_mb_video_background', esc_html__( 'Video Background', 'newsblock' ), 'csco_mb_video_options_callback', array( 'post', 'page' ), 'side' );
}
add_action( sprintf( 'add_meta_%s', 'boxes' ), 'csco_meta_boxe_video_options' );

/**
 * Video background markup
 *
 * @param object $post The post object.
 */
function csco_mb_video_options_callback( $post ) {
	wp_nonce_field( 'video_background', 'csco_mb_video_background' );

	$post_video_location      = get_post_meta( $post->ID, 'csco_post_video_location', true );
	$post_video_url           = get_post_meta( $post->ID, 'csco_post_video_url', true );
	$post_video_bg_start_time = get_post_meta( $post->ID, 'csco_post_video_bg_start_time', true );
	$post_video_bg_end_time   = get_post_meta( $post->ID, 'csco_post_video_bg_end_time', true );

	// Set Default Setings.
	$post_video_location      = $post_video_location ? $post_video_location : array();
	$post_video_url           = $post_video_url ? $post_video_url : '';
	$post_video_bg_start_time = $post_video_bg_start_time ? (int) $post_video_bg_start_time : 0;
	$post_video_bg_end_time   = $post_video_bg_end_time ? (int) $post_video_bg_end_time : 0;
	?>
		<!-- Locations -->
		<h4><?php esc_html_e( 'Location', 'newsblock' ); ?></h4>
		<label><input type="checkbox" id="csco_post_video_location" name="csco_post_video_location[]" value="large-header" <?php checked( in_array( 'large-header', $post_video_location, true ) ); ?>><?php esc_html_e( 'Large Header', 'newsblock' ); ?></label><br>
		<?php if ( 'post' === $post->post_type ) { ?>
			<label><input type="checkbox" id="csco_post_video_location" name="csco_post_video_location[]" value="archive" <?php checked( in_array( 'archive', $post_video_location, true ) ); ?>><?php esc_html_e( 'Post Archives', 'newsblock' ); ?></label><br>
		<?php } ?>
		<!-- YouTube URL -->
		<h4><?php esc_html_e( 'YouTube URL', 'newsblock' ); ?></h4>
		<input style="width:100%" type="text" id="csco_post_video_url" name="csco_post_video_url" value="<?php echo esc_attr( $post_video_url ); ?>">
		<!-- Start Time -->
		<h4><?php esc_html_e( 'Start Time (sec)', 'newsblock' ); ?></h4>
		<input class="small-text" type="number" id="csco_post_video_bg_start_time" name="csco_post_video_bg_start_time" value="<?php echo esc_attr( $post_video_bg_start_time ); ?>">
		<!-- End Time -->
		<h4><?php esc_html_e( 'End Time (sec)', 'newsblock' ); ?></h4>
		<input class="small-text" type="number" id="csco_post_video_bg_end_time" name="csco_post_video_bg_end_time" value="<?php echo esc_attr( $post_video_bg_end_time ); ?>">
	<?php
}

/**
 * Save meta box
 *
 * @param int $post_id The post id.
 */
function csco_mb_video_options_save( $post_id ) {

	// Bail if we're doing an auto save.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// if our nonce isn't there, or we can't verify it, bail.
	if ( isset( $_POST['csco_mb_video_background'] ) && wp_verify_nonce( $_POST['csco_mb_video_background'], 'video_background' ) ) { // Input var ok; sanitization ok.

		if ( isset( $_POST['csco_post_video_location'] ) ) { // Input var ok; sanitization ok.
			$post_video_location = array_map( 'sanitize_text_field', $_POST['csco_post_video_location'] ); // Input var ok; sanitization ok.

			update_post_meta( $post_id, 'csco_post_video_location', $post_video_location );
		} else {
			update_post_meta( $post_id, 'csco_post_video_location', array() );
		}

		if ( isset( $_POST['csco_post_video_url'] ) ) { // Input var ok; sanitization ok.
			$post_video_bg_start_time = esc_url( $_POST['csco_post_video_url'] ); // Input var ok; sanitization ok.

			update_post_meta( $post_id, 'csco_post_video_url', $post_video_bg_start_time );
		}

		if ( isset( $_POST['csco_post_video_bg_start_time'] ) ) { // Input var ok; sanitization ok.
			$post_video_bg_start_time = intval( $_POST['csco_post_video_bg_start_time'] ); // Input var ok; sanitization ok.

			update_post_meta( $post_id, 'csco_post_video_bg_start_time', $post_video_bg_start_time );
		}

		if ( isset( $_POST['csco_post_video_bg_end_time'] ) ) { // Input var ok; sanitization ok.
			$post_video_bg_end_time = intval( $_POST['csco_post_video_bg_end_time'] ); // Input var ok; sanitization ok.

			update_post_meta( $post_id, 'csco_post_video_bg_end_time', $post_video_bg_end_time );
		}
	}
}
add_action( 'save_post', 'csco_mb_video_options_save' );
