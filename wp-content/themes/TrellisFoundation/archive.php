<?php get_header(); ?>
<div class="row">
  <!-- Row for main content area -->
  <main class="small-100 large-65 columns" role="main">

    <?php if (have_posts()): ?>
      <?php /* Start the Loop */ ?>
      <?php while (have_posts()): the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
      <?php endwhile; ?>
    <?php else: ?>
      <?php get_template_part('content', 'none'); ?>
    <?php endif ?>

    <?php /* Display navigation to next/previous pages when applicable */ ?>
    <?php if (function_exists('FoundationPress_pagination')): ?>
      <?php FoundationPress_pagination(); ?>
    <?php elseif (is_paged()): ?>
      <nav id="post-nav">
        <div class="post-previous">
          <?php next_posts_link(__('&larr; Older posts', 'FoundationPress')); ?>
        </div>
        <div class="post-next">
          <?php previous_posts_link(__('Newer posts &rarr;', 'FoundationPress')); ?>
        </div>
      </nav>
    <?php endif ?>

  </main>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>