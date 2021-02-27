<?php 
get_header(); 
while ( have_posts() ) :
  the_post();
  $thisID = get_the_ID();
?>
<section class="innerpage-con-wrap">
  <div class="container-sm">
    <div class="row">
      <div class="col-md-12">
        <article class="default-page-con">
          <?php if( have_rows('inhoud') ){ ?>
          <?php while ( have_rows('inhoud') ) : the_row();  ?>
          <?php 
            if( get_row_layout() == 'introductietekst' ){ 
              $title = get_sub_field('titel');
              $afbeelding = get_sub_field('afbeelding');
          ?>
          <div class="dfp-promo-module clearfix">
            <?php 
              if( !empty($title) ) printf('<div><strong class="dfp-promo-module-title fl-h1">%s</strong></div>', $title); 
              if( !empty($afbeelding) ){
                echo '<div class="dfp-plate-one-img-bx">'. cbv_get_image_tag($afbeelding, 'about_slide').'</div>';
              }
            ?>
          </div>
          <?php }elseif( get_row_layout() == 'afbeelding' ){ 
              $afbeelding1 = get_sub_field('fc_afbeelding1');
              $afbeelding2 = get_sub_field('fc_afbeelding2');
              $fullafbeelding = get_sub_field('fc_full_afbeelding');
          ?>
          <div class="gallery-wrap clearfix">
            <div class="gallery gallery-columns-2">
              <?php if( !empty($afbeelding1) ): ?>
              <figure class="gallery-item">
                <div class="gallery-icon portrait">
                  <?php echo cbv_get_image_tag($afbeelding1, 'about_gallery'); ?>
                </div>
              </figure>
              <?php endif; ?>
              <?php if( !empty($afbeelding2) ): ?>
              <figure class="gallery-item">
                <div class="gallery-icon portrait">
                  <?php echo cbv_get_image_tag($afbeelding2, 'about_gallery'); ?>
                </div>
              </figure>
              <?php endif; ?>
            </div>
          </div>
          <?php if( !empty($fullafbeelding) ): ?>
          <div class="dfp-single-img-module">
            <div class="dfp-single-img">
              <?php echo cbv_get_image_tag($fullafbeelding, 'verblijf_full'); ?>
            </div>
          </div>
          <?php endif; ?>
          <?php }elseif( get_row_layout() == 'teksteditor' ){ ?>
          <div class="dfp-text-module clearfix">
            <?php 
              $beschrijving = get_sub_field('fc_teksteditor');
              if( !empty( $beschrijving ) ) echo wpautop($beschrijving); 
            ?>
          </div>
          <?php }elseif( get_row_layout() == 'galerij' ){ ?>
          <?php     
            $galleries = get_sub_field('afbeeldingen');
            $lightbox = get_sub_field('lightbox');
            $kolom = get_sub_field('kolom');
            if( $galleries ): 
          ?>
            <div class="gallery-wrap clearfix">
              <div class="gallery gallery-columns-<?php echo $kolom; ?>">
                <?php foreach( $galleries as $image ): ?>
                <figure class="gallery-item">
                  <div class="gallery-icon portrait">
                  <?php 
                    if( $lightbox ){
                      echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                      echo cbv_get_image_tag( $image, 'about_gallery' );
                      echo "</a>";
                    }else{
                      echo cbv_get_image_tag( $image, 'about_gallery' );
                    }
                  ?>
                  </div>
                </figure>
                <?php endforeach; ?>
              </div>
            </div>
            <?php endif; ?>
            <?php }elseif( get_row_layout() == 'poster' ){ ?>
            <?php     
              $poster = get_sub_field('afbeeldingen');
              $video_url = get_sub_field('fc_videourl');
              $postersrc = !empty($poster)? cbv_get_image_src($poster, 'dft_poster'): '';
            ?> 
            <div class="ac-fancy-module" >
              <div class="fancy-img inline-bg" style="background-image: url(<?php echo $postersrc; ?>);"></div>
              <?php if( $video_url ): ?>
              <a class="overlay-link" data-fancybox href="<?php echo $video_url; ?>"></a>
              <div class="fancy-border"></div>
              <span class="ms-video-play-cntlr">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/play-icon.svg" alt=""></i>
              </span>
              <?php endif; ?>
            </div>
            <?php }elseif( get_row_layout() == 'afbeelding_tekst' ){ 
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              $imgsrc = !empty($fc_afbeelding)? cbv_get_image_src($fc_afbeelding, 'dfpageg1'): '';
              $imgtag = !empty($fc_afbeelding)? cbv_get_image_tag($fc_afbeelding, 'dfpageg1'): '';
              $fc_tekst = get_sub_field('fc_tekst');
              $positie_afbeelding = get_sub_field('positie_afbeelding');
              $imgposcls = ( $positie_afbeelding == 'right' ) ? ' fl-dft-rgtimg-lftdes' : '';
            ?>
            <div class="fl-dft-overflow-controller">
              <div class="fl-dft-lftimg-rgtdes clearfix<?php echo $imgposcls; ?>">
                <div class="fl-dft-lftimg-rgtdes-lft" style="background-image: url(<?php echo $imgsrc; ?>);"></div>
                <div class="fl-dft-lftimg-rgtdes-rgt">
                  <?php echo wpautop($fc_tekst); ?>
                </div>
              </div>
            </div>
            <?php }elseif( get_row_layout() == 'tekst_tekst' ){ 
              $fc_tekst1 = get_sub_field('fc_tekst1');
              $fc_tekst2 = get_sub_field('fc_tekst2');
            ?>
            <div class="dfp-des-module clearfix">
              <?php if( !empty($fc_tekst1) ): ?>
              <div class="dfp-des-lft">
                <?php echo wpautop($fc_tekst1); ?>
              </div>
              <?php endif; ?>
              <?php if( !empty($fc_tekst2) ): ?>
              <div class="dfp-des-rgt">
                <?php echo wpautop($fc_tekst2); ?>
              </div>
              <?php endif; ?>
            </div>
            <?php }elseif( get_row_layout() == 'cta' ){ 
              $fc_titel = get_sub_field('fc_titel');
              $fc_tekst = get_sub_field('fc_tekst');
              $fc_knop = get_sub_field('fc_knop');
            ?>
            <div class="dfp-cta-module clearfix">
              <div class="residents-cntlr industry-cntlr inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/industry-bg-img.jpg');">
                <?php 
                if( !empty($fc_titel) ) printf('<h4 class="industry-title fl-h2">%s</h4>', $fc_titel);
                if( !empty($fc_tekst) ) echo wpautop( $fc_tekst );

                if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                  printf('<div class="industry-btn residents-btn"><a class="fl-trnsprnt-btn" href="%s" target="%s">%s</a></div>', $fc_knop['url'], $fc_knop['target'], $fc_knop['title']); 
                }
                ?>
              </div>
            </div>
          <?php }elseif( get_row_layout() == 'table' ){
                $fc_table = get_sub_field('fc_tafel');
               $fc_titel = !empty(get_sub_field('fc_titel'))?get_sub_field('fc_titel'):'';
                cbv_table($fc_table, $fc_titel);
          ?>
          <?php }elseif( get_row_layout() == 'afbeeldingen_slider' ){ 
              $fc_afbeeldingen = get_sub_field('afbeeldingen');
              if( $fc_afbeeldingen ):
          ?>
          <div class="dfp-single-img-slider-module">
          <div class="verblijf-slider-ctlr">
            <div class="fl-nxt-prev">
              <span class="fl-prev">
                <i>
                  <svg class="fl-prev-svg" width="12" height="20" viewBox="0 0 12 20" fill="#ffffff">
                    <use xlink:href="#fl-prev-svg"></use></svg>
                  </i>
                </span>
                <span class="fl-next">
                  <i>
                    <svg class="fl-next-svg" width="12" height="20" viewBox="0 0 12 20" fill="#ffffff">
                      <use xlink:href="#fl-next-svg"></use></svg>
                    </i>
                  </span>
                </div>
                <div class="verblijf-single-slider bvsSlider">
                <?php 
                  foreach( $fc_afbeeldingen as $fcafbeeldingID ): 
                  $fcslideImg = !empty($fcafbeeldingID)? cbv_get_image_src( $fcafbeeldingID, 'about_slide' ):''; 
                ?>
                  <div class="verblijf-single-slide-item">
                    <div class="verblijf-single-slide-item-img inline-bg" style="background: url('<?php echo $fcslideImg; ?>');"></div>
                  </div>
                <?php endforeach; ?>
                </div>
              </div>
            </div>
            <hr>
            <?php endif; ?>
          <?php }elseif( get_row_layout() == 'fcknop' ){
            $roze_knop = get_sub_field('roze_knop');
            $witte_knop = get_sub_field('witte_knop');
          ?> 
          <div class="dfp-btn-module">
            <?php 
              if( is_array( $roze_knop ) &&  !empty( $roze_knop['url'] ) ){
                printf('<div class="dfp-btn-int"><a class="fl-pink-btn pb-bg" href="%s" target="%s">%s</a></div>', $roze_knop['url'], $roze_knop['target'], $roze_knop['title']); 
              }
              if( is_array( $witte_knop ) &&  !empty( $witte_knop['url'] ) ){
                printf('<div class="dfp-btn-int"><a class="fl-trnsprnt-btn" href="%s" target="%s">%s</a></div>', $witte_knop['url'], $witte_knop['target'], $witte_knop['title']); 
              }
            ?>
          </div>
          <?php }elseif( get_row_layout() == 'pdf' ){
            $fc_titel = get_sub_field('fc_titel');
            $is_hide_title = get_sub_field('is_hide_title');
            $fc_knop = get_sub_field('knop');
            $fc_pdfs = get_sub_field('pdfembedder');
          ?>
          <?php 
            if( !$is_hide_title ){
            if( !empty($fc_titel) ): 
          ?>
          <?php echo !empty($fc_knop)?'<a href="'.$fc_knop.'">':'';?>
          <div class="dfp-con-bar-module">
            <div class="pn-con-bar">
              <i><img src="<?php echo THEME_URI; ?>/assets/images/pn-con-bar-icon.svg"></i>
              <strong><?php echo $fc_titel; ?></strong>
            </div>
          </div>
          <?php echo !empty($fc_knop)?'</a>':'';?>
          <?php 
            endif; 
            }
          ?>
          <?php if( !empty($fc_pdfs) ): ?>
          <div class="dfp-pdf-module">
            <div class="pn-con-pdf">
              <i><img src="<?php echo THEME_URI; ?>/assets/images/pdf.svg"></i>
              <?php echo do_shortcode( $fc_pdfs ); ?>
            </div>
          </div>
          <?php endif; ?>
          <?php }elseif( get_row_layout() == 'google_map' ){
            $fc_iframe = get_sub_field('fc_iframe');
          ?>
          <div class="dfp-googlemp">
            <?php if( !empty($fc_iframe) ) printf('%s', $fc_iframe); ?>
          </div>
          <?php }elseif( get_row_layout() == 'gap' ){
            $fc_gap = get_sub_field('fc_gap');
          ?>
          <div style="height:<?php echo $fc_gap; ?>px"></div>
          <?php }elseif( get_row_layout() == 'horizontal_line' ){ ?>
          <hr>
          <?php } ?>
          <?php endwhile; ?>
          <?php }else{ 
            the_content();
          } ?>
        </article>
      </div>
    </div>
  </div>
</section>
<?php 
  $gift_cards = get_field('gift_cards', $thisID);
  if($gift_cards):
?>
<section class="realestat-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="realestat-sec-inr inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/realestate-bg.jpg');">
          <?php 
            if( !empty($gift_cards['titel']) ) printf('<h2 class="realestate-title fl-h2">%s</h2>', $gift_cards['titel']);
            if( !empty($gift_cards['beschrijving']) ) echo wpautop($gift_cards['beschrijving']);
            $gift_knop = $gift_cards['knop'];
            if( is_array( $gift_knop ) &&  !empty( $gift_knop['url'] ) ){
              printf('<a class="fl-trnsprnt-btn" href="%s" target="%s">%s</a>', $gift_knop['url'], $gift_knop['target'], $gift_knop['title']); 
            }
          ?>
          <span class="rs-square"></span>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>
