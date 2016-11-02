<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package    WordPress
 * @subpackage Twenty_Fifteen
 * @since      Twenty Fifteen 1.0
 */
?>

<?php get_header(); ?>
<div class="row">
  <main class="small-100 columns" role="main">

    <?php if (have_posts()): ?>

      <?php if (is_home() && !is_front_page()): ?>
        <header>
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
      <?php endif; ?>

      <?php while (have_posts()): the_post(); ?>

        <?php get_template_part('content', get_post_format()); ?>

      <?php endwhile ?>

      <?php
      the_posts_pagination(
        array (
          'prev_text'          => __('Previous page', 'twentyfifteen'),
          'next_text'          => __('Next page', 'twentyfifteen'),
          'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyfifteen') . ' </span>',
        )
      );
      ?>

    <?php else: ?>
      <?php get_template_part('content', 'none'); ?>
    <?php endif ?>
  </main>
</div>
<?php get_footer(); ?>