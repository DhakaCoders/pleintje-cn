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

<section class="industry-sec inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/industry-bg-img.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="industry-cntlr">
          <div class="industry-cntlr-inr">
              <h4 class="industry-title fl-h2">Enim laoreet tortor nisi, parturient. (H4)</h4>
              <p>Mauris vitae aliquam nullam metus suscipit. Et urna mauris neque.</p>
              <div class="industry-btn">
                <a class="fl-trnsprnt-btn" href="#">menu</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  $showhide_overons = get_field('showhide_overons', HOMEID);
  if($showhide_overons):
    $overons = get_field('overons', HOMEID);
    //$blokImg = !empty($blok['afbeelding'])? $blok['afbeelding']:'';
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
            <div class="abus-img-mdul-left-cntlr abus-img-mdul-col">
              <div class="abus-img-mdul-left">
                <span class="abus-imgmdlft-sqr"></span>
                <div class="abus-img-mdul-left-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/abus-glry-item-img-001.jpg');"></div>
              </div>
            </div>

            <div class="abus-img-mdul-rt-cntlr abus-img-mdul-col">
              <div class="abus-img-mdul-rt">
                <div class="abus-img-mdul-rt-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/abus-glry-item-img-002.jpg');"></div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="images-sec inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/images-sec-bg.jpg');">
  <img src="<?php echo THEME_URI; ?>/assets/images/images-sec-bg.jpg" alt="">
</section>

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
            ?>
            <div class="industry-btn residents-btn">
              <a class="fl-trnsprnt-btn" href="#">CADEAUBONNEN</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>