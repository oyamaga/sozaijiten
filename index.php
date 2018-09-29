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
    ?>
</title>
<?php
wp_enqueue_script('jquery');
wp_head(); 
?>
</head>
<body>
    <header class="container">
        <div class="siteTitle">
            <h1><a href="/"><?php bloginfo("name"); ?></a></h1>
            <p class="description"><?php bloginfo('description'); ?></p>
            <form action="" method="get" class="searchform">
                <input type="text" value="" name="s" id="s" placeholder="サイト内検索">
                <input type="submit" id="searchSubmit" value="">
            </form>
        </div>
        <div class="homeVisual">
            <a href="<?php echo home_url(); ?>"><img src="<?php header_image(); ?>" /></a>
        </div>

        <nav class="globalNavi">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ホテル紹介</a></li>
                <li><a href="access.html">アクセス</a></li>
                <li><a href="contact.html">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>
    <div class="contentsWrap">
        <section class="mainContents">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()):the_post(); ?>
                    <?php the_category(); ?>
                    <?php echo get_the_date('Y年n月j日'); ?>
                    <h2><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
                    <?php the_content('and more'); ?>
                <?php endwhile; ?>
            <?php endif; ?>



        </div><!-- /.mainContents -->
        <aside class="subContents">
        <p class="bnr">
        </p>
        <div class="wrapper">
            <section class="socialBanners">
                <h2 class="hidden">関連バナー</h2>
                <div class="banners">
                    <ul>
                        <li><a href="" target="_blank"><img src="images/common/bnr_fb01.png" height="60" width="290" alt=""></a></li>
                        <li><a href="" target="_blank"><img src="images/common/bnr_tw01.png" height="60" width="290" alt=""></a></li>
                        <li><a href="" target="_blank"><img src="images/common/bnr_rss01.png" height="60" width="290" alt=""></a></li>
                    </ul>
                </div>
            </section><!-- /.socialBanners -->
        </div><!-- /.wrapper -->
        </aside>
    </div>
    <footer class="globalFooter">
        <div class="pageTop">
            <p><a href="javascript:void(0);" id="js-pagetop"><img src="images/common/pagetop01.png" height="41" width="41" alt=""></a></p>
        </div>  
        <div class="inner">
            <dl class="address">
                <dt>ホテル・技評リゾート石垣島</dt>
                <dd>〒123-4567 沖縄県石垣市0123</dd>
                <dd>TEL 0123(45)6789 / FAX 0123(45)6789</dd>
            </dl><!-- /.address -->
            <small>&copy; HOTEL GIHYO RESORT ISHIGAKI All Rights Reserved.</small>
        </div>
    </footer><!-- /.globalFooter -->
</body>
</html>
