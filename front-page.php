<?php get_header(); ?>
<?php global $up_options;?>
<section class="slider">
  <div class="col-xs-12">
  	<?php #putRevSlider("Front Page Slider") ?>
  </div>
</section>

<section class="section1">
	<div class="container">
		<div class="row">
		  <div class="col-xs-12"> 
		      	<?php if ($up_options->section1_title != ''): echo "<h1>".$up_options->section1_title."</h1><span></span>"; endif; ?>
		      	<?php if ($up_options->section1_subtitle != ''): echo "<h5>".$up_options->section1_subtitle."</h5>"; endif; ?>
		    	<p><?php echo $up_options->section1_content ?></p>
		  </div>
		</div>
	</div>
</section>

<section class="section2">
	<div class="container">
		<div class="row">
		  <div class="col-xs-12"> 
		      	<?php if ($up_options->section2_title != ''): echo "<h1>".$up_options->section2_title."</h1><span></span>"; endif; ?>
		      	<?php if ($up_options->section2_subtitle != ''): echo "<h5>".$up_options->section2_subtitle."</h5>"; endif; ?>
		    	<p><?php echo $up_options->section2_content ?></p>
		  </div>
		</div>
	</div>
</section>

<section class="section3">
	<div class="container">
		<div class="row">
		  <div class="col-xs-12"> 
		      	<?php if ($up_options->section3_title != ''): echo "<h1>".$up_options->section3_title."</h1><span></span>"; endif; ?>
		      	<?php if ($up_options->section3_subtitle != ''): echo "<h5>".$up_options->section3_subtitle."</h5>"; endif; ?>
		    	<p><?php echo $up_options->section3_content ?></p>
		  </div>
		</div>
	</div>
</section>

<section class="section4">
	<div class="container">
		<div class="row">
		  <div class="col-xs-12"> 
		      	<?php if ($up_options->section4_title != ''): echo "<h1>".$up_options->section4_title."</h1><span></span>"; endif; ?>
		      	<?php if ($up_options->section4_subtitle != ''): echo "<h5>".$up_options->section4_subtitle."</h5>"; endif; ?>
		    	<p><?php echo $up_options->section4_content ?></p>
		  </div>
		</div>
	</div>
</section>

<section class="section5">
	<div class="container">
		<div class="row">
		  <div class="col-xs-12"> 
		      	<?php if ($up_options->section5_title != ''): echo "<h1>".$up_options->section5_title."</h1><span></span>"; endif; ?>
		      	<?php if ($up_options->section5_subtitle != ''): echo "<h5>".$up_options->section5_subtitle."</h5>"; endif; ?>
		    	<p><?php echo $up_options->section5_content ?></p>
		  </div>
		</div>
	</div>
</section>

<?php get_footer(); ?>