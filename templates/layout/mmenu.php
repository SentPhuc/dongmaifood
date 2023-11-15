<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword2" id="keyword2" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword2');"/>
                <p onclick="onSearch('keyword2');"><i class="fa fa-search"></i></p>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul>
            <li><a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href="" title="<?=trangchu?>"><?=trangchu?></a></li>
            <li>
                <a class="transition <?php if($com=='san-pham') echo 'active'; ?>" href="san-pham" title="Sản phẩm">
                    Sản phẩm
                </a>
                <?=$func->ShowMenuMutil("san-pham","product",@$config["theme"]["san-pham"]['lv']);?>
            </li>
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
    </nav>
</div>