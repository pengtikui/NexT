<div class="site-author motion-element">
	<img class="site-author-image" src="<?php bloginfo('template_url'); ?>/statics/images/avatar.jpg" alt="avatar">
	<p class="site-author-name"><?php $username = get_option('next_author','admin'); echo get_profile( 'display_name', $username ); ?></p>
	<p class="site-description motion-element"><?php $username = get_option('next_author','admin'); echo get_profile( 'description', $username ); ?></p>
</div>
<nav class="site-state motion-element">
	<div class="site-state-item site-state-posts">
		<span class="site-state-item-count"><?php $count_posts = wp_count_posts(); echo $published_posts =$count_posts->publish;?></span>
		<span class="site-state-item-name">文章</span>
	</div>
	<div class="site-state-item site-state-categories">
		<span class="site-state-item-count"><?php echo $count_categories = wp_count_terms('category'); ?></span>
		<span class="site-state-item-name">分类</span>
	</div>
	<div class="site-state-item site-state-tags">
		<a href="<?php bloginfo('url'); ?>/tags">
			<span class="site-state-item-count"><?php echo $count_tags = wp_count_terms('post_tag'); ?></span>
			<span class="site-state-item-name">标签</span>
		</a>
	</div>
</nav>
<?php if ( get_option( 'next_rss', 'display' ) == 'display' ) { ?>
<div class="feed-link motion-element">
	<a href="<?php bloginfo('url'); ?>/feed"><i class="fa fa-rss"></i> RSS</a>
</div>
<?php } ?>
<div class="links-of-author motion-element">
	<?php $menuParameters = array(
			'theme_location' => 'social_links',
			'fallback_cb' => false,
			'container'	=> false,
			'echo'	=> false,
			'items_wrap' => '%3$s',
			'depth'	=> 0,
			'before' => '<span class="links-of-author-item">',
			'after' => '</span>'
		);
		echo strip_tags(wp_nav_menu($menuParameters), '<a>,<i>,<span>');
	?>
</div>
<div class="links-of-author motion-element">
    <h5><?php _e('友情链接', 'next') ?></h5>
    <?php $menuParameters = array(
			'theme_location' => 'links',
			'fallback_cb' => false,
			'container'	=> false,
			'echo'	=> false,
			'items_wrap' => '%3$s',
			'depth'	=> 0,
			'before' => '<span class="links-of-author-item">',
			'after' => '</span>'
		);
		echo strip_tags(wp_nav_menu($menuParameters), '<a>,<i>,<span>');
	?>
</div>
