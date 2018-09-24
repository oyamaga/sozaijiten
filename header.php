<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" type="text/css" />

<title>
    <?php 
    if (!is_home() ) {
        wp_title(' - ', true, 'right'); 
    }
    bloginfo();
    ?></title>
<?php wp_head(); ?>
</head>
<body class="home">
    <header class="container">
        <div class="siteTitle">
            <h1><a href="/"><?php bloginfo("name"); ?></a></h1>
            <p class="description"><?php bloginfo('description'); ?></p>
            <form action="" method="get" class="searchform">
                <input type="text" value="" name="s" id="s" placeholder="サイト内検索">
                <input type="submit" id="searchSubmit" value="">
            </form>
        </div>
    </header>

    <div class="homeVisual"><span>test</span></div>

    <nav class="globalNavi">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ホテル紹介</a></li>
            <li><a href="access.html">アクセス</a></li>
            <li><a href="contact.html">お問い合わせ</a></li>
        </ul>
    </nav><!-- /.globalNavi -->