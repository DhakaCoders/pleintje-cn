<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	

  <svg style="display: none;">
    <!-- <svg class="id-name" width="16" height="16" viewBox="0 0 16 16" fill="#FF5C26">
      <use xlink:href="#id-name"></use> </svg> -->

      <!-- start of Noyon -->
      <symbol id="mail-icon" width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.9669 0.209991H3.03313C1.3607 0.209991 0 1.57069 0 3.24312V14.7567C0 16.4292 1.3607 17.7899 3.03313 17.7899H20.9669C22.6393 17.7899 24 16.4292 24 14.7567V3.24312C24 1.57069 22.6393 0.209991 20.9669 0.209991ZM20.493 2.16651L12 8.72725L3.507 2.16651H20.493ZM20.9669 15.8335H3.03313C2.43952 15.8335 1.95652 15.3505 1.95652 14.7569V3.44112L11.402 10.7376C11.578 10.8737 11.7891 10.9416 12 10.9416C12.2109 10.9416 12.422 10.8737 12.598 10.7376L22.0435 3.44112V14.7567C22.0435 15.3505 21.5605 15.8335 20.9669 15.8335Z"/>
      </symbol>

      <symbol id="tel-icon" width="18" height="24" viewBox="0 0 18 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.4989 18.6365L15.9984 17.8007C15.0982 16.3165 13.8559 14.6131 12.2264 14.6131C11.9245 14.6131 11.6255 14.6738 11.3296 14.7968L10.4549 15.1719C10.3751 15.205 10.2974 15.2426 10.2153 15.2826C9.99143 15.3915 9.7376 15.5148 9.47651 15.5148C8.83245 15.5148 8.08621 14.6766 7.37558 13.1548C6.67816 11.6611 6.72265 10.8781 6.88274 10.4841C7.0594 10.0494 7.47019 9.86351 7.9115 9.69649C7.97288 9.67322 8.0283 9.65211 8.0822 9.62992L8.96787 9.25701C11.2752 8.29212 10.4168 4.92017 10.1354 3.81467L9.89672 2.86417C9.69268 2.0808 9.15167 0 7.35718 0C7.02497 0 6.67058 0.0773953 6.30417 0.230129C6.06376 0.325601 2.75535 1.67607 1.55676 4.04858C0.124239 6.87259 0.389115 10.6595 2.34326 15.3019C4.2828 19.95 6.79788 22.7931 9.81867 23.7519C10.3368 23.9165 10.9224 23.9999 11.5594 23.9999C11.5594 23.9999 11.5596 23.9999 11.5597 23.9999C13.6444 23.9999 15.7022 23.1129 15.8692 23.0393C16.588 22.7348 17.0526 22.2721 17.25 21.6639C17.5847 20.6324 17.0233 19.5023 16.4989 18.6365ZM15.7055 21.1627C15.6596 21.304 15.5 21.4331 15.2316 21.5461C15.2271 21.548 15.2217 21.5503 15.2172 21.5524C15.1986 21.5606 13.3359 22.3764 11.5593 22.3763C11.0893 22.3763 10.6689 22.3185 10.31 22.2044C7.76505 21.3966 5.58889 18.864 3.84062 14.6744C2.07936 10.4899 1.79793 7.16204 3.00529 4.78194C3.9428 2.9263 6.87787 1.74913 6.90666 1.73788C6.91251 1.73549 6.91824 1.73322 6.92398 1.73084C7.09111 1.6607 7.24092 1.62368 7.35718 1.62368C7.71493 1.62368 8.04053 2.17854 8.32348 3.26608L8.56108 4.21258C9.07373 6.22593 8.99569 7.48526 8.3394 7.75977L7.45795 8.13105C7.42288 8.14555 7.38186 8.16082 7.33661 8.17803C6.84973 8.36237 5.83655 8.74577 5.37835 9.87282C4.96258 10.8955 5.13469 12.1938 5.90399 13.842C6.94011 16.0602 8.10862 17.1386 9.47629 17.1386C10.111 17.1386 10.6206 16.8909 10.9249 16.743C10.981 16.7158 11.0311 16.6908 11.085 16.6685L11.961 16.2928C12.0513 16.2552 12.1381 16.2369 12.2263 16.2369C12.6479 16.2369 13.4039 16.6544 14.6078 18.6389L15.108 19.4742C15.7244 20.492 15.7731 20.9542 15.7055 21.1627Z"/>
      </symbol>

      <symbol id="watch-icon" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M10 0C4.48591 0 0 4.48591 0 10C0 15.5141 4.48591 20 10 20C15.5141 20 20 15.5141 20 10C20 4.48591 15.5141 0 10 0ZM10 17.8142C5.69113 17.8142 2.18579 14.3089 2.18579 10C2.18579 5.69135 5.69113 2.18579 10 2.18579C14.3089 2.18579 17.8142 5.69135 17.8142 10C17.8142 14.3089 14.3089 17.8142 10 17.8142Z"/>
        <path d="M10.8656 10.012V5.82078C10.8656 5.3528 10.4864 4.97357 10.0186 4.97357C9.55065 4.97357 9.17139 5.3528 9.17139 5.82078V10.2827C9.17139 10.296 9.17467 10.3085 9.17531 10.3218C9.16417 10.5522 9.24353 10.7861 9.41947 10.962L12.5747 14.117C12.9056 14.4479 13.442 14.4479 13.7727 14.117C14.1034 13.7861 14.1037 13.2497 13.7727 12.919L10.8656 10.012Z"/>
      </symbol>

      <symbol id="up-white-angle" width="25" height="15" viewBox="0 0 25 15" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.5245 0.398752L0.399387 11.5241C0.141869 11.7814 -1.12005e-07 12.1249 -9.59955e-08 12.4911C-7.99859e-08 12.8574 0.141869 13.2009 0.399387 13.4582L1.21849 14.2775C1.75222 14.8106 2.61969 14.8106 3.15262 14.2775L12.4948 4.9353L21.8474 14.2879C22.1049 14.5452 22.4482 14.6873 22.8142 14.6873C23.1807 14.6873 23.524 14.5452 23.7817 14.2879L24.6006 13.4686C24.8581 13.211 25 12.8678 25 12.5015C25 12.1352 24.8581 11.7917 24.6006 11.5344L13.4653 0.398752C13.207 0.140828 12.8621 -0.000837888 12.4954 -2.43881e-05C12.1273 -0.000837856 11.7826 0.140828 11.5245 0.398752Z"/>
      </symbol>
      <!-- start of Shariful -->
      <symbol id="contact-info-fb-icon-svg" width="10" height="18" viewBox="0 0 10 18" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.62828 9.87797C2.56257 9.87797 1.11702 9.87797 0.459949 9.87797C0.109512 9.87797 0 9.74656 0 9.41802C0 8.54193 0 7.64393 0 6.76783C0 6.4174 0.131414 6.30789 0.459949 6.30789H2.62828C2.62828 6.24218 2.62828 4.97184 2.62828 4.38048C2.62828 3.50438 2.7816 2.67209 3.21964 1.90551C3.67959 1.11702 4.33666 0.591364 5.16895 0.284731C5.71651 0.0876094 6.26407 0 6.85543 0H9.00186C9.30849 0 9.4399 0.131414 9.4399 0.438048V2.93492C9.4399 3.24155 9.30849 3.37297 9.00186 3.37297C8.41049 3.37297 7.81913 3.37297 7.22777 3.39487C6.63641 3.39487 6.32977 3.6796 6.32977 4.29287C6.30787 4.94994 6.32977 5.58511 6.32977 6.26408H8.87044C9.22088 6.26408 9.35229 6.39549 9.35229 6.74593V9.39612C9.35229 9.74656 9.24278 9.85607 8.87044 9.85607C8.08196 9.85607 6.39548 9.85607 6.32977 9.85607V16.9962C6.32977 17.3686 6.22026 17.5 5.82602 17.5C4.90612 17.5 4.00813 17.5 3.08823 17.5C2.75969 17.5 2.62828 17.3686 2.62828 17.0401C2.62828 14.7403 2.62828 9.94368 2.62828 9.87797Z"/>
      </symbol>

      <symbol id="contact-info-ins-icon-svg" width="17" height="18" viewBox="0 0 17 18"  xmlns="http://www.w3.org/2000/svg">
        <path d="M12.75 0H4.25C1.87 0 0 1.98 0 4.5V13.5C0 16.02 1.87 18 4.25 18H12.75C15.13 18 17 16.02 17 13.5V4.5C17 1.98 15.13 0 12.75 0ZM15.3 13.5C15.3 15.03 14.195 16.2 12.75 16.2H4.25C2.805 16.2 1.7 15.03 1.7 13.5V4.5C1.7 2.97 2.805 1.8 4.25 1.8H12.75C14.195 1.8 15.3 2.97 15.3 4.5V13.5Z"/>
        <path d="M8.5 4.5C6.12 4.5 4.25 6.48 4.25 9C4.25 11.52 6.12 13.5 8.5 13.5C10.88 13.5 12.75 11.52 12.75 9C12.75 6.48 10.88 4.5 8.5 4.5ZM8.5 11.7C7.055 11.7 5.95 10.53 5.95 9C5.95 7.47 7.055 6.3 8.5 6.3C9.945 6.3 11.05 7.47 11.05 9C11.05 10.53 9.945 11.7 8.5 11.7Z"/>
        <path d="M12.7504 5.40001C13.2198 5.40001 13.6004 4.99707 13.6004 4.50001C13.6004 4.00295 13.2198 3.60001 12.7504 3.60001C12.2809 3.60001 11.9004 4.00295 11.9004 4.50001C11.9004 4.99707 12.2809 5.40001 12.7504 5.40001Z"/>
      </symbol>
  </svg>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
  $logoObj = get_field('hdlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $telefoon = get_field('telefoon', 'options');
  $emailadres = get_field('emailadres', 'options');
  $smedias = get_field('social_media', 'options');
?>
<body class="home">
<span class="lines"></span>
<div class="body-cntlr">
<div class="body-cntlr-in">
  <div class="mobile-menu-cntlr">
    <div class="mobile-menu">

      <div class="xs-menu">
        <nav class="main-nav">
          <?php 
            $mmenuOptions = array( 
                'theme_location' => 'cbv_main_menu', 
                'menu_class' => 'clearfix reset-list',
                'container' => false
              );
            wp_nav_menu( $mmenuOptions ); 
          ?>
        </nav>
      </div>
      <?php if(!empty($smedias)): ?>
      <div class="xs-socials">
        <ul class="reset-list">
          <?php foreach($smedias as $smedia):  ?>
            <li>
              <a target="_blank" href="<?php echo $smedia['url']; ?>">
                <?php echo $smedia['icon']; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>
      <div class="xs-contact">
        <ul class="reset-list">
          <?php if( !empty($telefoon) ): ?>
          <li class="tb-tel">
            <a href="tel:<?php echo phone_preg($telefoon); ?>">
              <span>Bel ons</span>
              <i><svg class="tel-icon" width="18" height="24" viewBox="0 0 18 24" fill="#ffffff">
                <use xlink:href="#tel-icon"></use> </svg></i>
              </a>
            </li>
          <?php endif; ?>
          <?php if( !empty($emailadres) ): ?>
            <li class="tb-mail">
              <a href="mailto:<?php echo $emailadres; ?>">
                <span>E-mail ons</span>
                <i><svg class="mail-icon" width="24" height="18" viewBox="0 0 24 18" fill="#ffffff">
                  <use xlink:href="#mail-icon"></use> </svg></i>
                </a>
              </li>
          <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>

  <div class="page-content-cntlr">
    <span class="page-body-rt"></span>
    <span class="home-body-rt"></span>
    


  <header class="header-wrap">
   <div class="top-bar">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
           <div class="top-bar-cntlr">
             <div class="top-bar-lft">
               <h6 class="opened-time-title">
                <span>VANDAAG OPEN</span>
                <i><svg class="watch-icon" width="20" height="20" viewBox="0 0 20 20" fill="#fff">
                  <use xlink:href="#watch-icon"></use> </svg></i>
                </h6>
                <strong>08u00  -  18u00</strong>
              </div>
              <div class="top-bar-rt">
               <ul class="reset-list">
                <?php if( !empty($emailadres) ): ?>
                 <li class="tb-mail">
                  <a href="mailto:<?php echo $emailadres; ?>">
                    <span><?php echo $emailadres; ?></span>
                    <i><svg class="mail-icon" width="24" height="18" viewBox="0 0 24 18" fill="#ffffff">
                      <use xlink:href="#mail-icon"></use> </svg></i>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php if( !empty($telefoon) ): ?>
                  <li class="tb-tel">
                    <a href="tel: <?php echo phone_preg($telefoon); ?>">
                      <span>Tel:<?php echo $telefoon; ?></span>
                      <i><svg class="tel-icon" width="18" height="24" viewBox="0 0 18 24" fill="#ffffff">
                        <use xlink:href="#tel-icon"></use> </svg></i>
                      </a>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="header">
       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
             <div class="header-cntlr">
              <div class="mobile-hamburger">
                <div class="hamburger-icon">
                  <span></span>
                  <span></span>
                </div>
                <strong class="hamburger-title">menu</strong>
                <strong class="hamburger-cross-title">SLUIT</strong>
              </div>
              <div class="hdr-lft">
              <?php if( !empty( $logo_tag ) ) :?>
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <?php endif; ?>
            </div>
            <div class="hdr-mdl">
              <nav class="main-nav">
                <?php 
                  $mmenuOptions = array( 
                      'theme_location' => 'cbv_main_menu', 
                      'menu_class' => 'clearfix reset-list',
                      'container' => false
                    );
                  wp_nav_menu( $mmenuOptions ); 
                ?>
              </nav>
            </div>
            <div class="hdr-right">
              <a href="#">RESERVEER</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

