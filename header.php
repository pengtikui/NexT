<!DOCTYPE html>
<html class="theme-next <?php echo get_option('next_scheme', 'muse'); ?> use-motion" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#222">
    <meta name="renderer" content="webkit">
    <title><?php if (is_home()||is_search()){ bloginfo('name');} else{wp_title(''); echo ' | '; bloginfo('name');} ?></title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('url'); ?>/favicon.ico">
    <!-- jQuery fancybox CSS -->
    <link rel="stylesheet" href="//cdn.bootcss.com/fancybox/2.1.5/jquery.fancybox.min.css">
    <!-- Google Font -->
    <!-- <link href="//fonts.useso.com/css?family=Lato:300,400,700,400italic&subset=latin,latin-ext" rel="stylesheet" type="text/css"> -->
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/statics/css/<?php echo get_option('next_scheme', 'muse'); ?>.css">
    <!-- style.css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Highlight -->
    <link rel="stylesheet" href="//cdn.bootcss.com/highlight.js/9.1.0/styles/github-gist.min.css">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php if ( get_option('next_scheme', 'muse') == 'pisces' )  ?>
    <script type="text/javascript" id="hexo.configuration">
        var NexT = window.NexT || {};
        var CONFIG = {
            scheme: <?php if ( get_option('next_scheme', 'muse') == 'pisces' ) { echo "'Pisces'"; } if ( get_option('next_scheme', 'muse') == 'muse' ) { echo "'Muse'"; } if ( get_option('next_scheme', 'muse') == 'mist' ) { echo "'Mist'"; } ?>,
            sidebar: {"position":"left","display":"post"},
            fancybox: true,
            motion: true
        };
    </script>
    <?php wp_head(); ?>
</head>
<body>
<div class="container one-collumn sidebar-position-left <?php if(is_home()){echo "page-home";} if(is_single()){echo "page-post-detail";} if(is_page()){echo "page-archive";} ?>">
    <div class="headband"></div>
    <header id="header" class="header">
        <div class="header-inner">
            <div class="site-meta">
                <div class="custom-logo-site-title">
                    <a href="<?php bloginfo('url'); ?>" class="brand" rel="start">
                        <span class="logo-line-before"><i style="transform: translateX(100%);"></i></span>
                        <span class="site-title"><?php bloginfo('name'); ?></span>
                        <span class="logo-line-after"><i style="transform: translateX(-100%);"></i></span>
                    </a>
                </div>
                <p class="site-subtitle"><?php bloginfo('description'); ?></p>
            </div>
            <div class="site-nav-toggle">
                <button>
                    <span class="btn-bar"></span>
                    <span class="btn-bar"></span>
                    <span class="btn-bar"></span>
                </button>
            </div>
            <?php wp_nav_menu( array(
                'theme_location' => 'site_nav',
                'fallback_cb' => false,
                'container' => 'nav',
                'container_class' => 'site-nav',
                'menu_class' => 'menu menu-left',
                'menu_id' => 'menu'
            ));
            ?>
        </div>
    </header>