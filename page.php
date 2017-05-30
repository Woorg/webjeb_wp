<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webjeb
 */

get_header('inner'); ?>


<main class="main">

	<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<div class="breadcrumbs">','</div>');
		}
	?>




	<div class="page__buffer"></div>


</main>



<?php
get_footer();
