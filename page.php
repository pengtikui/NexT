<?php get_header(); ?>
	<main id="main" class="main">
		<div class="main-inner">
			<div class="content-wrap">
				<div id="content" class="content">
					<section id="posts" class="posts-expand">
						<?php
							if ( have_posts() ) :
								while ( have_posts() ) : the_post();
									get_template_part( 'template/content', 'page');
								endwhile;
							else :
								echo "Sorry, no posts were found";
							endif;
						?>
					</section>
					<?php 
						the_posts_pagination( array(
						'prev_text'	=> '<i class="fa fa-angle-left"></i>',
						'next_text'	=> '<i class="fa fa-angle-right"></i>'
						) );
					?>
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
					<section class="site-overview sidebar-panel sidebar-panel-active">
						<?php include 'inc/site-overview.php'; ?>
					</section>
				</div>
			</aside>
		</div>
	</main>
<?php get_footer(); ?>