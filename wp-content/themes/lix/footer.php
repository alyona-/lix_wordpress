<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lix
 */

?>

	<!--</div><!-- #content -->

<!--Подвал-->
<footer>
<?php wp_enqueue_script('test_js', get_template_directory_uri() . '/test_2/test_js.js'); ?>
    <div class="footer_1">
        <img src="<?php bloginfo('template_url')?>/img/footer_logo.png" class="footer_logo" alt="подвал лого">
        <div>
            <a class="footer__icon footer__icon_1" href="#"></a>
            <a class="footer__icon footer__icon_2" href="#"></a>
            <a class="footer__icon footer__icon_3" href="#"></a>
            <a class="footer__icon footer__icon_4" href="#"></a>
            <a class="footer__icon footer__icon_5" href="#"></a>
        </div>

        <p class="footer_text">
			<?php echo get_custom('address'); ?>
        </p>
    </div>

    <div class="footer_2">
        <span>Design by</span>
        <span><?php echo get_custom("email"); ?></span>
    </div>
	
	<?php echo get_num_queries(); ?> queries in <?php timer_stop(1); ?> seconds.

</footer>




</body>
</html>
