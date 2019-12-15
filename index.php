<?php
// Load autoload.
include("vendor/autoload.php");

// Load config
include("config.php");

// Set default time zone.
date_default_timezone_set(APP_TIME_ZONE);

// Load Routes.
include("route.php");