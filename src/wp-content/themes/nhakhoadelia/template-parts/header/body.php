<?php
/**
 * The Header for our theme
 *
 * @package WordPress
 * @subpackage delia
 */
?>

<header class="l-header">
	<div class="container">
		<div class="l-header_inner d-flex justify-content-between">
			<div class="logo">
				<h1>
					<a href="/">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/common/logo.webp" class="img-fluid" alt="logo">
					</a>
				</h1>
			</div>

			<div class="c-navigation">
				<div class="c-navigation_inner">
					<nav class="navbar navbar-expand-lg navbar-light">
						<div class="">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<?php
									wp_nav_menu(
										array(
											'theme_location'  => 'primary',
											'menu'            => '',
											'menu_class'      => '',
											'add_li_class'    => 'nav-item',
											'container'       => '',
											'container_class' => '',
											'items_wrap'      => '<ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
											'fallback_cb'     => false,
											'walker'          => new My_Walker_Nav_Menu() //call walker 
										)
									);
								?>
								<!-- <form class="d-flex" role="search">
									<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
									<button class="btn btn-success" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                	</button>
								</form> -->
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>