<?php
/*
Template Name: Home
*/
get_header(); ?>
<?php $heroImage = get_field('hero_image'); ?>
<section class="hero" style="background-image: url(<?php echo $heroImage['url']; ?>)">
</section>
<?php get_footer(); ?>