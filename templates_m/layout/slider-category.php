<section class="cover-sliderCategory">
	<div class="slick-4">
		<?php for($i=0; $i < count($slider_category); $i++) { ?>
			<a class="item-sliderCategory" href="<?=$slider_category[$i]['type']?>/<?=$slider_category[$i]['tenkhongdau']?>-<?=$slider_category[$i]['id']?>">
				<div class="img hv-zoom">
					<?=get_photo_multi('product_danhmuc', $slider_category[$i]['type'], _upload_sanpham_l, $slider_category[$i]['photo'], "350x380/1/")?>
				</div>
				<h3 class="name"><p class="line-1"><?=$slider_category[$i]['ten']?></p></h3>
			</a>
		<?php } ?>
	</div>
</section>