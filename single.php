<?php get_header(); ?>
<main id="main" class="main">
    <div class="main-inner">
        <div class="content-wrap">
            <div id="content" class="content">
                <div id="posts" class="posts-expand">
                    <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template/content', 'single');
                            endwhile;
                        else :
                            echo "Sorry, no posts were found";
                        endif;
                    ?>
                </div>
                <?php 
                    the_posts_pagination( array(
                        'prev_text' => '<i class="fa fa-angle-left"></i>',
                        'next_text' => '<i class="fa fa-angle-right"></i>'
                    ));
                ?>
            </div>
            <?php comments_template(); ?>
        </div>
        <div class="sidebar-toggle">
            <div class="sidebar-toggle-line-wrap">
                <span class="sidebar-toggle-line sidebar-toggle-line-first"></span>
                <span class="sidebar-toggle-line sidebar-toggle-line-middle"></span>
                <span class="sidebar-toggle-line sidebar-toggle-line-last"></span>
            </div>
        </div>
        <aside id="sidebar" class="sidebar">
            <div class="sidebar-inner">
                <ul class="sidebar-nav motion-element">
                    <li class="sidebar-nav-toc sidebar-nav-active" data-target="post-toc-wrap">文章目录</li>
                    <li class="sidebar-nav-overview" data-target="site-overview">站点概览</li>
                </ul>
                <section class="site-overview sidebar-panel">
                    <?php include 'inc/site-overview.php'; ?>
                </section>
                <section class="post-toc-wrap motion-element sidebar-panel sidebar-panel-active">
                    <div class="post-toc-indicator-top post-toc-indicator"></div>
                    <div class="post-toc"><p class="post-toc-empty">此功能稍后到来</p></div>
                    <div class="post-toc-indicator-bottom post-toc-indicator"></div>
                </section>
            </div>
        </aside>
    </div>
</main>
<?php get_footer(); ?>