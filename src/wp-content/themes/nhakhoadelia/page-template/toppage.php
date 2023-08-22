<?php
/**
 * Template Name: Top page
 *
 * @package WordPress
 * @subpackage delia
 */
mb_internal_encoding("UTF-8");

get_header(); ?>

	<main class="site-main">
		<div class="container">
			<button
				class="btn green"
				@click="$modal.show('demo-login')">
				Demo: Login
			</button>
			<br>
			<button
				class="btn"
				@click="$modal.show('example-adaptive')">
				Adaptive
			</button>
			<br>
			<button
				class="btn"
				@click="$modal.show('example-custom-modal')">
				Custom modal
			</button>
			<br>
			<button
				class="btn"
				@click="$modal.show('example-active-modal')">
				Active modal
			</button>
			<demo-login-modal></demo-login-modal>
			<demo-adaptive-modal></demo-adaptive-modal>
			<custom-component-modal text="this is the custom text"></custom-component-modal>
			<active-modal></active-modal>
		</div>
	</main>
<?php
get_footer(); ?>