  <footer class = "row">
    <div class ="small-4 large-2 columns">
    <a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logog.png'); ?>" alt="<?php echo html($site->title()); ?>" /></a>
    </div>
    
    
    
    
    
  </footer>

</body>

  <?php echo js("assets/js/vendor/jquery.js") ?>
  <?php echo js('assets/js/vendor/custom.modernizr.js') ?>
  <?php echo js("assets/js/foundation/foundation.js") ?>
  <?php echo js("assets/js/foundation/foundation.clearing.js") ?>

<script>
    $(document).foundation();
</script>

<script>
	 $(document).ready(function() {
		 var logoHeight = $("#logo").height();
		 $("#logo").css("padding-top", ((55-logoHeight)/2)+10);
		 
		 
  	});
  	
</script>


</html>