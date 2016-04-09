<article class="post">
	<header class="post-header">
		<h1 class="post-title">
			<a class="post-title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		<div class="post-meta">
			<span class="post-time">
				<span class="post-meta-item-icon"><i class="fa fa-calendar-o"></i></span>
				<span class="post-meta-item-text">发表于</span>
				<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y-m-d') ?></time>
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
				<span class="post-comments-count"><?php comments_number("暂无评论","1条评论","%条评论"); ?></span>
			</span>
		</div>
	</header>
	<div class="post-body">
		<?php the_content(''); ?>
		<div class="post-more-link text-center">
			<a class="btn" href="<?php the_permalink(); ?>">阅读全文 »</a>
		</div>
	</div>
	<footer class="post-footer">
		<div class="post-eof"></div>
	</footer>
</article>