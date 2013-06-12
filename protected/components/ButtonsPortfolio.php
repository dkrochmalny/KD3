<?php
class ButtonsPortfolio extends CWidget	{
	public function run()	{				
		$action = action();
		echo "<div class=\"submenu\">";
		$this->widget('zii.widgets.CMenu', array(
			'items'=>array(
				array(
					'label'=>'web', 
					'url'=>array('site/websites'),
					'active'=>$action=='websites',
				),
				array(
					'label'=>'logos', 
					'url'=>array('site/logos'),
					'active'=>$action=='logos',
				),
				array(	
					'label'=>'paintings', 
					'url'=>array('site/paintings'),
					'active'=>$action=='paintings',
				),
			),
		));
		echo "</div>";
	}


}
?>