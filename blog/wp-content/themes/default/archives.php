<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="widecolumn deskman">

<?php get_search_form(); ?>

<h3>Archives by Month:</h3>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
<hr />
<h3>Archives by Subject:</h3>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

</div>

<?php get_footer(); ?>
