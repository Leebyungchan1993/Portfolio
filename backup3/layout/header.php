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

    <!-- 전페이지 공통 CSS -->
    <link rel="stylesheet" href="assets/css/common/common.css">
    <link rel="stylesheet" href="assets/css/common/button.css">
    <link rel="stylesheet" href="assets/css/common/style.css">
    <link rel="stylesheet" href="assets/css/scss/layout.css">
    <!-- 전페이지 공통 CSS -->

    <!-- 개별 CSS -->
    <link rel="stylesheet" href="assets/css/scss/main.css">
    <link rel="stylesheet" href="assets/css/scss/work.css">
    <link rel="stylesheet" href="assets/css/scss/contact.css">
    <link rel="stylesheet" href="assets/css/scss/career.css">
    <link rel="stylesheet" href="assets/css/scss/board.css">
    <link rel="stylesheet" href="assets/css/scss/board/write.css">
    <link rel="stylesheet" href="assets/css/scss/board_detail.css">
    <link rel="stylesheet" href="assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugin/swiper-bundle.min.css">
    <!-- 개별 CSS -->
    
    <!-- Material-icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Material-icon -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <script src="assets/js/lib/jquery.js"></script>
    <script src="assets/js/layout/header.js"></script>
    <script src="assets/js/layout/common.js"></script>
    <script src="assets/js/plugin/swiper-bundle.min.js"></script>
</head>