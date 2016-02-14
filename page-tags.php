<?php
/*
Template Name: Tags
*/ 
?>
<?php get_header(); ?>

	<main id="main" class="main">
		<div class="main-inner">
			<div class="content-wrap">
				<div id="content" class="content">
					<section id="posts" class="posts-expand">
						<div class="tag-cloud">
							<div class="tag-cloud-title">目前共计 <?php echo $count_tags = wp_count_terms('post_tag'); ?> 个标签</div>
							<div class="tag-cloud-tags">
								<?php wp_tag_cloud(array(
										'largest' => '26',
										'number' => '0',
										'order' => 'RAND'
									)
								); ?>
							</div>
						</div>
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