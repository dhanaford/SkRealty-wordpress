	</div><!--end wrapper-->
		

	<footer>
		<div class="wrap">
		<div class="left-col" style="border-right: none;">
		<nav>
			<div>
				<?php wp_nav_menu(array('menu' => "Main Menu")); ?>
			</div>
		</nav>
		</div>
		<div class="copy-right"><p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></p></div>
		</div>
	</footer>

	</div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
