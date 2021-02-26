<?php
  /*Template Name: About*/
  get_header(); 
  $thisID = get_the_ID();
  $intro = get_field('introsec', $thisID);
  if($intro):
?>
<section class="over-ons-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="over-ons-cntlr">

          <div class="over-ons-lft">
            <div class="over-ons-lft-desc">
            <?php 
              if( !empty($intro['titel']) ) printf('<h1 class="over-ons-lft-title fl-h1">%s</h1>', $intro['titel']);
              if( !empty($intro['subtitel']) ) printf('<h4 class="over-ons-lft-sub-title fl-h4">%s</h4>', $intro['subtitel']);
              if( !empty($intro['beschrijving']) ) echo wpautop($intro['beschrijving']);
            ?>
            </div>
          </div>

          <div class="over-ons-rt">
            <?php 
              if(!empty($intro['afbeelding_1'])): 
                $colimg1 = cbv_get_image_src($intro['afbeelding_1'], 'about_intor1');
            ?>
            <div class="abus-img-mdul-left-cntlr abus-img-mdul-col">
              <div class="abus-img-mdul-left">
                <span class="abus-imgmdlft-sqr"></span>
                <div class="abus-img-mdul-left-img inline-bg" style="background-image: url('<?php echo $colimg1; ?>');"></div>
              </div>
            </div>
            <?php endif; ?>
            <?php 
              if(!empty($intro['afbeelding_2'])): 
                $colimg2 = cbv_get_image_src($intro['afbeelding_2'], 'about_intor2');
            ?>
            <div class="abus-img-mdul-rt-cntlr abus-img-mdul-col">
              <div class="abus-img-mdul-rt">
                <div class="abus-img-mdul-rt-img inline-bg" style="background-image: url('<?php echo $colimg2; ?>');"></div>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php 
  $showhide_intro2 = get_field('showhide_intro2', $thisID);
  if($showhide_intro2):
    $intro2 = get_field('intro2', $thisID);
    $blokImg2 = !empty($intro2['afbeelding'])? cbv_get_image_src($intro2['afbeelding'], 'about_blok'):'';
?>
<section class="lftimg-rgtdes-sec">
  <div class="container-md">
    <div class="row">
      <div class="col-md-12">
        <div class="lftimg-rgtdes-cntlr">
          <div class="fl-dft-lftimg-rgtdes clearfix">
            <div class="fl-dft-lftimg-rgtdes-lft" style="background-image: url(<?php echo $blokImg2; ?>);"></div>
            <div class="fl-dft-lftimg-rgtdes-rgt">
              <?php 
                if( !empty($intro2['beschrijving']) ) echo wpautop($intro2['beschrijving']);
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php 
  $showhide_menu = get_field('showhide_menu', $thisID);
  if($showhide_menu):
    $menu = get_field('menusec', $thisID);
?>
<section class="ovo-industry-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="industry-cntlr ovo-industry-cntlr inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/industry-bg-img.jpg');">
          <?php 
            if( !empty($menu['titel']) ) printf('<h4 class="industry-title fl-h2">%s</h4>', $menu['titel']);
            if( !empty($menu['beschrijving']) ) echo wpautop($menu['beschrijving']);
            $menu_knop = $menu['knop'];
            if( is_array( $menu_knop ) &&  !empty( $menu_knop['url'] ) ){
              printf('<div class="industry-btn"><a class="fl-trnsprnt-btn" href="%s" target="%s">%s</a></div>', $menu_knop['url'], $menu_knop['target'], $menu_knop['title']); 
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<section class="verblijf-con ovo-verblijf-con">
  <div class="container-sm">
    <div class="row">
      <div class="col-md-12">
        <div class="verblijf-con-inr ovo-verblijf-con-inr">
          <?php 
            $showhide_slides = get_field('showhide_slides', $thisID);
            if($showhide_slides):
              $gallery = get_field('gallery', $thisID);
          ?>
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
            <?php if( $gallery ): ?>
            <div class="verblijf-single-slider-wrap">
              <div class="hm-bnr-lft-top-img">
                <img src="<?php echo THEME_URI; ?>/assets/images/bnr-rose-img.svg" alt="">
              </div>
              <div class="verblijf-single-slider ovo-verblijf-single-slider vsSlider">
                <?php foreach( $gallery as $gal_id ): ?>
                <div class="verblijf-single-slide-item">
                  <div class="verblijf-single-slide-item-img inline-bg" style="background: url('<?php echo cbv_get_image_src($gal_id, 'about_slide'); ?>');"></div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            
            <div class="verblijf-single-slider-nav vsNavSlider">
              <?php foreach( $gallery as $gal_id ): ?>
              <div class="verblijf-single-slide-nav-item">
                <?php echo cbv_get_image_tag($gal_id, 'about_slidethumb'); ?>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php 
            $showhide_blok = get_field('showhide_blok', $thisID);
            if($showhide_blok):
              $blok = get_field('bloksec', $thisID);
          ?>
          <div class="ovo-verblijf-desc">
          <?php 
            if( !empty($blok['titel']) ) printf('<h2 class="ovo-verblijf-title fl-h2">%s</h2>', $blok['titel']);
            if( !empty($blok['beschrijving']) ) echo wpautop($blok['beschrijving']);
          ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  $showhide_gallery = get_field('showhide_gallery', $thisID);
  if($showhide_gallery):
    $galleries = get_field('galleries', $thisID);
?>
<section class="ovo-gallery-wrap-sec">
  <div class="container-sm">
    <div class="row">
      <div class="col-md-12">
        <div class="gallery-wrap ovo-gallery-wrap clearfix">
          <?php if($galleries): ?>
          <div class="gallery gallery-columns-2">
            <?php foreach( $galleries as $galleriesID ): ?>
            <figure class="gallery-item">
              <div class="gallery-icon portrait">
                <?php echo cbv_get_image_tag($galleriesID, 'about_gallery'); ?>
              </div>
            </figure>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>