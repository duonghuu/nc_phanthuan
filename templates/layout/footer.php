<footer class="cover-ft pd40-0" style="background: url(<?=get_photo_static('bg-footer')?>) center/cover no-repeat;">
    <div class="container flex flex-wrap">
        <div class="col-ft1">
            <aside class="lh2"><?=$footer['noidung'];?></aside>
            
            <div class="social flex-start mt20">
                <span>Mạng xã hội: </span>
                <?php for ($i=0; $i < count($social); $i++) { ?> 
                    <a class="hv-rotate ml10" href="<?=$social[$i]['link']?>" target="blank">
                        <?=get_photo_multi('slider', 'social', _upload_hinhanh_l, $social[$i]['photo'])?>
                    </a>
                <?php } ?>
            </div>
        </div>

        <div class="col-ft2">
            <p class="title title-ft">Map</p>
            <?=get_AddonsOnline("bando",'100%',240,"map") ?>
        </div>

        <div class="col-ft3">
            <p class="title title-ft">Thông tin khách hàng</p>
            <?php for ($i=0; $i < count($chinhsach); $i++) { ?>
                <a class="name name-regular lh2" href="<?=$chinhsach[$i]['tenkhongdau']?>"><?=$chinhsach[$i]['ten']?></a>
            <?php } ?>
            <?=get_photo_static('logo_ct', '', true)?>
        </div>
    </div>
</footer>

<section class="copyright">
    <div class="container flex flex-wrap">
        <div class="info">
            Copyright @ 2020 by <span><?=$company['ten']?></span> All rights reserved. Design by Nina Co.,Ltd
        </div>
        <div class="thongke flex-start">
            <p>Online: <span><?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span></p>
            <p class="line"></p>
            <p>Tuần: <span><?=$week_visitors?></span></p>
            <p class="line"></p>
            <p>Tháng: <span><?=$month_visitors?></span></p>
            <p class="line"></p>
            <p><?=_tongtruycap?>: <span><?=$all_visitors?></span></p>
        </div>
    </div>
</section>