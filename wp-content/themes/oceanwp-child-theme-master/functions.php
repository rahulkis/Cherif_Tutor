<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );


function prefix_create_custom_post_type() {
    /*
     * The $labels describes how the post type appears.
     */
    $labels = array(
        'name'          => 'Learners', // Plural name
        'singular_name' => 'learner'   // Singular name
    );

    /*
     * The $supports parameter describes what the post type supports
     */
    $supports = array(
        'title',        // Post title
        'editor',       // Post content
        'excerpt',      // Allows short description
        'author',       // Allows showing and choosing author
        'thumbnail',    // Allows feature images
        'comments',     // Enables comments
        'trackbacks',   // Supports trackbacks
        'revisions',    // Shows autosaved version of the posts
        'custom-fields' // Supports by custom fields
    );

    /*
     * The $args parameter holds important parameters for the custom post type
     */
    $args = array(
        'labels'              => $labels,
        'description'         => 'Post type post learner', // Description
        'supports'            => $supports,
        'taxonomies'          => array( 'category', 'post_tag' ), // Allowed taxonomies
        'hierarchical'        => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
        'public'              => true,  // Makes the post type public
        'show_ui'             => true,  // Displays an interface for this post type
        'show_in_menu'        => true,  // Displays in the Admin Menu (the left panel)
        'show_in_nav_menus'   => true,  // Displays in Appearance -> Menus
        'show_in_admin_bar'   => true,  // Displays in the black admin bar
        'menu_position'       => 5,     // The position number in the left menu
        'menu_icon'           => true,  // The URL for the icon used for this post type
        'can_export'          => true,  // Allows content export using Tools -> Export
        'has_archive'         => true,  // Enables post type archive (by month, date, or year);
        'exclude_from_search' => false, // Excludes posts of this type in the front-end search result page if set to true, include them if set to false
        'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
        'capability_type'     => 'post' // Allows read, edit, delete like “Post”
    );

    register_post_type('learners', $args); //Create a post type with the slug is ‘product’ and arguments in $args.
}
add_action('init', 'prefix_create_custom_post_type');



add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script('awhitepixel-ajaxscript', get_stylesheet_directory_uri() . '/assets/js/frontendajax.js', ['jquery']);
	$variable_to_js = [
		'ajax_url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('awhitepixel-nonce')
	];
	wp_localize_script('awhitepixel-ajaxscript', 'Theme_Variables', $variable_to_js);
});



add_action('wp_ajax_awhitepixel_frontend_stuff', 'awhitepixel_ajax_frontend');
add_action('wp_ajax_nopriv_awhitepixel_frontend_stuff', 'awhitepixel_ajax_frontend');
function awhitepixel_ajax_frontend() {
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'awhitepixel-nonce')) {
		wp_die(-1);
	}
	
	
	$post_arr = array(
				'post_title'   => $_POST['name'],
				'post_status'  => 'publish',
                'post_author'  => get_current_user_id(),
				'post_type'	   => 'learners',
			);
			
	$pid = wp_insert_post($post_arr);
	update_field('age_learner', $_POST['name'], $pid);
	update_field('topic', $_POST['cate'], $pid);
	update_field('grade', $_POST['grade'], $pid);
	
	echo $_POST['cate'];
	wp_die();
}

function has_active_subscription( $user_id=null ) {
    // When a $user_id is not specified, get the current user Id
    if( null == $user_id && is_user_logged_in() ) 
        $user_id = get_current_user_id();
    // User not logged in we return false
    if( $user_id == 0 ) 
        return false;

    // Get all active subscriptions for a user ID
    $active_subscriptions = get_posts( array(
        'numberposts' => 1, // Only one is enough
        'meta_key'    => '_customer_user',
        'meta_value'  => $user_id,
        'post_type'   => 'shop_subscription', // Subscription post type
        'post_status' => 'wc-active', // Active subscription
        'fields'      => 'ids', // return only IDs (instead of complete post objects)
    ) );

    return sizeof($active_subscriptions) == 0 ? false : true;
}

add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );
  
//create a custom taxonomy name it subjects for your posts
  
function create_subjects_hierarchical_taxonomy() {
  
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
  
  $labels = array(
    'name' => _x( 'Topics', 'taxonomy general name' ),
    'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Topics' ),
    'all_items' => __( 'All Topics' ),
    'parent_item' => __( 'Parent Topic' ),
    'parent_item_colon' => __( 'Parent Topic:' ),
    'edit_item' => __( 'Edit Topic' ), 
    'update_item' => __( 'Update Topic' ),
    'add_new_item' => __( 'Add New Topic' ),
    'new_item_name' => __( 'New Topic Name' ),
    'menu_name' => __( 'Topic' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('topics',array('product'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'topic' ),
  ));
  
}


function add_multi_kids($data){

    $user_id = get_current_user_id();
    $first_name = $_REQUEST['first_name'];
    $age = $_REQUEST['age'];
    $grade = $_REQUEST['grade'];
    $kid_img = $_REQUEST['kid_img'];
    

 
    global $wpdb;    
    $wpdb->insert('uDO_users', array(
        'ID' => NULL,
        'user_login' => '',
        'user_pass' => '',
        'user_nicename' => '',
        'user_email' => '',
        'user_url' => '',
        'user_registered' => '',
        'user_activation_key' => '',
        'user_status' => '0',
        'display_name' => ''
    ));
    $lastid = $wpdb->insert_id;

    $wpdb->insert('uDO_usermeta', array(
            'umeta_id' => NULL,
            'user_id' => $user_id,
            'meta_key' => 'is_child_id',
            'meta_value' => $lastid
        )); 

     
    $wpdb->insert('uDO_usermeta', array(
        'umeta_id' => NULL,
        'user_id' => $lastid,
        'meta_key' => 'first_name',
        'meta_value' => $first_name
    ));

    $wpdb->insert('uDO_usermeta', array(
        'umeta_id' => NULL,
        'user_id' => $lastid,
        'meta_key' => 'age',
        'meta_value' => $age
    ));

    $wpdb->insert('uDO_usermeta', array(
        'umeta_id' => NULL,
        'user_id' => $lastid,
        'meta_key' => 'grade',
        'meta_value' => $grade
    ));

    $wpdb->insert('uDO_usermeta', array(
        'umeta_id' => NULL,
        'user_id' => $lastid,
        'meta_key' => 'kid_img',
        'meta_value' => $kid_img
    ));

    echo $lastid;  die;
}

add_action('wp_ajax_addkid', 'add_multi_kids');
add_action('wp_ajax_nopriv_addkid', 'add_multi_kids');


function del_multi_kids($data){
    $user_id = get_current_user_id();
    $kid_id = $_REQUEST['kid_id'];
 
    global $wpdb;

    $table = 'uDO_users';
    $wpdb->delete( $table, array( 'id' => $kid_id ) );

    $table = 'uDO_usermeta';
    $wpdb->delete( $table, array( 'meta_key' => 'is_child_id', 'meta_value' => $kid_id ) );

    $table = 'uDO_usermeta';
    $wpdb->delete( $table, array( 'user_id' => $kid_id ) );
    
    echo "ok";  die;
}

add_action('wp_ajax_delkid', 'del_multi_kids');
add_action('wp_ajax_nopriv_delkid', 'del_multi_kids');


function edit_multi_kids($data){
    $user_id = get_current_user_id();
    $kid_id = $_REQUEST['kid_id'];
 
    global $wpdb;
    $results = $wpdb->get_results( "SELECT * FROM uDO_usermeta WHERE user_id = ".$kid_id, OBJECT );

    $res["kid_id"] = $kid_id;
    $res["user_id"] = $user_id;
    
    foreach ($results as $key => $result) {
        if($result->meta_key == "first_name")
        {
            $res["first_name"] = $result->meta_value;
        }
        if($result->meta_key == "age")
        {
            $res["age"] = $result->meta_value;
        }
        if($result->meta_key == "grade")
        {
            $res["grade"] = $result->meta_value;
        }
    }

    echo json_encode($res);
    die;
}

add_action('wp_ajax_editkid', 'edit_multi_kids');
add_action('wp_ajax_nopriv_editkid', 'edit_multi_kids');

 

function update_multi_kids($data){

    $user_id = get_current_user_id();
    echo $first_name = $_REQUEST['first_name'];
    echo $age = $_REQUEST['age'];
    echo $grade = $_REQUEST['grade'];


    $current_kid_id = $_REQUEST['current_kid_id'];

    global $wpdb;    
    $lastid = $current_kid_id;


   $wpdb->update('uDO_usermeta', array('meta_value' => $first_name), array('user_id' => $lastid,'meta_key' => 'first_name'));

   $wpdb->update('uDO_usermeta', array('meta_value' => $age), array('user_id' => $lastid,'meta_key' => 'age'));

   $wpdb->update('uDO_usermeta', array('meta_value' => $grade), array('user_id' => $lastid,'meta_key' => 'grade'));
  
  
    echo $lastid;  die;
}

add_action('wp_ajax_updatekid', 'update_multi_kids');
add_action('wp_ajax_nopriv_updatekid', 'update_multi_kids'); 