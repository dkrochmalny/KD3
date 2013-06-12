<?php $this->widget('ButtonsPortfolio'); ?>
<h3>Websites</h3>
<div id="carousel">
	<?php $this->widget('bootstrap.widgets.TbCarousel', array(
		'items'=>array(
			array('image'=>Yii::app()->baseUrl.'/images/slides/slide_amerson.png', 'label'=>CHtml::link('Amerson Home Repair',"http://www.amersonhomerepair.com/", array('target'=>'_blank')), 'caption'=>'I worked with Mr Amerson to create a custom logo and website design for Amerson Home Repair.'),
			array('image'=>Yii::app()->baseUrl.'/images/slides/slide_flick.png', 'label'=>CHtml::link('Flick University',"http://www.flick-university.com/", array('target'=>'_blank')), 'caption'=>'Flick University is a pet project with a buddy of mine that will eventually become a Disc Golf How To handbook.'),
			array('image'=>Yii::app()->baseUrl.'/images/slides/slide_cart.png', 'label'=>CHtml::link('The CART Connection',"http://www.thecartconnection.com/", array('target'=>'_blank')), 'caption'=>'The CART Connection is a website for a local stenographer. She uses it as a resume and a login for her clients to access remote sessions.'),
			array('image'=>Yii::app()->baseUrl.'/images/slides/slide_take2.png', 'label'=>'Take 2 Computing', 'caption'=>'Take 2 Computing is a local repair shop I provided a logo and website mockups for.'),			
		),
	)); ?>
</div>