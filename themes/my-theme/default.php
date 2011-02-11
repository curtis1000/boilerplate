<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));

$area = array();

$this->inc('elements/head.php');?>

<? $this->inc('elements/header.php'); ?>

<div id="main" class="content clearfix">
	<aside class="sidebar">
		<?php $area['Sidebar'] = new Area('Sidebar'); $area['Sidebar']->display($c); ?>
	</aside>
	<section>
		<?php $area['Main'] = new Area('Main'); $area['Main']->display($c); ?>
	</section>
</div>
<? $this->inc('elements/footer.php'); ?>
