<?php $this->widget('ButtonsPortfolio'); ?>
<h3>Logos</h3>
<div id="carousel-logos">
	<?php $this->widget('bootstrap.widgets.TbCarousel', array(
		'items'=>array(
			array('image'=>baseUrl('/images/logos/illusionz.png')),
			array('image'=>baseUrl('/images/logos/amerson.png')),
			array('image'=>baseUrl('/images/logos/gcog.png')),
			array('image'=>baseUrl('/images/logos/flick.png')),			
			array('image'=>baseUrl('/images/logos/mgm.png')),
			array('image'=>baseUrl('/images/logos/take2.png')),
			array('image'=>baseUrl('/images/logos/teksoft.png')),			
		),
	)); ?>
</div>