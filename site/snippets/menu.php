<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width" />
  

  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/617998/803082/css/fonts.css" />
  <?php echo css('assets/styles/normalize.css') ?>
  <?php echo css('assets/styles/foundation.css') ?>
  <?php echo css('assets/styles/styles.css') ?>

</head>

<body>
<header>
	<nav class="menu row">
		<div id ="logo" <?php echo ($page->title() =="home") ? ' class="active columns small-2 large-2"' : 'class="small-2 columns large-2"'; ?>><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logog.png'); ?>" alt="<?php echo html($site->title()); ?>" /></a></div>
	  
		  <ul class="active columns small-10 large-10">
		    <?php foreach($pages->visible() AS $p): ?>
	    	<li <?php echo ($p->isOpen()) ? ' class="active"' : 'class=" "'; ?>><a href="<?php echo $p->url(); ?>"><span><?php echo html($p->title()); ?></span></a></li>
		    <?php endforeach ?>
	  </ul>
	</nav>
</header>