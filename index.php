<?php

require './core/backend.php';
//ini_set('display_errors',1);


if (in_array($_GET['lang'], ['uz', 'ru', 'en'])) {
	$_SESSION['site_lang'] = $_GET['lang'];
}

if (!in_array($_GET['lang'], ['uz', 'ru', 'en'])) {
	$_GET['lang'] = $_SESSION['site_lang'];
}

if (!in_array($_GET['page'], ["main", "about", "projects", "blog", "contact"])) {
	$_GET['page'] = $_SESSION['page_site'];
}

if ($_SESSION['page_site'] == NULL) {
	$_SESSION['page_site'] = 'main';
}
if ($_SESSION['site_lang'] == NULL) {
	$_SESSION['site_lang'] = 'en';
}

if ($_GET['page'] == NULL) {
	$_GET['page'] = 'main';
}

if ($_GET['lang'] == NULL) {
	$_GET['lang'] = 'en';
}




require($_SERVER["DOCUMENT_ROOT"] . "/core/template_evo/header_" . $_GET['lang'] . ".php");

require 'pages/' . $_GET['page'] . '/' . $_GET['page'] . '_view.php';

require($_SERVER["DOCUMENT_ROOT"] . "/core/template_evo/footer_" . $_GET['lang'] . ".php");
