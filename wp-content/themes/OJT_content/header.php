<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <title>OJT_kh</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- <div class="first"> -->
    <header>
        <!-- <div class="header-main">
            <a class="header-box" href="">menu1</a>
            <a class="header-box" href="">menu2</a>
            <a class="header-box" href="">menu3</a>
            <a class="header-box" href="">menu4</a>
        </div> -->
        <?php wp_nav_menu(); ?>
        <!-- 　ハンバーガーメニュー　 -->
        <input type="checkbox" id="hamburger">
        <label for="hamburger" class="bun">
            <span class="pate"></span>
        </label>
    </header>