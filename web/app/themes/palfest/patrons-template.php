<?php
/**
 * Template Name: Patrons Template
 */
?>
<div class = "container">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>
