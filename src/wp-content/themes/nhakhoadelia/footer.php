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
<div class="c-chatbox">
  <div class="c-chatbox_inner">
    <ul class="c-chatbox_list">
      <li>
        <a href="#"><i class="icon-whatsapp"></i></a>
      </li>
      <li>
        <a href="#"><i class="icon-zalo"></i></a>
      </li>
      <li>
        <a href="#"><i class="icon-viber"></i></a>
      </li>
    </ul>
    <button class="c-chatbox_btn" id="btn-chatbox">
      <span class="c-chatbox_btn_overlay"></span>
      <i class="fas fa-comments"></i>
    </button>
  </div>
    
</div>
<?php wp_footer(); ?>

</body>
</html>