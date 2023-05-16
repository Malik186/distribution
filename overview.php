<?php
if (!isset($site)) {
    $site = $_SERVER['DOCUMENT_ROOT'];
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($page_title)) {
    $page_title = "overview";
}

// --------- display all errors --------- 
include_once "$site/error_toggle.php";
// ----------- error display ------------

// start session
include_once "$site/sessions.php";
// --session --

include "$site/boards/boards.overview/overview.php";
