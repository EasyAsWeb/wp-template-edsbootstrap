<?php
 /**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edsBootstrap
 *<?php if (has_custom_logo()) { ?>
 *         <!-- Footer Logo -->
 *         <div class="logo">
 *             <?php the_custom_logo();?>
 *         </div>
 *         <!-- /Footer Logo -->
 *         <?php }?>
 *         <!-- /Footer Text -->
 */

$edsbootstrap_options = get_theme_mod( 'edsbootstrap_theme_options' );

?>
<!-- Footer -->
<footer class="footer section-small">
    <div class="container">
    	<?php if ( is_active_sidebar( 'footer' ) ) { ?>
        <div class="row">
			<?php dynamic_sidebar( 'footer' ); ?>
        </div>
        <?php } ?>
        <div class="row">
       		 <div class="col-md-12 text-align-center">
                <hr>

                <!-- Copyright -->
                <p class="copyright">
                   <?php echo esc_html( $edsbootstrap_options['footer']['copyright'] );?>
				<?php
				printf( esc_html__( 'Powered By: %2$s.', 'edsbootstrap' ), 'edsbootstrap', '<a href="' . esc_url( __( 'https://easyasweb.co.nz', 'edsbootstrap' ) ) . '" target="_blank">' . esc_html__( 'Easy As Web Solutions', 'edsbootstrap' ) . '</a>' ); ?>
                </p>
                <!-- /Copyright -->

                <!-- Footer Social -->
                <?php
				$edsbootstrap_options = get_theme_mod( 'edsbootstrap_theme_options' );
				if (  $edsbootstrap_options['social'] ):
				?>
                <ul class="social-inline">
                    <?php foreach ($edsbootstrap_options['social'] as $key => $social):?>
                            <li><a href="<?php echo esc_url( $social );?>" class="fa fa-fw <?php echo esc_html($key);?>" target="_blank"></a></li>
                          <?php endforeach;?>
                </ul>
                <?php endif;?>
                <!-- /Footer Social -->

            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- Scroll To Top -->
<div id="scroll-to-top" class="scroll-to-top">
    <i class="icon fa fa-angle-up"></i>
</div>
<!-- /Scroll To Top -->

<?php wp_footer(); ?>

</body>
</html>
