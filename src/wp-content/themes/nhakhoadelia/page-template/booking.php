<?php 
/**
 * Template Name: Booking page
 *
 * @package WordPress
 * @subpackage delia
 */
get_header(); ?>

<main class="site-main">
	<div class="l-content">
		<div class="container-lg">
			<div class="row">
				<div class="col-md-12">
          <div class="c-head">
            <h2 class="c-head_ttl"><?php the_title(); ?></h2>
          </div>
          <div class="p-booking">
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
                    <select name="branch_name" class="c-selectField">
                      <option value="">Chọn cơ sở</option>
                      <option value="1">Cơ sở chi nhánh Hà Nội </option>
                      <option value="2">Cơ sở chi nhánh Hồ Chí Minh </option>
                      <option value="3">Cơ sở chi nhánh Thanh Hóa </option>
                    </select>
                  </div>

                  <div class="c-form_group c-animation">
                    <select name="service_name" class="c-selectField">
                      <option value="">Chọn dịch vụ</option>
                      <option value="1">Bọc răng sứ</option>
                      <option value="2">Dán sứ veneer</option>
                      <option value="3">Trồng răng implant</option>
                      <option value="4">Niềng răng</option>
                    </select>
                  </div>

                  <div class="c-form_action d-flex flex-wrap h-50 justify-content-center align-items-center c-animation">
                    <div class="c-form_button">
                      <button class="c-btnSubmit">Đăng ký ngay</button>
                    </div>
                    <p class="c-form_note text-center is-green">Quý khách vui lòng để lại thông tin để nhận tư vấn trực tiếp<br>từ chuyên gia thẩm mỹ răng sứ hàng đầu Việt Nam</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
				</div>
			</div>

      <div class="row mt-4 c-animation">
        <div class="col-md-12">
          <div class="c-head">
            <h2 class="c-head_ttl">Liên hệ</h2>
          </div>
        </div>
      </div>

      <div class="row c-animation">
        <div class="col-md-6">
          <div class="p-address">
            <ul class="p-address_block">
              <li>
                <span><i class="fa-solid fa-house-chimney"></i>Chi nhánh Hà Nội</span>
              </li>
              <li>
                <span><i class="fa-solid fa-location-dot"></i>265 Tôn Đức Thắng, Đống Đa, Hà Nội</span>
              </li>
              <li>
                <a href="tel:076.329.6666"><i class="fa-solid fa-phone"></i>Hotline: 076.329.6666</a>
              </li>
              <li>
                <a href="mailto:nhakhoadelia265@gmail.com"><i class="fa-solid fa-envelope"></i>Email: nhakhoadelia265@gmail.com</a>
              </li>
            </ul>

            <ul class="p-address_block">
              <li>
                <span><i class="fa-solid fa-house-chimney"></i>Chi nhánh TP Hồ Chí Minh</span>
              </li>
              <li>
                <span><i class="fa-solid fa-location-dot"></i>Số 15 Đường 6 – Khu đô thị Hà Đô, Cổng 118 đường 3/2, P.12, Q.10</span>
              </li>
              <li>
                <a href="tel:076.329.6666"><i class="fa-solid fa-phone"></i>Hotline: 076.329.6666</a>
              </li>
              <li>
                <a href="mailto:nhakhoadelia265@gmail.com"><i class="fa-solid fa-envelope"></i>Email: nhakhoadelia265@gmail.com</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-6">
          <div class="p-address">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.313156064475!2d105.82879051493246!3d21.020152286002986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab82c58b4dd7%3A0x11e094f9f827ba15!2zMjY1IFAuIFTDtG4gxJDhu6ljIFRo4bqvbmcsIEjDoG5nIELhu5l0LCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpIDAwMTk2!5e0!3m2!1svi!2s!4v1642531868207!5m2!1svi!2s" frameborder="0" allowfullscreen width="600" height="488px" loading="lazy"></iframe>
          </div>
        </div>
      </div>
		</div>
	</div>
</main>

<?php get_footer();