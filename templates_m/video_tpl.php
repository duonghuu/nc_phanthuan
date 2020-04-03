<div class="title"><?=$title_cat?></div>
<section class="row">
	<?php for($i=0; $i<count($product); $i++) { ?>
		<a class="item" data-fancybox="video" data-src="//www.youtube.com/embed/<?=getYoutubeIdFromUrl($product[$i]['link'])?>" href="javascript:void(0)">
			<img src="//img.youtube.com/vi/<?=getYoutubeIdFromUrl($product[$i]['link'])?>/0.jpg" alt="<?=$product[$i]['ten']?>" />
			<h3 class="name mt10"><?=$product[$i]['ten']?></h3>
		</a>
	<?php } ?>
</section>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>