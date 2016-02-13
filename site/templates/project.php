
<?php snippet('menu') ?>
<?php snippet('header') ?>
<div class = "row">
	<section class="content">
	
	  <article class = "small-12 large-6 columns">
	    <h1><?php echo html($page->title()) ?></h1>
	    
	    <?php echo kirbytext($page->text()) ?>
	    
	  </article>
	  <div class = "skillsList small-12 large-3 large-offset-2 columns">
		  <div>
			  <h2>Skills Used</h2>
			  <?php echo kirbytext($page->skills()) ?>
		  </div>
		  <div>
			<?php if($page->next()){ ?>
			    <p>Next Project:<br />
			    <a class = "button"  href = "<?php echo $page->next()->url(); ?>"><?php echo $page->next()->title(); ?></A></p>
		    <?php } ?>
		    
		    <?php if($page->prev()){ ?>
			    <p>Previous Project: <br />
			    <a class = "button" href = "<?php echo $page->prev()->url(); ?>"><?php echo $page->prev()->title(); ?></A></p>
		    <?php } ?>
	    </div>
	  </div><!--/skillsList-->
	
	  
	</section>
</div><!--/row-->
<div class = "row">
	<ul class="clearing-thumbs" data-clearing>
	<?php foreach($page->images() AS $thisImage): ?>
		<?php if($thisImage->name() != "Logo"){ ?>
		<li class = "columns small-12 large-4"><a href="<?php print_r($thisImage->url()) ?>"><img data-caption="<?php print_r($thisImage->caption()) ?>" src="<?php print_r($thisImage->thumb()->url()) ?>"></a></li>
		<?php } ?>
	<?php endforeach ?>
	</ul>
</div><!--/row-->
	

<?php snippet('footer') ?>
