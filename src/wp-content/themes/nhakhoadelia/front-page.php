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
        <div class="only-pc">
          <div class="sliderTop">
            <div class="swiper-container" id="sliderTop">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                  $query_slider = new WP_Query( array(
                    'posts_per_page' => 4, /* how many post you need to display */
                    'offset' => 0,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'slider', /* your post type name */
                    'post_status' => 'publish'
                  ));

                  if ( $query_slider->have_posts() ) :
                    while ( $query_slider->have_posts() ) : $query_slider->the_post(); ?>
                      <div class="swiper-slide">
                        <?php the_post_thumbnail( 'full', array( 'loading' => true, 'class' => 'w-100', 'alt' => get_the_title() ) ); ?>
                      </div>
                    <?php endwhile;
                  endif;
                ?>
              </div>
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
        <div class="only-sp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mainVisual-sp.png" class="w-100" alt="kiến tạo nụ cười">
        </div>
        <div class="p-visual_action only-sp">
          <div class="p-visual_btn d-flex align-items-center justify-content-center">
            <a href="<?php echo get_site_url() ?>/dat-lich/" class="btn-booking">Đặt lịch</a>
            <a href="tel:+84%20763296666" class="btn-contact">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/contact.png" alt="liên hệ">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!--end section visual-->

    <!--section services-->
    <section class="p-services">
      <div class="container-lg">
        <h2 class="c-title c-animation">dịch vụ nổi bật<br class="only-sp"> <span>tại delia</span></h2>
        <div class="p-services_group">
          <div class="row justify-content-between">
            <div class="col-md-6 p-services_group_item c-animation fade-left">
              <a href="<?php echo get_site_url() ?>/dich-vu/boc-rang-su/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/service-01.png" alt="bọc răng sử">
              </a>
            </div>

            <div class="col-md-6 p-services_group_item c-animation fade-right">
              <a href="<?php echo get_site_url() ?>/dich-vu/dan-su-verneer/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/service-02.png" alt="dán sứ veneer">
              </a>
            </div>
          </div>

          <div class="row justify-content-between">
            <div class="col-md-6 p-services_group_item c-animation fade-left">
              <a href="<?php echo get_site_url() ?>/dich-vu/trong-rang-implant/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/service-03.png" alt="trồng năng implant">
              </a>
            </div>

            <div class="col-md-6 p-services_group_item c-animation fade-right">
              <a href="<?php echo get_site_url() ?>/dich-vu/nieng-rang/">
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
        <h2 class="c-title white c-animation">Đội ngũ bác sĩ hàng đầu</h2>
        <div class="p-team_inner">
          <p class="c-desc only-pc c-animation fade-bottom">Với sứ mệnh kiến tạo hàng triệu nụ cười rạng rỡ cho người Việt, hệ thống Nha Khoa Delia  luôn cố gắng và nỗ lực hết mình trong công cuộc thu hút nhân tài nha khoa đầu ngành, có tay nghề giỏi, kinh nghiệm chuyên sâu trong lĩnh vực răng hàm mặt ở cả trong và ngoài nước.</p>
          <div class="p-team_slider only-sp">
            <!-- Slider main container -->
            <div class="swiper-container" id="sliderCustomer">
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
        <h2 class="c-title only-sp c-animation fade-left">câu chuyện khách hàng</h2>
        <div class="p-customer_inner">
          <div class="p-customer_heading only-pc c-animation fade-left">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/heading-customer.png" alt="câu chuyện khách hàng"></h2>
          </div>
          <div class="p-customer_list d-flex flex-wrap justify-content-end only-pc">
            <div class="p-customer_item transparent"></div>
            <div class="p-customer_item c-animation fade-right">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-01.png" class="c-zoom" alt="">
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

            <div class="p-customer_item c-animation fade-right">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-02.png" class="c-zoom" alt="">
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

            <div class="p-customer_item c-animation fade-right">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-03.png" class="c-zoom" alt="">
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

            <div class="p-customer_item c-animation fade-right">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-04.png" class="c-zoom" alt="">
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

            <div class="p-customer_item c-animation fade-right">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-05.png" class="c-zoom" alt="chị bảo ngọc">
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

            <div class="p-customer_item c-animation fade-right">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-06.png" class="c-zoom" alt= "chị trịnh hằng">
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

            <div class="p-customer_item c-animation fade-right">
              <div class="p-customer_item_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-07.png" class="c-zoom" alt="chị nguyễn t.linh">
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
            <ul class="d-flex justify-content-between c-animation">
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
            <div class="p-customer_visual c-animation">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers/customer-visual.png" alt="">
            </div>
            <div class="p-customer_info c-animation">
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
        <h2 class="c-title white only-sp c-animation">nha khoa delia<br><span>ngôi nhà của những nụ cười</span></h2>
        <div class="p-house_inner">
          <h2 class="c-titleBig white only-pc c-animation">NGÔI NHÀ CỦA<br>NHỮNG NỤ CƯỜI</h2>
          <div class="p-house_group only-pc">
            <div class="p-house_block d-flex align-items-center c-animation fade-left">
              <div class="p-house_block_thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/house/house-01.png" alt="">
              </div>
              <div class="p-house_block_info">
                <p>KIẾN TẠO<br><span>+50.000</span> NỤ CƯỜI</p>
                <p><span>ĐIỂM TỰA CHĂM SÓC</span><br>RĂNG MIỆNG CỦA SAO VIỆT</p>
                <p><span>HỆ THỐNG<br>DENTAL SPA 5 SAO</span><br>HÀNG ĐẦU VIỆT NAM</p>
              </div>
            </div>

            <div class="p-house_block d-flex c-animation fade-right">
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
            <div class="p-house_visual c-animation">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/house/house-visual.png" alt="nha khoa delia ngôi nhà của những nụ cười">
            </div>

            <div class="p-house_statistic c-animation fade-bottom">
              <p>Kiến tạo <span>+50.000</span> nụ cười</p>
              <p><span>Điểm tựa chăm sóc</span><br>nụ cười sao Việt</p>
              <p><span>Hệ thống Dental Spa 5 sao</span><br>hàng đầu Việt Nam</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container-lg green only-sp">
        <h2 class="c-title white only-sp c-animation">NGÔI NHÀ CỦA NHỮNG NỤ CƯỜI</h2>
        <p class="c-desc white text-justify c-animation">Tiên phong với sứ mệnh kiến tạo hàng triệu NỤ CƯỜI HẠNH PHÚC TRỌN VẸN cho người Việt, Delia - nơi bạn được chăm sóc như “NGƯỜI 1 NHÀ.</p>
        <div class="p-house_news">
          <div class="p-house_item c-animation fade-right">
            <div class="p-house_item_txt d-flex align-items-center h-full">
              <p><span>Chất lượng tốt nhất như người nhà: </span>Cam kết tư vấn giải pháp bảo vệ tối đa sức khoẻ răng nướu và phù hợp nhất.</p>
            </div>
            <div class="p-house_item_img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/house/house-sp-01.png" alt="Chất lượng tốt nhất như người nhà">
            </div>
          </div>

          <div class="p-house_item c-animation fade-left">
            <div class="p-house_item_txt d-flex align-items-center h-full order-2">
              <p><span>Thư giãn thoải mái như ở nhà: </span>Delia luôn thấu hiểu để mang tới cho Quý khách những trải nghiệm nha khoa êm ái nhất.</p>
            </div>
            <div class="p-house_item_img order-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/house/house-sp-02.png" alt="Thư giãn thoải mái như ở nhà">
            </div>
          </div>

          <div class="p-house_item c-animation fade-right">
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
        <h2 class="c-title only-pc c-animation">Kiến thức nha khoa - tin tức</h2>
        <h2 class="c-title white only-sp c-animation">Kiến thức nha khoa - tin tức</h2>
        <div class="p-news_list d-flex flex-wrap justify-content-between">
          <?php 
            // the query
            $query = new WP_Query( array(
                'posts_per_page' => 4, /* how many post you need to display */
                'offset' => 0,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post', /* your post type name */
                'post_status' => 'publish'
            ));
            $i = 0;
          ?>
          <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <?php if (has_post_thumbnail()) {
                $img = get_the_post_thumbnail_url($post->ID, 'medium');
              } else {
                $img = get_template_directory_uri(). "/assets/images/common/no-image.jpeg";
              } ?>
              <?php if ($i === 0): ?>
                <div class="p-news_item d-grid d-md-flex c-animation">
                  <div class="p-news_item_info">
                    <h3 class="p-news_item_ttl">
                      <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p class="p-news_item_excerpt only-pc"><?php the_excerpt(); ?></p>
                    <div class="text-end mt-3 only-pc">
                      <a href="<?php echo get_permalink(); ?>" class="c-btnReadmoreNews">Xem thêm</a>
                    </div>
                    <div class="text-start mt-3 only-sp">
                      <a href="<?php echo get_permalink(); ?>" class="c-btnReadmoreNews">Xem thêm</a>
                    </div>
                  </div>
                  <div class="p-news_item_thumb flex-md-shrink-0">
                    <a href="<?php echo get_permalink(); ?>">
                      <img src="<?php echo $img; ?>" class="c-imgRatio" alt="<?php the_title(); ?>">
                    </a>
                  </div>
                </div>
              <?php else: ?>
                <div class="p-news_item d-grid d-md-flex flex-wrap-reverse c-animation">
                  <div class="p-news_item_info">
                    <h3 class="p-news_item_ttl"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="p-news_item_excerpt only-pc"><?php the_excerpt(); ?></p>
                    <div class="text-start mt-3 only-sp">
                      <a href="<?php echo get_permalink(); ?>" class="c-btnReadmoreNews">Xem thêm</a>
                    </div>
                  </div>
                  <div class="p-news_item_thumb">
                    <a href="<?php echo get_permalink(); ?>">
                      <img src="<?php echo $img; ?>" class="c-imgRatio" alt="<?php the_title(); ?>">
                    </a>
                  </div>
                </div>
              <?php endif; ?>
            <?php $i++; endwhile; ?>
          <?php endif; ?>
          
          
          <!-- <div class="p-news_item d-grid d-md-flex flex-wrap-reverse c-animation">
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
          <div class="p-news_item d-grid d-md-flex flex-wrap-reverse c-animation">
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
          </div> -->
        </div>
      </div>
    </section>
    <!-- end section news-->

    <!--section contact-->
    <section class="p-contact">
      <div class="container-lg">
        <h2 class="c-title white c-animation">Liên hệ trực tiếp<br>Đăng ký ngay để được tư vấn</h2>
        <div class="p-contact_inner">
          <div class="p-contact_form">
            <div class="c-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="c-form_group c-animation">
                    <input type="text" name="name" class="c-inputField" placeholder="Họ và tên">
                  </div>

                  <div class="c-form_group c-animation">
                    <input type="text" name="phone" class="c-inputField" placeholder="Số điện thoại">
                  </div>

                  <div class="c-form_group c-animation">
                    <textarea name="status" class="c-textField" cols="30" rows="10" placeholder="Tình trạng"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="c-form_group c-animation">
                    <select name="" class="c-selectField">
                      <option value="">Chọn cơ sở</option>
                      <option value="1">Cơ sở chi nhánh Hà Nội </option>
                      <option value="2">Cơ sở chi nhánh Hồ Chí Minh </option>
                      <option value="3">Cơ sở chi nhánh Thanh Hóa </option>
                    </select>
                  </div>

                  <div class="c-form_group c-animation">
                    <select name="" class="c-selectField">
                      <option value="">Chọn cơ sở</option>
                      <option value="1">Cơ sở 1</option>
                      <option value="2">Cơ sở 2</option>
                      <option value="3">Cơ sở 3</option>
                      <option value="4">Cơ sở 4</option>
                    </select>
                  </div>

                  <div class="c-form_action d-flex flex-wrap justify-content-center c-animation">
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
<?php get_footer(); ?>