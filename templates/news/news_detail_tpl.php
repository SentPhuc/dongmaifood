<div class="title-website"><span><?=$row_detail['ten'.$lang]?></span></div>
<div class="time-main"><i class="fas fa-calendar-week"></i><span><?=ngaydang?>: <?=date("d/m/Y h:i A",$row_detail['ngaytao'])?></span></div>
<?php if(isset($row_detail['noidung'.$lang]) && $row_detail['noidung'.$lang] != '') { ?>
    <div class="content-main rp-images w-clear"><?=htmlspecialchars_decode($row_detail['noidung'.$lang])?></div>
    <div class="share">
        <b><?=chiase?>:</b>
        <div class="social-plugin w-clear">
            <div class="addthis_inline_share_toolbox_qj48"></div>
            <div class="zalo-share-button" data-href="<?=$func->getCurrentPageURL()?>" data-oaid="<?=($optsetting['oaidzalo']!='')?$optsetting['oaidzalo']:'579745863508352884'?>" data-layout="1" data-color="blue" data-customize=false></div>
        </div>
    </div>
<?php } else { ?>
    <div class="alert alert-warning" role="alert">
        <strong><?=noidungdangcapnhat?></strong>
    </div>
<?php } ?>
<div class="share othernews">
    <b><?=baivietkhac?>:</b>
    <ul class="list-news-other">
        <?php if(isset($news) && count($news) > 0) { for($i=0;$i<count($news);$i++) { ?>
            <li><a class="text-decoration-none" href="<?=$news[$i]['tenkhongdau']?>" title="<?=$news[$i]['ten']?>">
                <?=$news[$i]['ten']?> - <?=date("d/m/Y",$news[$i]['ngaytao'])?>
            </a></li>
        <?php } } ?>
    </ul>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>