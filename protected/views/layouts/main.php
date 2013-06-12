<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->less->register(); ?>
	<?php
		Yii::app()->bootstrap->register();
	?>
</head>
<body>
<?php $this->widget('MainMenu');?>
<div id="wrapper">
	<div class="container" id="page">
		<?php echo $content; ?>
		<div class="clear"></div>
	</div><!-- page -->

</div>
<div id="buffer">
</div>
<div id="footer">
	Copyright &copy; <?php echo date('Y'); ?> by Daniel Krochmalny<br/>
	All Rights Reserved.<br/>
</div><!-- footer -->
</body>
</html>


