<?php get_header(); ?>
	<main class="main" id="main">
		<div class="main-inner">
			<div class="content-wrap">
				<div class="next-404 text-center">
					<h1>404</h1>
					<p>对不起，您要找到的页面不存在！</p>
					<br>
					<a href="<?php bloginfo('url'); ?>" class="btn">返回首页</a>
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