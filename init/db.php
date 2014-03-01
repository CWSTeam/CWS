<?php 

DEFINE("DATABASE_USER", "root");
DEFINE("DATABASE_PASSWORD", "molecux101!");
DEFINE("DATABASE_HOST", "localhost");
DEFINE("DATABASE_NAME", "site");

date_default_timezone_set("UTC");

ini_set("SMPT", "mail.google.com");

define("EMAIL", "michaellindsay@gmail.com");

DEFINE("WEBSITE_URL", "localhost");

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);

if(!dbc){
trigger_error("Couldn't connect to MySQL: " . mysqli_connect_error());
}

?>