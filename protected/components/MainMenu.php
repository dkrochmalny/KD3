<?php
class MainMenu extends CWidget	{
	public function run()	{
		$action = action();
		echo "<div id=\"header\">";
		echo "<div id=\"mainmenu\">";
		$this->widget('bootstrap.widgets.TbNavbar',array(
			'collapse'=>true,
			'fixed'=>false,
			'brand'=>'Daniel<br /><span id="lastName">Krochmalny</span>',
			'items'=>array(
				array(
					'class'=>'bootstrap.widgets.TbMenu',
					'items'=>array(
						array(
							'label'=>'portfolio', 
							'url'=>baseUrl('site/websites'), 
							'active'=>($action == 'portfolio' || $action == 'paintings' || $action == 'logos' || $action == 'websites')
						),
						array(
							'label'=>'skills', 
							'url'=>array('skills'),
							'active'=>($action == 'skills'),
						),
						array(
							'label'=>'resume', 
							'url'=>array('resume'),
							'active'=>($action == 'resume'),
						),
						// array('label'=>'blog', 'url'=>array('resume')),
						array(
							'label'=>'contact', 
							'url'=>array('contact'),
							'active'=>($action == 'contact'),
						),
						array(
							'label'=>'login', 
							'url'=>array('login'),
							'active'=>($action == 'login'),
						),
					),
				)
			)
		));
		echo "</div>";
		echo "</div>";
	}
}


?>