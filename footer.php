    <footer id="footer" class="footer">
        <div class="footer-inner">
            <div class="copyright">
                <?php
                    $next_site_year = get_option('next_site_year');
                    $current_year = date(Y);
                    if ($next_site_year >= $current_year) {
                        $output_year = "<span>".$current_year."</span>";
                    }
                    else{
                        $output_year = "<span>".$next_site_year."</span> - "."<span>".$current_year."</span>";
                    }
                ?>
                &copy; <?php echo $output_year; ?> <span class="with-love"> <i class="icon-next-heart fa fa-heart"></i></span>
                <span class="author"><?php $username = get_option('next_author','admin'); echo get_profile( 'display_name', $username ); ?></span>
            </div>
            <div class="powered-by">Powered by <a href="//cn.wordpress.org" target="_blank">WordPress</a></div>
            <div class="theme-info">Theme <a href="https://github.com/pengtikui/NexT" target="_blank">NexT WP</a></div>
            <div style="display:none"><?php echo get_option('next_analyze_code'); ?></div>
        </div>
    </footer>
    <div class="back-to-top"><i class="fa fa-arrow-up"></i></div>
</div>
<script type="text/javascript">
    if (Object.prototype.toString.call(window.Promise) !== '[object Function]') {
        window.Promise = null;
    }
</script>
<script src="//cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/fastclick/1.0.6/fastclick.min.js"></script>
<script src="//cdn.bootcss.com/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script src="//cdn.bootcss.com/velocity/1.2.3/velocity.min.js"></script>
<script src="//cdn.bootcss.com/velocity/1.2.3/velocity.ui.min.js"></script>
<script src="//cdn.bootcss.com/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
<script src="<?php bloginfo('template_url'); ?>/statics/js/utils.js"></script>
<script src="<?php bloginfo('template_url'); ?>/statics/js/motion.js"></script>
<script src="<?php bloginfo('template_url'); ?>/statics/js/affix.js"></script>
<?php if ( get_option('next_scheme', 'muse') == 'pisces' ) { ?>
<script src="<?php bloginfo('template_url'); ?>/statics/js/pisces.js"></script>
<?php } ?>

<?php if ( is_single() || is_page() ) { ?>
<script src="<?php bloginfo('template_url'); ?>/statics/js/scrollspy.js"></script>
<script src="<?php bloginfo('template_url'); ?>/statics/js/post-details.js"></script>
<?php } ?>

<!-- 归档页 -->
<script type="text/javascript" id="motion.page.archive">
    $('.archive-year').velocity('transition.slideLeftIn');
</script>

<script src="<?php bloginfo('template_url'); ?>/statics/js/bootstrap.js"></script>
<!-- highlight.js -->
<script src="//cdn.bootcss.com/highlight.js/9.1.0/highlight.min.js"></script>
<script>
    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
    });
</script>
</body>
</html>