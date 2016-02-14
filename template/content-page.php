<article class="post">
	<header class="post-header">
		<h1 class="post-title">
			<?php the_title(); ?>
		</h1>
		<div class="post-meta">
			<span class="post-time">
				<span class="post-meta-item-icon"><i class="fa fa-calendar-o"></i></span>
				<span class="post-meta-item-text">发表于</span>
				<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y-m-d') ?></time>
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
	<footer class="post-footer"></footer>
</article>