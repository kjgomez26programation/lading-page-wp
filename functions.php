<?php


// Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					get_stylesheet_directory_uri() . '/css/bootstrap.min.css', 
  					array(), 
  					'5.3.0'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

// Bootstrap JS
function bootstrap_js() {
	wp_enqueue_script( 'bootstrap_js', 
  					get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 
  					array('jquery'), 
  					'5.3.0', 
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');


//includes cpt
$includes_dir = get_stylesheet_directory() . '/includes/';

require_once $includes_dir . 'cpt-FAQ.php';





add_action('admin_post_nopriv_newsletter_subscribe', 'newsletter_subscribe');
add_action('admin_post_newsletter_subscribe', 'newsletter_subscribe');

function newsletter_subscribe() {

    if (isset($_POST['action']) && $_POST['action'] === 'newsletter_subscribe') {
    
        $first_name = sanitize_text_field($_POST['first_name']);
        $last_name = sanitize_text_field($_POST['last_name']);
        $email = sanitize_email($_POST['email']);

     
        wp_redirect(esc_url(home_url('/home/')));
        exit;
    }
}
