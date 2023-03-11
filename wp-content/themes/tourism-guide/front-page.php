<?php
/**
 * The front page template file
 *
 * @package Tourism Guide
 * @subpackage tourism_guide
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php get_template_part( 'template-parts/home/latest-tour' ); ?>
	<?php get_template_part( 'template-parts/home/home-content' ); ?>
</main>

<?php get_footer();