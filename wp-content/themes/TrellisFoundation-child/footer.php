</section>
<footer>
  <div class="row">
    <div class="column">
      <ul>
        <?php if(get_field('facebook', 'option')) { ?>
          <li><a href="<?php the_field('facebook', 'option'); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/TrellisFoundation-child/assets/img/icons/facebook.png" alt=""></a></li>
        <?php } ?>
        <?php if(get_field('instagram', 'option')) { ?>
          <li><a href="<?php the_field('instagram', 'option'); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/TrellisFoundation-child/assets/img/icons/instagram.png" alt=""></a></li>
        <?php } ?>
        <?php if(get_field('twitter', 'option')) { ?>
          <li><a href="<?php the_field('twitter', 'option'); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/TrellisFoundation-child/assets/img/icons/twitter.png" alt=""></a></li>
        <?php } ?>
        <?php if(get_field('linkedin', 'option')) { ?>
          <li><a href="<?php the_field('linkedin', 'option'); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/TrellisFoundation-child/assets/img/icons/linkedin.png" alt=""></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</footer>
<?php do_action('foundationPress_layout_end'); ?>
</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
