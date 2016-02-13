
<?php snippet('menu') ?>
<?php snippet('header') ?>

<div class = "row bottomBar">
<div class = "columns small-12 large-12">
<h1>My Work</h1>	
</div>
</div><!--row-->	



<div class = "row ixd">	
	<?php $rowFull = 0; ?>
	<?php foreach($page->children() AS $thisChild): ?>
		<?php if($rowFull%3==0 && $rowFull!==0){echo "</div><!--row--><div class = 'row ixd'>";} ?>
		<div class = "columns large-4 small-12 artBox">
		
			
			<a href = "<?php echo $thisChild->url() ?>"><img src="<?php print_r($thisChild->images()->first()->thumb()->url()) ?>" alt="<?php print_r($thisChild->images()->first()->alt()) ?>" /></a>
			<h2><a href = "<?php echo $thisChild->url() ?>"><?php echo $thisChild->title() ?></a></h2>
			<p> <?php echo $thisChild->short() ?></p>
		
		</div><!--/artbox-->
		<?php $rowFull++; ?>
	<?php endforeach ?>
</div><!--row-->

<div class = "row">
	
</div><!--row-->

	
<?php snippet('footer') ?>