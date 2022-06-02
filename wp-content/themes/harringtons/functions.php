<?php
/**
 * harringtons functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package harringtons
 */


if ( ! defined( '_S_VERSION' ) ) { define( '_S_VERSION', '1.0.0' ); }



//== Register Menus

register_nav_menus(
	array(
		'main-menu' => esc_html__( 'Primary', 'harringtons' ),
		'footer-menu' => esc_html__( 'Footer', 'harringtons' ),
	)
);



//== Enqueue scripts and styles.
 
function harringtons_scripts() {
  	
	//== Google Fonts
	 wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap', false );
	

	//== jQuery
	wp_enqueue_script( 'harringtons-jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), _S_VERSION, true );


	//== Waypoints
	wp_enqueue_script( 'harringtons-waypoints', get_template_directory_uri() . '/js/vendor/waypoints.min.js', array(), _S_VERSION, true );

	
	//== Owl Carousel
	wp_enqueue_script( 'harringtons-owlcarousel', get_template_directory_uri() . '/js/vendor/owl-carousel.js', array('harringtons-jquery'), null, true );

	//== Global Scripts
	wp_enqueue_script( 'harringtons-global', get_template_directory_uri() . '/js/scripts.js', array(), _S_VERSION, true );

	//== Homepage Carousel
	if ( is_page_template( 'templates/homepage.php' ) ) {

		wp_enqueue_style( 'harringtons-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), _S_VERSION, true );

		wp_enqueue_script( 'harringtons-homepage', get_template_directory_uri() . '/js/home.js', array('harringtons-jquery'), _S_VERSION, true );

	}

}
add_action( 'wp_enqueue_scripts', 'harringtons_scripts' );



//== Custom Post Types

function create_posttype() {
  	
	register_post_type( 'reviews',
			array(
					'labels' => array(
							'name' => __( 'Reviews' ),
							'singular_name' => __( 'Review' )
					),
					'public' => true,
					'has_archive' => true,
					'rewrite' => array('slug' => 'reviews'),
					'show_in_rest' => true,
					'menu_icon'   => 'dashicons-star-filled',

			)
	);

	register_post_type( 'content-blocks',
			array(
					'labels' => array(
							'name' => __( 'Content Blocks' ),
							'singular_name' => __( 'Content Block' )
					),
					'public' => true,
					'has_archive' => true,
					'rewrite' => array('slug' => 'content-blocks'),
					'show_in_rest' => true,
					'menu_icon'   => 'dashicons-align-center',

			)
	);

	register_post_type( 'offers',
			array(
					'labels' => array(
							'name' => __( 'Offers' ),
							'singular_name' => __( 'Offer' )
					),
					'public' => true,
					'has_archive' => true,
					'rewrite' => array('slug' => 'offers'),
					'show_in_rest' => true,
					'menu_icon'   => 'dashicons-awards',

			)
	);

	register_post_type( 'home-hero-slides',
			array(
					'labels' => array(
							'name' => __( 'Home Hero Slides' ),
							'singular_name' => __( 'Home Hero Slide' )
					),
					'public' => true,
					'has_archive' => true,
					'rewrite' => array('slug' => 'home-hero-slides'),
					'show_in_rest' => true,
					'menu_icon'   => 'dashicons-format-gallery',

			)
	);

	register_post_type( 'menus',
			array(
					'labels' => array(
							'name' => __( 'Menus' ),
							'singular_name' => __( 'Menu' )
					),
					'public' => true,
					'has_archive' => true,
					'rewrite' => array('slug' => 'menus'),
					'show_in_rest' => true,
					'menu_icon'   => 'dashicons-book',

			)
	);

}

add_action( 'init', 'create_posttype' );



//== Remove Default Image Sizes

function remove_default_image_sizes( $sizes ) {
  
  /* Default WordPress */
  unset( $sizes[ 'thumbnail' ]);       // Remove Thumbnail (150 x 150 hard cropped)
  unset( $sizes[ 'medium' ]);          // Remove Medium resolution (300 x 300 max height 300px)
  unset( $sizes[ 'medium_large' ]);    // Remove Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
  unset( $sizes[ 'large' ]);           // Remove Large resolution (1024 x 1024 max height 1024px)
	unset( $sizes['1536x1536'] );
	unset( $sizes['2048x2048'] );
  return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'remove_default_image_sizes' );



//== Post Thumbnails
add_theme_support( 'post-thumbnails' );
	
if ( function_exists( 'add_theme_support' ) ) {	
	add_image_size( 'fw-img-mobile', 600, 600, true );
	add_image_size( 'fw-img-tablet', 1024, 1024, true );
	add_image_size( 'fw-img-desktop', 1920, 1920, true );
	add_image_size( 'fw-img-desktop-lg', 2560, 2560, true );
	add_image_size( 'offer', 480, 330, true );
}




//== Sitewide Options Page

add_action('admin_menu', 'awesome_page_create');
function awesome_page_create() {
    $page_title = 'Sitewide Settings';
    $menu_title = 'Sitewide Settings';
    $capability = 'edit_posts';
    $menu_slug = 'sitewide_settings';
    $function = 'sitewide_settings_display';
    $icon_url = '';
    $position = 30;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );

		function sitewide_settings_display() {
			
			//== Telephone Number
			if (isset($_POST['tel_number'])) {
				$tel_number = $_POST['tel_number'];
				update_option('tel_number', $tel_number);
			}
			$tel_number = get_option('tel_number', '');

			//== Fax
			if (isset($_POST['fax_number'])) {
				$fax_number = $_POST['fax_number'];
				update_option('fax_number', $fax_number);
			}
			$fax_number = get_option('fax_number', '');

			//== Email Address
			if (isset($_POST['email_address'])) {
				$email_address = $_POST['email_address'];
				update_option('email_address', $email_address);
			}
			$email_address = get_option('email_address', '');

			//== Address
			if (isset($_POST['address'])) {
				$address = $_POST['address'];
				update_option('address', $address);
			}
			$address = get_option('address', '');

			//== Directions URL
			if (isset($_POST['directions_url'])) {
				$directions_url = $_POST['directions_url'];
				update_option('directions_url', $directions_url);
			}
			$directions_url = get_option('directions_url', '');


			//== Opening Hours 1
			if (isset($_POST['opening_hours_1_label'])) {
				$opening_hours_1_label = $_POST['opening_hours_1_label'];
				update_option('opening_hours_1_label', $opening_hours_1_label);
			}
			$opening_hours_1_label = get_option('opening_hours_1_label', '');

			if (isset($_POST['opening_hours_1_data'])) {
				$opening_hours_1_data = stripslashes($_POST['opening_hours_1_data']);
				update_option('opening_hours_1_data', $opening_hours_1_data);
			}
			$opening_hours_1_data = get_option('opening_hours_1_data', '');


			//== Opening Hours 2
			if (isset($_POST['opening_hours_2_label'])) {
				$opening_hours_2_label = $_POST['opening_hours_2_label'];
				update_option('opening_hours_2_label', $opening_hours_2_label);
			}
			$opening_hours_2_label = get_option('opening_hours_2_label', '');

			if (isset($_POST['opening_hours_2_data'])) {
				$opening_hours_2_data = stripslashes($_POST['opening_hours_2_data']);
				update_option('opening_hours_2_data', $opening_hours_2_data);
			}
			$opening_hours_2_data = get_option('opening_hours_2_data', '');


			//== Opening Hours 3
			if (isset($_POST['opening_hours_3_label'])) {
				$opening_hours_3_label = $_POST['opening_hours_3_label'];
				update_option('opening_hours_3_label', $opening_hours_3_label);
			}
			$opening_hours_3_label = get_option('opening_hours_3_label', '');

			if (isset($_POST['opening_hours_3_data'])) {
				$opening_hours_3_data = stripslashes($_POST['opening_hours_3_data']);
				update_option('opening_hours_3_data', $opening_hours_3_data);
			}
			$opening_hours_3_data = get_option('opening_hours_3_data', '');


			//== Facebook Social Link
			if (isset($_POST['facebook_link'])) {
					$facebook_link = $_POST['facebook_link'];
					update_option('facebook_link', $facebook_link);
			}
			$facebook_link = get_option('facebook_link', '');


			//== Twitter Social Link
			if (isset($_POST['twitter_link'])) {
					$twitter_link = $_POST['twitter_link'];
					update_option('twitter_link', $twitter_link);
			}
			$twitter_link = get_option('twitter_link', '');


			//== Instagram Link
			if (isset($_POST['instagram_link'])) {
				$instagram_link = $_POST['instagram_link'];
				update_option('instagram_link', $instagram_link);
			}
			$instagram_link = get_option('instagram_link', '');


			//== Trip Advisor Link
			if (isset($_POST['trip_advisor_link'])) {
				$trip_advisor_link = $_POST['trip_advisor_link'];
				update_option('trip_advisor_link', $trip_advisor_link);
			}
			$trip_advisor_link = get_option('trip_advisor_link', '');


			//== Footer
			if (isset($_POST['footer_text'])) {
				$footer_text = stripslashes($_POST['footer_text']);
				update_option('footer_text', $footer_text);
			}
			$footer_text = get_option('footer_text', '');

			if (isset($_POST['site_creator'])) {
				$site_creator = stripslashes($_POST['site_creator']);
				update_option('site_creator', $site_creator);
			}
			$site_creator = get_option('site_creator', '');


			//== Resdiary Embed
			if (isset($_POST['resdiary_embed'])) {
				$resdiary_embed = stripslashes($_POST['resdiary_embed']);
				update_option('resdiary_embed', $resdiary_embed);
			}
			$resdiary_embed = get_option('resdiary_embed', '');


			//== Fallback Text - Offers
			if (isset($_POST['no_offers_text'])) {
				$no_offers_text = stripslashes($_POST['no_offers_text']);
				update_option('no_offers_text', $no_offers_text);
			}
			$no_offers_text = get_option('no_offers_text', '');

		?>

		<style>
		.settingsGroup { align-items: center; display: flex; margin-bottom: 30px; }
		.settingsGroup label { margin: 0; width: 150px; }
		.settingsGroup input, .settingsGroup textarea { width: 400px; }
		.settingsGroup textarea { height: 100px }
		</style>

			<h1>Sitewide Settings Page</h1>
			<br>
			<form method="POST">

					<h2>Contact Details</h2>
					<div class="settingsGroup">
						<label for="tel_number">Telephone Number</label><br>
						<input type="text" name="tel_number" id="tel_number" value="<?php echo $tel_number; ?>">
					</div>	

					<div class="settingsGroup">
						<label for="fax_number">Fax Number</label><br>
						<input type="text" name="fax_number" id="fax_number" value="<?php echo $fax_number; ?>">
					</div>

					<div class="settingsGroup">
						<label for="email_address">Email Address</label><br>
						<input type="text" name="email_address" id="email_address" value="<?php echo $email_address; ?>">
					</div>

					<div class="settingsGroup">
						<label for="address">Address</label><br>
						<input type="text" name="address" id="address" value="<?php echo $address; ?>">
					</div>

					<div class="settingsGroup">
						<label for="directions_url">Directions URL</label><br>
						<input type="text" name="directions_url" id="directions_url" value="<?php echo $directions_url; ?>">
					</div>

					<hr />

					<h2>Opening Hours</h2>

					<div class="settingsGroup">
						<label for="opening_hours_1_label">Opening Hours 1 label</label><br>
						<input type="text" name="opening_hours_1_label" id="opening_hours_1_label" value="<?php echo $opening_hours_1_label; ?>">
					</div>

					<div class="settingsGroup">
						<label for="opening_hours_1_data">Opening Hours 1 hours</label><br>
						<textarea name="opening_hours_1_data" id="opening_hours_1_data"><?php echo $opening_hours_1_data; ?></textarea>
					</div>

					<div class="settingsGroup">
						<label for="opening_hours_2_label">Opening Hours 2 label</label><br>
						<input type="text" name="opening_hours_2_label" id="opening_hours_2_label" value="<?php echo $opening_hours_2_label; ?>">
					</div>

					<div class="settingsGroup">
						<label for="opening_hours_2_data">Opening Hours 2 hours</label><br>
						<textarea name="opening_hours_2_data" id="opening_hours_2_data"><?php echo $opening_hours_2_data; ?></textarea>
					</div>

					<div class="settingsGroup">
						<label for="opening_hours_3_label">Opening Hours 3 label</label><br>
						<input type="text" name="opening_hours_3_label" id="opening_hours_3_label" value="<?php echo $opening_hours_3_label; ?>">
					</div>

					<div class="settingsGroup">
						<label for="opening_hours_3_data">Opening Hours 3 hours</label><br>
						<textarea name="opening_hours_3_data" id="opening_hours_3_data"><?php echo $opening_hours_3_data; ?></textarea>
					</div>

					<hr />

					<h2>Social</h2>

					<div class="settingsGroup">
						<label for="facebook_link">Facebook Link</label><br>
						<input type="text" name="facebook_link" id="facebook_link" value="<?php echo $facebook_link; ?>">
					</div>					

					<div class="settingsGroup">
						<label for="twitter_link">Twitter Link</label><br>
						<input type="text" name="twitter_link" id="twitter_link" value="<?php echo $twitter_link; ?>">
					</div>					

					<div class="settingsGroup">
						<label for="instagram_link">Instagram Link</label><br>
						<input type="text" name="instagram_link" id="instagram_link" value="<?php echo $instagram_link; ?>">
					</div>

					<div class="settingsGroup">
						<label for="trip_advisor_link">Trip Advisor Link</label><br>
						<input type="text" name="trip_advisor_link" id="trip_advisor_link" value="<?php echo $trip_advisor_link; ?>">
					</div>

					<hr />

					<h2>Footer</h2>

					<div class="settingsGroup">
						<label for="footer_text">Footer Intro Text</label><br>
						<textarea name="footer_text" id="footer_text"><?php echo $footer_text; ?></textarea>
					</div>	

					<div class="settingsGroup">
						<label for="site_creator">Site Creator</label><br>
						<textarea name="site_creator" id="site_creator"><?php echo $site_creator; ?></textarea>
					</div>

					<hr />

					<h2>Resdiary Embed</h2>

					<div class="settingsGroup">
						<label for="resdiary_embed">Resdiary Embed</label><br>
						<textarea name="resdiary_embed" id="resdiary_embed"><?php echo $resdiary_embed; ?></textarea>
					</div>

					<hr />

					<h2>Fallback Text</h2>

					<div class="settingsGroup">
						<label for="no_offers_text">No Offers Text</label><br>
						<textarea name="no_offers_text" id="no_offers_text"><?php echo $no_offers_text; ?></textarea>
					</div>

    			<input type="submit" value="Save" class="button button-primary button-large">
			</form>

		<?php }

}