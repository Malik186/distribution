<?php
if (!isset($site)) {
    $site = $_SERVER['DOCUMENT_ROOT'];
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$page_title = "welcome";

// --------- display all errors --------- 
include_once "$site/error_toggle.php";
// ----------- error display ------------

// start session
// include_once "$site/sessions.php"; //TODO -> this will creeate forever loop
// --session --

include "$site/pages/authentication/SignInUp/SignInUp.php";
