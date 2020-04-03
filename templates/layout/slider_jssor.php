<?php

	$d->reset();
	$sql_slider = "select ten$lang as ten,link,photo from #_slider where hienthi=1 and type='slider' order by stt,id desc";
	$d->query($sql_slider);
	$slider=$d->result_array();

    $d->reset();
    $sql_slider_nt = "select ten$lang as ten,link,photo from #_slider where hienthi=1 and type='slider_nt' order by stt,id desc";
    $d->query($sql_slider_nt);
    $slider_nt=$d->result_array();

    $d->reset();
    $sql_slider_vl = "select ten$lang as ten,link,photo from #_slider where hienthi=1 and type='slider_vl' order by stt,id desc";
    $d->query($sql_slider_vl);
    $slider_vl=$d->result_array();
	
?>

<div id="slider1_container" style="position: relative;width: 1366px; height: 504px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move;width: 1366px; height: 504px;overflow: hidden;">
        <?php if($com=='vat-lieu-xay-dung'){ ?>
            <?php for($i=0,$count_slider_vl=count($slider_vl);$i<$count_slider_vl;$i++){ ?>
            <div>
                <a href="<?=$slider_vl[$i]['link']?>"><img u="image" src="thumb/1366x504/1/<?php if($slider_vl[$i]['photo']!='')echo _upload_hinhanh_l.$slider_vl[$i]['photo'];else echo 'images/noimage.png' ?>" alt="<?=$slider_vl[$i]['ten']?>" /></a>
            </div>
            <?php } ?>  
        <?php }elseif($com=='trang-tri-noi-that'){ ?>
            <?php for($i=0,$count_slider_nt=count($slider_nt);$i<$count_slider_nt;$i++){ ?>
            <div>
                <a href="<?=$slider_nt[$i]['link']?>"><img u="image" src="thumb/1366x504/1/<?php if($slider_nt[$i]['photo']!='')echo _upload_hinhanh_l.$slider_nt[$i]['photo'];else echo 'images/noimage.png' ?>" alt="<?=$slider_nt[$i]['ten']?>" /></a>
            </div>
            <?php } ?>   
        <?php }else{ ?>
            <?php for($i=0,$count_slider=count($slider);$i<$count_slider;$i++){ ?>
            <div>
                <a href="<?=$slider[$i]['link']?>"><img u="image" src="thumb/1366x504/1/<?php if($slider[$i]['photo']!='')echo _upload_hinhanh_l.$slider[$i]['photo'];else echo 'images/noimage.png' ?>" alt="<?=$slider[$i]['ten']?>" /></a>
            </div>
            <?php } ?>                
        <?php } ?>                
    </div>
    <!-- Trigger -->
          
    <!-- Arrow Left -->
    <span u="arrowleft" class="jssora05l" style="top:40%;"></span>
    <!-- Arrow Right -->
    <span u="arrowright" class="jssora05r" style="top:40%;"></span>
</div><!-- Jssor Slider End -->
        

    
 