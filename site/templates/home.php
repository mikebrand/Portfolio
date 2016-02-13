
<?php snippet('menu') ?>
<?php snippet('submenu') ?>
<?php snippet('header') ?>
<div class = "row">
	<div class = "introBox bottomBar columns small-12 large-12">
		<ul>
			<li><a href = "about-us">Hi there, I'm <em>Mike Brand</em>,</a></li>
			<li><a href = "interaction">I do <em>interaction</em> design.</a></li>
		</ul>
	</div><!--/IntroText-->
</div><!--row-->	


<div class = "row bottomBar examples">	
	<?php foreach($page->images() AS $thisImage): ?>
		<div class = "columns large-4 small-12 artBox">
		
			
			<a href = "<?php echo $thisImage->link() ?>"><img src="<?php echo $thisImage->url() ?>" alt="<?php echo $thisImage->alt() ?>" /></a> 
			<h2><a href = "<?php echo $thisImage->link() ?>"><?php echo $thisImage->title() ?></a></h2>
			<p> <?php echo $thisImage->description() ?> <a href = "<?php echo $thisImage->link() ?>">Read more</a></p>
		
		</div><!--/artbox-->
	<?php endforeach ?>
</div><!--row-->

<div class = "row">
	<div class = "columns small-12 large-12">
	<h1 class = "">Skills</h1>
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
			<li>OmniGraffle</li>
			
		</ul>
	</div><!--/skill-->
</div><!--row-->

	
<?php snippet('footer') ?>