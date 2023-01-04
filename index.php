<?php
/**
 * Base Page
 * it melts all required files and base sections
 */
if(!empty($_SERVER['REQUEST_URI'])) {
        $_GET['template'] = trim($_SERVER['REQUEST_URI'], '/');
}

require_once 'functions.php';

$template = $_GET['template'];
$sections = get_sections($template);

// Include doctype and metas
foreach ($sections as $section => $id) {
    include_section($section, $id);
}
