<?php 
/**
 * Template Name: Front page
 *
 * @package WordPress
 * @subpackage delia
 */
get_header();
?>
<main class="site-main">
  <div class="l-content">
    <!--section visual-->
    <section class="p-visual">
      <div class="p-visual_inner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mainVisual-pc.png" class="only-pc" alt="kiến tạo nụ cười">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mainVisual-sp.png" class="only-sp" alt="kiến tạo nụ cười">
      </div>
    </section>
    <!--end section visual-->

    <!--section services-->
    <section class="p-services">
      <div class="container-lg">
        <h2 class="c-title">dịch vụ nổi bật<br class="only-sp"> <span>tại delia</span></h2>
        <div class="p-services_group">
          <div class="row justify-content-between">
            <div class="col-md-6 p-services_group_item">
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/service-01.png" alt="bọc răng sử">
              </a>
            </div>

            <div class="col-md-6 p-services_group_item">
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/service-02.png" alt="dán sứ veneer">
              </a>
            </div>
          </div>

          <div class="row justify-content-between">
            <div class="col-md-6 p-services_group_item">
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/service-03.png" alt="trồng năng implant">
              </a>
            </div>

            <div class="col-md-6 p-services_group_item">
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/service-04.png" alt="niềng răng">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end section services-->

    <!--section team-->
    <section class="p-team">
      <div class="container-lg">
        <h2 class="c-title white">Đội ngũ bác sĩ hàng đầu</h2>
        <div class="p-team_inner">
          <p class="c-desc only-pc">Với sứ mệnh kiến tạo hàng triệu nụ cười rạng rỡ cho người Việt, hệ thống Nha Khoa Delia  luôn cố gắng và nỗ lực hết mình trong công cuộc thu hút nhân tài nha khoa đầu ngành, có tay nghề giỏi, kinh nghiệm chuyên sâu trong lĩnh vực răng hàm mặt ở cả trong và ngoài nước.</p>
          <div class="p-team_slider only-sp">
            <!-- Slider main container -->
            <div class="swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="p-team_slider_item">
                    <div class="p-team_slider_thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors/doctor-01.png" alt="">
                    </div>
                    <div class="p-team_slider_info">
                      <h3>Bác sĩ Ngô Xuân Hưng</h3>
                      <p>Giám đốc Chuyên môn Hệ thống Delia</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="p-team_slider_item">
                    <div class="p-team_slider_thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors/doctor-01.png" alt="">
                    </div>
                    <div class="p-team_slider_info">
                      <h3>Bác sĩ Ngô Xuân Hưng</h3>
                      <p>Giám đốc Chuyên môn Hệ thống Delia</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="p-team_slider_item">
                    <div class="p-team_slider_thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors/doctor-01.png" alt="">
                    </div>
                    <div class="p-team_slider_info">
                      <h3>Bác sĩ Ngô Xuân Hưng</h3>
                      <p>Giám đốc Chuyên môn Hệ thống Delia</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section team-->

    <!--section customer-->
    <section class="p-customer">
      <div class="container-lg">
        <h2 class="c-title only-sp">câu chuyện khách hàng</h2>
        <div class="p-customer_inner">
          <div class="p-customer_heading only-pc">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/heading-customer.png" alt="câu chuyện khách hàng"></h2>
          </div>
          <div class="p-customer_list d-flex flex-wrap justify-content-end only-pc">
            <div class="p-customer_item transparent"></div>
            <div class="p-customer_item">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-01.png" alt="">
              </div>
              <div class="p-customer_item_info">
                <h3>
                  <span class="position">NSND</span>
                  Lan hương
                </h3>
                <p class="meta">
                  <span>Tình trạng:</span>
                  Thiếu răng, xỉn màu
                </p>
                <p class="meta">
                  <span>Giải pháp:</span>
                  Trồng 4 trụ Implant, thẩm mỹ răng sứ
                </p>
              </div>
            </div>

            <div class="p-customer_item">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-02.png" alt="">
              </div>
              <div class="p-customer_item_info">
                <h3>
                  <span class="position">BTV</span>
                  Hoàng Trang
                </h3>
                <p class="meta">
                  <span>Tình trạng:</span>
                  Răng thưa kẽ, xỉn màu
                </p>
                <p class="meta">
                  <span>Giải pháp:</span>
                  Thẩm mỹ 20 răng sứ
                </p>
              </div>
            </div>

            <div class="p-customer_item">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-03.png" alt="">
              </div>
              <div class="p-customer_item_info">
                <h3>
                  <span class="position">MC</span>
                  Phương Hiếu
                </h3>
                <p class="meta">
                  <span>Tình trạng:</span>
                  Răng xỉn màu, hình thế không đều
                </p>
                <p class="meta">
                  <span>Giải pháp:</span>
                  Thẩm mỹ 20 răng sứ
                </p>
              </div>
            </div>

            <div class="p-customer_item">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-04.png" alt="">
              </div>
              <div class="p-customer_item_info">
                <h3>
                  <span class="position">Chị</span>
                  Nghiêm Ngọc
                </h3>
                <p class="meta">
                  <span>Tình trạng:</span>
                  Sâu kẽ, khấp khểnh, mòn cổ răng
                </p>
                <p class="meta">
                  <span>Giải pháp:</span>
                  ọc 20 răng sứ
                </p>
              </div>
            </div>

            <div class="p-customer_item">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-05.png" alt="chị bảo ngọc">
              </div>
              <div class="p-customer_item_info">
                <h3>
                  <span class="position">Chị</span>
                  Bảo Ngọc
                </h3>
                <p class="meta">
                  <span>Tình trạng:</span>
                  Răng ố vàng, hình thể không đều
                </p>
                <p class="meta">
                  <span>Giải pháp:</span>
                  Dán 20 răng sứ Veneer
                </p>
              </div>
            </div>

            <div class="p-customer_item">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-06.png" alt= "chị trịnh hằng">
              </div>
              <div class="p-customer_item_info">
                <h3>
                  <span class="position">Chị</span>
                  Trịnh Hằng
                </h3>
                <p class="meta">
                  <span>Tình trạng:</span>
                  Nhiễm tetrecycline, khấp khểnh
                </p>
                <p class="meta">
                  <span>Giải pháp:</span>
                  Bọc 20 răng sứ
                </p>
              </div>
            </div>

            <div class="p-customer_item">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-07.png" alt="chị nguyễn t.linh">
              </div>
              <div class="p-customer_item_info">
                <h3>
                  <span class="position">Chị</span>
                  Nguyễn T. Linh
                </h3>
                <p class="meta">
                  <span>Tình trạng:</span>
                  Khấp khểnh, hình thể ngắn
                </p>
                <p class="meta">
                  <span>Giải pháp:</span>
                  Niềng răng mắc cài
                </p>
              </div>
            </div>
          </div>
          <div class="p-customer_group only-sp">
            <ul class="d-flex justify-content-between">
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-sp-01.png" alt="chị nghiêm ngọc">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-sp-02.png" alt="chị nghiêm ngọc">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-sp-03.png" alt="chị nghiêm ngọc">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-sp-04.png" alt="chị nghiêm ngọc">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-sp-05.png" alt="chị nghiêm ngọc">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-sp-06.png" alt="chị nghiêm ngọc">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-sp-07.png" alt="chị nghiêm ngọc">
              </li>
            </ul>
            <div class="p-customer_visual">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-visual.png" alt="">
            </div>
            <div class="p-customer_info">
              <h3 class="p-customer_info_ttl">Chị Nghiêm Ngọc</h3>
              <ul class="p-customer_info_meta">
                <li>
                  <p>Tình trạng: <span id="status-customer">Sâu kẽ, khấp khểnh, mòn cổ răng</span></p>
                </li>
                <li>
                  <p>Giải pháp: <span id="solution-customer">Bọc 20 răng sứ</span></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section customer-->

    <!--section house-->
    <section class="p-house">
      <div class="container-lg green">
        <h2 class="c-titleBig white only-pc">NGÔI NHÀ CỦA<br>NHỮNG NỤ CƯỜI</h2>
        <h2 class="c-title white only-sp">nha khoa delia<br><span>ngôi nhà của những nụ cười</span></h2>
        <div class="p-house_inner">
          <div class="p-house_group only-pc">
            <div class="p-house_block d-flex align-items-center">
              <div class="p-house_block_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/house/house-01.png" alt="">
              </div>
              <div class="p-house_block_info">
                <p>KIẾN TẠO<br><span>+50.000</span> NỤ CƯỜI</p>
                <p><span>ĐIỂM TỰA CHĂM SÓC</span><br>RĂNG MIỆNG CỦA SAO VIỆT</p>
                <p><span>HỆ THỐNG<br>DENTAL SPA 5 SAO</span><br>HÀNG ĐẦU VIỆT NAM</p>
              </div>
            </div>

            <div class="p-house_block d-flex">
              <div class="p-house_block_thumb flex-shrink-0 order-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/house/house-02.png" alt="">
                <span class="caption">Chất lượng tốt nhất như người nhà: Cam kết tư vấn giải pháp bảo vệ tối đa sức khoẻ răng nướu và phù hợp nhất.</span>
              </div>
              <div class="p-house_block_info flex-grow-1 order-1">
                <p class="desc">Tiên phong với sứ mệnh kiến tạo hàng triệu NỤ CƯỜI HẠNH PHÚC TRỌN VẸN cho người Việt, Delia - nơi bạn được chăm sóc như “NGƯỜI 1 NHÀ”</p>
              </div>
            </div>
          </div>

          <div class="only-sp">
            <div class="p-house_visual">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/house/house-visual.png" alt="nha khoa delia ngôi nhà của những nụ cười">
            </div>

            <div class="p-house_statistic">
              <p>Kiến tạo <span>+50.000</span> nụ cười</p>
              <p><span>Điểm tựa chăm sóc</span><br>răng miệng của sao Việt</p>
              <p><span>Hệ thống Dental Spa 5 sao</span><br>hàng đầu Việt Nam</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container-lg white only-sp">
        <h2 class="c-title only-sp">NGÔI NHÀ CỦA NHỮNG NỤ CƯỜI</h2>
        <p class="c-desc green text-justify">Tiên phong với sứ mệnh kiến tạo hàng triệu NỤ CƯỜI HẠNH PHÚC TRỌN VẸN cho người Việt, Delia - nơi bạn được chăm sóc như “NGƯỜI 1 NHÀ.</p>
        <div class="p-house_news">
          <div class="p-house_item">
            <div class="p-house_item_txt d-flex align-items-center h-full">
              <p><span>Chất lượng tốt nhất như người nhà: </span>Cam kết tư vấn giải pháp bảo vệ tối đa sức khoẻ răng nướu và phù hợp nhất.</p>
            </div>
            <div class="p-house_item_img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/house/house-sp-01.png" alt="Chất lượng tốt nhất như người nhà">
            </div>
          </div>

          <div class="p-house_item">
            <div class="p-house_item_txt d-flex align-items-center h-full order-2">
              <p><span>Thư giãn thoải mái như ở nhà: </span>Delia luôn thấu hiểu để mang tới cho Quý khách những trải nghiệm nha khoa êm ái nhất.</p>
            </div>
            <div class="p-house_item_img order-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/house/house-sp-02.png" alt="Thư giãn thoải mái như ở nhà">
            </div>
          </div>

          <div class="p-house_item">
            <div class="p-house_item_txt d-flex align-items-center h-full">
              <p><span>Chăm sóc tận tình như người nhà: </span>Bác sĩ – chuyên gia chăm sóc Quý khách hàng 1-1 xuyên suốt liệu trình tới “TRỌN ĐỜI”</p>
            </div>
            <div class="p-house_item_img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/house/house-sp-03.png" alt="Chăm sóc tận tình như người nhà">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section house-->

    <!--section news-->
    <section class="p-news">
      <div class="container-lg">
        <h2 class="c-title only-pc">Kiến thức nha khoa - tin tức</h2>
        <h2 class="c-title white only-sp">Kiến thức nha khoa - tin tức</h2>
        <div class="p-news_list d-flex flex-wrap justify-content-between">
          <div class="p-news_item d-grid d-md-flex">
            <div class="p-news_item_info">
              <h3 class="p-news_item_ttl">Các dáng răng sứ đẹp</h3>
              <p class="p-news_item_excerpt">Nhu cầu bọc răng sứ thẩm mỹ đang ngày tăng cao. Đây là phương pháp làm đẹp cho hàm răng được nhiều người ưa thích. Nó giúp khắc phục được các khuyết điểm: răng xỉn màu, thưa, sứt mẻ, hô và lệch lạc nhẹ… Bạn có biết các dáng răng sứ đẹp và phù hợp khuôn mặt không? Tìm hiểu qua bài viết sau đây của Nha Khoa Delia nhé!</p>
              <div class="text-end only-pc">
                <a href="#" class="c-btnReadmoreNews">Xem thêm</a>
              </div>
            </div>
            <div class="p-news_item_thumb flex-md-shrink-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-01.png" alt="">
            </div>
          </div>
          <div class="p-news_item d-grid d-md-flex flex-wrap-reverse">
            <div class="p-news_item_info">
              <h3 class="p-news_item_ttl"><a href="#">các bệnh lý khác</a></h3>
              <p class="p-news_item_excerpt">Tiêu xương chân răng là gì? Niềng răng có bị tiêu xương không?</p>
            </div>
            <div class="p-news_item_thumb">
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-02.png" alt="">
              </a>
            </div>
          </div>
          <div class="p-news_item d-grid d-md-flex flex-wrap-reverse">
            <div class="p-news_item_info">
              <h3 class="p-news_item_ttl">
                <a href="#">bọc răng sứ</a>
              </h3>
              <p class="p-news_item_excerpt">Bọc răng sứ bị cộm – nguyên nhân và cách khắc phục là gì?</p>
            </div>
            <div class="p-news_item_thumb">
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-03.png" alt="">
              </a>
            </div>
          </div>
          <div class="p-news_item d-grid d-md-flex flex-wrap-reverse">
            <div class="p-news_item_info">
              <h3 class="p-news_item_ttl">
                <a href="#">làm răng sứ</a>
              </h3>
              <p class="p-news_item_excerpt">Bao nhiêu tuổi nên làm răng sứ?</p>
            </div>
            <div class="p-news_item_thumb">
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-04.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section news-->

    <!--section contact-->
    <section class="p-contact">
      <div class="container-lg">
        <h2 class="c-title white">Liên hệ trực tiếp<br>Đăng ký ngay để được tư vấn</h2>
        <div class="p-contact_inner">
          <div class="p-contact_form">
            <div class="c-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="c-form_group">
                    <input type="text" name="name" class="c-inputField" placeholder="Họ và tên">
                  </div>

                  <div class="c-form_group">
                    <input type="text" name="phone" class="c-inputField" placeholder="Số điện thoại">
                  </div>

                  <div class="c-form_group">
                    <textarea name="status" class="c-textField" cols="30" rows="10" placeholder="Tình trạng"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="c-form_group">
                    <select name="" class="c-selectField">
                      <option value="">Chọn cơ sở</option>
                      <option value="1">Cơ sở 1</option>
                      <option value="2">Cơ sở 2</option>
                      <option value="3">Cơ sở 3</option>
                      <option value="4">Cơ sở 4</option>
                    </select>
                  </div>

                  <div class="c-form_group">
                    <select name="" class="c-selectField">
                      <option value="">Chọn cơ sở</option>
                      <option value="1">Cơ sở 1</option>
                      <option value="2">Cơ sở 2</option>
                      <option value="3">Cơ sở 3</option>
                      <option value="4">Cơ sở 4</option>
                    </select>
                  </div>

                  <div class="c-form_action d-flex flex-wrap justify-content-center">
                    <div class="c-form_button">
                      <button class="c-btnSubmit">Đăng ký ngay</button>
                    </div>
                    <p class="c-form_note text-center">Quý khách vui lòng để lại thông tin để nhận tư vấn trực tiếp<br>từ chuyên gia thẩm mỹ răng sứ hàng đầu Việt Nam</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section contact-->
  </div>
</main>
<?php
get_footer(); ?>