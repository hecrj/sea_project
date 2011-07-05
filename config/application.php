<?php

# Set your web domain
define('WEB_DOMAIN', $_SERVER['HTTP_HOST']);

# Set true if you want to activate ORM database
define('ORM_ACTIVE', true);
# Set ORM path in vendor folder -> default: php-activerecord
define('ORM_PATH', 'php-activerecord');
# Set ORM main file in vendor/ORM folder -> default: vendor/php-activerecord/ActiveRecord.php
define('ORM_MAIN_FILE', 'ActiveRecord.php');
# Set ORM config faile in config folder
define('ORM_CONFIG_FILE', 'database.php');
define('PHP_ACTIVERECORD_AUTOLOAD_DISABLE', true);

?>