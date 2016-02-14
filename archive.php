<?php get_header(); ?>
	<main id="main" class="main">
		<div class="main-inner">
			<div class="content-wrap">
				<div id="content" class="content">
					<div id="posts" class="posts-collapse">
						<?php if(have_posts()) : ?>
							<div class="collection-title">
								<h2>
									<?php if(is_category()) : ?>
										<?php single_cat_title() ?> <small>分类</small>
									<?php elseif(is_tag()) : ?>
										<?php single_tag_title() ?> <small>标签</small>
									<?php endif; ?>
								</h2>
							</div>
							<?php while (have_posts()) : the_post();
								get_template_part('template/content', 'archive');
								endwhile;
								the_posts_pagination(array(
									'prev_text'	=> '<i class="fa fa-angle-left"></i>',
									'next_text'	=> '<i class="fa fa-angle-right"></i>'
								));
							?>
						<?php else : ?>
							<h1>无内容</h1>
						<?php endif; ?>
					</div>
				</div>
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
					<section class="site-overview sidebar-panel sidebar-panel-active ">
						<?php include 'inc/site-overview.php'; ?>
					</section>
				</div>
			</aside>
		</div>
	</main>
<?php get_footer(); ?>