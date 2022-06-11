<?php include('config/constants.php') ?>
<?php
if (!isset($_SESSION['user'])) {
    header('location:' . SITEURL . 'login.php');
}else{
    $getUriSegment = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $uri = $getUriSegment[2] == "user" ? "customers" : $getUriSegment[2];
    if($_SESSION['role'] != $uri) {
        echo "kamu tidak berhak akses halaman ini";
        exit;
    }
}
?>