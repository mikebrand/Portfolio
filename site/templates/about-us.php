
<?php snippet('menu') ?>
<?php snippet('submenu') ?>
<?php snippet('header') ?>
<div class = "row">
	<section class="content">
		<div class="columns small-12 large-4 headingSpace">
			<?php $image = $page->images()->find('01.jpg') ?>
			<img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" />
		</div>
	  <article class = "small-12 large-6  large-offset-1 columns">
	    <h1><?php echo html($page->title()) ?></h1>
	    <?php echo kirbytext($page->text()) ?>
  </article>

</section>
</div><!--row-->
<?php snippet('footer') ?>