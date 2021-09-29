<style>
  .wrap-side-menu {
    border-top: none;
  }
</style>
<?php
$set = $this->m_p->se_a("bannerone");
foreach ($set as $key) {
  $bannerone = $key;
}

$set2 = $this->m_p->se_a("bannertwo");
foreach ($set2 as $key2) {
  $bannertwo = $key2;
}

$set3 = $this->m_p->se_a("bannerthree");
foreach ($set3 as $key3) {
  $bannerthree = $key3;
}

$set4 = $this->m_p->se_a("bannerfour");
foreach ($set4 as $key4) {
  $bannerfour = $key4;
}
?>
<div class="main">

  <div class="product-main ">
    <div class="J_section-box bd xm-product-box hair-dryer-index" id="J_hair-dryerIndex">

      <?php if ($bannerone->active_status == 1) { ?>

        <style>
          .hair-dryer-index .hair-02 .scrollBack {
            width: 100%;
            background: url(images/<?php echo $bannerone->img; ?>) no-repeat center center;
            background-size: cover;
          }

          .hair-dryer-index .list-icon li p {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
            margin-top: auto;


          }

          @media (min-width: 1440px) {
            .hair-dryer-index .list-icon li p {

              margin-left: auto;
              margin-right: auto;
              margin-bottom: auto;
              margin-top: auto;

            }
          }

          @media (max-width: 1440px) {
            .hair-dryer-index .list-icon li p {

              margin-left: auto;
              margin-right: auto;
              margin-bottom: auto;
              margin-top: 20px;


            }

            .hair-dryer-index .hair-03 {

              margin: 0px;
            }
          }

          @media (max-width: 500px) {
            .hair-dryer-index .hair-02 .text-content .list-icon {
              width: 18.6em;
              margin: 0 auto;
            }

            .hair-dryer-index .list-icon li p {
              font-size: 0.7em;
            }

            .hair-dryer-index .list-icon li span {

              font-size: 0.6em;
            }

            .hair-dryer-index .hair-03 .text-content .mj-description {
              font-size: 13px !important;
              color: black;
            }

            /*  .text-content > h3,h4,h5,h6,p{
      font-size: 8px!important;
      }
      .text-gray > h3,h4,h5,h6,p{
      font-size: 8px!important;
      }
      .text-content > div > span{
      font-size: 8px!important;
      } */

          }

          @media (max-width: 500px) {
            .scrollBack {
              height: 60vh !important;
            }

            .scrollText {
              height: 400px !important;
            }

            .J_scrollFun {
              /*height: 400px!important;*/
            }

            .hair-dryer-index .scrollText {
              width: 100%;
              position: relative;
              bottom: 400px;
            }

            .hair-dryer-index .hair-02 .scrollBack {}

            .hair-dryer-index .text-content {
              width: 100%;
              z-index: 2;
              margin-left: -550px;
              text-align: center;
              position: absolute;
              left: 50%;
              top: 50%;
              padding: 10px;
            }


            .hair-dryer-index .funPosition {
              position: relative;
              left: 0;
              right: 0;
              bottom: 0;
            }

            .hair-dryer-index .text-content p {
              margin-bottom: 20px;
            }

            .hair-dryer-index .text-content p span font {
              color: white !important;
            }

            .hair-03 .text-content,
            .hair-04 .text-content {

              margin-left: 0 !important;
              left: 0 !important;
              position: relative !important;
              top: 0 !important;
            }

            .hair-04 {
              padding-bottom: 75% !important;
            }

            .hair-03,
            .hair-04 {
              display: contents;
            }

            .hair-03 .text-content {
              background: <?php echo $settings->bn_two_bg_color; ?>;
              margin-bottom: -50px;
              padding: 20px;
              color: black !important;
            }

            .hair-03 .text-content .title-h3,
            .hair-04 .text-content .title-h3 {
              font-size: 14px !important;
              color: black !important;
              font-weight: 700;
            }

            .hair-03 .text-content .mj-description,
            .hair-04 .text-content h3 {
              font-size: 13px !important;
              color: black;
            }

            .banner-video-img {
              display: grid
            }

            .hair-04 .text-content {
              background: <?php echo $settings->bn_two_bg_color; ?>;
              margin-bottom: -40px;
              padding: 20px;
              color: black !important;
            }

            .scrollBackPortion {
              background: <?php echo $settings->bn_one_bg_color; ?>;
              padding: 25px 0 0 0;
              /*top: 5px;*/
              position: relative;
              display: block !important;
            }

            .scrollBackPortion .para-top {
              font-size: 18px !important;
              text-align: center;
              padding: 0 15px;
              color: #403b3b;
            }

            .detail-container {
              width: 70%;
              margin: 0 auto;
            }

            .detail-container-inner {
              margin: 15px 0;
              display: inline-block;
              width: 100%;
            }

            .detail-container-inner img {
              height: 50px;
              width: auto;
              float: left;
            }

            .detail-container-inner p {
              font-size: 17px !important;
              float: left;
              width: 80%;
              padding: 0 30px;
              text-align: center;
              color: <?php echo $settings->bn_tx_color; ?>;
            }

            .hair-02 .text-content,
            .hair-05 .text-content {
              display: none;
            }

            .hair-02,
            .hair-05 {
              height: 100vh !important;
            }

            .scrollBack i {
              display: none;
            }
          }

          @media (max-width: 500px) {
            .hair-dryer-index .list-text li span {
              font-size: 0.53em;
            }
          }


          .list-icon-test {

            color: <?php echo $settings->bn_tx_color; ?> !important;
          }

          .col-md-6 {
            padding-right: 0px;
            padding-left: 0px;
          }
        </style>
        <div class="section hair-02 J_scrollFun">
          <div class="scrollBackPortion" style="display:none">
            <p class="para-top">
              <?php echo $bannerone->desc; ?>
            </p>
            <div class="detail-container">
              <div class="detail-container-inner">
                <img src="images/<?php echo $bannerone->icon_one; ?>" alt="IMG-LOGO">
                <p>
                  <?php echo $bannerone->icon_one_text; ?> <br><?php echo $bannerone->icon_one_text_two; ?> <br>
                  <?php echo $bannerone->icon_one_text_three; ?>
                </p>
              </div>

              <div class="detail-container-inner">
                <img src="images/<?php echo $bannerone->icon_two; ?>" alt="IMG-LOGO">
                <p>
                  <?php echo $bannerone->icon_two_text; ?> <br><?php echo $bannerone->icon_two_text_two; ?> <br>
                  <?php echo $bannerone->icon_two_text_three; ?>
                </p>
              </div>

              <div class="detail-container-inner">
                <img src="images/<?php echo $bannerone->icon_three; ?>" alt="IMG-LOGO">
                <p>
                  <?php echo $bannerone->icon_three_text; ?> <br><?php echo $bannerone->icon_three_text_two; ?> <br>
                  <?php echo $bannerone->icon_three_text_three; ?>
                </p>
              </div>

            </div>
          </div>
          <div class="scrollBack">
            <i style=""></i>
          </div>
          <div class="scrollText">
            <div class="text-content">
              <?php echo $bannerone->desc; ?>


              <ul class="list-icon">
                <li class="list-01">
                  <img src="images/<?php echo $bannerone->icon_one; ?>" alt="IMG-LOGO" style="height:50px;width:auto;">
                  <p class="list-icon-test"><?php echo $bannerone->icon_one_text; ?> <br><?php echo $bannerone->icon_one_text_two; ?></p>
                  <span class="list-icon-test"> <?php echo $bannerone->icon_one_text_three; ?></span>
                </li>
                <li class="list-02">
                  <img src="images/<?php echo $bannerone->icon_two; ?>" alt="IMG-LOGO" style="height:50px;width:auto;">
                  <p class="list-icon-test"><?php echo $bannerone->icon_two_text; ?><br><?php echo $bannerone->icon_two_text_two; ?></p>
                  <span class="list-icon-test"> <?php echo $bannerone->icon_two_text_three; ?></span>
                </li>
                <li class="list-03">
                  <img src="images/<?php echo $bannerone->icon_three; ?>" alt="IMG-LOGO" style="height:50px;width:auto;">
                  <p class="list-icon-test"><?php echo $bannerone->icon_three_text; ?><br><?php echo $bannerone->icon_three_text_two; ?></p>
                  <span class="list-icon-test"> <?php echo $bannerone->icon_three_text_three; ?></span>
                </li>


              </ul>
            </div>
          </div>
        </div>



      <?php } ?>



      <?php if ($bannertwo->active_status == 1) { ?>
        <div class="section hair-03">
          <div class="text-content">
            <?php echo $bannertwo->desc; ?>

          </div>

          <?php if ($bannertwo->video) { ?>
            <div class="banner-video-img">
              <video class="video-play video" src="<?php echo base_url(); ?>images/<?php echo $bannertwo->video; ?>" autoplay muted playsinline loop="loop">
              </video>
            </div>
          <?php } elseif ($bannertwo->img) { ?>
            <div class="banner-video-img">
              <img class="img-items" src="images/<?php echo $bannertwo->img; ?>" alt="<?php echo $bannertwo->img; ?>">
            </div>
          <?php } ?>
        </div>


      <?php } ?>




      <?php if ($bannerthree->active_status == 1) { ?>
        <div class="section hair-04">
          <div class="text-content text-gray">
            <?php echo $bannerthree->desc; ?>
          </div>
          <?php if ($bannerthree->video) { ?>
            <div class="banner-video-img">
              <video class="video-play video" src="<?php echo base_url(); ?>images/<?php echo $bannerthree->video; ?>" autoplay muted playsinline loop="loop">
              </video></div>
          <?php } elseif ($bannerthree->img) { ?>
            <div class="banner-video-img">
              <img class="img-items" src="images/<?php echo $bannerthree->img; ?>" alt="<?php echo $bannerthree->img; ?>"></div>
          <?php } ?>
        </div>

      <?php } ?>


      <?php if ($bannerfour->active_status == 1) { ?>
        <style>
          .hair-dryer-index .hair-05 .scrollBack {
            width: 100%;
            background: url(images/<?php echo $bannerfour->img; ?>) no-repeat center center;
            background-size: cover;
          }
        </style>
        <div class="section hair-05 J_scrollFun">

          <div class="scrollBackPortion" style="display:none;">
            <p class="para-top">
              <?php echo $bannerfour->desc; ?>
            </p>
            <div class="detail-container" style="width:80%">
              <div class="detail-container-inner">
                <!--<h1 class="hair05-heading"style="width: 50%;float: left;color: black;font-family: revert;letter-spacing: 1px;font-weight: 700;">2000 <sub style="font-size:50px;">rpm</sub></h1>-->
                <p style="width:100%;">
                  <?php echo $bannerfour->icon_one_text; ?>
                </p>
              </div>

              <div class="detail-container-inner">
                <!--<h1 class="hair05-heading"style="width: 50%;float: left;color: black;font-family: revert;letter-spacing: 1px;font-weight: 700;">2000 <sub style="font-size:50px;">rpm</sub></h1>-->
                <p style="width:100%;">
                  <?php echo $bannerfour->icon_two_text; ?>
                </p>
              </div>

              <div class="detail-container-inner">
                <!--<h1 class="hair05-heading"style="width: 50%;float: left;color: black;font-family: revert;letter-spacing: 1px;font-weight: 700;">2000 <sub style="font-size:50px;">rpm</sub></h1>-->
                <p style="width:100%;">
                  <?php echo $bannerfour->icon_three_text; ?>
                </p>
              </div>

            </div>
          </div>
          <div class="scrollBack">
            <i style=""></i>
          </div>
          <div class="scrollText">
            <div class="text-content">

              <?php echo $bannerfour->desc; ?>
              <ul class="list-text">
                <li class="list-01">
                  <span><?php echo $bannerfour->icon_one_text; ?></span>
                </li>
                <li class="list-02">
                  <span><?php echo $bannerfour->icon_two_text; ?></span>
                </li>
                <li class="list-03">
                  <span> <?php echo $bannerfour->icon_three_text; ?></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <?php } ?>




      <section class="banner2 p-t-0 p-b-0">
        <div class="container-fluid" style="background:#fff;">
          <?php foreach ($bannerfive as $rows => $row) : ?>
            <style>
              .product-btn<?php echo $rows; ?> {
                color: <?php echo $row->bt_text_color; ?>;
                background: <?php echo $row->bt_color; ?>;
              }

              .product-btn<?php echo $rows; ?>:hover {
                color: <?php echo $row->bt_text_hv_color; ?>;
                background: <?php echo $row->bt_hv_color; ?>;
              }

              @media (max-width: 500px) {
                .banner2 .container .flip-div {
                  display: flex;
                  flex-flow: column;
                }

                .banner2 .container .flip-div .col-md-4 {
                  order: 2;
                }
              }
            </style>
            <?php if ($rows % 2 == 0) { ?>

              <div class="row align-items-center space" style="background-color: <?php echo $row->banner_five_color; ?>; margin:0;">
                <div class="col-md-6">
                  <div class="hair-video img-gap" style="margin-left: -15px;">
                    <?php if ($row->video) { ?>
                      <video class="video-play video J_opacity" src="<?php echo base_url(); ?>images/<?php echo $row->video; ?>" autoplay muted loop="loop" style="width: 90%;">
                      </video>
                    <?php } elseif ($row->img) { ?>
                      <img class="img-items J_opacity" src="images/<?php echo $row->img; ?>" alt="<?php echo $row->img; ?>" style="width: 100%;">
                    <?php } ?>
                  </div>
                </div>

                <div class="col-md-6 text-md-left text-center space text-gap-left" style="text-align:center!important;">

                  <?php echo $row->desc; ?>

                  <a href="<?php echo $row->url; ?>" class="btn btn-default product-btn<?php echo $rows; ?>" style="border-radius: 15px;"><?php echo $row->bt_text; ?> <i class="fa fa-arrow-right"></i></a>
                </div>
              </div>

            <?php } else { ?>

              <div class="row align-items-center space flip-div webdiv" style="background-color: <?php echo $row->banner_five_color; ?>; margin:0;">

                <div class="col-md-6 text-md-left text-center text-gap-right" style="text-align:center!important;">
                  <?php echo $row->desc; ?>

                  <a href="<?php echo $row->url; ?>" class="btn btn-default product-btn<?php echo $rows; ?>" style="border-radius: 15px;"><?php echo $row->bt_text; ?><i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="col-md-6 space">
                  <div class="hair-video img-gap" style="margin-right: -15px;">
                    <?php if ($row->video) { ?>
                      <video class="video-play video J_opacity" src="<?php echo base_url(); ?>images/<?php echo $row->video; ?>" autoplay muted loop="loop" style="width: 90%;">
                      </video>
                    <?php } elseif ($row->img) { ?>
                      <img class="img-items J_opacity" src="images/<?php echo $row->img; ?>" alt="<?php echo $row->img; ?>" style="width: 100%;">
                    <?php } ?>
                  </div>
                </div>

              </div>

            <?php } ?>
          <?php endforeach; ?>
        </div>
      </section>

    </div>
  </div>
</div>