<?php 
/**
 * Template Name: Contact page
 *
 * @package WordPress
 * @subpackage delia
 */
get_header();
 ?>

<div class="wrap contact-page">
	<div class="container">
		<main class="site-main">	
			<div class="page-heading"><h2 class="heading-02"><?php the_title(); ?></h2></div>
			<div class="article-body">
				<p style="text-align:center">noteEでは、アプリの先行モニターを募集しています！<br>今ならマンツーマンの体験レッスンを無料で3回分プレゼント！<br>この機会にnoteEをご利用ください！</p>
				<blockquote class="wp-block-quote"><p>※現在、先行モニターのためアプリ内でのレッスン予約は出来ません。以下のフォームからお申しお願いします。<br>※レッスン場所は、noteEが指定する東京都内のnoteEスポットとなります。<br>※レッスン予約申し込み後、担当者からご連絡させていただきます。</p></blockquote>
				<?php echo do_shortcode('[contact-form-7 id="17"]') ?>
			</div>
		</main>
	</div>
</div>

<?php
get_footer(); ?>
