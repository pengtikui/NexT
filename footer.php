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
    <div class="back-to-top"></div>
</div>
<script src="//cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/fastclick/1.0.6/fastclick.min.js"></script>
<script src="//cdn.bootcss.com/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script src="//cdn.bootcss.com/velocity/1.2.3/velocity.min.js"></script>
<script src="//cdn.bootcss.com/velocity/1.2.3/velocity.ui.min.js"></script>
<script src="//cdn.bootcss.com/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
<script src="<?php bloginfo('template_url'); ?>/statics/js/utils.js"></script>
<script src="<?php bloginfo('template_url'); ?>/statics/js/motion.js"></script>
<script src="<?php bloginfo('template_url'); ?>/statics/js/affix.js"></script>
<script src="<?php bloginfo('template_url'); ?>/statics/js/scrollspy.js"></script>
<?php if ( get_option('next_scheme', 'muse') == 'pisces' ) { ?>
<script src="<?php bloginfo('template_url'); ?>/statics/js/pisces.js"></script>
<?php } ?>
<script type="text/javascript" id="sidebar.toc.highlight">
  $(document).ready(function () {
    var tocSelector = '.post-toc';
    var $tocSelector = $(tocSelector);
    var activeCurrentSelector = '.active-current';

    $tocSelector
      .on('activate.bs.scrollspy', function () {
        var $currentActiveElement = $(tocSelector + ' .active').last();

        removeCurrentActiveClass();
        $currentActiveElement.addClass('active-current');

        $tocSelector[0].scrollTop = $currentActiveElement.position().top;
      })
      .on('clear.bs.scrollspy', function () {
        removeCurrentActiveClass();
      });

    function removeCurrentActiveClass () {
      $(tocSelector + ' ' + activeCurrentSelector)
        .removeClass(activeCurrentSelector.substring(1));
    }

    function processTOC () {
      getTOCMaxHeight();
      toggleTOCOverflowIndicators();
    }

    function getTOCMaxHeight () {
      var height = $('.sidebar').height() -
                   $tocSelector.position().top -
                   $('.post-toc-indicator-bottom').height();

      $tocSelector.css('height', height);

      return height;
    }

    function toggleTOCOverflowIndicators () {
      tocOverflowIndicator(
        '.post-toc-indicator-top',
        $tocSelector.scrollTop() > 0 ? 'show' : 'hide'
      );

      tocOverflowIndicator(
        '.post-toc-indicator-bottom',
        $tocSelector.scrollTop() >= $tocSelector.find('ol').height() - $tocSelector.height() ? 'hide' : 'show'
      )
    }

    $(document).on('sidebar.motion.complete', function () {
      processTOC();
    });

    $('body').scrollspy({ target: tocSelector });
    $(window).on('resize', function () {
      if ( $('.sidebar').hasClass('sidebar-active') ) {
        processTOC();
      }
    });

    onScroll($tocSelector);

    function onScroll (element) {
      element.on('mousewheel DOMMouseScroll', function (event) {
          var oe = event.originalEvent;
          var delta = oe.wheelDelta || -oe.detail;

          this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
          event.preventDefault();

          toggleTOCOverflowIndicators();
      });
    }

    function tocOverflowIndicator (indicator, action) {
      var $indicator = $(indicator);
      var opacity = action === 'show' ? 1 : 0;
      $indicator.velocity ?
        $indicator.velocity('stop').velocity({
          opacity: opacity
        }, { duration: 100 }) :
        $indicator.stop().animate({
          opacity: opacity
        }, 100);
    }

  });
</script>
<script type="text/javascript" id="sidebar.nav">
  $(document).ready(function () {
    var html = $('html');
    var TAB_ANIMATE_DURATION = 200;
    var hasVelocity = $.isFunction(html.velocity);

    $('.sidebar-nav li').on('click', function () {
      var item = $(this);
      var activeTabClassName = 'sidebar-nav-active';
      var activePanelClassName = 'sidebar-panel-active';
      if (item.hasClass(activeTabClassName)) {
        return;
      }

      var currentTarget = $('.' + activePanelClassName);
      var target = $('.' + item.data('target'));

      hasVelocity ?
        currentTarget.velocity('transition.slideUpOut', TAB_ANIMATE_DURATION, function () {
          target
            .velocity('stop')
            .velocity('transition.slideDownIn', TAB_ANIMATE_DURATION)
            .addClass(activePanelClassName);
        }) :
        currentTarget.animate({ opacity: 0 }, TAB_ANIMATE_DURATION, function () {
          currentTarget.hide();
          target
            .stop()
            .css({'opacity': 0, 'display': 'block'})
            .animate({ opacity: 1 }, TAB_ANIMATE_DURATION, function () {
              currentTarget.removeClass(activePanelClassName);
              target.addClass(activePanelClassName);
            });
        });

      item.siblings().removeClass(activeTabClassName);
      item.addClass(activeTabClassName);
    });

    $('.post-toc a').on('click', function (e) {
      e.preventDefault();
      var targetSelector = NexT.utils.escapeSelector(this.getAttribute('href'));
      var offset = $(targetSelector).offset().top;
      hasVelocity ?
        html.velocity('stop').velocity('scroll', {
          offset: offset  + 'px',
          mobileHA: false
        }) :
        $('html, body').stop().animate({
          scrollTop: offset
        }, 500);
    });

    // Expand sidebar on post detail page by default, when post has a toc.
    NexT.motion.middleWares.sidebar = function () {
      var $tocContent = $('.post-toc-content');

      if (CONFIG.sidebar === 'post') {
        if ($tocContent.length > 0 && $tocContent.html().trim().length > 0) {
          NexT.utils.displaySidebar();
        }
      }
    };
  });
</script>

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