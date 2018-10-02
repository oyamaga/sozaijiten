<?php
/**
 *  カスタムヘッダー画像を設置
 */
$custom_header_defaults = array(
    'dafault-image'=>get_bloginfo('template_url').'/images/home/top.png',
    // 'width'=>1000px,
    // 'height'=>500px,
    'header-text'=>false,
);
add_theme_support( 'custom-header', $custom_header_defaults );

/**
 * カスタムメニューの配置
 */
register_nav_menu('header-menu','ヘッダーメニュー' );