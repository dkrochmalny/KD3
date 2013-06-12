<?php $this->widget('ButtonsPortfolio'); ?>
<h3>Selected works</h3>
<div id="content-art" class="hide">
<?php	
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/jackie.jpg'),
		'image' => baseUrl('/images/art/portrait_jackie.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/EZs-painting.jpg'),
		'image' => baseUrl('/images/art/paintings_frog.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/busride.jpg'),
		'image' => baseUrl('/images/art/paintings_busride.jpg'),
		'title' => '',
		'group' => 'paintings'
	));	
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/oil-pastel.jpg'),
		'image' => baseUrl('/images/art/paintings_oil-pastel-girl.jpg'),
		'title' => '',
		'group' => 'paintings'
	));	
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/eden.jpg'),
		'image' => baseUrl('/images/art/paintings_eden.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/self.jpg'),
		'image' => baseUrl('/images/art/paintings_shape-face.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/cig-girl.jpg'),
		'image' => baseUrl('/images/art/paintings_cigarette-girl.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/pastel-room.jpg'),
		'image' => baseUrl('/images/art/paintings_van-gogh-room.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/bjork.jpg'),
		'image' => baseUrl('/images/art/portrait_bjork.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/breast.jpg'),
		'image' => baseUrl('/images/art/paintings_naked-reclining.jpg'),
		'title' => '',
		'group' => 'paintings'
	));

	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/chalk-man.jpg'),
		'image' => baseUrl('/images/art/paintings_blue-cat-man.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/christian.jpg'),
		'image' => baseUrl('/images/art/portrait_christian-bookshelf.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/yellow-motion.jpg'),
		'image' => baseUrl('/images/art/paintings_yellow.jpg'),
		'title' => '',
		'group' => 'paintings'
	));

	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/shoe.jpg'),
		'image' => baseUrl('/images/art/paintings_shoe.jpg'),
		'title' => '',
		'group' => 'paintings'
	));


	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/no-hair.jpg'),
		'image' => baseUrl('/images/art/paintings_female-no-hair.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/meadow-and-bailey.jpg'),
		'image' => baseUrl('/images/art/portrait_meadow-and-bailey.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/jazzmen.jpg'),
		'image' => baseUrl('/images/art/paintings_jazzy-dudes.jpg'),
		'title' => '',
		'group' => 'paintings'
	));
	$this->widget('ext.lyiightbox.LyiightBox2', array(
		'thumbnail' =>  baseUrl('/images/art/thumbs/girl-in-window.jpg'),
		'image' => baseUrl('/images/art/paintings_girl-in-window.jpg'),
		'title' => '',
		'group' => 'paintings'
	));	
?>
</div>
<?php
cs()->registerScript('disable lightbox', "
var lightboxOnResize = function lightboxOnResize() {
    if ($(window).width() < 600) {
        $('a[rel=\"lightbox[_paintings]\"]')
            .removeProp('rel')
            .addClass('lightboxRemoved');
    } else {
        $('a.lightboxRemoved').prop('rel', 'lightbox');
    }
}
var art= $('#content-art');

$(document).ready(lightboxOnResize, art.show());
$(window).resize(lightboxOnResize);
");
?>
