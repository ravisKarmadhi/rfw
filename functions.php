<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
$curious_includes = [
  'lib/assets.php',  // Scripts and stylesheets
  'lib/extras.php',  // Custom functions
  'lib/setup.php',   // Theme setup
  'lib/titles.php',  // Page titles
  'lib/wrapper.php'  // Theme wrapper class
];

foreach ($curious_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(
    array(
      'page_title' => 'Header',
      'menu_title' => 'Header',
      'menu_slug' => 'header-options',
      'capability' => 'edit_posts',
      'redirect' => false
    )
  );
  acf_add_options_page(
    array(
      'page_title' => 'Footer',
      'menu_title' => 'Footer',
      'menu_slug' => 'footer-options',
      'capability' => 'edit_posts',
      'redirect' => false
    )
  );
}
// gallery
add_action('init', 'create_gallery_post_type');
function create_gallery_post_type()
{

  $supports = array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes');
  $item_name = 'Gallery';
  $plural_name = 'Gallerys';
  $singular_name = 'Gallery';

  register_post_type(
    $item_name,
    array(
      'labels' => array(
        'name' => __(ucfirst($plural_name)),
        'singular_name' => __(ucfirst($singular_name)),
        'add_new' => 'Add new ' . $singular_name,
        'add_new_item' => 'Add new ' . $singular_name,
        'edit_item' => ' Edit' . $singular_name,
        'new_item' => 'New ' . $singular_name,
        'all_items' => 'All ' . $plural_name,
        'view_item' => 'View ' . $plural_name,
        'search_items' => 'Search ' . $plural_name,
      ),
      'public' => true,
      'has_archive' => true,

      'supports' => $supports,
    )
  );
  flush_rewrite_rules();
}

function my_taxonomies_gallery_type()
{
  $plural_name = 'Gallery Type';
  $singular_name = 'Gallery type';

  $labels = array(
    'name' => _x($singular_name, 'taxonomy general name'),
    'singular_name' => _x($singular_name . ' Category', 'taxonomy singular name'),
    'search_items' => __('Search ' . $singular_name . ' Categories'),
    'all_items' => __('All ' . $singular_name . ' Categories'),
    'parent_item' => __('Parent ' . $singular_name . ' Category'),
    'parent_item_colon' => __('Parent ' . $singular_name . ' Category:'),
    'edit_item' => __('Edit ' . $singular_name . ' Category'),
    'update_item' => __('Update ' . $singular_name . ' Category'),
    'add_new_item' => __('Add New ' . $singular_name . ' Category'),
    'new_item_name' => __('New ' . $singular_name . ' Category'),
    'menu_name' => __('' . $singular_name . ' Categories'),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy('gallery-type', 'gallery', $args);
}
add_action('init', 'my_taxonomies_gallery_type', 0);


// FAQS
add_action('init', 'create_faq_post_type');
function create_faq_post_type()
{

  $supports = array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes');
  $item_name = 'faq';
  $plural_name = 'faqs';
  $singular_name = 'faq';

  register_post_type(
    $item_name,
    array(
      'labels' => array(
        'name' => __(ucfirst($plural_name)),
        'singular_name' => __(ucfirst($singular_name)),
        'add_new' => 'Add new ' . $singular_name,
        'add_new_item' => 'Add new ' . $singular_name,
        'edit_item' => ' Edit' . $singular_name,
        'new_item' => 'New ' . $singular_name,
        'all_items' => 'All ' . $plural_name,
        'view_item' => 'View ' . $plural_name,
        'search_items' => 'Search ' . $plural_name,
      ),
      'public' => true,
      'has_archive' => true,

      'supports' => $supports,
    )
  );
  flush_rewrite_rules();
}

function my_taxonomies_faq_type()
{
  $plural_name = 'faq Type';
  $singular_name = 'faq type';

  $labels = array(
    'name' => _x($singular_name, 'taxonomy general name'),
    'singular_name' => _x($singular_name . ' Category', 'taxonomy singular name'),
    'search_items' => __('Search ' . $singular_name . ' Categories'),
    'all_items' => __('All ' . $singular_name . ' Categories'),
    'parent_item' => __('Parent ' . $singular_name . ' Category'),
    'parent_item_colon' => __('Parent ' . $singular_name . ' Category:'),
    'edit_item' => __('Edit ' . $singular_name . ' Category'),
    'update_item' => __('Update ' . $singular_name . ' Category'),
    'add_new_item' => __('Add New ' . $singular_name . ' Category'),
    'new_item_name' => __('New ' . $singular_name . ' Category'),
    'menu_name' => __('' . $singular_name . ' Categories'),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy('faq-type', 'faq', $args);
}
add_action('init', 'my_taxonomies_faq_type', 0);

function subscribe_link()
{
?>
  <!-- accommodation-hero-section -->
  <section class="accommodation-hero-section position-relative">
    <div class="accommodation-hero-img position-relative">
      <img class="h-100 w-100 object-cover" src="<?php echo get_home_url() ?>/wp-content/uploads/2024/05/pagination-3.png" alt="">
      <div class="bg-layer bg-black opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>
    </div>
    <div class="accommodation-hero-content position-absolute w-100 text-center z-3 bottom-0 start-0">
      <div class="container h-100">
        <div class="d-flex align-items-center justify-content-center h-100">
          <div class="col-lg-6 col-12">
            <div class="louise font-120 res-font-77 leading-139 res-leading-120 text-FFFAF6 w-100">
              Event
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
}

add_shortcode('event_top_part', 'subscribe_link');

add_filter('woocommerce_default_address_fields', 'override_address_fields');
function override_address_fields($address_fields)
{
  $address_fields['first_name']['placeholder'] = 'First Name…';
  $address_fields['last_name']['placeholder'] = 'Last Name…';
  $address_fields['address_1']['placeholder'] = 'House Number*…';
  $address_fields['address_2']['placeholder'] = 'Select Address…';
  $address_fields['state']['placeholder'] = 'State...';
  $address_fields['city']['placeholder'] = 'City...';
  return $address_fields;
}


add_filter('woocommerce_checkout_fields', function ($fields) {

  $fields['billing']['billing_postcode']['placeholder'] = __('Postcode*…', 'woocommerce');
  $fields['billing']['billing_phone']['placeholder'] = __('Phone Number*…', 'woocommerce');
  $fields['billing']['billing_email']['placeholder'] = __('Email Address…', 'woocommerce');
  $fields['billing']['billing_company']['placeholder'] = __('Company…', 'woocommerce');


  return $fields;
});

add_filter("woocommerce_checkout_fields", "custom_override_checkout_fields", 1);
function custom_override_checkout_fields($fields)
{
  $fields['billing']['billing_email']['priority'] = 1;
  $fields['billing']['billing_first_name']['priority'] = 2;
  $fields['billing']['billing_last_name']['priority'] = 3;
  $fields['billing']['billing_address_1']['priority'] = 5;
  $fields['billing']['billing_postcode']['priority'] = 4;
  $fields['billing']['billing_address_2']['priority'] = 6;
  $fields['billing']['billing_phone']['priority'] = 11;
  $fields['billing']['billing_company']['priority'] = 10;
  $fields['billing']['billing_country']['priority'] = 9;
  $fields['billing']['billing_state']['priority'] = 8;
  $fields['billing']['billing_city']['priority'] = 7;
  return $fields;
}
