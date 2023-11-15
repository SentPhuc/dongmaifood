<?php
/* Config type - Group */
$config['group'] = array();

/* Config type - Product */
/* Sản phẩm */
$nametype = "san-pham";
$config['product'][$nametype]['title_main'] = "Sản Phẩm";
$config['product'][$nametype]['dropdown'] = true;
foreach ($config['theme'][$nametype]['lv'] as $key => $value) {
   $config['product'][$nametype][$value] = true;
}
$config['product'][$nametype]['brand'] = false;
$config['product'][$nametype]['mau'] = false;
$config['product'][$nametype]['size'] = false;
$config['product'][$nametype]['tags'] = false;
$config['product'][$nametype]['import'] = false;
$config['product'][$nametype]['export'] = false;
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['copy_image'] = true;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['check'] = array("noibat" => "Nổi bật");
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array
(
    $nametype => array
    (
        "title_main_photo" => "Hình ảnh sản phẩm",
        "title_sub_photo" => "Hình ảnh",
        "number_photo" => 3,
        "images_photo" => true,
        "cart_photo" => false,
        "avatar_photo" => true,
        "tieude_photo" => true,
        "width_photo" => 540,
        "height_photo" => 540,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
    )
);
$config['product'][$nametype]['ma'] = false;
$config['product'][$nametype]['gia'] = true;
$config['product'][$nametype]['giamoi'] = false;
$config['product'][$nametype]['giakm'] = false;
$config['product'][$nametype]['mota'] = true;
$config['product'][$nametype]['mota_cke'] = false;
$config['product'][$nametype]['noidung'] = true;
$config['product'][$nametype]['noidung_cke'] = true;
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['size_images'] = $config['theme'][$nametype]['size'];
$config['product'][$nametype]['thumb'] = '100x100x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

foreach ($config['theme'][$nametype]['lv'] as $key => $value) {
    $config["product"][$nametype]["title_main_$value"] = "Sản phẩm cấp ".($key+1);
    $config["product"][$nametype]["images_$value"] = true;
    $config["product"][$nametype]["show_images_$value"] = true;
    $config["product"][$nametype]["slug_$value"] = true;
    $config["product"][$nametype]["check_$value"] = array("noibat" => "Nổi bật", "noibat1" => "Danh mục nổi bật");
    $config["product"][$nametype]["mota_$value"] = true;

    if($key+1==2){
        $config["product"][$nametype]["images_$value"] = false;
        $config["product"][$nametype]["show_images_$value"] = false;
        $config["product"][$nametype]["check_$value"] = array();
        $config["product"][$nametype]["mota_$value"] = false;
    }
    
    $config["product"][$nametype]["show_gallery_$value"] = false;
    $config["product"][$nametype]["gallery_$value"] = array();
    $config["product"][$nametype]["seo_$value"] = true;
    $config["product"][$nametype]["size_images_$value"] = '130x188';
    $config["product"][$nametype]["thumb_$value"] = '130x188x1';
    $config["product"][$nametype]["img_type_$value"] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
}

/* Config type - Newsletter */
/* Đăng ký nhận tin */
$nametype = "dangkynhantin";
$config['newsletter'][$nametype]['title_main'] = "Đăng ký nhận tin";
$config['newsletter'][$nametype]['file'] = false;
$config['newsletter'][$nametype]['email'] = true;
$config['newsletter'][$nametype]['guiemail'] = true;
$config['newsletter'][$nametype]['ten'] = false;
$config['newsletter'][$nametype]['dienthoai'] = false;
$config['newsletter'][$nametype]['diachi'] = false;
$config['newsletter'][$nametype]['chude'] = false;
$config['newsletter'][$nametype]['noidung'] = false;
$config['newsletter'][$nametype]['ghichu'] = false;
$config['newsletter'][$nametype]['tinhtrang'] = array("1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
$config['newsletter'][$nametype]['showten'] = false;
$config['newsletter'][$nametype]['showdienthoai'] = false;
$config['newsletter'][$nametype]['showngaytao'] = true;
$config['newsletter'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

/* Config type - News */
/* Tin tức */
$nametype = "tin-tuc";
$config['news'][$nametype]['title_main'] = "Tin tức";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array();
$config['news'][$nametype]['mota'] = true;
$config['news'][$nametype]['noidung'] = true;
$config['news'][$nametype]['noidung_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['size_images'] = $config['theme'][$nametype]['size'];
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

/* Dịch vụ */
$nametype = "dich-vu";
$config['news'][$nametype]['title_main'] = "Dịch vụ";
$config['news'][$nametype]['check'] = array();
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['mota'] = true;
$config['news'][$nametype]['noidung'] = true;
$config['news'][$nametype]['noidung_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config["news"][$nametype]["size_images"] = $config['theme'][$nametype]['size'];
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

/* Hướng dẫn */
$nametype = "huong-dan";
$config['news'][$nametype]['title_main'] = "Hướng dẫn";
$config['news'][$nametype]['dropdown'] = true;
foreach ($config['theme'][$nametype]['lv'] as $key => $value) {
    $config['news'][$nametype][$value] = true;
}
$config['news'][$nametype]['check'] = array();
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['mota'] = true;
$config['news'][$nametype]['noidung'] = true;
$config['news'][$nametype]['noidung_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config["news"][$nametype]["size_images"] = $config['theme'][$nametype]['size'];
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

/* Hướng dẫn danh mục */
foreach ($config['theme'][$nametype]['lv'] as $key => $value) {
    $config["news"][$nametype]["title_main_$value"] = "Hướng dẫn cấp ".($key+1);
    $config["news"][$nametype]["images_$value"] = false;
    $config["news"][$nametype]["show_images_$value"] = false;
    $config["news"][$nametype]["slug_$value"] = true;
    $config["news"][$nametype]["check_$value"] = array();
    $config["news"][$nametype]["show_gallery_$value"] = true;
    $config["news"][$nametype]["gallery_$value"] = array();
    $config["news"][$nametype]["mota_$value"] = false;
    $config["news"][$nametype]["mota_cke_$value"] = false;
    $config["news"][$nametype]["noidung_$value"] = false;
    $config["news"][$nametype]["noidung_cke_$value"] = false;
    $config["news"][$nametype]["seo_$value"] = true;
    $config["news"][$nametype]["size_images_$value"] = '320x240';
    $config["news"][$nametype]["thumb_$value"] = '100x100x1';
    $config["news"][$nametype]["img_type_$value"] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
}

/* Chính sách */
$nametype = "chinh-sach";
$config['news'][$nametype]['title_main'] = "Chính sách";
$config['news'][$nametype]['check'] = array();
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['noidung'] = true;
$config['news'][$nametype]['noidung_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config["news"][$nametype]["size_images"] = '320x240';
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

/* Config type - Static */
/* Giới thiệu */
$nametype = "gioi-thieu";
$config['static'][$nametype]['title_main'] = "Giới thiệu";
$config['static'][$nametype]['images'] = true;
$config['static'][$nametype]['file'] = false;
$config['static'][$nametype]['tieude'] = true;
$config['static'][$nametype]['mota'] = true;
$config['static'][$nametype]['mota_cke'] = false;
$config['static'][$nametype]['noidung'] = true;
$config['static'][$nametype]['noidung_cke'] = true;
$config['static'][$nametype]['seo'] = true;
$config["static"][$nametype]["size_images"] = '685x538';
$config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
$config['static'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

/* Liên hệ */
$nametype = "lienhe";
$config['static'][$nametype]['title_main'] = "Liên hệ";
$config['static'][$nametype]['noidung'] = true;
$config['static'][$nametype]['noidung_cke'] = true;

/* Footer */
$nametype = "footer";
$config['static'][$nametype]['title_main'] = "Footer";
$config['static'][$nametype]['noidung'] = true;
$config['static'][$nametype]['noidung_cke'] = true;

/* Mô tả footer */
$nametype = "abouts-footer";
$config['static'][$nametype]['title_main'] = "Mô tả footer";
$config['static'][$nametype]['noidung'] = true;
$config['static'][$nametype]['noidung_cke'] = true;

/* Config type - Photo */
/* Hình quảng cáo */
$nametype = "adv";
$config['photo']['photo_static'][$nametype]['title_main'] = "Hình quảng cáo";
$config['photo']['photo_static'][$nametype]['link'] = true;
$config['photo']['photo_static'][$nametype]['images'] = true;
$config["photo"]['photo_static'][$nametype]["size_images"] = '1366x400';
$config['photo']['photo_static'][$nametype]['thumb'] = '1366x400x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

/* Logo */
$nametype = "logo";
$config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
$config['photo']['photo_static'][$nametype]['images'] = true;
$config["photo"]['photo_static'][$nametype]["size_images"] = '155x105';
$config['photo']['photo_static'][$nametype]['thumb'] = '155x105x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

/* Favicon */
$nametype = "favicon";
$config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
$config['photo']['photo_static'][$nametype]['images'] = true;
$config["photo"]['photo_static'][$nametype]["size_images"] = '48x48';
$config['photo']['photo_static'][$nametype]['thumb'] = '48x48x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

/* Slideshow */
$nametype = "slide";
$config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
$config['photo']['man_photo'][$nametype]['number_photo'] = 2;
$config['photo']['man_photo'][$nametype]['images_photo'] = true;
$config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
$config['photo']['man_photo'][$nametype]['link_photo'] = true;
$config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
$config['photo']['man_photo'][$nametype]['width_photo'] = 898;
$config['photo']['man_photo'][$nametype]['height_photo'] = 490;
$config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
$config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

/* Mạng xã hội */
$nametype = "mangxahoi";
$config['photo']['man_photo'][$nametype]['title_main_photo'] = "Mạng xã hội";
$config['photo']['man_photo'][$nametype]['number_photo'] = 2;
$config['photo']['man_photo'][$nametype]['images_photo'] = true;
$config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
$config['photo']['man_photo'][$nametype]['link_photo'] = true;
$config['photo']['man_photo'][$nametype]['width_photo'] = 50;
$config['photo']['man_photo'][$nametype]['height_photo'] = 50;
$config['photo']['man_photo'][$nametype]['thumb_photo'] = '50x50x1';
$config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

/* Seo page */
$config['seopage']['page'] = array(
    "san-pham" => "Sản phẩm",
    "tim-kiem" => "Tìm kiếm",
    "tin-tuc" => "Tin tức",
    "dich-vu" => "Dịch vụ",
    "huong-dan" => "Hướng dẫn",
    "lien-he" => "Liên hệ"
);
$config['seopage']['size_images'] = '300x200';
$config['seopage']['thumb'] = '300x200x1';
$config['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

/* Setting */
$config['setting']['diachi'] = true;
$config['setting']['dienthoai'] = true;
$config['setting']['hotline'] = true;
$config['setting']['zalo'] = true;
$config['setting']['oaidzalo'] = true;
$config['setting']['email'] = true;
$config['setting']['website'] = true;
$config['setting']['fanpage'] = true;
$config['setting']['toado'] = true;
$config['setting']['toado_iframe'] = true;

/* Quản lý import */
$config['import']['images'] = false;
$config['import']['thumb'] = '100x100x1';
$config['import']['img_type'] = ".jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF";

/* Quản lý export */
$config['export']['category'] = false;

/* Quản lý tài khoản */
$config['user']['active'] = false;
$config['user']['admin'] = false;
$config['user']['visitor'] = false;

/* Quản lý phân quyền */
$config['permission'] = false;

/* Quản lý địa điểm */
$config['places']['active'] = false;
$config['places']['placesship'] = false;

/* Quản lý giỏ hàng */
$config['order']['active'] = false;
$config['order']['search'] = false;
$config['order']['excel'] = false;
$config['order']['word'] = false;
$config['order']['excelall'] = false;
$config['order']['wordall'] = false;
$config['order']['thumb'] = '100x100x1';

/* Quản lý thông báo đẩy */
$config['onesignal'] = false;

/* Quản lý mục (Không cấp) */
if(isset($config['news']))
{
    foreach($config['news'] as $key => $value)
    {
        if(!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false))
        { 
            $config['shownews'] = 1;
            break;
        }
    }
}
?>