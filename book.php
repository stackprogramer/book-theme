<?php
/*
Template Name: Book Page
*/
?>
<?php
get_header(); ?>


<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
	<h2> <?php echo __('Books','bookpost');?> </h2>
		<?php  $query = new WP_Query( array( 'post_type' => 'books', 'paged' => $paged ) );
		if ( $query->have_posts() ) : ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="entry">
		<h2 class="title">
		<?php 
	
		the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' );
		?>
		</h2>
		<?php 
		   

		?>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
		<!-- show pagination here -->
		<?php else : ?>
		<!-- show 404 error here -->
		<?php endif; ?>

    </main>
  </div>
</div>
<?php get_footer();?>
