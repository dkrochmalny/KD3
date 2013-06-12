<?php $this->pageTitle=Yii::app()->name; ?>

<?php $me = CHtml::image(assetUrl('/images/me.png'), 'Daniel Krochmalny', array('class'=>'top-shadow'));?>
<?php $kitty = CHtml::image(assetUrl('/images/kitty.png'), 'Bad UX Kitty');?>
<?php $open = CHtml::image(assetUrl('/images/open.png'), 'Open Source Rocks!');?>
<!--<h1>Hi. I'm Daniel. I build stuff.</h1>-->
<div id='slider' class='swipe'>
  <div class='swipe-wrap'>
    <div>
		<div class="slide-content">
			<h4>Hi. I'm Daniel. I build stuff for the web.</h4>		
		</div>
		<?php echo $me; ?>			
	</div>
    <div>
		<?php echo $kitty; ?>
		<div class="slide-content inset">
			<h4><?php echo CHtml::link('Bad UX (User Experience)', 'http://uxdesign.smashingmagazine.com/2010/10/05/what-is-user-experience-design-overview-tools-and-resources/', array('target'=>'_blank')); ?> makes me all...</h4>		
		</div>
	</div>
    <div>
		<?php echo $open; ?>
		<div class="slide-content inset">
			<h4>I like open source technologies...</h4>		
		</div>
	</div>
  </div>
</div>

<?php
cs()->registerScriptFile(baseUrl('/js/swipe.js'));

cs()->registerScript('swipe',"
	window.mySwipe = new Swipe(document.getElementById('slider'), {
	  startSlide: 0,
	  speed: 1000,
	  auto: 5000,
	  continuous: true,
	  disableScroll: false,
	  stopPropagation: false,
	  callback: function(index, elem) {},
	  transitionEnd: function(index, elem) {}
	});
");
?>