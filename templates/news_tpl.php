<?php if($com == 'dich-vu') { ?>
    <?php include _template."layout/trangchu.php";?>
<?php } else { ?>
    <h2 class="title"><?=$title?></h2>
    <div class="row">
        <?php for($i = 0; $i < count($tintuc); $i++){ ?>
            <a class="item-post" href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html">
                <p class="img hv-opa">
                    <?=get_photo_multi('news', $tintuc[$i]['type'], _upload_tintuc_l, $tintuc[$i]['photo'], '480x350/1/')?>
                </p>
                <div class="info">
                    <h3 class="name line-2"><?=$tintuc[$i]['ten']?></h3>
                    <p class="desc line-3"><?=$tintuc[$i]['mota']?></p>
                </div> 
            </a> 
        <?php } ?>
    </div>
    <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
<?php } ?>