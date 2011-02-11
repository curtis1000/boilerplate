<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
?>

	<footer>
		<?php 
			$block = Block::getByName('Footer');  
			if( $block && $block->bID ) $block->display();
			else{
				$area['Footer'] = new Area('Footer');
				$area['Footer']->display($c);
			}
		?>
	</footer>
	
	<?php   Loader::element('footer_required'); ?>
	
	<!--[if lt IE 7 ]>
		<script src="<?php echo $this->getThemePath() ?>/media/js/dd_belatedpng.js"></script>
		<script> DD_belatedPNG.fix('img, .png_bg'); </script>
	<![endif]-->
	
	
</body>
</html>