<?php
/*
Template Name: Refinery Menu - with PDF
*/
?>
<h1 id="page_title">MENU</h1>
<?php if (have_posts()) the_post(); ?>
<div class="menu_content">
	<div class="small_line"></div>
	<div class="one_column">
		<?php the_content();?>
	</div>
</div>
