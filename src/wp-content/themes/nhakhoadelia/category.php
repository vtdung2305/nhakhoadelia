<?php 
/**
 * Template Name: Category page
 *
 * @package WordPress
 * @subpackage delia
 */

get_header(); ?>

<main class="site-main">
	<div class="p-visual">
		<div class="d-flex align-items-center p-visual_inner">
			<div class="container text-center">
				<h2><?php single_term_title() ?></h2>
			</div>
		</div>
	</div>

	<div class="l-content">
		<div class="container-lg">
			<div class="row">
				<div class="col-md-8">
					<div class="p-postList">
						<div class="p-postList_item">
							<div class="row">
								<figure class="figure col-sm-6 col-md-5">
									<a href="#">
										<img src="https://nhakhoadelia.vn/wp-content/uploads/2022/08/web-01-op2-573x300.jpg" class="figure-img img-fluid rounded" alt="...">
									</a>
								</figure>
								<div class="p-postList_info col-sm-6 col-md-7 d-flex flex-wrap">
									<h3 class="p-postList_title">
										<a href="#">Top 5 dòng sứ cao cấp được ưa chuộng nhất năm 2023 – Nha khoa Delia </a>
									</h3>
									<div class="p-postList_meta">
										<span>Tháng Tám 15, 2022 </span>
									</div>
									<div class="p-postList_excerpt">
										<p>Song song với “độ hot” của phương pháp làm đẹp thẩm mỹ răng sứ, là ngày càng có nhiều thương hiệu vật liệu răng sứ được ra mắt trên thị</p>
									</div>

									<a href="#" class="c-btnReadmore">Xem thêm</a>
								</div>
							</div>
						</div>

						<div class="p-postList_item">
							<div class="row">
								<figure class="figure col-sm-6 col-md-5">
									<a href="#">
										<img src="https://nhakhoadelia.vn/wp-content/uploads/2022/08/web-01-op2-573x300.jpg" class="figure-img img-fluid rounded" alt="...">
									</a>
								</figure>
								<div class="p-postList_info col-sm-6 col-md-7 d-flex flex-wrap">
									<h3 class="p-postList_title">
										<a href="#">Top 5 dòng sứ cao cấp được ưa chuộng nhất năm 2023 – Nha khoa Delia </a>
									</h3>
									<div class="p-postList_meta">
										<span>Tháng Tám 15, 2022 </span>
									</div>
									<div class="p-postList_excerpt">
										<p>Song song với “độ hot” của phương pháp làm đẹp thẩm mỹ răng sứ, là ngày càng có nhiều thương hiệu vật liệu răng sứ được ra mắt trên thị</p>
									</div>

									<a href="#" class="c-btnReadmore">Xem thêm</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer();
