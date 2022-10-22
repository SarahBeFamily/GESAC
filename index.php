<?php
/**
 * Base Page
 * it melts all required files and base sections
 */

require_once 'functions.php';

// Include doctype and metas
include_section('meta');

// Include the header template
include_section('header'); 

// Include the page content
include_content_page($_GET['template']);

// Include the footer template
include_section('footer');