<?php get_header(); ?>


<div  class="page">
<!--Левая часть-->
<?php get_sidebar(); ?>




<!--Контент-->
<div class="content">
    <div class="content_up">
        <img class="maps_lix" all="контент изображение" src="<?php the_field("image"); ?>">

    </div>
    <div class="content_down">
        <h3 class="content_down__title"><?php the_title(); ?></h3>           
           <?php the_post(); ?>
           <?php the_content(); ?>

    </div>
</div>

</div>


   <?php get_footer(); ?>