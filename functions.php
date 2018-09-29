<?php
// カスタムヘッダー画像を設置
$custom_header_defaults = array(
    'dafault-image'=>get_bloginfo('template_url').'/images/home/top.png',
    'width'=>1000,
    'height'=>500,
    'header-text'=>false,
);
add_theme_support( 'custom-header', $custom_header_defaults );