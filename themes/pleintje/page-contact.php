<?php 
  /*Template Name: Contact*/
  get_header(); 
  $thisID = get_the_ID();
  $form = get_field('formsec', $thisID);
?>
<section class="contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form-block clearfix">
          <div class="contact-form-lft">
            <?php if( $form ): ?>
            <div class="contact-form-dsc">
              <?php 
              if( !empty($form['titel']) ) printf('<h1 class="fl-h1">%s</h1>', $form['titel']);
              if( !empty($form['subtitel']) ) printf('<h4 class="fl-h4">%s</h4>', $form['subtitel']);
              if( !empty($form['beschrijving']) ) echo wpautop($form['beschrijving']);
              ?>
            </div>
            <div class="contact-form-wrp clearfix">
              <div class="wpforms-container">
                <?php if( !empty($form['shortcode']) ) echo do_shortcode($form['shortcode']); ?>
              </div>
            </div>
            <?php endif;?>
          </div>
          <div class="contact-form-rgt">
            <?php 
              $address = get_field('address', 'options');
              $gmurl = get_field('url', 'options');
              $telefoon = get_field('telefoon', 'options');
              $email = get_field('emailadres', 'options');
              $gmaplink = !empty($gmurl)?$gmurl: 'javascript:void()';
              $smedias = get_field('social_media', 'options');
            ?>
            <span></span>
            <div class="contact-form-info-cntlr">
              <div class="contact-form-info">
                <h5 class="fl-h5 contact-form-info-title"><?php _e( 'CONTACT INFO', THEME_NAME ); ?></h5>
                <ul class="reset-list clearfix">
                  <?php if( !empty($address) ) printf('<li><a href="%s">%s</a></li>', $gmaplink, $address); ?>
                  <?php if( !empty($email) ) printf('<li><a href="mailto:%s">%s</a></li>', $email, $email); ?>
                  <?php if( !empty($telefoon) ) printf(' <li><span>Tel:<a href="tel:%s">%s</a></span></li>', phone_preg($telefoon),  $telefoon); ?>
                </ul>
              </div>
              <?php if(!empty($smedias)):  ?>
              <div class="contact-form-info-socail">
                <ul class="reset-list clearfix">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  $map = get_field('mapsec', $thisID); 
  if( $map ):
?>
<section class="contact-google-map-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-google-dsc-wrp">
        <?php 
          if( !empty($map['titel']) ) printf('<h4 class="fl-h4 contact-google-dsc-title">%s</h4>', $map['titel']);
          if( !empty($map['beschrijving']) ) echo wpautop($map['beschrijving']);
        ?>
        </div>
      </div>
    </div>
  </div>
  <?php 
  if( !empty($gmap['gmap']) ): 
  $google_map = $gmap['gmap'];
  ?>
  <div class="contact-google-map-sec-wrp">
    <div id="googlemap" data-latitude="<?php echo $google_map['lat']; ?>" data-longitude="<?php echo $google_map['lng']; ?>"></div>
  </div>  
  <?php endif; ?>  
</section>
<?php endif; ?>
<?php get_footer(); ?>