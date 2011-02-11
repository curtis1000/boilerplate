<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
$area = array();?>
<header class="sitewidth clearfix">
	<div id="logo">
		<?php
			$block = Block::getByName('Company_Logo');	
			if( $block && $block->bID ) $block->display();	 
			else echo '<h1><a href="/">'.SITE.'</a></h1>';
		?>
	</div>
	<div id="tagline">
		<?php 
			$block = Block::getByName('Tagline');  
			if( $block && $block->bID ) $block->display();
			else{
				$area['Tagline'] = new Area('Tagline');
				$area['Tagline']->display($c);
			}
		?>
	</div>
	<nav id="topnav">
		<?php 
			$block = Block::getByName('Top_Nav');  
			if( $block && $block->bID ) $block->display();
			else{
				$area['Top_Nav'] = new Area('Top Nav');
				$area['Top_Nav']->display($c);
			}
		?>
	</div>
</header>