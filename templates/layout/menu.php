<div class="menu">
    <div class="container d-flex justify-content-between flex-wrap">
        <div class="menu-left">
            <span>
                <img src="assets/images/icon-menu.png" alt="">
                Danh mục sản phẩm
            </span>
           <div class="sub-menu">
                <?=$func->ShowMenuMutil("san-pham","product",@$config["theme"]["san-pham"]['lv']);?>
           </div>
        </div>
        <ul class="menu-right d-flex align-items-center justify-content-between container">
            <li><a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href="" title="<?=trangchu?>"><?=trangchu?></a></li>
            <li>
                <a class="transition <?php if($com=='dich-vu') echo 'active'; ?>" href="dich-vu" title="Dịch vụ">Dịch vụ</a>
                <?=$func->ShowMenuMutil("dich-vu","news",0);?>
            </li>
            <li>
                <a class="transition <?php if($com=='huong-dan') echo 'active'; ?>" href="huong-dan" title="Hướng dẫn">Hướng dẫn</a>
                <?=$func->ShowMenuMutil("huong-dan","news",@$config["theme"]["huong-dan"]['lv']);?>
            </li>
            <li><a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="Tin tức">Tin tức</a></li>
            <li><a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>
            <li>
                <div class="search w-clear">
                    <input type="text" id="keyword" placeholder="..." onkeypress="doEnter(event,'keyword');"/>
                    <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
                </div>
            </li>
        </ul>
    </div>
</div>