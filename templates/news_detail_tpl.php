<h3 class="title"><?=$title_cat?></h3>

<aside><?=$row_detail['noidung']?></aside>        
<div class="share-toolbox"></div>

<?php if(count($tintuc_detail) > 0) { ?>
    <p class="title"><?=$title_other?></p>
    <div class="post-relate">
        <?php for($i = 0; $i < count($tintuc_detail); $i++){ ?>
            <a href="<?=$tintuc_detail[$i]['tenkhongdau']?>" class="flex-start">
                <h3 class="ten"><?=$tintuc_detail[$i]['ten']?></h3>
                <span>(<?=make_date($tintuc_detail[$i]['ngaytao'], "/")?>)</span>
            </a>
        <?php } ?>
    </div> 
    <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div> 
<?php } ?>
         