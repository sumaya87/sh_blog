</div>
	</div>
	<!-- End Content -->
	<footer id="page-footer">
	</footer>
</div>
<?php if (of_get_option('diary_analytics') <> "") { 
		echo stripslashes(stripslashes(of_get_option('diary_analytics'))); 
	} ?>
</body>
<?php wp_footer();?>
</html>
