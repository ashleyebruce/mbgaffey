<?php
/*
Template Name: Canvas
*/
get_header(); ?>
<?php $heroImage = get_field('hero_image'); ?>
    <section class="hero-text" style="background-image: url(<?php echo $heroImage['url']; ?>)">
        <h1><?php the_field('hero_title'); ?></h1>
    </section>
<section class="canvas">
    <div class="row">
        <div class="column">
            <ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1">
                <?php
                if( have_rows('canvas') ):
                    $count = 1;
                    while ( have_rows('canvas') ) : the_row();
                        ?>
                        <li>
                            <a href="#" class="inner" data-reveal-id="myModal<?php echo $count; ?>">
                                <div class="img">
                                    <?php $listImage = get_sub_field('image'); ?>
                                    <img src="<?php echo $listImage['url']; ?>" alt="<?php $listImage['alt']; ?>">
                                </div>
                                <div class="title">
                                    <?php the_sub_field('title'); ?>
                                </div>
                                <div class="description">
                                    <?php the_sub_field('description'); ?>
                                </div>
                                <div class="size">
                                    <?php the_sub_field('size'); ?>
                                </div>
                            </a>
                        </li>
                        <div id="myModal<?php echo $count; ?>" class="reveal-modal canvas-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                            <div class="inner">
                                <div class="img">
                                    <?php $modalImage = get_sub_field('modal_image'); ?>
                                    <img src="<?php echo $modalImage['url']; ?>" alt="<?php $modalImage['alt']; ?>">
                                </div>
                                <div class="info">
                                    <div class="title"><?php the_sub_field('title'); ?></div>
                                    <div class="description"><?php the_sub_field('description'); ?></div>
                                    <div class="size"><?php the_sub_field('size'); ?></div>
                                    <div class="long-description"><?php the_sub_field('long_description'); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php
                    $count ++;
                    endwhile;
                else :
                endif;
                ?>
            </ul>
        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        $('section.canvas ul li .inner .img').height($('section.canvas ul li .inner .img').width());
        $( window ).resize(function() {
            $('section.canvas ul li .inner .img').height($('section.canvas ul li .inner .img').width());
        });
    });
</script>
<?php get_footer(); ?>