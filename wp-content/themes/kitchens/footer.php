<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kitchens
 */

?>


</main><!-- #content -->

<footer>
    <div class="container flex column">
      <div class="logo-wrap flex all-center">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" loading='lazy' alt="MTC Home Kitchens" width="84" height="33">
      </div>
      <div class="link-columns flex align-stretch space-b gap">
        
        <div class="links-col flex column">
          <h4 class="col-title">About</h4>
          <a href="/shop" class="link">Shop</a>
          <a href="/plan-my-kitchen" class="link">Plan My Kitchen</a>
          <a href="/about" class="link">About Us</a>
          <a href="/gallery" class="link">Gallery</a>
        </div>
        <div class="links-col flex column">
          <h4 class="col-title">Service</h4>
          <a href="/faq" class="link">FAQ</a>
          <a href="/contact" class="link">Contact</a>
          <a href="/how-to-buy" class="link">How to Buy</a>
          <a href="/downloads" class="link">Downloads</a>
        </div>
        <div class="links-col flex column">
          <h4 class="col-title">Info</h4>
          <a href="/delivery" class="link">Delivery</a>
          <a href="/terms" class="link">Terms</a>
          <a href="/privacy" class="link">Privacy</a>
        </div>
        <div class="links-col footer-socials flex column">
          <h4 class="col-title">Follow</h4>
          <div class="wrap flex">
            <a href="https://www.facebook.com/mtc_home_kitchens" target="_blank">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/facebook.svg" loading='lazy' alt="Facebook link" width="40" height="40">
            </a>
            <a href="https://twitter.com/mtc_home_kitchens" target="_blank">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/twitter.svg" loading='lazy' alt="Twitter link" width="40" height="40">
            </a>
            <a href="https://instagram.com/mtc_home_kitchens" target="_blank">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/instagram.svg" loading='lazy' alt="Instagram link" width="40" height="40">
            </a>
          </div>
        </div>
      </div>
      <span class="copyright">Copyright Online MTC Home Kitchens <?php echo date('Y'); ?> - All rights reserved. Responsive website design, Development & Hosting by mtc.</span>
    </div>
</footer>

<script src="<?php bloginfo('template_url'); ?>/scripts.prod.js?v=1"></script>


</body>
</html>
