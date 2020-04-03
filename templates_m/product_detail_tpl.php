<div class="box-detail flex flex-wrap">
    <div class="img-detail">
        <a class="MagicZoom" id="zoom" href="<?=_upload_sanpham_l.$row_detail['photo']?>" >
            <img src="500x400/1/<?=_upload_sanpham_l.$row_detail['photo']?>" />
        </a>
        
        <?php if(count($hinhthem)>0) { ?>
            <div class="sub-img">
                <a data-zoom-id="zoom" href="<?=_upload_sanpham_l.$row_detail['photo']?>">
                    <img src="500x400/1/<?=_upload_sanpham_l.$row_detail['photo']?>" />
                </a>
                <?php for($i=0; $i<count($hinhthem); $i++) { ?>
                    <a data-zoom-id="zoom" href="<?=_upload_hinhthem_l.$hinhthem[$i]['photo']?>">
                        <img src="500x400/1/<?=_upload_hinhthem_l.$hinhthem[$i]['photo']?>" />
                    </a>
                <?php } ?>
            </div>
        <?php } ?>
    </div>

    <div class="info-detail">
        <h3 class="name-detail"><?=$row_detail['ten']?></h3>

        <div class="group-detail">
            <div class="price"><?=gia($row_detail['gia'], $row_detail['giacu'])?></div>
        </div>

        <?php if($row_detail['masp'] != '') { ?>
            <div class="group-detail">
             <label><?=_masanpham?>: </label>
             <span><?=$row_detail['masp']?></span>
         </div>
     <?php } ?>

     <?php if($row_detail['mota'] != '') { ?>
        <aside class="desc-detail"><?=down_line($row_detail['mota'])?></aside>
    <?php } ?>

    <input type="hidden" class="template" value="product_detail">

    <div class="group-detail option-detail">
        <label>Số lượng</label>
        <div class="quantity flex">
            <span class="quantity-down"><i class="fas fa-angle-down"></i></span>
            <input type="number" min="1" value="1"/>
            <span class="quantity-up"><i class="fas fa-angle-up"></i></span>
        </div>
    </div>

    <div class="group-detail mt10">
        <a class="btn-cart mr10" onclick="addCart('<?=$row_detail['id']?>', 'add')">Thêm vào giỏ</a>
        <a class="btn-cart" onclick="addCart('<?=$row_detail['id']?>', 'buy')"><?=_dathang?></a>
    </div>

    <div class="share-toolbox"></div>
</div>

<div class="cover-tabs">
    <ul>
        <li data-tabs="0" class="active"><?=_thongtinsanpham?></li>
        <li data-tabs="1"><?=_binhluan?></li>      
    </ul>

    <div class="content-tabs">
        <div class="tab lh2"><aside><?=$row_detail['noidung']?></aside></div>

        <div class="tab">
            <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-numposts="5" data-width="100%"></div>
        </div>
    </div>
</div>

<?php if(count($product) > 0) { ?>
    <p class="title"><?=$title_other?></p>
    <?=hot_product();?>
    <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
<?php } ?>