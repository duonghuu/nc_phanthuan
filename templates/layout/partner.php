<section class="cover-partner pd40-0">
	<div class="container">
		<div class="slick-6">
			<?php for($i=0;$i<count($partner);$i++) { ?>
				<a class="item-partner lh0" href="<?=$partner[$i]['link']?>" target="_blank">
					<?=get_photo_multi('slider', 'partner', _upload_hinhanh_l, $partner[$i]['photo'], "190x95/2/")?>
				</a>
			<?php } ?>
		</div>
	</div>
</section>