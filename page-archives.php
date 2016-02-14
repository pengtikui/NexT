<?php
/*
Template Name: Archives
*/ 
?>
<?php get_header(); ?>

	<main id="main" class="main">
		<div class="main-inner">
			<div class="content-wrap">
				<div id="content" class="content">
					<section id="posts" class="posts-collapse">
						<span class="archive-move-on"></span>
						<span class="archive-page-counter">非常好，继续加油！</span>
				        <?php 
				        	$the_query = new WP_Query('posts_per_page=-1&ignore_sticky_posts=1');
				        	$year = date('Y');
				        	while ($the_query->have_posts()) : $the_query->the_post();
				        		if (get_the_time('Y') == $year) { ?>
									<div class="collection-title">
										<h2 class="archive-year motion-element"><?php the_time('Y'); ?></h2>
									</div>
				        			<?php $year--;
				        		} ?>
								<article class="post post-type-normal">
									<header class="post-header">
										<h1 class="post-title">
											<a href="<?php the_permalink(); ?>" class="post-title-link"><?php the_title(); ?></a>
										</h1>
										<div class="post-meta">
											<time class="post-time" datetime="<?php the_time('Y-m-d'); ?>" title="<?php the_time('Y-m-d'); ?>"><?php the_time('m-d'); ?></time>
										</div>
									</header>
								</article>
				        	<?php endwhile;
				        ?>
					</section>
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