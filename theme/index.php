<?php get_header(); ?>

<div class="posts">
  <?php while(have_posts()) : the_post(); ?>
    <?php get_template_part('partials/post'); ?>
  <?php endwhile; ?>
</div>

<button>Load more</button>

<?php get_footer(); ?>
