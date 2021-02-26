<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $address = get_field('address', 'options');
  $gmurl = get_field('url', 'options');
  $telefoon = get_field('telefoon', 'options');
  $email = get_field('emailadres', 'options');
  $btw = get_field('btw', 'options');
  $gmaplink = !empty($gmurl)?$gmurl: 'javascript:void()';
  $smedias = get_field('social_media', 'options');
  $copyright_text = get_field('copyright_text', 'options');
  $fcknop = get_field('fcknop', 'options');
?>
<footer class="footer-wrp">
  <!-- scroll to top mobile -->
  <div class="to-top-wrap">
    <div class="to-top-cntlr">
      <div class="to-top">
        <svg class="up-white-angle" width="25" height="15" viewBox="0 0 25 15" fill="#fff">
          <use xlink:href="#up-white-angle"></use> </svg>
      </div>
    </div>
  </div>
    
    <div class="ftr-top">
      <div class="container-md">
        <div class="row">
          <div class="col-md-12">
            <div class="ftr-top-inr clearfix">
              <div class="ftr-logo">
                <?php if( !empty($logo_tag) ): ?>
                <div class="ftr-logo-inr">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo $logo_tag; ?>
                  </a>
                </div>
                <?php endif; ?>
                <?php if( !empty($fcknop) ) printf('<div class="ftr-logo-btn"><a href="%s">Reserveer</a></div>', $fcknop); ?>
              </div>
              <div class="ftr-menu ftr-col-1">
                <h6 class="ftr-menu-title"><?php _e( 'NAVIGATIE', THEME_NAME ); ?></h6>
                <div class="ftr-menu-des">
                  <?php 
                    $cbv_ft_menu = array( 
                        'theme_location' => 'cbv_ft_menu', 
                        'menu_class' => 'reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $cbv_ft_menu );
                  ?>
                </div>
              </div>

              <div class="ftr-menu ftr-col-2">
                <h6 class="ftr-menu-title"><?php _e( 'CONTACT', THEME_NAME ); ?></h6>
                <div class="ftr-menu-des">
                  <?php if( !empty($address) ) printf('<div class="ftr-location"><a href="%s">%s</a></div>', $gmaplink, $address); ?>
                  <?php if( !empty($email) ) printf('<div class="ftr-email"><a href="mailto:%s">%s</a></div>', $email, $email); ?>
                  <?php if( !empty($telefoon) ) printf('<div class="ftr-phone"><div class="ftr-phone-cntlr"><span>Tel:</span><a href="tel:%s">%s</a></div></div>', phone_preg($telefoon),  $telefoon); ?>
                  <?php if(!empty($smedias)):  ?>
                    <div class="ftr-social-media">
                    <ul class="reset-list">
                      <?php foreach($smedias as $smedia): ?>
                      <li>
                        <a target="_blank" href="<?php echo $smedia['url']; ?>">
                            <?php echo $smedia['icon']; ?>
                        </a>
                     </li>
                     <?php endforeach; ?>
                    </ul>
                    </div>
                  <?php endif; ?>
                  <?php if( !empty($btw) ) printf('<div class="ftr-vat"><span>%s</span></div>', $btw); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ftr-btm">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ftr-btm-inr clearfix">
              <div class="ftr-copywrite">
                <?php if( !empty($copyright_text) ) printf('%s', $copyright_text); ?>
              </div>
              <div class="ftr-btm-menu">
                <?php 
                  $cbv_copyright_menu = array( 
                      'theme_location' => 'cbv_copyright_menu', 
                      'menu_class' => 'reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $cbv_copyright_menu );
                ?>
              </div>
              <div class="ftr-designby">
                <a href="#">Website laten maken door Conversal</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>