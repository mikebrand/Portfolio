
<?php snippet('menu') ?>
<?php snippet('header') ?>

<div class = "row bottomBar">
<div class = "columns small-12 large-12">
<h1><?php echo html($page->title()) ?></h1>
</div>
</div><!--row-->	


	
	<?php foreach($page->children() AS $thisChild): ?>
		<div class = "row">	
			<h2  class = "columns large-12 small-12"><?php echo $thisChild->title() ?></h2>
		</div>	<!--/row-->
		<div class = "row">		
			<p class = "columns large-6 small-12"> <?php echo $thisChild->text() ?></p>
		</div>	<!--/row-->
		<div class = "row bottomBar">	
			<?php $imageArray = $thisChild->images() ?>
			<ul class="clearing-thumbs" data-clearing>
			<?php foreach($thisChild->images() AS $thisImage): ?>	
				
				<li class = "columns large-<?php print_r(12/count($imageArray->_)) ?> small-12 artBox">
					<a href="<?php print_r($thisImage->url()) ?>"><img data-caption="<?php print_r($thisImage->caption()) ?>" src="<?php echo $thisImage->url() ?>" alt="<?php print_r($thisImage->alt()) ?>" /></a>
				</li>
				
			<?php endforeach ?>
			</ul>
		</div>	<!--/row-->

	<?php endforeach ?>
</div><!--row-->


	
<?php snippet('footer') ?>

