<?php


# Set your web domain
define('WEB_DOMAIN', $_SERVER['HTTP_HOST']);
# Set webmasters email
define('WEB_EMAIL', 'your@email.com');

# Set any secure server key to add entropy to hashes
define('SERVER_KEY', 'I am a Key, change me at your will');

# Define session names
define('SESSION_NAME', 'SID');
define('SESSION_SECURE', 'SID_SECURE');

/**
 * Set vendors to load like:
 * $vendors = array(
 * 		'VENDOR_MAIN_FILE'	=>	'VENDOR_PATH'
 * );
 * 
 * VENDOR_MAIN_FILE does not include .php extension.
 * VENDOR_PATH is the path inside vendor/ directory.
 *
 * @var array
 */
$vendors = array(
	'ActiveRecord'	=>	'php-activerecord'
);

?>