<?php
/*
Template Name: Taxonomy Page
*/
?>
<?php
get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
	<h2> <?php echo __('Publishers','bookpost');?> </h2>
    <?php $categories = get_categories('taxonomy=Publishers&post_type=books'); ?>
        <?php foreach ($categories as $category) : ?>
          <a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?></a><br>
    <?php endforeach; ?>
	
	
	<h2> <?php echo __('Authors','bookpost');?> </h2>
    <?php $categories = get_categories('taxonomy=Authors&post_type=books'); ?>
        <?php foreach ($categories as $category) : ?>
          <a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?></a><br>
    <?php endforeach; ?>

    </main>
  </div>
</div>
<?php get_footer();?>
