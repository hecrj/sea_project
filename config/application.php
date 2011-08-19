<?php


# Set your web domain
const WEB_DOMAIN = 'lahectarea.com';
# Set webmasters email
const WEB_EMAIL = 'your@email.com';

# Set any secure server key to add entropy to hashes
const SERVER_KEY = 'I am a Key, change me at your will';

# Define session names
const SESSION_NAME = 'SID';
const SESSION_SECURE = 'SID_SECURE';

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