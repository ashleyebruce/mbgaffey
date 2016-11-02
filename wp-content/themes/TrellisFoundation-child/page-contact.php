<?php
/*
Template Name: Contact
*/
get_header(); ?>
<?php $heroImage = get_field('hero_image'); ?>
<section class="hero-text" style="background-image: url(<?php echo $heroImage['url']; ?>)">
    <h1><?php the_field('hero_title'); ?></h1>
</section>
<section class="contact-us">
    <div class="row">
        <div class="column medium-6">
            <h3><?php the_field('left_title'); ?></h3>
            <div class="address"><?php the_field('address'); ?></div>
        </div>
        <div class="column medium-6">
            <h3><?php the_field('right_title'); ?></h3>
            <div class="contact-details"><?php the_field('contact_details'); ?></div>
        </div>

        <div class="column medium-12">
            <div class="wysiwyg">
                <?php the_field('wysiwyg'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
