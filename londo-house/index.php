<?php
require_once 'config/config.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowed_pages = ['home', 'accommodation', 'facilities', 'gallery', 'contact'];

if (!in_array($page, $allowed_pages)) {
    $page = '404';
}

require_once 'includes/header.php';
include 'pages/' . $page . '.php';
require_once 'includes/footer.php';
?>
