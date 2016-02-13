
<?php snippet('menu') ?>
<?php snippet('header') ?>
<div class = "row">
	<section class="content">
	
	  <article class = "small-12 large-8 large-offset-2 columns">
	    <h1><?php echo html($page->title()) ?></h1>
	    <?php echo kirbytext($page->text()) ?>
	  </article>
	
	  
	</section>
</div><!--/row-->
	
<?php snippet('footer') ?>