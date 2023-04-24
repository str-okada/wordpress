<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class();?>>

<?php get_template_part('includes/header'); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/about-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1><?php the_title();?></h1>
            <span class="subheading">This is what I do.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
    <?php the_content();?>  
    </div>
    </div>
  </div>

  <hr>

  <?php get_template_part('includes/footer') ?>
  <?php get_footer(); ?>

</body>

</html>
