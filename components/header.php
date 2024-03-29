<?php
//Connect Database
include ('config/db.php');

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ./');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ./");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webify.com.ng">
    <title>Dashboard | EasyFit&reg;</title>

    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="./assets/images/easy-favicon.png" />
</head>
<body class="sidebar-fixed">

    <div class="container-scroller">