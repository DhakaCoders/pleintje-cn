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
    $blokImg2 = !empty($intro2['afbeelding'])? cbv_get_image_src($intro2['afbeelding']):'';
?>
<section class="lftimg-rgtdes-sec">
  <div class="container-md">
    <div class="row">
      <div class="col-md-12">
        <div class="lftimg-rgtdes-cntlr">
          <div class="fl-dft-lftimg-rgtdes clearfix">
            <div class="fl-dft-lftimg-rgtdes-lft" style="background-image: url(<?php echo $blokImg; ?>);"></div>
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
<section class="ovo-industry-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="industry-cntlr ovo-industry-cntlr inline-bg" style="background-image: url('assets/images/industry-bg-img.jpg');">
          <h4 class="industry-title fl-h2">Enim laoreet tortor nisi, parturient. (H4)</h4>
          <p>Mauris vitae aliquam nullam metus suscipit. Et urna mauris neque.</p>
          <div class="industry-btn">
            <a class="fl-trnsprnt-btn" href="#">menu</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="verblijf-con ovo-verblijf-con">
  <div class="container-sm">
    <div class="row">
      <div class="col-md-12">
        <div class="verblijf-con-inr ovo-verblijf-con-inr">
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
            <div class="verblijf-single-slider-wrap">
              <div class="hm-bnr-lft-top-img">
                <img src="assets/images/bnr-rose-img.svg" alt="">
              </div>
              <div class="verblijf-single-slider ovo-verblijf-single-slider vsSlider">
                <div class="verblijf-single-slide-item">
                  <div class="verblijf-single-slide-item-img inline-bg" style="background: url('assets/images/verblijf-single-img-02.jpg');"></div>
                </div>
                <div class="verblijf-single-slide-item">
                  <div class="verblijf-single-slide-item-img inline-bg" style="background: url('assets/images/verblijf-single-img-02.jpg');"></div>
                </div>
                <div class="verblijf-single-slide-item">
                  <div class="verblijf-single-slide-item-img inline-bg" style="background: url('assets/images/verblijf-single-img-02.jpg');"></div>
                </div>
                <div class="verblijf-single-slide-item">
                  <div class="verblijf-single-slide-item-img inline-bg" style="background: url('assets/images/verblijf-single-img-02.jpg');"></div>
                </div>
              </div>
            </div>
            
            <div class="verblijf-single-slider-nav vsNavSlider">
              <div class="verblijf-single-slide-nav-item">
                <img src="assets/images/verblijf-single-slider-nav-01.jpg">
              </div>
              <div class="verblijf-single-slide-nav-item">
                <img src="assets/images/verblijf-single-slider-nav-01.jpg">
              </div>
              <div class="verblijf-single-slide-nav-item">
                <img src="assets/images/verblijf-single-slider-nav-01.jpg">
              </div>
              <div class="verblijf-single-slide-nav-item">
                <img src="assets/images/verblijf-single-slider-nav-01.jpg">
              </div>
              <div class="verblijf-single-slide-nav-item">
                <img src="assets/images/verblijf-single-slider-nav-01.jpg">
              </div>
            </div>
          </div>
          <div class="ovo-verblijf-desc">
            <h2 class="ovo-verblijf-title fl-h2">Diam in enim ornare sit mi in pharetra pharetra. (H2)</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eleifend pellentesque tincidunt neque, dolor. Imperdiet malesuada est feugiat quis posuere vulputate sed aenean sed. </p>
            <ul>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
            <p>Eleifend pellentesque tincidunt neque, dolor. Imperdiet malesuada est feugiat quis posuere vulputate.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ovo-gallery-wrap-sec">
  <div class="container-sm">
    <div class="row">
      <div class="col-md-12">
        <div class="gallery-wrap ovo-gallery-wrap clearfix">
          <div class="gallery gallery-columns-2">
            <figure class="gallery-item">
              <div class="gallery-icon portrait">
                <img src="assets/images/dfp-img-02.jpg">
              </div>
            </figure>

            <figure class="gallery-item">
              <div class="gallery-icon portrait">
                <img src="assets/images/dfp-img-03.jpg">
              </div>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>