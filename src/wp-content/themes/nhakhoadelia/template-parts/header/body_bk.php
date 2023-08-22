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
			<div class="logo"><a href="/"><img alt="logo" src="<?php echo get_template_directory_uri();?>/assets/images/common/notee_title_logo.png"></a></div>
		    <nav class="navMenu dropdown">
				<button class="c-open-menu dropdown-toggle only-sp" data-toggle="dropdown" @click.stop="display_menu()">Menu</button>
		        <div class="wrap-menu">
					<div id="hamburger" v-on:click="display_menu()">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<ul id="menu">
						<li><a>Menu 1</a></li>
						<li class="drop" v-on:mouseover="openDropdown()"><a>Menu 2 dropdown <i class="icon-arrow"></i></a>
							<ul class="drop_menu">
								<a>Sub menu 1</a>
								<a>Sub menu 2</a>
								<a>Sub menu 3</a>
							</ul>
						</li>
						<li class="drop"><a>Menu 3 dropdown  <i class="icon-arrow" @click="display_drop_menu()"></i></a>
							<ul class="drop_menu">
								<a>Sub menu 1</a>
								<a>Sub menu 2</a>
								<a>Sub menu 3</a>
							</ul>
						</li>
						<li><a>Menu 4</a></li>
					</ul>
				</div>
		    </nav>
		</div>
	</header>
    <!-- header -->
    <?php if(function_exists('bcn_display') && !is_front_page()) { ?>
	<nav class="p-breadcrumb">
        <div class="container">
            <?php bcn_display(); ?>
        </div>
    </nav>
    <?php } ?>
