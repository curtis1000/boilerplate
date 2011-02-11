<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
?>
<!doctype html> <? //html5, bitches ?>

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<!--  -->
	
	<link rel="stylesheet" href="<?php echo $this->getThemePath() ?>/media/css/style.css?v=2"><? // implied media: all. v, for caching ?>
	<link rel="stylesheet" href="<?php  echo $this->getStyleSheet('typography.css')?>" />
	
	<?php Loader::element('header_required'); ?>
	
	<script src="/js/modernizr-1.6.min.js"></script>

</head>

<body id="<?= $c->getCollectionName() ?>" class="<? echo $c->isEditMode() ? "edit-mode" : "not-edit-mode" ?>">