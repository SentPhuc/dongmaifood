<div class="footer">
    <div class="footer__top pt-5 pb-5">
        <div class="container flex-wrap d-flex align-items-start justify-content-between">
            <div class="item__footer">
                <div class="info-footer text-white"><?=htmlspecialchars_decode($aboutsFooter['noidung'.$lang])?></div>
                <a href="gioi-thieu" title="Xem thêm">Xem thêm</a>
            </div>
            <div class="item__footer">
                <h2 class="title-footer"><?=chinhsach?></h2>
                <ul class="footer-ul">
                    <?php foreach($cs as $v) { ?>
                        <li><a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="item__footer">
                <h2 class="title-footer">Liên hệ chúng tôi</h2>
                <?=htmlspecialchars_decode($footer['noidung'.$lang])?>
            </div>
            <div class="item__footer">
                <?=$addons->setAddons('fanpage-facebook', 'fanpage-facebook', 10);?>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container text-center">
            @Copyright ĐÔNG MAI FOOD,. Design by <a href="https://leagency.vn" title="LeAgency">LeAgency</a>
        </div>
    </div>
    <?=$addons->setAddons('messages-facebook', 'messages-facebook', 10);?>
</div>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img src="assets/images/zl.png" alt="Zalo"></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img src="assets/images/hl.png" alt="Hotline"></i>
</a>