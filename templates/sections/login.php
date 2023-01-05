<?php

$logged = login();

if(!$logged) {
    header('WWW-Authenticate: Basic realm="Gesac HTML"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Unauthorized';
    exit;
}
