
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
<!--
<div class = "row">
	<div class="columns small-12 large-4 medium social">
		<a href = "http://www.medium.com/@mikeybrand">Medium: Mikeybrand</a>
	</div>
	<div class="columns small-12 large-4 twitter social">
		<a href = "http://www.twitter.com/mikeybrand">Twitter: Mikeybrand</a>
	</div>
	<div class="columns small-12 large-4 linkedin social">
		<a href = "https://www.linkedin.com/in/brandmike">LinkedIn: Mike Brand</a>
	</div>
</div>
-->
<?php snippet('footer') ?>