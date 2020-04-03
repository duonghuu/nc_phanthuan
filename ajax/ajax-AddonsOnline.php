<?php
	include ("ajax_config.php");
	$url = $_GET['url'];
	$width = $_GET['width'];
	$height = $_GET['height'];
	$type = $_GET['type'];
?>

<?php if($type == 'fanpage' || $type == 'messages') { ?>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=428440974009677";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div class="fb-page" data-href="<?=$url?>" data-width="<?=$width?>" data-height="<?=$height?>" data-tabs="<?=($type == "fanpage") ? "timeline" : "messages"?>" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
		<div class="fb-xfbml-parse-ignore">
			<blockquote cite="<?=$url?>">
				<a href="<?=$url?>"></a>
			</blockquote>
		</div>
	</div>

<?php } ?>

<?php if($type == 'video-slick') { ?>
	
	<?php $video = get_result("select id, ten$lang as ten, link from #_video where hienthi=1 order by stt, id desc"); ?>
	<div class="sub-video1">
		<iframe title="<?=$video[0]['ten']?>" src="//www.youtube.com/embed/<?=getYoutubeIdFromUrl($video[0]['link'])?>" width="<?=$width?>" height="<?=$height?>" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="sub-video2">
		<div class="slick-video">
			<?php for($i=0; $i<count($video); $i++) { ?>
				<a class="item-video" data-width="<?=$width?>" data-height="<?=$height?>" data-id="<?=$video[$i]['id']?>">
					<img src="//img.youtube.com/vi/<?=getYoutubeIdFromUrl($video[$i]['link'])?>/0.jpg"/>
				</a>
			<?php } ?>
		</div>
	</div>

	<script type="text/javascript">
	    $(document).ready(function(){
	    	$('.slick-video').slick({slidesToShow: 3,});
	    });
	</script>
<?php } ?>

<?php if($type == 'video-select') { ?>

	<?php $video = get_result("select id, ten$lang as ten, link from #_video where hienthi=1 and type='video' order by stt,id desc"); ?>

	<iframe class="current-video" src="//www.youtube.com/embed/<?=getYoutubeIdFromUrl($video[0]['link'])?>" width="<?=$width?>" height="<?=$height?>" title="<?=$video[0]['ten']?>" frameborder="0" allowfullscreen></iframe>

	<select class="click-video">
	    <?php for($i=0; $i<count($video); $i++){?>
	        <option value="<?=getYoutubeIdFromUrl($video[$i]['link'])?>"><?=$video[$i]['ten']?></option>
	    <?php } ?>
	</select>

	<script type="text/javascript">
		$(document).ready(function(e) {
			$('body').on("change",".click-video",function(){
				var src = '//www.youtube.com/embed/'+$(this).val();
				$('.current-video').attr('src',src);
			});
		});
	</script>

<?php } ?>

<?php if($type == 'map') { ?>

	<?=$company[$url]?>
	
<?php } ?>