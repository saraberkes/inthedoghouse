<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
     <div class="simple_page">

    <?php if(have_posts()) while(have_posts()) : the_post(); ?>

   <?php the_content(); ?>

 <?php endwhile; ?>
 </div>
 </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>