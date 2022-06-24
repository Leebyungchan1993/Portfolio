<?php
$db_host = "lsj5078.cafe24.com"; 
$db_user = "lsj5078";
$db_passwd = "lsj930710!!";
$db_name = "lsj5078";

$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
mysqli_query($conn,"set names utf8");

// if (mysqli_connect_errno()){
//     echo "MySQL 연결 오류: " . mysqli_connect_error();
//     exit;
// } else {
//     echo "DB : \"$db_name\"에 접속 성공.<br/>";
// }
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- 파비콘 -->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/fav/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/fav//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/img/fav//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- 파비콘 -->

    <!-- 전페이지 공통 CSS -->
    <link rel="stylesheet" href="assets/css/common/common.css">
    <link rel="stylesheet" href="assets/css/common/button.css">
    <link rel="stylesheet" href="assets/css/common/style.css">
    <link rel="stylesheet" href="assets/css/scss/layout.css">
    <!-- 전페이지 공통 CSS -->
    
    <!-- Material-icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Material-icon -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <script src="assets/js/lib/jquery.js"></script>
    <script src="assets/js/layout/header.js"></script>
    <script src="assets/js/layout/common.js"></script>