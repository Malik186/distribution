<?php
if (!isset($site)) {
    $site = $_SERVER['DOCUMENT_ROOT'];
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$page_title = "Project 1";

// --------- display all errors --------- 
include_once "$site/error_toggle.php";
// ----------- error display ------------

// start session
include_once "$site/sessions.php";
// --session --

include "$site/overview.php";
