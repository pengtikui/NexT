<article class="post">
	<header class="post-header">
		<h1 class="post-title">
			<?php the_title(); ?>
		</h1>
		<div class="post-meta">
			<span class="post-time">
				<span class="post-meta-item-icon"><i class="fa fa-calendar-o"></i></span>
				<span class="post-meta-item-text">发表于</span>
				<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y-m-d'); ?></time>
			</span>
			<span class="post-category">
				&nbsp;|&nbsp;
				<span class="post-meta-item-icon"><i class="fa fa-folder-o"></i></span>
				<span class="post-meta-item-text">分类于</span>
				<span>
					<?php the_category(', ') ?>
				</span>
			</span>
			<span class="post-comments-count">
				&nbsp;|&nbsp;
				<a href="">
					<span class="post-comments-count"><?php comments_number(); ?></span>
				</a>
			</span>
		</div>
	</header>
	<div class="post-body">
		<?php the_content(''); ?>
	</div>
	<footer class="post-footer">
		<div class="post-tags">
			<?php the_tags(' ', ' '); ?>
		</div>
		<div class="post-nav">
			<div class="post-nav-next post-nav-item"><?php next_post_link('<i class="fa fa-chevron-left"></i> %link'); ?></div>
			<div class="post-nav-prev post-nav-item"><?php previous_post_link('%link <i class="fa fa-chevron-right"></i>'); ?></div>
		</div>
	</footer>
</article>