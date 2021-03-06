<!--slider-->
<div id="slider-header" class="slider-header">
    <button class="cty-trigger cty-header-prev-btn"><i class="material-icons">chevron_left</i></button>
    <button class="cty-trigger cty-header-next-btn"><i class="material-icons">chevron_right</i></button>
    <ul class="cty-content">
        <?php pro_header_slider($pro_path_img_slider,$pro_file_img); ?>

    </ul>
</div>

<!--product-favourite-->
<div class="container pro-fav">
    <div class="content cty-sWMain cty-pLR10">
        <ul class="title cty-row2 ">
            <li class="cty-col cty-tU">
                <h4>SẢN PHẨM ĐƯỢC ƯA CHUỘNG</h4>
            </li>
            <li class="cty-col cty-tR"><a href="product.php">Xem thêm >></a></li>
        </ul>
        <div id="cty-sub-slider" class="cty-sub-slider">
            <button class="cty-trigger cty-prev-btn"><i class="material-icons">chevron_left</i></button>
            <button class="cty-trigger cty-next-btn"><i class="material-icons">chevron_right</i></button>
            <ul class="cty-content">
                <?php pro_sub_slider($pro_path_img,$pro_file_img); ?>
            </ul>


        </div>
    </div>
</div>
<!--company-info-->
<div class="container company-info">
    <div class="content cty-sWMain">
        <div class="board-info">
            <h3>DNTN NGUYỆT ANH</h3>
            <span>Chuyên cung cấp sỉ & lẻ hải sản tươi sống.</span>
            <p>GIAO HÀNG TẬN NƠI UY TÍN - CHẤT LƯỢNG.</p>
            <br>
            <p class="cty-cl-warning">Hotline:</p>
            <p class="cty-cl-warning"><strong>0902 711 243</strong> (a.Đức) - <strong>0917 112 236</strong> (a.Thành)</p>
            <p>Tổ 9, Ấp Sua Đủa, xã Vĩnh Hòa Hiệp, ChâuThành, Kiên Giang</p>
        </div>
    </div>
</div>
<!--main-content-->
<div class="wrapper">
    <div class="cty-sWMain cty-pLR10">
       
<!--       SIDE LEFT-->
        <div class="side-left">
            <!--video-->
            <div class="container video">
                <div class="title">
                    <h4>Video</h4>
                </div>
                <div class="content">
                    <div class="video cty-pTB10">
                        <iframe src="http://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1, no-loop"> </iframe>
                    </div>
                    <div>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                    </div>
                </div>
            </div>
            <!--us-about-->
            <div class="container us-about">
                <div class="title">
                    <h4>Về chúng tôi</h4>
                </div>
                <div class="content cty-pTB10">
                    <p><strong class="cty-tU">DNTN Nguyệt Anh</strong>
                        <br> Kính Chào Quý Khách
                        <br>
                        <br> Đại lý chúng tôi là một trong những nơi cung cấp hải sản đa dạng chủng loại, đặt biệt là Cá Thu, Cá Mú, Cá Sòng, Mực Nắng, Bạch Tuộc và các loại hải sản khác. Đến nay đại lý chúng tôi là nơi cung cấp hải sản uy tín chất lượng cho những nhà hàng, khách sạn, resort nổi tiếng tại thành phố Hồ Chí Minh và các tỉnh phía Nam.
                        <br>
                        <br> Chúng tôi dịch vụ giao hàng tại nhà cho khách hàng nội thành thành phố Hồ Chí Minh và đóng hàng đi các tỉnh thành theo yêu cầu của khách hàng.
                        <br>
                        <br> Hãy gọi cho chúng tôi để nhận được sự phụ vụ tốt nhất và chất lượng nhất.
                        <br>
                        <br>
                    </p>
                    <p class="cty-cl-warning">Hotline:
                        <br><strong>0902 711 243</strong> (a.Đức) - <strong>0917 112 236</strong> (a.Thành)</p>
                </div>
            </div>
        </div>
<!--        SIDE RIGHT-->
        <div class="side-right">
            <!--other-product-->
            <div class="container other-pro">
                <div class="title">
                    <h4>Sản Phẩm Khác</h4></div>
                <div class="content cty-pTB10">
                    <ol class="list-items">
                        <?php pro_new($pro_path_img,$pro_file_img); ?>

                            <li>
                                <a href="product.php">Xem thêm >></a>
                            </li>
                    </ol>
                </div>
            </div>
            <!--social-->
            <div class="container social">
                <div class="title">
                    <h4>Social</h4></div>
                <div class="content cty-pTB10">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fweshark.net%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1254884917874897" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>