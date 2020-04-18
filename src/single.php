<?php get_header(); ?>

<div class="contaziner1">
  <!--  SIDE BAR -->
  <div class="right">
    <aside style="float: right; left: 10px;" class="col-md-4 blog-sidebar">
      <div class="p-4 mb-4 bg-light rounded">
      <?php if(is_active_sidebar('page-sidebar')): ?>
        <?php dynamic_sidebar('page-sidebar'); ?>
      <?php endif; ?>
      </div>
    </aside>
  </div>
  <!-- CONTENT -->
  <div class="left">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>

        <h2 class="postHead"><?php the_title(); ?></h2>
        <p class="postMeta"><?php the_date(); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">by <?php the_author(); ?></a></p>
        <?php if(has_post_thumbnail()) : ?>
          <div class="thumb">
        <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>
        <!-- DISPLAY EXCERPT -->
         <h2 class="postContent"><?php the_content(); ?></h2>
        <!-- TO DISPLAY FULL-CONTENT "the_content();" -->
      <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Posts Found'); ?></p>
    <?php endif; ?></aside>
    </div>
    <hr>
    <?php comments_template(); ?>
  </div>
</div>

<?php get_footer() ?>






