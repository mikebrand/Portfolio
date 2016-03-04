
<?php snippet('menu') ?>
<?php snippet('header') ?>
<div class = "row">
	<div class = "introBox columns small-12 large-12">
		<ul>
			<li><a href = "about-us">Hi there, I'm <em>Mike Brand</em>,</a></li>
			<li><a href = "my-work">I do <em>interaction</em> design.</a></li>
		</ul>
	</div><!--/IntroText-->
</div><!--row-->	


<div class = "row">	
	<div class = "columns large-12 small-12">
		<h1 class = "bottomBar">Projects</h1>
	</div>
</div>

<div class = "row examples">	
	<?php $rowFull = 0; ?>
	<?php foreach($page->children() AS $thisChild): ?>
		<?php if($rowFull%4==0 && $rowFull!==0){echo "</div><!--row--><div class = 'row ixd'>";} ?>
		<div class = "columns large-3 small-12 artBox">
		
			
			<a href = "<?php echo $thisChild->url() ?>"><img src="<?php print_r($thisChild->images()->first()->thumb()->url()) ?>" alt="<?php print_r($thisChild->images()->first()->alt()) ?>" /></a>
			<h2><a href = "<?php echo $thisChild->url() ?>"><?php echo $thisChild->title() ?></a></h2>
			<p> <?php echo $thisChild->short() ?></p>
		
		</div><!--/artbox-->
		<?php $rowFull++; ?>
	<?php endforeach ?>
</div><!--row-->

<div class = "row">
	<div class = "columns small-12 large-12">
	<h1 class = "bottomBar">Skills</h1>
	</div>
</div>

<div class = "row skills">
	<div class = "introtext columns small-12 large-4">
		<h2>Design</h2>
		<ul>
			<li>Wireframes</li>
			<li>Pixel perfect mockups</li>
			<li>Prototyping</li>
			<li>Usability testing</li>
			<li>User research</li>
		</ul>
	</div><!--/skill-->
	<div class = "introtext columns small-12 large-4">
		<h2>Coding</h2>
		<ul>
			<li>HTML</li>
			<li>CSS</li>
			<li>Some javascript</li>
			<li>Some PHP</li>
		</ul>
	</div><!--/skill-->
	<div class = "introtext columns small-12 large-4">
		<h2>Software</h2>
		<ul>
			<li>Photoshop</li>
			<li>Illustrator</li>
			<li>Sketch</li>
			<li>Framer.js</li>
			
		</ul>
	</div><!--/skill-->
</div><!--row-->

	
<?php snippet('footer') ?>