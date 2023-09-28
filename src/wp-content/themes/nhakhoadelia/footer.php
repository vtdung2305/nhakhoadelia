<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage delia
 */
?>

<?php get_template_part( 'template-parts/footer/body' ); ?>

</div><!-- / #root container -->
<div class="c-chatbox only-pc">
  <button class="c-chatbox_btn btn-chatbox">
    <span class="c-chatbox_btn_overlay"></span>
    <i class="fas fa-comments"></i>
  </button>
</div>

<div class="c-chatbox only-sp">
  <ul class="c-chatbox_bottom">
    <li>
      <a href="<?php echo get_site_url() ?>/dat-lich/">
        <i class="fa-solid fa-calendar-days"></i>
        <span>Đặt lịch</span>
      </a>
    </li>
    <li>
      <a href="tel:+84%20763296666">
        <i class="fa-solid fa-phone-volume"></i>
        <span>Hotline</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)" class="btn-chatbox">
        <i class="fa-brands fa-rocketchat"></i>
        <span>Chat</span>
      </a>
    </li>
  </ul>
</div>

<div class="c-chatbox_inner">
  <ul class="c-chatbox_list">
    <li>
      <a href="tel:+84987895383"><i class="icon-whatsapp"></i></a>
    </li>
    <li>
      <a href="https://zalo.me/1485080099706214944" target="_blank"><i class="icon-zalo"></i></a>
    </li>
    <li>
      <a href="https://m.me/NhaKhoaDelia" target="_blank"><i class="icon-messenger"></i></a>
    </li>
  </ul>
</div>
<?php wp_footer(); ?>

</body>
</html>