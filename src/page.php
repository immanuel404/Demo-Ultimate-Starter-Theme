<?php get_header(); ?>

  <!-- BODY BEGINS -->
  <div class="flex-container">
    <!-- CONTENT -->
    <div class="left">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

          <h2 class="postHead" style="margin-bottom: 10px;"><?php the_title(); ?></h2>

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
    <!--  SIDE BAR -->
    <div class="right">
      <aside style="float: right; left: 10px;" class="col-md-11 blog-sidebar">
        <div class="p-4 mb-11 bg-light rounded">
        <?php if(is_active_sidebar('page-sidebar')): ?>
          <?php dynamic_sidebar('page-sidebar'); ?>
        <?php endif; ?>
        </div>
      </aside>
    </div>
  </div> 

<?php get_footer() ?>



