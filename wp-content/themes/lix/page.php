<?php get_header(); ?>


<div  class="page">
<!--Левая часть-->
<?php get_sidebar(); ?>




<!--Контент-->
<div class="content">
    <!--div class="content_up">       
        <img class="content_up__img" all="контент изображение" src="<?php the_field("image"); ?>">
    </div>
    <div class="content_down">
        
    </div>
</div-->


	<div class="submenu">
	<!--?php 
			global $post;
			$pagename=$post->post_name;
			switch ($pagename) {
				case "private":
					echo wp_nav_menu( array('menu' => 'private', 'menu_class' => 'menuclass1' ));
				break;
				case "corporate":
					echo wp_nav_menu( array('menu' => 'corporate', 'menu_class' => 'menuclass2' ));
				break;
				case "education":
					echo wp_nav_menu( array('menu' => 'education', 'menu_class' => 'menuclass3' ));
				break;
				default:
				echo wp_nav_menu( array('menu' => 'secondmenu', 'menu_class' => 'secondmenu' ));
			}
	?-->
</div>

     <h3 class="content_down__title"><?php the_title(); ?></h3>
           <?php the_post(); ?>
           <?php the_content(); ?>


</div>
</div>

 <?php get_footer(); ?>