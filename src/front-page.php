<?php get_header(); ?>

  <!-- TEXT & BUTTONS -->
  <section class="showcazse">
    <div class="container">
      <h1><?php echo get_theme_mod('showcase_heading', 'Ultimate Starter Theme'); ?></h1>
      <p><?php echo get_theme_mod('showcase_text', 'A easy-to-use WordPress Theme that provides all the essentials. With a Modern Design & Clean User Experience.'); ?></p>
      <a href="<?php echo get_theme_mod('btn_url', 'http://test.com')?> "class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Customize'); ?></a>
    </div>
  </section>
  
  <style>
  .showcase {
    background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url'). '/usa1.jpg') ?>)no-repeat center center;
    height: 95%;
    background-size: cover;
    text-align: center;
    color: white;
    overflow-y: hidden;
  }
  .showcase h1 {
    font-size: 60px;
    padding-top: 60px;
    padding-left: 10px;
    padding-right: 10px;
  }
  .showcase p {
    font-size: 25px;
    margin-bottom: 50px;
  }
  body, html {
    background-color: #243D41;
    height: 100%;
    margin: 0;
  }
  </style>
    <?php wp_footer(); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </html>