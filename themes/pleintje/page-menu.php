<?php
  /*Template Name: Menu*/
  get_header(); 
  while ( have_posts() ) :
  the_post();
  $thisID = get_the_ID();
?>
<section class="pn-con">
  <div class="container-sm">
    <div class="row">
      <div class="col-md-12">
        <div class="pn-con-inr">
          <?php if( have_rows('inhoud') ){ ?>
          <?php while ( have_rows('inhoud') ) : the_row();  ?>
          <?php 
            if( get_row_layout() == 'introductietekst' ){ 
              $titel = get_sub_field('titel');
              $subtitel = get_sub_field('subtitel');
              $afbeelding = get_sub_field('afbeelding');
              $fc_tekst = get_sub_field('tekst');
          ?>
          <div class="pn-con-hdr">
          <?php 
            if( !empty($titel) ) printf('<h1 class="pn-con-hdr-title fl-h1">%s</h1>', $titel); 
            if( !empty($subtitel) ) printf('<strong class="pn-con-hdr-sub-title fl-h4">%s</strong>', $subtitel); 
            if( !empty( $fc_tekst ) ) echo wpautop($fc_tekst); 
            if( !empty($afbeelding) ){
              echo '<div class="dfp-plate-one-img-bx">'. cbv_get_image_tag($afbeelding).'</div>';
            }
          ?>
          </div>
          <?php }elseif( get_row_layout() == 'pdf' ){
            $fc_titel = get_sub_field('fc_titel');
            $fc_pdfs = get_sub_field('pdf_uploaden');
          ?>
          <?php if( !empty($fc_titel) ): ?>
          <div class="pn-con-bar">
            <i><img src="<?php echo THEME_URI; ?>/assets/images/pn-con-bar-icon.svg"></i>
            <strong><?php echo $fc_titel; ?></strong>
          </div>
          <?php endif; ?>
          <?php if( !empty($fc_pdfs) ): ?>
          <div class="pn-con-pdf">
            <i><img src="<?php echo THEME_URI; ?>/assets/images/pdf.svg"></i>
          </div>
          <?php endif; ?>
          <?php }elseif( get_row_layout() == 'teksteditor' ){ ?>
          <div class="pn-con-text-module">
            <?php 
              $beschrijving = get_sub_field('fc_teksteditor');
              if( !empty( $beschrijving ) ) echo wpautop($beschrijving); 
            ?>
          </div>
            <?php }elseif( get_row_layout() == 'tekst_tekst' ){ 
              $fc_tekst1 = get_sub_field('fc_tekst1');
              $fc_tekst2 = get_sub_field('fc_tekst2');
            ?>
            <div class="pn-text-des clearfix">
              <?php if( !empty($fc_tekst1) ): ?>
              <div class="pn-text-module">
                <?php echo wpautop($fc_tekst1); ?>
              </div>
              <?php endif; ?>
              <?php if( !empty($fc_tekst2) ): ?>
              <div class="pn-text-module">
                <?php echo wpautop($fc_tekst2); ?>
              </div>
              <?php endif; ?>
            </div>
          <?php } ?>
          <?php endwhile; ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>