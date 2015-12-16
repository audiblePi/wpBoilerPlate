<footer role="contentinfo">
 	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php dynamic_sidebar('Footer Widget Left'); ?>
			</div>
			<div class="col-md-4">
	      		<?php dynamic_sidebar('Footer Widget Center'); ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar('Footer Widget Right'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<p>&copy; Copyright <?php echo date('Y'); ?><a href=""> Website Design & Development</a> by Pippin Design</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>