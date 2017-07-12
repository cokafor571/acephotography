<?php
/**
 * Displays header media for ace photography
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

	<div class="custom-header-media">
        <?php 
        if ( is_front_page() ) {
            the_custom_header_markup();
        } else {
            echo do_shortcode("[metaslider id=45]");
        }
        ?>
	</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
