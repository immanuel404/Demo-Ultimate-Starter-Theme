<?php get_header(); ?>

  <section clazss="showcase2">
    <div class="container">
      <h1><?php echo get_theme_mod('showcase_heading2', 'Ultimate Starter Theme'); ?></h1>
      <p><?php echo get_theme_mod('showcase_text2', 'A easy-to-use WordPress Theme that provides all the essentials. With a Modern Design & Clean User Experience.'); ?></p>
    </div>
    <!-- IMAGE -->
    <style>
    .showcase2 {
    background: url(<?php echo get_theme_mod('showcase_image2', get_bloginfo('template_url'). '/usa2.jpg') ?>)no-repeat center center;}
    </style>
  </section>
  <!-- BODY BEGINS WITH SIDEBAR -->
  <div class="container1">
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

        <h2 class="postHead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="postMeta"><?php echo get_the_date(); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">by <?php the_author(); ?></a></p>
        <?php if(has_post_thumbnail()) : ?>
          <div class="thumb">
        <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>
        <!-- DISPLAY EXCERPT -->
        <?php the_excerpt(); ?>
        <!-- TO DISPLAY FULL-CONTENT "the_content();" -->
      <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Posts Found'); ?></p>
    <?php endif; ?></aside>
    </div>
</div>

<?php get_footer() ?>
