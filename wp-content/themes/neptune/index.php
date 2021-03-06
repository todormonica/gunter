<?php
/*
 * @package WordPress
 * @subpackage neptune
*/

// Define plugin's admin variables
$general_option = get_option('general_option');

get_header();

?>
	<div id="breadcrumb">
		<div class="breadcrumb-item">
			<a href="<?php bloginfo('home'); ?>"><img id="breadcrumb-home" src="<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/breadcrumb_home.png" /></a>
		</div>
		<img class='breadcrumb-arrow' src='<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/breadcrumb_arrow.png' />
		<div class="breadcrumb-item">
			<?php echo $general_option['blog_title']; ?>
		</div>
	</div>
	
	<div id="page-header-container">
		<div id="page-header">
			<div class="PageTitle"><h1><?php echo $general_option['blog_title']; ?></h1></div>
			<?php if ($general_option['blog_subtitle']) { ?>
				<div class="SubTitle">
					<h2><?php echo $general_option['blog_subtitle']; ?></h2>
				</div>
			<?php } ?>
		</div>
	</div>

	<div id="content">
		<div id="page">
			<?php get_sidebar(); ?>
			<div id="narrowcolumn">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<div class="blogtitle"><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
							<div class="postmetadata">Posted in <span class="highlight"><?php the_category(', ') ?></span> on <?php the_time('F jS, Y') ?> <span class="highlight"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span></div>
							<div class="excerpt-pic">
								<?php the_post_thumbnail(); ?>
								<?php $postimageurl = get_post_meta($post->ID, 'post-img', true); if ($postimageurl) { ?>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php echo $postimageurl; ?>" alt="Post Pic" /></a>
								<?php } ?>
							</div>
							<div class="entry">
								<?php the_excerpt(); ?>
							</div> <!-- entry -->
							<div class="readmore">
								<a href="<?php the_permalink(); ?>">More</a>
								<div class="Clear"></div>
							</div>
							<div class="separator-container">
								<div class="separator">
								</div>
							</div>
						</div> <!-- post -->
					<?php endwhile; ?>
					<?php if(function_exists('wp_pagenavi')) {
							wp_pagenavi();
						} else{?>
							<div class="entry-navigation">
								<div class="Left"><?php next_posts_link('&laquo; Older Entries') ?></div>
								<div class="Right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
								<div class="Clear"></div>
							</div>
					<?php } ?>
				<?php else : ?>
					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					<?php get_search_form(); ?>
				<?php endif; ?>
				<div class="Clear"></div>
			</div> <!-- narrowcolumn -->
			<div class="Clear"></div>
		</div> <!-- page -->
	</div> <!-- content -->



<?php get_footer(); ?>
