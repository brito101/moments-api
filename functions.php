<?php

/** Remove route default */
// remove_action('rest_api_init', 'create_initial_rest_routs', 99);

/** Change API name route */
function change_api()
{
  return 'json';
}

add_filter('rest_url_prefix', 'change_api');

/** ADD endpoint */
$dirbase = get_template_directory();

require_once $dirbase . '/endpoints/user_post.php';
require_once $dirbase . '/endpoints/user_get.php';
require_once $dirbase . '/endpoints/photo_post.php';
require_once $dirbase . '/endpoints/photo_delete.php';
require_once $dirbase . '/endpoints/comment_post.php';

/** Change size images on upload */
update_option('large_size_w', 1000);
update_option('large_size_h', 1000);
update_option('large_crop', 1);

/** token time expiration */
function expire_token()
{
  return time() + (60 * 60 * 24);
}

add_action('jwt_auth_expire', 'expire_token');
