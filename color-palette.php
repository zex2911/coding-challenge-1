<?php
/**
 * After setup theme
 *
 * Disable custom colors and add our color palette.
 */
function zm_set_gutenberg_colors() {
	// Disable Custom Colors.
	add_theme_support( 'disable-custom-colors' );

	// Editor Color Palette.
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Dark one', 'coding-challenge' ),
			'slug'  => 'dark',
			'color'	=> '#071e22',
		),
		array(
			'name'  => __( 'Blue', 'coding-challenge' ),
			'slug'  => 'blue',
			'color' => '#1d7874',
		),
		array(
			'name'  => __( 'Green', 'coding-challenge' ),
			'slug'  => 'green',
			'color' => '#679289',
		),
		array(
			'name'	=> __( 'Orange', 'coding-challenge' ),
			'slug'	=> 'orange',
			'color'	=> '#f4c095',
		),
		array(
			'name'	=> __( 'Red', 'coding-challenge' ),
			'slug'	=> 'red',
			'color'	=> '#ee2e31',
		),
	) );
}
add_action( 'after_setup_theme',  'zm_set_gutenberg_colors' );

/**
 * Add custom style to header
 *
 * Add our style to header, since we're doing everything through the functions.php file.
 */
function zd_add_styles_to_header()
{
?>
	<style>
		.has-dark-color { color: #071e22; }
		.has-dark-background-color { background-color: #071e22; }
		.has-blue-color { color: #1d7874; }
		.has-blue-background-color { background-color: #1d7874; }
		.has-green-color { color: #679289; }
		.has-green-background-color { background-color: #679289; }
		.has-orange-color { color: #f4c095; }
		.has-orange-background-color { background-color: #f4c095; }
		.has-red-color { color: #ee2e31; }
		.has-red-background-color { background-color: #ee2e31; }
	</style>
<?php
}
add_action('wp_head', 'zd_add_styles_to_header', 100);
