<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Links
*/
?>

<?php get_header(); ?>

<div id="content" class="widecolumn deskman">

<h3>Links:</h3>
<ul>
<?php wp_list_bookmarks(); ?>
</ul>

</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
