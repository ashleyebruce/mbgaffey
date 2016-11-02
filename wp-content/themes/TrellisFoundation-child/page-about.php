<?php
/*
Template Name: About
*/
get_header(); ?>
<?php $heroImage = get_field('hero_image'); ?>
    <section class="hero-text" style="background-image: url(<?php echo $heroImage['url']; ?>)">
        <h1><?php the_field('hero_title'); ?></h1>
    </section>
    <section class="about-me">
        <div class="row">
            <div class="column">
                <h2><?php the_field('about_quote'); ?></h2>
                <ul>
                    <?php
                    if( have_rows('about_me') ):
                        while ( have_rows('about_me') ) : the_row();
                            ?>
                            <li>
                                <div class="title">
                                    <?php the_sub_field('title'); ?>
                                </div>
                                <div class="description">
                                    <?php the_sub_field('description'); ?>
                                </div>
                            </li>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </section>
<?php get_footer(); ?>