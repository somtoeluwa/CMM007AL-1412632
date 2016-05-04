<?php
/**
 * Created by PhpStorm.
 * User: 1412632
 * Date: 04/05/2016
 * Time: 10:31
 */

define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'b326ad686e3783');
define('DB_PASSWORD', 'c06ca0b7');
define('DB_DATABASE', 'CMM007ALDB-1412632');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>