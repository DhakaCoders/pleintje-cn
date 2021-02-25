<?php 
get_header(); 
$intro = get_field('introsec', HOMEID);
if($intro):
  $introImg = !empty($intro['afbeelding'])? cbv_get_image_src($intro['afbeelding']):'';
  $introImgtag = !empty($intro['afbeelding'])? cbv_get_image_tag($intro['afbeelding']):'';
?>
<section class="hm-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-banner-cntlr">
          <div class="hm-bnr-lft-cntlr">
            <div class="hm-bnr-rt-btm-sqr"></div>
            <div class="hm-bnr-lft-top-img">
              <img src="<?php echo THEME_URI; ?>/assets/images/bnr-rose-img.svg" alt="">
            </div>
            <div class="hm-bnr-lft">
              <div class="hm-bnr-lft-img inline-bg" style="background-image: url('<?php echo $introImg; ?>');">
                <?php echo $introImgtag; ?>
              </div>
            </div>

          </div>
          <div class="hm-bnr-right">
            <div class="hm-bnr-rt-desc">
            <?php 
              if( !empty($intro['titel']) ) printf('<h1 class="fl-h1 hm-bnr-rt-desc-title">%s</h1>', $intro['titel']);
              if( !empty($intro['subtitel']) ) printf('<h4 class="fl-h4 hm-bnr-rt-desc-sub-title">%s</h4>', $intro['subtitel']);
              if( !empty($intro['beschrijving']) ) echo wpautop($intro['beschrijving']);
            ?>
              <div class="hm-bnr-rt-desc-btn">
                <a class="fl-pink-btn" href="#"> OVER ONS</a>
                <a class="fl-trnsprnt-btn brd-2nd-btn" href="#">BUTTON</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php 
  $showhide_menu = get_field('showhide_menu', HOMEID);
  if($showhide_menu):
    $menu = get_field('menusec', HOMEID);
?>
<section class="industry-sec inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/industry-bg-img.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="industry-cntlr">
          <div class="industry-cntlr-inr">
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
  </div>
</section>
<?php endif; ?>
<?php 
  $showhide_overons = get_field('showhide_overons', HOMEID);
  if($showhide_overons):
    $overons = get_field('overons', HOMEID);
?>
<section class="about-us-sec">
  <div class="container-md">
    <div class="row">
      <div class="col-md-12">
        <div class="about-us-cntlr">
          <div class="about-us-desc-cntlr">
            <div class="about-us-desc">
            <?php 
              if( !empty($overons['titel']) ) printf('<h2 class="fl-h1 about-us-desc-title">%s</h2>', $overons['titel']);
              if( !empty($overons['beschrijving']) ) echo wpautop($overons['beschrijving']);
            ?>
              <div class="about-us-desc-btn">
                <a class="fl-pink-btn" href="#">OVER ONS</a>
              </div>
            </div>
          </div>

          <div class="about-us-img-module">
            <?php if( !empty($overons['afbeelding_1']) ): ?>
            <div class="abus-img-mdul-left-cntlr abus-img-mdul-col">
              <div class="abus-img-mdul-left">
                <span class="abus-imgmdlft-sqr"></span>
                <div class="abus-img-mdul-left-img inline-bg" style="background-image: url('<?php echo cbv_get_image_src($overons['afbeelding_1']); ?>');"></div>
              </div>
            </div>
            <?php endif; ?>
            <?php if( !empty($overons['afbeelding_2']) ): ?>
            <div class="abus-img-mdul-rt-cntlr abus-img-mdul-col">
              <div class="abus-img-mdul-rt">
                <div class="abus-img-mdul-rt-img inline-bg" style="background-image: url('<?php echo cbv_get_image_src($overons['afbeelding_2']); ?>');"></div>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php if( !empty($overons['full_afbeelding']) ): ?>
<section class="images-sec inline-bg" style="background-image: url('<?php echo cbv_get_image_src($overons['full_afbeelding']); ?>');">
  <?php echo cbv_get_image_tag($overons['full_afbeelding']); ?>
</section>
<?php endif; ?>
<?php endif; ?>
<?php 
  $showhide_cta = get_field('showhide_cta', HOMEID);
  if($showhide_cta):
    $cta = get_field('ctasec', HOMEID);
?>
<section class="residents-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="residents-wrap">
          <span class="residents-rt-top-sqr"></span>
          <div class="residents-cntlr industry-cntlr inline-bg mb-72" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/industry-bg-img.jpg');">
          <div class="residents-cntlr-inr">
            <?php 
            if( !empty($cta['titel']) ) printf('<h4 class="industry-title fl-h2">%s</h4>', $cta['titel']);
            if( !empty($cta['beschrijving']) ) echo wpautop($cta['beschrijving']);
            $cta_knop = $cta['knop'];
            if( is_array( $cta_knop ) &&  !empty( $cta_knop['url'] ) ){
              printf('<div class="fl-trnsprnt-btn"><a class="fl-trnsprnt-btn" href="%s" target="%s">%s</a></div>', $cta_knop['url'], $cta_knop['target'], $cta_knop['title']); 
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>