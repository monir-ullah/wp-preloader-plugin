<?php
/*
Plugin Name: Monir Preloader
Description: Adds a preloader to your site by Monir
Version: 1.0
Author: Monir Ullah
*/
if (! defined('ABSPATH')) {
    echo 'Direct access to this file is not allowed.Monir is watching you. Check your computer you are already hakced!';
    exit;
}
function monir_preloader() {
    if (!is_admin() && $GLOBALS["pagenow"] !== "wp-login.php") {
        $delay = 1;     // seconds
        $loader = 'https://redpishi.com/wp-content/uploads/2022/06/preloader3.svg';
        $overlayColor = '#ffffff';

        echo '<div class="Preloader"><img src="' . $loader . '" alt="" style="height: 150px;"></div>
        <style>
        .Preloader {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: ' . $overlayColor . ';
            z-index: 100000;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        </style>
        <script>
        document.body.style.overflow = "hidden";
        document.addEventListener("DOMContentLoaded", () => setTimeout(function() { document.querySelector("div.Preloader").remove(); document.body.style.overflow = "visible"; }, ' . $delay . ' * 1000));
        </script>';
    }
}
add_action('init', 'monir_preloader');
