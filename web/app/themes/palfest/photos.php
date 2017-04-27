<?php
/**
 * Template Name: Photos Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<div class = "photos-title">
  <?php get_template_part('templates/page', 'header'); ?>
 </div>

 <div class = "photos-content">
  <?php get_template_part('templates/content', 'page'); ?>
 </div>

<?php endwhile; ?>
