<?php if(count($ProductlistHightLine)) { ?>
	<div class="wrap-catagory-hightline pt-4 pb-4">
		<div class="container">
			<div class="slick__page custom__slickDots" :show="3" :autoplay="true" :dots="true" :lg-item="3" :md-item="2" :sm-item="2" :xs-item="1">
				<?php foreach ($ProductlistHightLine as $key => $value) {?>
					<div class="item-catagory-hightline">
						<a class="text-decoration-none d-flex align-items-start justify-content-between flex-wrap" href="<?=$value['tenkhongdauvi']?>" title="<?=$value['ten']?>">
							<div class="info">
								<h3 class="title line-1"><?=$value['ten']?></h3>
								<span class="view-more">Xem thêm <i class="fas fa-caret-right"></i></span>
								<div class="desc line-3">
									<?=$value['mota']?>
								</div>
							</div>
							<div class="image">
								<?=$func->get_photo_static("",THUMBS."/130x188x1",false,UPLOAD_PRODUCT_L.$value['photo']);?>
							</div>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>
<?php if($aboutUs['hienthi'] == 1) { ?>
	<div class="wrap-aboutus pt-4 pb-4">
		<div class="container d-flex justify-content-between flex-wrap">
			<div class="item__aboutUs">
				<?=$func->get_photo_static("",THUMBS."/685x538x1",false,UPLOAD_NEWS_L.$aboutUs['photo']);?>
			</div>
			<div class="item__aboutUs">
				<div class="title">
					<span>Welcom to</span>
					<h3><?=$aboutUs['ten']?></h3>
					<p>“ Chất lượng hương vị được đảm bảo hàng đầu ”</p>
				</div>
				<div class="desc line-3"><?=$aboutUs['mota']?></div>
				<a href="gioi-thieu" title="Xem chi tiết">Xem chi tiết</a>
			</div>
		</div>
	</div>
<?php } ?>
<?php if(count($splistnb)){ ?>
	<div class="wrap-product-category pt-4 pb-4">
		<?php foreach($splistnb as $vlist) { ?>
			<div class="item-catagory">
				<div class="container">
					<div class="title-website title-website-category d-flex align-items-center justify-content-between flex-wrap">
						<div class="info">
							<span><?=$vlist['ten'.$lang]?></span>
							<p>Một số dòng sản phẩm siro nguyên liệu pha chế của chúng tôi</p>
						</div>
						<a href="<?=$vlist['tenkhongdauvi']?>" title="Xem tất cả">Xem tất cả <i class="fas fa-caret-right"></i></a>
					</div>
					<div class="paging-product-category paging-product-category-<?=$vlist['id']?>" data-list="<?=$vlist['id']?>"></div>
				</div>
			</div>
		<?php } ?>
	</div>
<?php } ?>
<div class="text-center">
	<?=$func->get_photo_static("adv",THUMBS."/1366x400x1",true);?>
</div>
<?php if(count($newsnb)) { ?>
	<div class="wrap-intro pt-4 pb-4">
		<div class="container">
			<div class="title-website">
				<span>Tin tức & sự kiện</span>
				<p>Các chương trình khuyến mãi được chúng tôi ghi lại trong quá trình hoạt động</p>
			</div>
			<div class="slick__page custom__slickDots newshome-right" :show="3" :autoplay="true" :dots="true" :lg-item="3" :md-item="2" :sm-item="2" :xs-item="1">
				<?php foreach($newsnb as $v) { ?>
					<a class="newshome-normal text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>">
						<p class="pic-newshome-normal scale-img mb-0">
							<?=$func->get_photo_static("",THUMBS."/380x300x1",false,UPLOAD_NEWS_L.$v['photo']);?>
						</p>
						<div class="info-newshome-normal">
							<div class="date">
								<?=date("d", $v['ngaytao'])?>
								<span><?=date("M", $v['ngaytao'])?></span>
							</div>
							<h3 class="name-newshome name line-1"><?=$v['ten'.$lang]?></h3>
							<p class="desc-newshome desc line-3"><?=$v['mota'.$lang]?></p>
							<span class="view-more">Xem chi tiết</span>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>
<div class="wrap-newsletter">
	<div class="container d-flex align-items-center justify-content-between flex-wrap">
		<div class="info">
			<h2 class="title"><?=dangkynhantin?></h2>
			<p class="slogan-footer">Hãy để lại thông tin của bạn để được chúng tôi tư vấn sớm nhất</p>
		</div>
		<form class="form-newsletter validation-newsletter d-flex" novalidate method="post" action="" enctype="multipart/form-data">
			<input type="email" class="form-control" id="email-newsletter" name="data[email]" placeholder="<?=nhapemail?>" required />
			<input type="submit" name="submit-newsletter" value="Đăng ký" disabled>
			<input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
			<input type="hidden" name="data[type]" value="dangkynhantin">
		</form>
	</div>
</div>