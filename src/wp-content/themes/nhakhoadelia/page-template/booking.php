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
                    <select name="" class="c-selectField">
                      <option value="">Chọn cơ sở</option>
                      <option value="1">Cơ sở 1</option>
                      <option value="2">Cơ sở 2</option>
                      <option value="3">Cơ sở 3</option>
                      <option value="4">Cơ sở 4</option>
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
		</div>
	</div>
</main>

<?php get_footer();