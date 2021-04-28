  <?php
/*
Template Name: Home Page

*/

get_header();
?>
  
  <!--allrecords-->
  <div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="712883" data-tilda-page-id="3001684" data-tilda-formskey="bfc06257e0df98cf1a89aa40d9ee54cb">
    <div id="rec56983727" class="r t-rec t-rec_pb_0 t-screenmin-640px" style="padding-bottom:0px; " data-animationappear="off" data-record-type="258" data-screen-min="640px">
      <!-- T229 -->
      <div id="nav56983727marker"></div>
      <div id="nav56983727" class="t229 t229__positionabsolute " style="background-color: rgba(0,0,0,0.0); height:80px; " data-bgcolor-hex="#000000" data-bgcolor-rgba="rgba(0,0,0,0.0)" data-navmarker="nav56983727marker" data-appearoffset="" data-bgopacity="0.0" data-menu="yes">
        <div class="t229__maincontainer " style="height:80px;">
          <div class="t229__padding40px"></div>
          <div class="t229__centerside ">
            <?php if( have_rows('menu') ): ?>
            
            <ul class="uppercase">
            <?php while( have_rows('menu') ): the_row(); ?>
             
              <li class="t229__list_item"><a class="t-menu__link-item" href="<?php the_sub_field('anchor'); ?>" data-menu-submenu-hook="" style="color:#ffffff;font-size:13px;font-weight:700;text-transform:uppercase;padding:0 40px;"><?php the_sub_field('menu-item'); ?></a> </li>
              <?php endwhile; ?>
              
              
            </ul>
            
            <?php endif; ?>
            
          </div>
          <div class="t229__padding40px"></div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          t229_highlight('3001684');
          $('.t229').removeClass('t229__beforeready');
        });
      </script>
      <script type="text/javascript">
        $(window).resize(function() {
          t229_setBg('56983727');
        });
        $(window).load(function() {
          t229_setBg('56983727');
        });
        $(document).ready(function() {
          t229_setBg('56983727');
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
          setTimeout(function() {
            t_menusub_init('56983727');
          }, 500);
        });
      </script>
      <style>
        @media screen and (max-width: 980px) {
          #rec56983727 .t-menusub__menu .t-menusub__link-item {
            color: #ffffff !important;
          }
        }
      </style>
      <!--[if IE 8]><style>#rec56983727 .t229 { filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9000000', endColorstr='#D9000000');
}</style><![endif]-->
    </div>
    <div id="rec57065992" class="r t-rec t-rec_pb_0 t-screenmin-640px" style="padding-bottom:0px; " data-animationappear="off" data-record-type="257" data-screen-min="640px">
      <!-- T228 -->
      <div id="nav57065992marker"></div>
      <div id="nav57065992" class="t228 t228__positionfixed t228__beforeready" style="background-color: rgba(0,0,0,0.95); height:50px; " data-bgcolor-hex="#000000" data-bgcolor-rgba="rgba(0,0,0,0.95)" data-navmarker="nav57065992marker" data-appearoffset="500" data-bgopacity-two="" data-menushadow="" data-bgopacity="0.95" data-menu-items-align="" data-menu="yes">
        <div class="t228__maincontainer " style="height:50px;">
          <div class="t228__padding40px"></div>
          <div class="t228__leftside">
            <div class="t228__leftcontainer"> <a href="#rec56834047" style=""><img src="<?php echo get_template_directory_uri(); ?>/img/prokatok_logo-03.png" class="t228__imglogo t228__imglogomobile" imgfield="img" style="max-width: 160px;width: 160px; height: auto; display: block;" alt=""></a> </div>
          </div>
          <div class="t228__centerside ">
            <div class="t228__centercontainer">
              <?php if( have_rows('menu') ): ?>
             
              <ul class="t228__list ">
               <?php while( have_rows('menu') ): the_row(); ?>
               
               
                <li class="t228__list_item"><a class="t-menu__link-item" href="<?php the_sub_field('anchor'); ?>" data-menu-submenu-hook="" style="color:#ffffff;font-size:13px;font-weight:700;text-transform:uppercase;padding:0 10px;" data-menu-item-number="1"><?php the_sub_field('menu-item'); ?></a> </li>
                
                  <?php endwhile; ?>
                
              </ul>
     
             <?php endif; ?>
              
            </div>
          </div>
          <div class="t228__rightside">
            <div class="t228__rightcontainer">
              <div class="t228__right_share_buttons t228__white-black">
                <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ya-share.js" charset="utf-8"></script>
                <div class="ya-share2" data-access-token:facebook="" data-yashareL10n="en" data-services="facebook,vkontakte," data-counter=""></div>
              </div>
            </div>
          </div>
          <div class="t228__padding40px"></div>
        </div>
      </div>
      <style>
        @media screen and (max-width: 980px) {
          #rec57065992 .t228__leftcontainer {
            padding: 20px;
          }
        }

        @media screen and (max-width: 980px) {
          #rec57065992 .t228__imglogo {
            padding: 20px 0;
          }
        }
      </style>
      <script type="text/javascript">
        $(document).ready(function() {
          t228_highlight();
          t228_checkAnchorLinks('57065992');
        });
        $(window).resize(function() {
          t228_setWidth('57065992');
        });
        $(window).load(function() {
          if (typeof t228_setWidth !== "undefined") {
            t228_setWidth('57065992');
          }
        });
        $(document).ready(function() {
          t228_setWidth('57065992');
        });
        $(window).resize(function() {
          t228_setBg('57065992');
        });
        $(document).ready(function() {
          t228_setBg('57065992');
        });
        $(document).ready(function() {
          $('.t228').removeClass('t228__beforeready');
          t228_appearMenu('57065992');
          $(window).bind('scroll', t_throttle(function() {
            t228_appearMenu('57065992')
          }, 200));
        });
      </script>
      <style>
        #rec57065992 .t-menu__link-item {
          -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
          transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        #rec57065992 .t-menu__link-item.t-active {
          color: #0374f5 !important;
        }

        @supports (overflow:-webkit-marquee) and (justify-content:inherit) {
          #rec57065992 .t-menu__link-item,
          #rec57065992 .t-menu__link-item.t-active {
            opacity: 1 !important;
          }
        }
      </style>
      <script type="text/javascript">
        $(document).ready(function() {
          setTimeout(function() {
            t_menusub_init('57065992');
          }, 500);
        });
      </script>
      <style>
        @media screen and (max-width: 980px) {
          #rec57065992 .t-menusub__menu .t-menusub__link-item {
            color: #ffffff !important;
          }
        }
      </style>
      <!--[if IE 8]><style>#rec57065992 .t228 { filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9000000', endColorstr='#D9000000');
}</style><![endif]-->
    </div>
    <div id="rec57067368" class="r t-rec t-rec_pb_0 t-screenmax-480px" style="padding-bottom:0px; " data-animationappear="off" data-record-type="450" data-screen-max="480px">
      <div class="t450__burger_container t450__beforeready " data-appearoffset="0" data-hideoffset="" style="top:15px; ">
        <div class="t450__burger_bg t450__burger_cirqle" style="background-color:#000000; opacity:0.80;"></div>
        <div class="t450__burger"> <span style="background-color:#ffffff;"></span> <span style="background-color:#ffffff;"></span> <span style="background-color:#ffffff;"></span> <span style="background-color:#ffffff;"></span> </div>
      </div>
      <!-- t450 -->
      <div id="nav57067368marker"></div>
      <div class="t450__overlay ">
        <div class="t450__overlay_bg" style=" "></div>
      </div>
      <div id="nav57067368" class="t450 " data-tooltip-hook="" style="background-color: #000000;">
        <div class="t450__close t450_opened " style="background-color: #000000;">
          <div class="t450__close_icon"> <span style="background-color:#ffffff;"></span> <span style="background-color:#ffffff;"></span> <span style="background-color:#ffffff;"></span> <span style="background-color:#ffffff;"></span> </div>
        </div>
        <div class="t450__container t-align_left">
          <div class="t450__top">
            <div class="t450__logowrapper"> <a href="#rec56834047" style=""><img src="<?php echo get_template_directory_uri(); ?>/img/prokatok_logo-02.png" class="t450__logoimg" imgfield="img" style="max-width: 160px;" alt=""></a> </div>
            <div class="t450__menu">
              <?php if( have_rows('menu') ): ?>
              <ul class="t450__list">
               <?php while( have_rows('menu') ): the_row(); ?>
                <li class="t450__list_item"><a class="t-menu__link-item " href="<?php the_sub_field('anchor'); ?>" data-menu-submenu-hook="" style="color:#ffffff;font-size:13px;font-weight:700;text-transform:uppercase;margin-bottom:20px;" data-menu-item-number="1"><?php the_sub_field('menu-item'); ?></a> </li>
                
                <?php endwhile; ?>
                
              </ul>
              
               <?php endif; ?>
            </div>
          </div>
          <div class="t450__rightside"> </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          $("#rec57067368").attr('data-animationappear', 'off');
          $("#rec57067368").css('opacity', '1');
          t450_initMenu('57067368');
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('.t450').removeClass('t450__beforeready');
          t450_appearMenu('57067368');
          $(window).bind('scroll', t_throttle(function() {
            t450_appearMenu('57067368')
          }, 200));
        });
      </script>
      <style>
        #rec57067368 .t-menu__link-item {
          -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
          transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        #rec57067368 .t-menu__link-item.t-active {
          color: #0374f5 !important;
        }

        @supports (overflow:-webkit-marquee) and (justify-content:inherit) {
          #rec57067368 .t-menu__link-item,
          #rec57067368 .t-menu__link-item.t-active {
            opacity: 1 !important;
          }
        }
      </style>
      <script type="text/javascript">
        $(document).ready(function() {
          setTimeout(function() {
            t_menusub_init('57067368');
          }, 500);
        });
      </script>
      <style>
        @media screen and (max-width: 980px) {
          #rec57067368 .t-menusub__menu .t-menusub__link-item {
            color: #ffffff !important;
          }
        }
      </style>
    </div>
    <div id="rec56984460" class="r t-rec" style=" " data-record-type="270">
      <div class="t270"></div>
      <script>
        $(document).ready(function() {
          var hash = window.location.hash;
          setTimeout(function() {
            var curPath = window.location.pathname;
            var curFullPath = window.location.origin + curPath;
            $('a[href^="#"]:not([href="#"],.carousel-control,.t-carousel__control,[href^="#price"],[href^="#popup"],[href^="#prodpopup"],[href^="#order"]),a[href^="' + curPath + '#"],a[href^="' + curFullPath + '#"]').click(function(e) {
              e.preventDefault();
              var hash = this.hash;
              if (hash !== "") {
                t270_scroll(hash, -3);
              }
            });
          }, 500);
        });
      </script>
    </div>
    <div id="rec56834047" class="r t-rec t-screenmin-480px" style=" " data-animationappear="off" data-record-type="244" data-screen-min="480px">
      <!-- cover -->
      <div class="t-cover" id="recorddiv56834047" bgimgfield="img" style="height:90vh; background-image:url('<?php echo get_template_directory_uri(); ?>/img/shutterstock_1021769.jpg');">
        <div class="t-cover__carrier" id="coverCarry56834047" data-content-cover-id="56834047" data-content-cover-bg="<?php echo get_template_directory_uri(); ?>/img/shutterstock_10217691.jpg" data-content-cover-height="90vh" data-content-cover-parallax="" data-content-video-url-mp4="<?php the_field('video'); ?>" style="height:90vh;background-attachment:scroll; "></div>
        <div class="t-cover__filter" style="height:90vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -o-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#fe000000', endColorstr='#fe000000');"></div>
        <div class="t-container">
          <div class="t-col t-col_12 ">
            <div class="t-cover__wrapper t-valign_middle" style="height:90vh;">
              <div class="t216 t-align_center">
                <div data-hook-content="covercontent">
                  <div class="t216__wrapper">
                    <div class="t216__blocklogo"><img src="<?php the_field('logo'); ?>" data-original="<?php the_field('logo'); ?>" data-tu-max-width="800" data-tu-max-height="800" style="max-width: 776px; width: 100%; height: auto;" class="t216__logo t-img" imgfield="img2" data-hook-clogo="coverlogo"></div>
                    <div class="t216__title t-title t-title_xl" style="color:#000000;font-size:30px;line-height:1;" field="title"><?php the_field('descr'); ?><br /></div> <span class="space"></span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- arrow -->
        <div class="t-cover__arrow">
          <div class="t-cover__arrow-wrapper t-cover__arrow-wrapper_animated">
            <div class="t-cover__arrow_mobile"><svg class="t-cover__arrow-svg" style="fill:#0374f5;" x="0px" y="0px" width="38.417px" height="18.592px" viewBox="0 0 38.417 18.592" style="enable-background:new 0 0 38.417 18.592;"><g><path d="M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z"/></g></svg></div>
          </div>
        </div>
        <!-- arrow -->
      </div>
    </div>
    <div id="rec58184251" class="r t-rec t-screenmax-480px" style=" " data-animationappear="off" data-record-type="244" data-screen-max="480px">
      <!-- cover -->
      <div class="t-cover" id="recorddiv58184251" bgimgfield="img" style="height:90vh; background-image:url('<?php echo get_template_directory_uri(); ?>/img/shutterstock_1021769.jpg');">
        <div class="t-cover__carrier" id="coverCarry58184251" data-content-cover-id="58184251" data-content-cover-bg="<?php echo get_template_directory_uri(); ?>/img/shutterstock_10217691.jpg" data-content-cover-height="90vh" data-content-cover-parallax="" style="height:90vh;background-attachment:scroll; "></div>
        <div class="t-cover__filter" style="height:90vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -o-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#fe000000', endColorstr='#fe000000');"></div>
        <div class="t-container">
          <div class="t-col t-col_12 ">
            <div class="t-cover__wrapper t-valign_middle" style="height:90vh;">
              <div class="t216 t-align_center">
                <div data-hook-content="covercontent">
                  <div class="t216__wrapper">
                    <div class="t216__blocklogo"><img src="<?php echo get_template_directory_uri(); ?>/img/empty-prokatok_logo-03.png" data-original="https://static.tildacdn.com/tild3762-3939-4632-b764-383766616330/prokatok_logo-03.png" data-tu-max-width="800" data-tu-max-height="800" style="max-width: 776px; width: 100%; height: auto;" class="t216__logo t-img" imgfield="img2" data-hook-clogo="coverlogo"></div>
                    <div class="t216__title t-title t-title_xl" style="color:#000000;font-size:30px;line-height:1;" field="title"><?php the_field('descr'); ?><br /></div> <span class="space"></span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- arrow -->
        <div class="t-cover__arrow">
          <div class="t-cover__arrow-wrapper t-cover__arrow-wrapper_animated">
            <div class="t-cover__arrow_mobile"><svg class="t-cover__arrow-svg" style="fill:#0374f5;" x="0px" y="0px" width="38.417px" height="18.592px" viewBox="0 0 38.417 18.592" style="enable-background:new 0 0 38.417 18.592;"><g><path d="M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z"/></g></svg></div>
          </div>
        </div>
        <!-- arrow -->
      </div>
    </div>
    <div id="rec56834348" class="r t-rec t-rec_pt_120 t-rec_pb_120" style="padding-top:120px;padding-bottom:120px;background-color:#0374f5; " data-record-type="488" data-bg-color="#0374f5">
      <!-- t488 -->
      <div class="t488">
        <div class="t-container t-align_center">
          <div class="t-col t-col_10 t-prefix_1">
            <div class="t488__descr t-title t-title_xl t-margin_auto t-animate" data-animate-style="fadein" data-animate-group="yes" field="descr" style="font-size:26px;line-height:1,5;text-transform:uppercase;"><?php the_field('blue'); ?>
            
            <br /></div>
          </div>
        </div>
      </div>
    </div>
    <div id="rec60520044" class="r t-rec t-rec_pt_75 t-rec_pb_30" style="padding-top:75px;padding-bottom:30px;background-color:#292929; " data-record-type="43" data-bg-color="#292929">
      <!-- T030 -->
      <div class="t030">
        <div class="t-container t-align_center">
          <div class="t-col t-col_12 ">
            <div class="t030__title t-title t-title_xxs" field="title" style="">
              <div style="font-size:28px;color:#0374f5;" data-customstyle="yes"><?php the_field('offers-title'); ?></div>
            </div>
            <div class="t030__descr t-descr t-descr_md" field="descr" style="">
              <div style="color:#edebeb;" data-customstyle="yes"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    <div id="rec60519452" class="r t-rec t-rec_pt_0 t-rec_pb_60" style="padding-top:0px;padding-bottom:60px;background-color:#ffffff; " data-animationappear="off" data-record-type="694" data-bg-color="#ffffff">
      <!-- t694 -->
      <style>
        #rec60519452 .t694__table {
          height: 18.48vw;
        }

        @media screen and (max-width: 768px) {
          #rec60519452 .t694__table {
            height: 56vw;
          }
        }
      </style>
      <div class="t694" data-tile-ratio="0.56">
        <div class="t-container_100">
         <?php if( have_rows('offers-block-1') ): ?>
          <div class="t694__row">
           
           <?php while( have_rows('offers-block-1') ): the_row(); ?>
           
            <div class="t694__col t-cell t-cell_33 t-align_center ">
              <a href="#rec56840861" target="">
                <div class="t694__table">
                  <div class="t694__cell t-align_center t-valign_middle">
                   
                   <?php $image_id = get_sub_field( 'offers-bg-1', false ); ?>

                    <div class="t694__bg t694__animation_fast t694__bg_animated t-bgimg" bgimgfield="li_img__1494497749748" data-original="<?php echo wp_get_attachment_image_src( $image_id, 'medium_large' )[0]; ?>"></div>
                    <div class="t694__overlay t694__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.0)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.0)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.0)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.0));"></div>
                    <div class="t694__textwrapper t694__animation_fast t694__textwrapper_animated">
                      <div class="t694__textwrapper__content">
                        <div class="t694__inner-wrapper">
                          <div class="t694__title t-name t-name_xl" field="li_title__1494497749748" style="color:#ffffff;font-size:26px;line-height:1;font-weight:700;"><?php the_sub_field('offers-text-1'); ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            
           <?php endwhile; ?>  
          </div>           <!--row-->
         <?php endif; ?>
         
         
          
         <?php if( have_rows('offers-block_2') ): ?>
    
          <div class="t694__row">
            <?php while( have_rows('offers-block_2') ): the_row(); ?>   
            <?php $image_id = get_sub_field( 'offers-bg-2', false ); ?>
            <div class="t694__col t-cell t-cell_33 t-align_center ">
              <a href="#rec60515258" target="">
                <div class="t694__table">
                  <div class="t694__cell t-align_center t-valign_middle">
                    <div class="t694__bg t694__animation_fast t694__bg_animated t-bgimg" bgimgfield="li_img__1531940388091" data-original="<?php echo wp_get_attachment_image_src( $image_id, 'medium_large' )[0]; ?>"></div>
                    <div class="t694__overlay t694__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.0)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.0)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.0)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.0));"></div>
                    <div class="t694__textwrapper t694__animation_fast t694__textwrapper_animated">
                      <div class="t694__textwrapper__content">
                        <div class="t694__inner-wrapper">
                          <div class="t694__title t-name t-name_xl" field="li_title__1531940388091" style="color:#ffffff;font-size:26px;line-height:1;font-weight:700;"><?php the_sub_field('offers-text-2'); ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <?php endwhile; ?>
            

            
          </div> <!--row-->
         <?php endif; ?> 
        
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          t694_init('60519452');
        });
        $(window).load(function() {
          t694_init('60519452');
        });
        $('.t694').bind('displayChanged', function() {
          t694_init('60519452');
        });
      </script>
    </div>
    
     
    
    <div id="rec56838517" class="r t-rec t-rec_pt_30 t-rec_pb_90" style="padding-top:30px;padding-bottom:90px;background-color:#ffffff; " data-record-type="795" data-bg-color="#ffffff">
      <!-- T795 -->
      <div class="t795">
        <div class="t-container t-align_center">
          <div class="t-col t-col_10 t-prefix_1">
            <div class="t795__descr t-descr t-descr_xl t-margin_auto" field="descr" style="color:#383838;font-size:18px;font-weight:500;"><?php the_field('offers-add'); ?> <br /></div>
          </div>
        </div>
      </div>
    </div>
    <div id="rec56840861" class="r t-rec t-rec_pt_105 t-rec_pb_60" style="padding-top:105px;padding-bottom:60px;background-color:#f5f9ff; " data-record-type="478" data-bg-color="#f5f9ff">
      <!-- T478 -->
      <div style="width: 0; height: 0; overflow: hidden;">
        <div class="t478__sizer t-col t-col_5" data-auto-correct-mobile-width="false" style="height:400px;"></div>
      </div>
      <div class="t478">
        <div class="t-container">
          <div class="t478__top t-col t-col_5 ">
            <?php $image_id = get_field( 'img1', false ); ?>
            <div class="t478__blockimg t-bgimg" data-original="<?php echo wp_get_attachment_image_src( $image_id, 'medium_large' )[0]; ?>" bgimgfield="img" style="height:400px;"></div>
          </div>
          <div class="t-col t-col_7 ">
            <div class="t478__textwrapper t-align_left" style="height:400px;">
              <div class="t478__content t-valign_middle">
                <div class="t478__box">
                  <div class="t478__title t-title t-title_xs t-animate" data-animate-style="fadein" data-animate-group="yes" data-animate-order="1" field="title" style="color:#0374f5;font-size:40px;"><?php the_field('head1'); ?> <br /></div>
                  <div class="t478__line " style="max-width: 70px;height: 2px;background-color: #0374f5;opacity:0.30;"></div>
                  <div class="t478__descr t-descr t-descr_md t-animate" data-animate-style="fadein" data-animate-group="yes" data-animate-order="2" data-animate-delay="0.3" field="descr" style="color:#000000;"><?php the_field('cdescr1'); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(window).resize(function() {
          if (typeof window.noAdaptive != "undefined" && window.noAdaptive == true && $isMobile) {
            return;
          }
          t478_setHeight('56840861');
        });
        $(document).ready(function() {
          t478_setHeight('56840861');
        });
        $('.t478').bind('displayChanged', function() {
          t478_setHeight('56840861');
        });
      </script>
    </div>
    <div id="rec56842980" class="r t-rec t-rec_pt_0 t-rec_pb_105" style="padding-top:0px;padding-bottom:105px;background-color:#f5f9ff; " data-record-type="498" data-bg-color="#f5f9ff">
      <!-- t498 -->
      <style type="text/css">
        @media screen and (max-width: 960px) {
          #rec56842980 .t498__line {
            height: 1px;
          }
        }
      </style>
      
      <?php if( have_rows('vars1') ): ?>
       
      <div class="t498">
        <div class="t-container">
        
         <?php while( have_rows('vars1') ): the_row(); ?>   
         
          <div class="t498__col t-col t-col_4 t-align_center t-item">
            <div class="t498__col-wrapper_fisrt t498__col-wrapper">
              <div class="t498__title t-name t-name_xl" style="font-size:21px;padding-bottom:16px;" field="title">
                <div style="text-align:left;" data-customstyle="yes"><?php the_sub_field('var-head1'); ?></div>
              </div>
              <div class="t498__descr t-descr t-descr_sm" style="font-size:17px;font-weight:300;padding-bottom:0px;" field="descr">
                <div style="text-align:left;" data-customstyle="yes"><?php the_sub_field('var-descr1'); ?></div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          
        
        </div>
      </div>
      <?php endif; ?>
      
      <script type="text/javascript">
        $(document).ready(function() {
          setTimeout(function() {
            t498_unifyHeights('56842980');
          }, 500);
        });
        var t498__doResize;
        $(window).resize(function() {
          clearTimeout(t498__doResize);
          t498__doResize = setTimeout(function() {
            t498_unifyHeights('56842980');
          }, 200);
        });
        $(window).load(function() {
          t498_unifyHeights('56842980');
        });
        $('.t498').bind('displayChanged', function() {
          t498_unifyHeights('56842980');
        });
      </script>
    </div>
    <div id="rec57047250" class="r t-rec t-rec_pt_105 t-rec_pb_60" style="padding-top:105px;padding-bottom:60px;background-color:#ffffff; " data-record-type="478" data-bg-color="#ffffff">
      <!-- T478 -->
      <div style="width: 0; height: 0; overflow: hidden;">
        <div class="t478__sizer t-col t-col_5" data-auto-correct-mobile-width="false" style="height:400px;"></div>
      </div>
      
      <div class="t478">
        <div class="t-container">
          <div class="t478__top t-col t-col_5 ">
            <?php $image_id = get_field( 'img2', false ); ?>
            <div class="t478__blockimg t-bgimg" data-original="<?php echo wp_get_attachment_image_src( $image_id, 'medium_large' )[0]; ?>" bgimgfield="img" style="height:400px;"></div>
          </div>
          <div class="t-col t-col_7 ">
            <div class="t478__textwrapper t-align_left" style="height:400px;">
              <div class="t478__content t-valign_middle">
                <div class="t478__box">
                  <div class="t478__title t-title t-title_xs t-animate" data-animate-style="fadein" data-animate-group="yes" data-animate-order="1" field="title" style="color:#0374f5;font-size:40px;"><?php the_field('head2'); ?> <br /></div>
                  <div class="t478__line " style="max-width: 70px;height: 2px;background-color: #0374f5;opacity:0.30;"></div>
                  <div class="t478__descr t-descr t-descr_md t-animate" data-animate-style="fadein" data-animate-group="yes" data-animate-order="2" data-animate-delay="0.3" field="descr" style="color:#000000;"><?php the_field('cdescr2'); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(window).resize(function() {
          if (typeof window.noAdaptive != "undefined" && window.noAdaptive == true && $isMobile) {
            return;
          }
          t478_setHeight('57047250');
        });
        $(document).ready(function() {
          t478_setHeight('57047250');
        });
        $('.t478').bind('displayChanged', function() {
          t478_setHeight('57047250');
        });
      </script>
    </div>
    <div id="rec57047473" class="r t-rec t-rec_pt_0 t-rec_pb_105" style="padding-top:0px;padding-bottom:105px;background-color:#ffffff; " data-record-type="498" data-bg-color="#ffffff">
      <!-- t498 -->
      <style type="text/css">
        @media screen and (max-width: 960px) {
          #rec57047473 .t498__line {
            height: 1px;
          }
        }
      </style>
      
      <?php if( have_rows('vars2') ): ?>
       
      <div class="t498">
        <div class="t-container">
        
         <?php while( have_rows('vars2') ): the_row(); ?>   
         
          <div class="t498__col t-col t-col_4 t-align_center t-item">
            <div class="t498__col-wrapper_fisrt t498__col-wrapper">
              <div class="t498__title t-name t-name_xl" style="font-size:21px;padding-bottom:16px;" field="title">
                <div style="text-align:left;" data-customstyle="yes"><?php the_sub_field('var-head2'); ?></div>
              </div>
              <div class="t498__descr t-descr t-descr_sm" style="font-size:17px;font-weight:300;padding-bottom:0px;" field="descr">
                <div style="text-align:left;" data-customstyle="yes"><?php the_sub_field('var-descr2'); ?></div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          
        
        </div>
      </div>
      <?php endif; ?>
   
      <script type="text/javascript">
        $(document).ready(function() {
          setTimeout(function() {
            t498_unifyHeights('57047473');
          }, 500);
        });
        var t498__doResize;
        $(window).resize(function() {
          clearTimeout(t498__doResize);
          t498__doResize = setTimeout(function() {
            t498_unifyHeights('57047473');
          }, 200);
        });
        $(window).load(function() {
          t498_unifyHeights('57047473');
        });
        $('.t498').bind('displayChanged', function() {
          t498_unifyHeights('57047473');
        });
      </script>
    </div>
    <div id="rec58314616" class="r t-rec t-rec_pt_105 t-rec_pb_60" style="padding-top:105px;padding-bottom:60px;background-color:#f5f9ff; " data-record-type="478" data-bg-color="#f5f9ff">
      <!-- T478 -->
      <div style="width: 0; height: 0; overflow: hidden;">
        <div class="t478__sizer t-col t-col_5" data-auto-correct-mobile-width="false" style="height:400px;"></div>
      </div>
      <div class="t478">
        <div class="t-container">
          <div class="t478__top t-col t-col_5 ">
            <?php $image_id = get_field( 'img3', false ); ?>
            <div class="t478__blockimg t-bgimg" data-original="<?php echo wp_get_attachment_image_src( $image_id, 'medium_large' )[0]; ?>" bgimgfield="img" style="height:400px;"></div>
          </div>
          <div class="t-col t-col_7 ">
            <div class="t478__textwrapper t-align_left" style="height:400px;">
              <div class="t478__content t-valign_middle">
                <div class="t478__box">
                  <div class="t478__title t-title t-title_xs t-animate" data-animate-style="fadein" data-animate-group="yes" data-animate-order="1" field="title" style="color:#0374f5;font-size:40px;"><?php the_field('head3'); ?> <br /></div>
                  <div class="t478__line " style="max-width: 70px;height: 2px;background-color: #0374f5;opacity:0.30;"></div>
                  <div class="t478__descr t-descr t-descr_md t-animate" data-animate-style="fadein" data-animate-group="yes" data-animate-order="2" data-animate-delay="0.3" field="descr" style="color:#000000;"><?php the_field('cdescr3'); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(window).resize(function() {
          if (typeof window.noAdaptive != "undefined" && window.noAdaptive == true && $isMobile) {
            return;
          }
          t478_setHeight('58314616');
        });
        $(document).ready(function() {
          t478_setHeight('58314616');
        });
        $('.t478').bind('displayChanged', function() {
          t478_setHeight('58314616');
        });
      </script>
    </div>
    <div id="rec57048341" class="r t-rec t-rec_pt_0 t-rec_pb_105" style="padding-top:0px;padding-bottom:105px;background-color:#f5f9ff; " data-record-type="498" data-bg-color="#f5f9ff">
      <!-- t498 -->
      <style type="text/css">
        @media screen and (max-width: 960px) {
          #rec57048341 .t498__line {
            height: 1px;
          }
        }
      </style>
      
      
      
      
      
      
      
       <?php if( have_rows('vars3') ): ?>
      <div class="t498">
        <div class="t-container">
          <?php while( have_rows('vars3') ): the_row(); ?>   
          <div class="t498__col t-col t-col_6 t-align_center t-item">
            <div class="t498__col-wrapper_fisrt t498__col-wrapper">
              <div class="t498__title t-name t-name_xl" style="font-size:21px;padding-bottom:16px;" field="title">
                <div style="text-align:left;" data-customstyle="yes"><?php the_sub_field('var-head3'); ?></div>
              </div>
              <div class="t498__descr t-descr t-descr_sm" style="font-size:17px;font-weight:300;padding-bottom:0px;" field="descr">
                <div style="text-align:left;" data-customstyle="yes"><?php the_sub_field('var-descr3'); ?></div>
              </div>
            </div>
          </div>

          <?php endwhile; ?>   
         
        </div>
      </div>
      
       <?php endif; ?>
       
      <script type="text/javascript">
        $(document).ready(function() {
          setTimeout(function() {
            t498_unifyHeights('57048341');
          }, 500);
        });
        var t498__doResize;
        $(window).resize(function() {
          clearTimeout(t498__doResize);
          t498__doResize = setTimeout(function() {
            t498_unifyHeights('57048341');
          }, 200);
        });
        $(window).load(function() {
          t498_unifyHeights('57048341');
        });
        $('.t498').bind('displayChanged', function() {
          t498_unifyHeights('57048341');
        });
      </script>
    </div>
    <div id="rec60515258" class="r t-rec t-rec_pt_105 t-rec_pb_60" style="padding-top:105px;padding-bottom:60px;background-color:#ffffff; " data-record-type="478" data-bg-color="#ffffff">
      <!-- T478 -->
      <div style="width: 0; height: 0; overflow: hidden;">
        <div class="t478__sizer t-col t-col_5" data-auto-correct-mobile-width="false" style="height:400px;"></div>
      </div>
      <div class="t478">
        <div class="t-container">
          <div class="t478__top t-col t-col_5 ">
            <?php $image_id = get_field( 'img4', false ); ?>
            <div class="t478__blockimg t-bgimg" data-original="<?php echo wp_get_attachment_image_src( $image_id, 'medium_large' )[0]; ?>" bgimgfield="img" style="height:400px;"></div>
          </div>
          <div class="t-col t-col_7 ">
            <div class="t478__textwrapper t-align_left" style="height:400px;">
              <div class="t478__content t-valign_middle">
                <div class="t478__box">
                  <div class="t478__title t-title t-title_xs t-animate" data-animate-style="fadein" data-animate-group="yes" data-animate-order="1" field="title" style="color:#0374f5;font-size:40px;"><strong><?php the_field('head4'); ?></strong> <br /></div>
                  <div class="t478__line " style="max-width: 70px;height: 2px;background-color: #0374f5;opacity:0.30;"></div>
                  <div class="t478__descr t-descr t-descr_md t-animate" data-animate-style="fadein" data-animate-group="yes" data-animate-order="2" data-animate-delay="0.3" field="descr" style="color:#000000;"><?php the_field('cdescr4'); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(window).resize(function() {
          if (typeof window.noAdaptive != "undefined" && window.noAdaptive == true && $isMobile) {
            return;
          }
          t478_setHeight('60515258');
        });
        $(document).ready(function() {
          t478_setHeight('60515258');
        });
        $('.t478').bind('displayChanged', function() {
          t478_setHeight('60515258');
        });
      </script>
    </div>
    <div id="rec60515711" class="r t-rec t-rec_pt_0 t-rec_pb_15" style="padding-top:0px;padding-bottom:15px;background-color:#ffffff; " data-record-type="147" data-bg-color="#ffffff">
      
      <?php if( have_rows('vars4') ): ?>
      <!-- t214-->
      <div class="t214">
        <div class="t-container">
          <div class="t-row">
           
           <?php while( have_rows('vars4') ): the_row(); ?>   
           <?php $image_id = get_sub_field( 'var-img4', false ); ?>
            <div class="t-col t-col_4" style="margin-bottom:20px;" itemscope itemtype="http://schema.org/ImageObject">
              <div class="t214__blockimg t-bgimg" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="<?php echo wp_get_attachment_image_src( $image_id, 'full' )[0]; ?>" data-original="<?php echo wp_get_attachment_image_src( $image_id, 'medium_large' )[0]; ?>" style="background: center center no-repeat; background-size:cover;">
                <meta itemprop="image" content="<?php echo wp_get_attachment_image_src( $image_id, 'full' )[0]; ?>">
              </div>
            </div>
            
            <?php endwhile; ?>  
            

          </div>
        </div>
      </div>
       <?php endif; ?>
      
      
    </div>
    <div id="rec60516653" class="r t-rec t-rec_pt_0 t-rec_pb_90" style="padding-top:0px;padding-bottom:90px;background-color:#ffffff; " data-record-type="106" data-bg-color="#ffffff">
      <!-- T004 -->
      <div class="t004">
        <div class="t-container ">
          <div class="t-col t-col_10 t-prefix_1">
            <div field="text" class="t-text t-text_md " style=""><?php the_field('dop4'); ?> </div>
          </div>
        </div>
      </div>
    </div>
    <div id="rec56846788" class="r t-rec t-rec_pt_105 t-rec_pb_45" style="padding-top:105px;padding-bottom:45px;background-color:#f5f9ff; " data-record-type="477" data-bg-color="#f5f9ff">
      <!-- T477 -->
      <div style="width: 0; height: 0; overflow: hidden;">
        <div class="t477__sizer t-col t-col_6" data-auto-correct-mobile-width="false" style="height:560px;"></div>
      </div>
      <div class="t477">
        <div class="t-container">
          <div class="t477__top t477__col t-col t-col_6 ">
            <?php $image_id = get_field( 'img5', false ); ?>
            <div class="t477__blockimg t-bgimg" bgimgfield="img" data-original="<?php echo wp_get_attachment_image_src( $image_id, 'medium_large' )[0]; ?>" style="height:560px;"></div>
          </div>
          <div class="t-col t477__col t-col_6 ">
            <div class="t477__textwrapper t-align_left" style="background-color: #0374f5;">
              <div class="t477__content t-valign_middle">
                <div class="t477__box">
                  <div class="t477__title t-title t-title_xs t-animate" data-animate-style="fadein" data-animate-group="yes" data-animate-order="1" field="title" style=""><?php the_field('head5'); ?></div>
                  <div class="t477__line t-animate" data-animate-style="fadein" data-animate-group="yes" data-animate-order="2" data-animate-delay="0.3" style="background-color: #ffffff;opacity:0.60;"></div>
                  <div class="t477__descr t-descr t-descr_md t-animate" data-animate-style="fadein" data-animate-group="yes" data-animate-order="2" data-animate-delay="0.3" field="descr" style=""><?php the_field('cdescr5'); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(window).resize(function() {
          var t477_doResize = $('#rec56846788').data('resize-timeout');
          if (t477_doResize) {
            clearTimeout(t477_doResize)
          };
          t477_doResize = setTimeout(function() {
            t477_setHeight('56846788');
          }, 500);
          $('#rec56846788').data('resize-timeout', t477_doResize);
        });
        $(document).ready(function() {
          t477_setHeight('56846788');
          $('.t477').bind('displayChanged', function() {
            t477_setHeight('56846788');
          });
        });
      </script>
    </div>
    <div id="rec56846808" class="r t-rec t-rec_pt_0 t-rec_pb_105" style="padding-top:0px;padding-bottom:105px;background-color:#f5f9ff; " data-record-type="147" data-bg-color="#f5f9ff">
    
      
     <?php if( have_rows('vars5') ): ?>
      <!-- t214-->
      <div class="t214">
        <div class="t-container">
          <div class="t-row">
           
           <?php while( have_rows('vars5') ): the_row(); ?>   
           <?php $image_id = get_sub_field( 'var-img5', false ); ?>
            <div class="t-col t-col_4" style="margin-bottom:20px;" itemscope itemtype="http://schema.org/ImageObject">
              <div class="t214__blockimg t-bgimg" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="<?php echo wp_get_attachment_image_src( $image_id, 'full' )[0]; ?>" data-original="<?php echo wp_get_attachment_image_src( $image_id, 'medium_large' )[0]; ?>" style="background: center center no-repeat; background-size:cover;">
                <meta itemprop="image" content="<?php echo wp_get_attachment_image_src( $image_id, 'full' )[0]; ?>">
              </div>
            </div>
            
            <?php endwhile; ?>  
            

          </div>
        </div>
      </div>
       <?php endif; ?>

    </div>
    <div id="rec57051904" class="r t-rec t-rec_pt_105 t-rec_pb_0" style="padding-top:105px;padding-bottom:0px;background-color:#292929; " data-record-type="43" data-bg-color="#292929">
      <!-- T030 -->
      <div class="t030">
        <div class="t-container t-align_center">
          <div class="t-col t-col_12 ">
            <div class="t030__title t-title t-title_xxs" field="title" style="">
              <div style="font-size:28px;color:#0374f5;" data-customstyle="yes">КТО МЫ</div>
            </div>
            <div class="t030__descr t-descr t-descr_md" field="descr" style="">
              <div style="color:#edebeb;" data-customstyle="yes">Наша команда работает в сфере профессионального льда с 2005 года.<br />Большой опыт построения ледовых объектов на Украине. Наша экспертиза позволяет нам организовать практически любое катковое решение!</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="rec56846898" class="r t-rec t-rec_pb_90" style="padding-bottom:90px;background-color:#292929; " data-record-type="526" data-bg-color="#292929">
      <!-- t526 -->
      <div class="t526">
        <div class="t-section__container t-container">
          <div class="t-col t-col_12">
            <div class="t-section__topwrapper t-align_center">
              <div class="t-section__title t-title t-title_xs" field="btitle">
                <div style="color:#ffffff;" data-customstyle="yes"></div>
              </div>
              <div class="t-section__descr t-descr t-descr_xl t-margin_auto" field="bdescr">
                <div style="color:#f5f5f5;" data-customstyle="yes"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="t526__container t-container">
          <div class="t526__col t-col t-col_4 t-align_center t526__col-mobstyle">
            <div class="t526__itemwrapper t526__itemwrapper_3">
              <div class="t526__imgwrapper t-margin_auto">
                <div class="t526__bgimg t526__img_circle t-margin_auto t-bgimg" bgimgfield="li_img__1478015636342" data-original="https://static.tildacdn.com/tild3338-3534-4339-b433-323763343634/evgenyi-b.png" style="background-image: url('https://static.tildacdn.com/tild3338-3534-4339-b433-323763343634/-/resizeb/20x/evgenyi-b1.png');"></div>
              </div>
              <div class="t526__wrappercenter">
                <div class="t526__persname t-name t-name_lg t526__bottommargin_lg" style="color:#0374f5;text-transform:uppercase;" field="li_persname__1478015636342"> Евгений Браунштейн <br /></div>
                <div class="t526__perstext t-text t-text_xs" style="color:#f0f0f0;" field="li_text__1478015636342"> Главный эксперт в ледовых технологиях и процессах функционирования и запуска катков.<br /></div>
              </div>
            </div>
          </div>
          <div class="t526__col t-col t-col_4 t-align_center t526__col-mobstyle">
            <div class="t526__itemwrapper t526__itemwrapper_3">
              <div class="t526__imgwrapper t-margin_auto">
                <div class="t526__bgimg t526__img_circle t-margin_auto t-bgimg" bgimgfield="li_img__1478015651388" data-original="https://static.tildacdn.com/tild3161-3436-4236-a263-373865396466/alexandr-b.png" style="background-image: url('https://static.tildacdn.com/tild3161-3436-4236-a263-373865396466/-/resizeb/20x/alexandr-b1.png');"></div>
              </div>
              <div class="t526__wrappercenter">
                <div class="t526__persname t-name t-name_lg t526__bottommargin_lg" style="color:#0374f5;text-transform:uppercase;" field="li_persname__1478015651388">Александр Овчинников</div>
                <div class="t526__perstext t-text t-text_xs" style="color:#f0f0f0;" field="li_text__1478015651388">Эксперт в организационных процессах при создании ледовых решений.</div>
              </div>
            </div>
          </div>
          <div class="t526__col t-col t-col_4 t-align_center t526__col-mobstyle">
            <div class="t526__itemwrapper t526__itemwrapper_3">
              <div class="t526__imgwrapper t-margin_auto">
                <div class="t526__bgimg t526__img_circle t-margin_auto t-bgimg" bgimgfield="li_img__1478015661335" data-original="https://static.tildacdn.com/tild3836-6238-4538-b931-346239643863/anton-b.png" style="background-image: url('https://static.tildacdn.com/tild3836-6238-4538-b931-346239643863/-/resizeb/20x/anton-b.png');"></div>
              </div>
              <div class="t526__wrappercenter">
                <div class="t526__persname t-name t-name_lg t526__bottommargin_lg" style="color:#0374f5;text-transform:uppercase;" field="li_persname__1478015661335">Антон Бусыгин</div>
                <div class="t526__perstext t-text t-text_xs" style="color:#f0f0f0;" field="li_text__1478015661335"> Эксперт в области организации пространства и архитектурных решений.<br /></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="rec56847204" class="r t-rec" style=" " data-animationappear="off" data-record-type="204">
      <!-- cover -->
      <div class="t-cover" id="recorddiv56847204" bgimgfield="img" style="height:60vh; background-image:url('https://static.tildacdn.com/tild6639-3138-4138-a435-306133333132/-/resize/20x/shutterstock_15955001.jpg');">
        <div class="t-cover__carrier" id="coverCarry56847204" data-content-cover-id="56847204" data-content-cover-bg="https://static.tildacdn.com/tild6639-3138-4138-a435-306133333132/shutterstock_1595500.jpg" data-content-cover-height="60vh" data-content-cover-parallax="fixed" style="height:60vh; "></div>
        <div class="t-cover__filter" style="height:60vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.60));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.60));background-image: -o-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.60));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.60));background-image: linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.60));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#fe000000', endColorstr='#66000000');"></div>
        <div class="t-container">
          <div class="t-col t-col_8">
            <div class="t-cover__wrapper t-valign_middle" style="height:60vh; position: relative;z-index: 1;">
              <div class="t181">
                <div data-hook-content="covercontent">
                  <div class="t181__wrapper">
                    <div class="t181__title t-title t-title_md t-animate" data-animate-style="fadein" data-animate-group="yes" style="color:#0374f5;" field="title">НАШИ ОБЪЕКТЫ <br /></div>
                    <div class="t181__descr t-descr t-descr_lg t-opacity_70 t-animate" data-animate-style="fadein" data-animate-group="yes" style="color:#ffffff;font-weight:500;opacity:1;" field="descr">МЫ ПОДАРИЛИ РАДОСТЬ БОЛЕЕ 3 МЛН ЧЕЛОВЕК! <br />ИМЕННО СТОЛЬКО ЛЮДЕЙ ПОБЫВАЛО НА НАШИХ КАТКАХ.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <style>
        #rec56847204 .t-btn[data-btneffects-first],
        #rec56847204 .t-btn[data-btneffects-second],
        #rec56847204 .t-submit[data-btneffects-first],
        #rec56847204 .t-submit[data-btneffects-second] {
          position: relative;
          overflow: hidden;
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }
      </style>
      <script type="text/javascript">
        $(document).ready(function() {});
      </script>
    </div>
    <div id="rec56847265" class="r t-rec t-rec_pt_45 t-rec_pb_105" style="padding-top:45px;padding-bottom:105px;background-color:#ffffff; " data-animationappear="off" data-record-type="649" data-bg-color="#ffffff">
      <!-- T649 -->
      <div class="t649">
        <div class="t-container">
          <div class="t649__col t-col t-col_3 t-align_left t-item">
            <a class="t649__linkwrapper" href="#popup:ready1">
              <div class="t649__blockimg t649__blockimg_3-2 t-bgimg" data-original="https://static.tildacdn.com/tild3331-6363-4965-a464-383464323239/image16-40fix.jpg" style="background: url('https://static.tildacdn.com/tild3331-6363-4965-a464-383464323239/-/resizeb/20x/image16-40fix1.jpg') center center no-repeat; background-size:cover;"></div>
              <div class="t649__textwrapper">
                <div class="t649__sp"></div>
                <div class="t649__title t-heading t-heading_sm" style="font-size:24px;" field="li_title__1489060481808">МЕТЕЛИЦА <br /></div>
                <div class="t649__text t-text t-text_sm" style="" field="li_descr__1489060481808">Ледовый комплекс под воздухоопорной конструкцией<br /></div>
                <div class="t649__btn-container">
                  <div class="t649__btntext-wrapper">
                    <div class="t649__btn-text t-btntext t-btntext_sm " style="color:#396bf2;">подробнее </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="t649__col t-col t-col_3 t-align_left t-item">
            <a class="t649__linkwrapper" href="#popup:ready2">
              <div class="t649__blockimg t649__blockimg_3-2 t-bgimg" data-original="https://static.tildacdn.com/tild3065-6230-4666-a566-326361333139/image18-44fix.jpg" style="background: url('https://static.tildacdn.com/tild3065-6230-4666-a566-326361333139/-/resizeb/20x/image18-44fix1.jpg') center center no-repeat; background-size:cover;"></div>
              <div class="t649__textwrapper">
                <div class="t649__sp"></div>
                <div class="t649__title t-heading t-heading_sm" style="font-size:24px;" field="li_title__1489060588988">БУКОВЕЛЬ<br /></div>
                <div class="t649__text t-text t-text_sm" style="" field="li_descr__1489060588988">Открытый каток на горнолыжном курорте в карпатах</div>
                <div class="t649__btn-container">
                  <div class="t649__btntext-wrapper">
                    <div class="t649__btn-text t-btntext t-btntext_sm " style="color:#396bf2;">подробнее </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="t649__col t-col t-col_3 t-align_left t-item">
            <a class="t649__linkwrapper" href="#popup:ready3">
              <div class="t649__blockimg t649__blockimg_3-2 t-bgimg" data-original="https://static.tildacdn.com/tild3366-3437-4130-a537-303334346664/image22-52.jpeg" style="background: url('https://static.tildacdn.com/tild3366-3437-4130-a537-303334346664/-/resizeb/20x/image22-521.jpeg') center center no-repeat; background-size:cover;"></div>
              <div class="t649__textwrapper">
                <div class="t649__sp"></div>
                <div class="t649__title t-heading t-heading_sm" style="font-size:24px;" field="li_title__1489060571494">КАРАВАН</div>
                <div class="t649__text t-text t-text_sm" style="" field="li_descr__1489060571494">Крытый каток в торговом центре</div>
                <div class="t649__btn-container">
                  <div class="t649__btntext-wrapper">
                    <div class="t649__btn-text t-btntext t-btntext_sm " style="color:#396bf2;">подробнее </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="t649__col t-col t-col_3 t-align_left t-item">
            <a class="t649__linkwrapper" href="#popup:ready4">
              <div class="t649__blockimg t649__blockimg_3-2 t-bgimg" data-original="https://static.tildacdn.com/tild6238-3933-4965-b964-373262336264/image25-58fix.jpg" style="background: url('https://static.tildacdn.com/tild6238-3933-4965-b964-373262336264/-/resizeb/20x/image25-58fix.jpg') center center no-repeat; background-size:cover;"></div>
              <div class="t649__textwrapper">
                <div class="t649__sp"></div>
                <div class="t649__title t-heading t-heading_sm" style="font-size:24px;" field="li_title__1528841472530">ЛЕДОВАЯ АРЕНА <br /></div>
                <div class="t649__text t-text t-text_sm" style="" field="li_descr__1528841472530">Крытый каркасный спортивный каток</div>
                <div class="t649__btn-container">
                  <div class="t649__btntext-wrapper">
                    <div class="t649__btn-text t-btntext t-btntext_sm " style="color:#396bf2;">подробнее </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <style>
        #rec56847265 .t-btn:not(.t-animate_no-hover):hover {
          color: #000000 !important;
        }

        #rec56847265 .t-btn:not(.t-animate_no-hover) {
          -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
          transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
      </style>
    </div>
    <div id="rec56855476" class="r t-rec" style="background-color:#ffffff; " data-animationappear="off" data-record-type="766" data-bg-color="#ffffff">
      <!-- t766 -->
      <div class="t766">
        <div class="t-popup" data-tooltip-hook="#popup:ready1">
          <div class="t-popup__close">
            <div class="t-popup__close-wrapper"> <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </div>
          </div>
          <div class="t766__close-text-wrapper">
            <div class="t766__close-text t-descr t-descr_xxs">Закрыть</div>
          </div>
          <div class="t-popup__container t-popup__container-static t-width t-width_8 js-product ">
            <div class="t766__container">
              <!-- gallery -->
              <div class="t766__gallery ">
                <div class="t-slds" style="visibility: hidden;">
                  <div class="t-slds__main">
                    <div class="t-slds__container" style="background-color:#f5f5f5;">
                      <div class="t-slds__items-wrapper t-slds_animated-fast " data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                        <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3336-3436-4730-a661-653837303536/image16-40fix.jpg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3336-3436-4730-a661-653837303536/image16-40fix.jpg">
                              <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild3336-3436-4730-a661-653837303536/image16-40fix.jpg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3336-3436-4730-a661-653837303536/-/resizeb/20x/image16-40fix.jpg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="2">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3532-3066-4962-a464-356365326438/image15-38.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__1" data-zoom-target="1" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3532-3066-4962-a464-356365326438/image15-38.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3532-3066-4962-a464-356365326438/image15-38.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3532-3066-4962-a464-356365326438/-/resizeb/20x/image15-381.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="3">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3761-3238-4965-b762-306462363339/image17-42.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__2" data-zoom-target="2" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3761-3238-4965-b762-306462363339/image17-42.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3761-3238-4965-b762-306462363339/image17-42.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3761-3238-4965-b762-306462363339/-/resizeb/20x/image17-421.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="t-slds__arrow_container ">
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                          <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Left</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                          <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style type="text/css">
                  #rec56855476 .t-slds__bullet_active .t-slds__bullet_body {
                    background-color: #222 !important;
                  }

                  #rec56855476 .t-slds__bullet:hover .t-slds__bullet_body {
                    background-color: #222 !important;
                  }
                </style>
              </div>
              <!--/gallery -->
              <div class="t766__wrapper t-align_left ">
                <div class="t766__title-wrapper">
                  <div class="t766__title t-heading t-heading_lg js-product-name" style="">
                    <div style="color:#0374f5;" data-customstyle="yes">МЕТЕЛИЦА<br /></div>
                  </div>
                  <div class="t766__title_small t-descr t-descr_sm js-product-sku " style="">Ледовый комплекс под воздухоопорной конструкцией<br /></div>
                </div>
                <div class="t766__descr t-descr t-descr_xs " style="">Полный строительный цикл с начала земляных работ до сдачи объекта в эксплуатацию.<br /><br />2005 год<br />Cрок реализации – <strong>4 месяца</strong> <br />Бюджет – <strong>$ 700 000</strong> <br /><br /> <strong>Характеристики катка : <br /></strong><br />
                  <ul>
                    <li><span style="font-weight: 300;">устройство фундаментов; </span></li>
                    <li><span style="font-weight: 300;">установка воздухоопорной конструкции 65х35 м; </span></li>
                    <li><span style="font-weight: 300;">изготовление вентиляционных установок; </span></li>
                    <li><span style="font-weight: 300;">изготовление гаража для ледоуборочной машины 8х5 м; </span></li>
                    <li><span style="font-weight: 300;">устройство теплозоляции ледового поля; </span></li>
                    <li><span style="font-weight: 300;">изготовление трубной системы ледового поля размером 56х26м с коллектором; </span></li>
                    <li><span style="font-weight: 300;">изготовление и монтаж хоккейных бортов; </span></li>
                    <li><span style="font-weight: 300;">поставка и монтаж холодильного агрегата Climaveneta; </span></li>
                    <li><span style="font-weight: 300;">поставка и монтаж гидромодуля на 1000 лиров; </span></li>
                    <li><span style="font-weight: 300;">поставка этиленгликоля для системы охлаждения; </span></li>
                    <li><span style="font-weight: 300;">поставка ледоуборочной машины Zamboni 500; </span></li>
                    <li><span style="font-weight: 300;">изготовление и монтаж сушилки для коньков на 160 пар; </span></li>
                    <li><span style="font-weight: 300;">электромонтажные работы «Под ключ»; </span></li>
                    <li><span style="font-weight: 300;">изготовление и монтаж модульных конструкций – кафе, касса, санузлы, медпункт, прокат коньков, медпункт, раздевалки; </span></li>
                    <li><span style="font-weight: 300;">поставка шкафчиков для переодевания посетителей на 250 человек; </span></li>
                    <li><span style="font-weight: 300;">поставка прокатных коньков 500 пар; </span></li>
                    <li><span style="font-weight: 300;">поставка и укладка напольной резины для ходьбы на коньках; </span></li>
                    <li><span style="font-weight: 300;">поставка хоккейных ворот; </span></li>
                    <li><span style="font-weight: 300;">поставка станка для заточки коньков; </span></li>
                    <li><span style="font-weight: 300;">поставка электронной системы учёта и пропуска посетителей; </span></li>
                    <li><span style="font-weight: 300;">наморозка и покраска льда;</span></li>
                  </ul>
                </div>
                <div class="t766__options-wrapper js-product-controls-wrapper"> </div>
                <div class="t766__bottom-wrapper"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          t766_init('56855476');
        });
      </script>
      <style type="text/css">
        #rec56855476 .t-slds__bullet_active .t-slds__bullet_body {
          background-color: #222 !important;
        }

        #rec56855476 .t-slds__bullet:hover .t-slds__bullet_body {
          background-color: #222 !important;
        }
      </style>
    </div>
    <div id="rec57059243" class="r t-rec" style="background-color:#ffffff; " data-animationappear="off" data-record-type="766" data-bg-color="#ffffff">
      <!-- t766 -->
      <div class="t766">
        <div class="t-popup" data-tooltip-hook="#popup:ready2">
          <div class="t-popup__close">
            <div class="t-popup__close-wrapper"> <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </div>
          </div>
          <div class="t766__close-text-wrapper">
            <div class="t766__close-text t-descr t-descr_xxs">Закрыть</div>
          </div>
          <div class="t-popup__container t-popup__container-static t-width t-width_8 js-product ">
            <div class="t766__container">
              <!-- gallery -->
              <div class="t766__gallery ">
                <div class="t-slds" style="visibility: hidden;">
                  <div class="t-slds__main">
                    <div class="t-slds__container" style="background-color:#f5f5f5;">
                      <div class="t-slds__items-wrapper t-slds_animated-fast " data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                        <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3531-6365-4636-b432-366232623666/image18-44.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3531-6365-4636-b432-366232623666/image18-44.jpeg">
                              <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild3531-6365-4636-b432-366232623666/image18-44.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3531-6365-4636-b432-366232623666/-/resizeb/20x/image18-441.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="2">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3930-3830-4661-b163-666361383631/image19-46.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__1" data-zoom-target="1" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3930-3830-4661-b163-666361383631/image19-46.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3930-3830-4661-b163-666361383631/image19-46.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3930-3830-4661-b163-666361383631/-/resizeb/20x/image19-461.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="3">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3030-3331-4235-b231-333962613363/image20-48.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__2" data-zoom-target="2" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3030-3331-4235-b231-333962613363/image20-48.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3030-3331-4235-b231-333962613363/image20-48.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3030-3331-4235-b231-333962613363/-/resizeb/20x/image20-48.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="t-slds__arrow_container ">
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                          <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Left</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                          <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style type="text/css">
                  #rec57059243 .t-slds__bullet_active .t-slds__bullet_body {
                    background-color: #222 !important;
                  }

                  #rec57059243 .t-slds__bullet:hover .t-slds__bullet_body {
                    background-color: #222 !important;
                  }
                </style>
              </div>
              <!--/gallery -->
              <div class="t766__wrapper t-align_left ">
                <div class="t766__title-wrapper">
                  <div class="t766__title t-heading t-heading_lg js-product-name" style="">
                    <div style="color:#0374f5;" data-customstyle="yes">БУКОВЕЛЬ<br /></div>
                  </div>
                  <div class="t766__title_small t-descr t-descr_sm js-product-sku " style="">Открытый каток на горнолыжном курорте в карпатах<br /></div>
                </div>
                <div class="t766__descr t-descr t-descr_xs " style="">Быстрое и мобильное решение сезонного катка: Оборудование монтируется за считанные часы. И после трёх дней наморозки лёд готов.<br /><br />2017 год<br />Cрок реализации – <strong>15 дней</strong> <br />Бюджет – <strong>$ 200 000</strong> <br /><br /> <strong>Характеристики катка : <br /><br /></strong>
                  <ul>
                    <li>изготовление трубной системы ледового поля размером 40х20м с коллектором; </li>
                    <li>изготовление и монтаж хоккейных бортов; </li>
                    <li>поставка и монтаж холодильного агрегата Climaveneta; </li>
                    <li>изготовление и монтаж насосной группы; </li>
                    <li>поставка этиленгликоля для системы охлаждения; </li>
                    <li>поставка ледоуборочной машины Dupon OKAY 3000; </li>
                    <li>изготовление и монтаж сушилки для коньков на 60 пар; </li>
                    <li>электромонтажные работы «Под ключ»; </li>
                    <li>поставка декоративных фигур для обучения «ассистент фигуриста» 15 шт; </li>
                    <li>поставка прокатных коньков 400 пар; </li>
                    <li>наморозка и покраска льда.</li>
                  </ul>
                </div>
                <div class="t766__options-wrapper js-product-controls-wrapper"> </div>
                <div class="t766__bottom-wrapper"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          t766_init('57059243');
        });
      </script>
      <style type="text/css">
        #rec57059243 .t-slds__bullet_active .t-slds__bullet_body {
          background-color: #222 !important;
        }

        #rec57059243 .t-slds__bullet:hover .t-slds__bullet_body {
          background-color: #222 !important;
        }
      </style>
    </div>
    <div id="rec57060086" class="r t-rec" style="background-color:#ffffff; " data-animationappear="off" data-record-type="766" data-bg-color="#ffffff">
      <!-- t766 -->
      <div class="t766">
        <div class="t-popup" data-tooltip-hook="#popup:ready3">
          <div class="t-popup__close">
            <div class="t-popup__close-wrapper"> <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </div>
          </div>
          <div class="t766__close-text-wrapper">
            <div class="t766__close-text t-descr t-descr_xxs">Закрыть</div>
          </div>
          <div class="t-popup__container t-popup__container-static t-width t-width_8 js-product ">
            <div class="t766__container">
              <!-- gallery -->
              <div class="t766__gallery ">
                <div class="t-slds" style="visibility: hidden;">
                  <div class="t-slds__main">
                    <div class="t-slds__container" style="background-color:#f5f5f5;">
                      <div class="t-slds__items-wrapper t-slds_animated-fast " data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                        <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild6564-6635-4334-b062-336136393037/image23-54.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6564-6635-4334-b062-336136393037/image23-54.jpeg">
                              <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild6564-6635-4334-b062-336136393037/image23-54.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild6564-6635-4334-b062-336136393037/-/resizeb/20x/image23-541.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="2">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild6166-6438-4963-b933-373737316362/image22-52.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__1" data-zoom-target="1" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6166-6438-4963-b933-373737316362/image22-52.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild6166-6438-4963-b933-373737316362/image22-52.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild6166-6438-4963-b933-373737316362/-/resizeb/20x/image22-52.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="3">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild6337-6337-4433-a538-396334646466/image21-50.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__2" data-zoom-target="2" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6337-6337-4433-a538-396334646466/image21-50.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild6337-6337-4433-a538-396334646466/image21-50.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild6337-6337-4433-a538-396334646466/-/resizeb/20x/image21-501.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="t-slds__arrow_container ">
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                          <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Left</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                          <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style type="text/css">
                  #rec57060086 .t-slds__bullet_active .t-slds__bullet_body {
                    background-color: #222 !important;
                  }

                  #rec57060086 .t-slds__bullet:hover .t-slds__bullet_body {
                    background-color: #222 !important;
                  }
                </style>
              </div>
              <!--/gallery -->
              <div class="t766__wrapper t-align_left ">
                <div class="t766__title-wrapper">
                  <div class="t766__title t-heading t-heading_lg js-product-name" style="">
                    <div style="color:#0374f5;" data-customstyle="yes">КАРАВАН<br /></div>
                  </div>
                  <div class="t766__title_small t-descr t-descr_sm js-product-sku " style="">Крытый каток в торговом центре<br /></div>
                </div>
                <div class="t766__descr t-descr t-descr_xs " style="">Универсальное решение. Устройство бетонной охлаждающей плиты позволяет летом использовать поле под роллердром. <br /><br />2008 год<br />Cрок реализации – <strong>3 месяца</strong> <br />Бюджет – <strong>$ 500 000</strong> <br /><br /> <strong>Характеристики катка : <br /><br /></strong>
                  <ul>
                    <li>поставка и монтаж холодильного агрегата Climaveneta с рекуперацией тепла; </li>
                    <li>изготовление и монтаж насосной группы; </li>
                    <li>поставка этиленгликоля для системы охлаждения; </li>
                    <li>поставка ледоуборочной машины WM 2070 JUNIOR; </li>
                    <li>изготовление трубной системы ледового поля размером 48х24м с коллектором; </li>
                    <li>устройство бетонной охлаждающей плиты с подогревом основания от промерзания;</li>
                    <li>наморозка и покраска льда, нанесение логотипа и рекламы на лёд </li>
                  </ul>
                </div>
                <div class="t766__options-wrapper js-product-controls-wrapper"> </div>
                <div class="t766__bottom-wrapper"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          t766_init('57060086');
        });
      </script>
      <style type="text/css">
        #rec57060086 .t-slds__bullet_active .t-slds__bullet_body {
          background-color: #222 !important;
        }

        #rec57060086 .t-slds__bullet:hover .t-slds__bullet_body {
          background-color: #222 !important;
        }
      </style>
    </div>
    <div id="rec57060406" class="r t-rec" style="background-color:#ffffff; " data-animationappear="off" data-record-type="766" data-bg-color="#ffffff">
      <!-- t766 -->
      <div class="t766">
        <div class="t-popup" data-tooltip-hook="#popup:ready4">
          <div class="t-popup__close">
            <div class="t-popup__close-wrapper"> <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </div>
          </div>
          <div class="t766__close-text-wrapper">
            <div class="t766__close-text t-descr t-descr_xxs">Закрыть</div>
          </div>
          <div class="t-popup__container t-popup__container-static t-width t-width_8 js-product ">
            <div class="t766__container">
              <!-- gallery -->
              <div class="t766__gallery ">
                <div class="t-slds" style="visibility: hidden;">
                  <div class="t-slds__main">
                    <div class="t-slds__container" style="background-color:#f5f5f5;">
                      <div class="t-slds__items-wrapper t-slds_animated-fast " data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                        <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild6437-3035-4732-b635-643838393861/image24-56.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6437-3035-4732-b635-643838393861/image24-56.jpeg">
                              <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild6437-3035-4732-b635-643838393861/image24-56.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild6437-3035-4732-b635-643838393861/-/resizeb/20x/image24-561.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="2">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild6139-6666-4535-b866-343765636664/image25-58fix.jpg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__1" data-zoom-target="1" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6139-6666-4535-b866-343765636664/image25-58fix.jpg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild6139-6666-4535-b866-343765636664/image25-58fix.jpg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild6139-6666-4535-b866-343765636664/-/resizeb/20x/image25-58fix1.jpg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="3">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild6431-3364-4561-b437-363965346231/image26-60.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__2" data-zoom-target="2" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6431-3364-4561-b437-363965346231/image26-60.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild6431-3364-4561-b437-363965346231/image26-60.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild6431-3364-4561-b437-363965346231/-/resizeb/20x/image26-601.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="t-slds__arrow_container ">
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                          <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Left</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                          <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style type="text/css">
                  #rec57060406 .t-slds__bullet_active .t-slds__bullet_body {
                    background-color: #222 !important;
                  }

                  #rec57060406 .t-slds__bullet:hover .t-slds__bullet_body {
                    background-color: #222 !important;
                  }
                </style>
              </div>
              <!--/gallery -->
              <div class="t766__wrapper t-align_left ">
                <div class="t766__title-wrapper">
                  <div class="t766__title t-heading t-heading_lg js-product-name" style="">
                    <div style="color:#0374f5;" data-customstyle="yes">ЛЕДОВАЯ АРЕНА<br /></div>
                  </div>
                  <div class="t766__title_small t-descr t-descr_sm js-product-sku " style="">Крытый каркасный спортивный каток<br /></div>
                </div>
                <div class="t766__descr t-descr t-descr_xs " style="">Полный строительный цикл: от начала земляных работ до сдачи объекта в эксплуатацию. <br />Арена построена по международным стандартам МФХ. <br /><br />2012 год<br />Cрок реализации – <strong>8 месяцев</strong> <br />Бюджет – <strong>$ 3 000 000</strong> <br /><br /> <strong>Характеристики катка : <br /><br /></strong>
                  <ul>
                    <li>возведение здания площадью 3500 м/кв. – металлокаркас, обшитый сэндвич-панелями; </li>
                    <li>система охлаждения ледового поля 30 х 60 м; </li>
                    <li>устройство бетонной плиты с подогревом грунта от промерзания; </li>
                    <li>поставка стандартных хоккейных бортов IIHF – двойных, стекло со стойками и защитной сеткой; </li>
                    <li>поставка холодильного агрегата Climaveneta мощностью 580 кВт с рекуперацией тепла. Возвратное тепло применяется для нужд катка и климатической установки; </li>
                    <li>поставка ледоуборочной машины WM 2070 JUNIOR; </li>
                    <li>устройство инфраструктуры арены: судейские, тренерские, медпункт, админ-помещения, четыре раздевалки с душевыми, гараж для ледоуборочной машины, водоподготовительный комплекс, гардероб, кафе, комната для прессы. </li>
                    <li>поставка и монтаж трибун для зрителей на 450 человек; </li>
                    <li>хоккейная разметка поля.</li>
                  </ul>
                </div>
                <div class="t766__options-wrapper js-product-controls-wrapper"> </div>
                <div class="t766__bottom-wrapper"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          t766_init('57060406');
        });
      </script>
      <style type="text/css">
        #rec57060406 .t-slds__bullet_active .t-slds__bullet_body {
          background-color: #222 !important;
        }

        #rec57060406 .t-slds__bullet:hover .t-slds__bullet_body {
          background-color: #222 !important;
        }
      </style>
    </div>
    <div id="rec57063234" class="r t-rec" style=" " data-animationappear="off" data-record-type="204">
      <!-- cover -->
      <div class="t-cover" id="recorddiv57063234" bgimgfield="img" style="height:40vh; background-image:url('https://static.tildacdn.com/tild3432-3964-4264-b835-393736623262/-/resize/20x/shutterstock_53199381.jpg');">
        <div class="t-cover__carrier" id="coverCarry57063234" data-content-cover-id="57063234" data-content-cover-bg="https://static.tildacdn.com/tild3432-3964-4264-b835-393736623262/shutterstock_5319938.jpg" data-content-cover-height="40vh" data-content-cover-parallax="fixed" style="height:40vh; "></div>
        <div class="t-cover__filter" style="height:40vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -o-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#fe000000', endColorstr='#fe000000');"></div>
        <div class="t-container">
          <div class="t-col t-col_8">
            <div class="t-cover__wrapper t-valign_middle" style="height:40vh; position: relative;z-index: 1;">
              <div class="t181">
                <div data-hook-content="covercontent">
                  <div class="t181__wrapper">
                    <div class="t181__title t-title t-title_md t-animate" data-animate-style="fadein" data-animate-group="yes" style="color:#0374f5;" field="title">ТЕХНИЧЕСКИЕ<br />РЕШЕНИЯ</div>
                    <div class="t181__descr t-descr t-descr_lg t-opacity_70 t-animate" data-animate-style="fadein" data-animate-group="yes" style="color:#ffffff;font-weight:500;opacity:1;" field="descr">
                      <div style="color:#000000;" data-customstyle="yes">ПРЕДОСТАВЛЯЕМЫЕ ЭКСКЛЮЗИВНО КОМПАНИЕЙ PROKATOK</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <style>
        #rec57063234 .t-btn[data-btneffects-first],
        #rec57063234 .t-btn[data-btneffects-second],
        #rec57063234 .t-submit[data-btneffects-first],
        #rec57063234 .t-submit[data-btneffects-second] {
          position: relative;
          overflow: hidden;
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }
      </style>
      <script type="text/javascript">
        $(document).ready(function() {});
      </script>
    </div>
    <div id="rec56856521" class="r t-rec t-rec_pt_0 t-rec_pb_105" style="padding-top:0px;padding-bottom:105px; " data-animationappear="off" data-record-type="774">
      <!-- T774 -->
      <div class="t774 ">
        <div class="t774__container t-container t774__container_mobile-grid" data-blocks-per-row="4">
          <div class="t774__col t-col t-col_3 t-align_left t-item t774__col_mobile-grid">
            <div class="t774__wrapper" style="">
              <a href="#popup:tech1">
                <div class="t774__imgwrapper" style="padding-bottom:69.230769230769%;">
                  <div class="t774__bgimg t-bgimg" bgimgfield="li_img__1489060481808" data-original="https://static.tildacdn.com/tild3137-6532-4034-a562-346335303937/image_manager__big_s.jpg" style="background-image:url('https://static.tildacdn.com/tild3137-6532-4034-a562-346335303937/-/resizeb/20x/image_manager__big_s1.jpg');"></div>
                </div>
              </a>
              <div class="t774__content">
                <a href="#popup:tech1">
                  <div class="t774__textwrapper t774__paddingsmall">
                    <div class="t774__title t-name t-name_xs" field="li_title__1489060481808" style="font-size:21px;padding-bottom:0px;">ЛЬДОУБОРОЧНЫЕ МАШИНЫ <br /></div>
                    <div class="t774__descr t-descr t-descr_xxs" field="li_descr__1489060481808" style="padding-top:0px;padding-bottom:0px;"><u> </u></div>
                  </div>
                </a>
                <div class="t774__btntext-wrapper t774__paddingsmall"> <a href="#popup:tech1" class="t774__btn-text t-btntext t-btntext_sm " style="color:#396bf2;">подробнее </a> </div>
              </div>
            </div>
          </div>
          <div class="t774__col t-col t-col_3 t-align_left t-item t774__col_mobile-grid">
            <div class="t774__wrapper" style="">
              <a href="#popup:tech2">
                <div class="t774__imgwrapper" style="padding-bottom:69.230769230769%;">
                  <div class="t774__bgimg t-bgimg" bgimgfield="li_img__1489060588988" data-original="https://static.tildacdn.com/tild6165-3564-4563-b430-363237626336/image30-68.jpeg" style="background-image:url('https://static.tildacdn.com/tild6165-3564-4563-b430-363237626336/-/resizeb/20x/image30-681.jpeg');"></div>
                </div>
              </a>
              <div class="t774__content">
                <a href="#popup:tech2">
                  <div class="t774__textwrapper t774__paddingsmall">
                    <div class="t774__title t-name t-name_xs" field="li_title__1489060588988" style="font-size:21px;padding-bottom:0px;">БОРТА ДЛЯ КАТКА<br /></div>
                  </div>
                </a>
                <div class="t774__btntext-wrapper t774__paddingsmall"> <a href="#popup:tech2" class="t774__btn-text t-btntext t-btntext_sm " style="color:#396bf2;">подробнее </a> </div>
              </div>
            </div>
          </div>
          <div class="t774__col t-col t-col_3 t-align_left t-item t774__col_mobile-grid">
            <div class="t774__wrapper" style="">
              <a href="#popup:tech3">
                <div class="t774__imgwrapper" style="padding-bottom:69.230769230769%;">
                  <div class="t774__bgimg t-bgimg" bgimgfield="li_img__1489060571494" data-original="https://static.tildacdn.com/tild6235-3261-4132-b136-613236323736/image35-78.jpeg" style="background-image:url('https://static.tildacdn.com/tild6235-3261-4132-b136-613236323736/-/resizeb/20x/image35-781.jpeg');"></div>
                </div>
              </a>
              <div class="t774__content">
                <a href="#popup:tech3">
                  <div class="t774__textwrapper t774__paddingsmall">
                    <div class="t774__title t-name t-name_xs" field="li_title__1489060571494" style="font-size:21px;padding-bottom:0px;">ТРУБНАЯ СИСТЕМА ОХЛАЖДЕНИЯ</div>
                  </div>
                </a>
                <div class="t774__btntext-wrapper t774__paddingsmall"> <a href="#popup:tech3" class="t774__btn-text t-btntext t-btntext_sm " style="color:#396bf2;">подробнее </a> </div>
              </div>
            </div>
          </div>
          <div class="t774__col t-col t-col_3 t-align_left t-item t774__col_mobile-grid">
            <div class="t774__wrapper" style="">
              <a href="#popup:tech4">
                <div class="t774__imgwrapper" style="padding-bottom:69.230769230769%;">
                  <div class="t774__bgimg t-bgimg" bgimgfield="li_img__1528841472530" data-original="https://static.tildacdn.com/tild6437-3438-4233-b161-616333663536/image40-88.jpeg" style="background-image:url('https://static.tildacdn.com/tild6437-3438-4233-b161-616333663536/-/resizeb/20x/image40-88.jpeg');"></div>
                </div>
              </a>
              <div class="t774__content">
                <a href="#popup:tech4">
                  <div class="t774__textwrapper t774__paddingsmall">
                    <div class="t774__title t-name t-name_xs" field="li_title__1528841472530" style="font-size:21px;padding-bottom:0px;">ВОЗДУХООПОРНЫЕ СООРУЖЕНИЯ <br /></div>
                  </div>
                </a>
                <div class="t774__btntext-wrapper t774__paddingsmall"> <a href="#popup:tech4" class="t774__btn-text t-btntext t-btntext_sm " style="color:#396bf2;">подробнее </a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          t774_init('56856521');
        });
      </script>
      <style>
        #rec56856521 .t-btn:not(.t-animate_no-hover):hover {
          color: #000000 !important;
        }

        #rec56856521 .t-btn:not(.t-animate_no-hover) {
          -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
          transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
      </style>
    </div>
    <div id="rec58313723" class="r t-rec" style=" " data-animationappear="off" data-record-type="674">
      <!-- T674 -->
      <div class="t674"><img class="t674__img-holder" src="https://static.tildacdn.com/tild3434-6461-4366-a133-623135316431/shutterstock_5319938.jpg"></div>
      <style>
        body {
          background-color: #ffffff;
        }

        .t674__body_with-bg:after {
          content: "";
          position: fixed;
          top: 0;
          /*bottom:0;*/
          left: 0;
          right: 0;
          z-index: -1;
          background-image: url('https://static.tildacdn.com/tild3434-6461-4366-a133-623135316431/shutterstock_5319938.jpg');
          background-repeat: no-repeat;
          background-position: center;
          -webkit-background-size: cover;
          background-size: cover;
          height: 100vh;
          background-attachment: initial;
          transform: translate3d(0, 0, 0);
          -webkit-transition: all 0.2s linear;
          transition: all 0.2s linear;
        }
      </style>
      <script type="text/javascript">
        $(document).ready(function() {
          t674_init('58313723');
        });
      </script>
    </div>
    <div id="rec56856613" class="r t-rec" style="background-color:#e6e6e6; " data-animationappear="off" data-record-type="766" data-bg-color="#e6e6e6">
      <!-- t766 -->
      <div class="t766">
        <div class="t-popup" data-tooltip-hook="#popup:tech1">
          <div class="t-popup__close">
            <div class="t-popup__close-wrapper"> <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </div>
          </div>
          <div class="t-popup__container t-popup__container-static t-width t-width_8 js-product ">
            <div class="t766__container">
              <!-- gallery -->
              <div class="t766__gallery ">
                <div class="t-slds" style="visibility: hidden;">
                  <div class="t-slds__main">
                    <div class="t-slds__container" style="background-color:#f5f5f5;">
                      <div class="t-slds__items-wrapper t-slds_animated-fast " data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                        <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3961-3638-4061-b964-643532323566/image_manager__big_s.jpg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3961-3638-4061-b964-643532323566/image_manager__big_s.jpg">
                              <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild3961-3638-4061-b964-643532323566/image_manager__big_s.jpg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3961-3638-4061-b964-643532323566/-/resizeb/20x/image_manager__big_s1.jpg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="2">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3463-3661-4738-b638-356437316532/image_manager__big_s.jpg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__1" data-zoom-target="1" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3463-3661-4738-b638-356437316532/image_manager__big_s.jpg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3463-3661-4738-b638-356437316532/image_manager__big_s.jpg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3463-3661-4738-b638-356437316532/-/resizeb/20x/image_manager__big_s1.jpg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="3">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3335-6161-4033-b431-306539653034/image_manager__big_s.jpg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__2" data-zoom-target="2" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3335-6161-4033-b431-306539653034/image_manager__big_s.jpg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3335-6161-4033-b431-306539653034/image_manager__big_s.jpg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3335-6161-4033-b431-306539653034/-/resizeb/20x/image_manager__big_s1.jpg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="4">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3635-6131-4438-a162-663732323435/image_manager__big_s.jpg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__3" data-zoom-target="3" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3635-6131-4438-a162-663732323435/image_manager__big_s.jpg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3635-6131-4438-a162-663732323435/image_manager__big_s.jpg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3635-6131-4438-a162-663732323435/-/resizeb/20x/image_manager__big_s.jpg');"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="t-slds__arrow_container ">
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                          <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Left</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                          <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style type="text/css">
                  #rec56856613 .t-slds__bullet_active .t-slds__bullet_body {
                    background-color: #222 !important;
                  }

                  #rec56856613 .t-slds__bullet:hover .t-slds__bullet_body {
                    background-color: #222 !important;
                  }
                </style>
              </div>
              <!--/gallery -->
              <div class="t766__wrapper t-align_left ">
                <div class="t766__title-wrapper">
                  <div class="t766__title t-heading t-heading_lg js-product-name" style="">
                    <div style="color:#0374f5;" data-customstyle="yes">ЛЬДОУБОРОЧНЫЕ МАШИНЫ<br /></div>
                  </div>
                  <div class="t766__title_small t-descr t-descr_sm js-product-sku " style="">Мы являемся эксклюзивным партером мировой компании WM Ice Technics.<br /></div>
                </div>
                <div class="t766__descr t-descr t-descr_xs " style=""><strong>WM – это лидер в сфере производства самых инновационных и технологичных комбайнов для ухода за льдом.<br /></strong><br />
                  <ul>
                    <li>WM Compact (Diesel, Electric) </li>
                    <li>WM Mammoth Electric </li>
                    <li>WM Evo 2 (Benzin, Diesel, Electric) </li>
                  </ul>По желанию заказчика мы можем также осуществить поставку, как новой, так и б/у ледоуборочной техники таких известных марок, как: <br /><br />
                  <ul>
                    <li>Zamboni </li>
                    <li>Olympia </li>
                    <li>Engo </li>
                    <li>Okay </li>
                  </ul>
                  <ul></ul>
                </div>
                <div class="t766__options-wrapper js-product-controls-wrapper"> </div>
                <div class="t766__bottom-wrapper"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          t766_init('56856613');
        });
      </script>
      <style type="text/css">
        #rec56856613 .t-slds__bullet_active .t-slds__bullet_body {
          background-color: #222 !important;
        }

        #rec56856613 .t-slds__bullet:hover .t-slds__bullet_body {
          background-color: #222 !important;
        }
      </style>
    </div>
    <div id="rec56856648" class="r t-rec" style="background-color:#e6e6e6; " data-animationappear="off" data-record-type="766" data-bg-color="#e6e6e6">
      <!-- t766 -->
      <div class="t766">
        <div class="t-popup" data-tooltip-hook="#popup:tech2">
          <div class="t-popup__close">
            <div class="t-popup__close-wrapper"> <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </div>
          </div>
          <div class="t-popup__container t-popup__container-static t-width t-width_8 js-product ">
            <div class="t766__container">
              <!-- gallery -->
              <div class="t766__gallery ">
                <div class="t-slds" style="visibility: hidden;">
                  <div class="t-slds__main">
                    <div class="t-slds__container" style="background-color:#f5f5f5;">
                      <div class="t-slds__items-wrapper t-slds_animated-fast " data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                        <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild6134-6339-4566-a239-363337363732/image32-72.png">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6134-6339-4566-a239-363337363732/image32-72.png">
                              <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild6134-6339-4566-a239-363337363732/image32-72.png" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild6134-6339-4566-a239-363337363732/-/resizeb/20x/image32-72.png');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="2">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3366-3361-4538-a330-616437393134/image30-68.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__1" data-zoom-target="1" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3366-3361-4538-a330-616437393134/image30-68.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3366-3361-4538-a330-616437393134/image30-68.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3366-3361-4538-a330-616437393134/-/resizeb/20x/image30-681.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="3">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3265-3132-4563-b033-636535336562/04.jpg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__2" data-zoom-target="2" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3265-3132-4563-b033-636535336562/04.jpg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3265-3132-4563-b033-636535336562/04.jpg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3265-3132-4563-b033-636535336562/-/resizeb/20x/041.jpg');"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="t-slds__arrow_container ">
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                          <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Left</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                          <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style type="text/css">
                  #rec56856648 .t-slds__bullet_active .t-slds__bullet_body {
                    background-color: #222 !important;
                  }

                  #rec56856648 .t-slds__bullet:hover .t-slds__bullet_body {
                    background-color: #222 !important;
                  }
                </style>
              </div>
              <!--/gallery -->
              <div class="t766__wrapper t-align_left ">
                <div class="t766__title-wrapper">
                  <div class="t766__title t-heading t-heading_lg js-product-name" style="">
                    <div style="color:#0374f5;" data-customstyle="yes">БОРТА ДЛЯ КАТКА<br /></div>
                  </div>
                  <div class="t766__title_small t-descr t-descr_sm js-product-sku " style="">Предлагаем различные решения ограждения ледового поля в зависимости от целевого использования.<br /></div>
                </div>
                <div class="t766__descr t-descr t-descr_xs " style="">Для развлекательных катков готовы разработать и воплотить индивидуальный проект борта с подсветкой, брендированием, с использованием прозрачных материалов, либо же определённого цвета. <br /><br /> Предлагаем хоккейные борта в соответствии с международными стандартами из листового полиэтилена РЕ 500 (HDPE) на оцинкованном металлокаркасе - как в одностороннем, так и в двустороннем исполнении с защитой от вылета шайбы. <br /></div>
                <div class="t766__options-wrapper js-product-controls-wrapper"> </div>
                <div class="t766__bottom-wrapper"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          t766_init('56856648');
        });
      </script>
      <style type="text/css">
        #rec56856648 .t-slds__bullet_active .t-slds__bullet_body {
          background-color: #222 !important;
        }

        #rec56856648 .t-slds__bullet:hover .t-slds__bullet_body {
          background-color: #222 !important;
        }
      </style>
    </div>
    <div id="rec56856649" class="r t-rec" style="background-color:#e6e6e6; " data-animationappear="off" data-record-type="766" data-bg-color="#e6e6e6">
      <!-- t766 -->
      <div class="t766">
        <div class="t-popup" data-tooltip-hook="#popup:tech3">
          <div class="t-popup__close">
            <div class="t-popup__close-wrapper"> <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </div>
          </div>
          <div class="t-popup__container t-popup__container-static t-width t-width_8 js-product ">
            <div class="t766__container">
              <!-- gallery -->
              <div class="t766__gallery ">
                <div class="t-slds" style="visibility: hidden;">
                  <div class="t-slds__main">
                    <div class="t-slds__container" style="background-color:#f5f5f5;">
                      <div class="t-slds__items-wrapper t-slds_animated-fast " data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                        <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3634-6165-4666-b536-356637383964/image35-78.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3634-6165-4666-b536-356637383964/image35-78.jpeg">
                              <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild3634-6165-4666-b536-356637383964/image35-78.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3634-6165-4666-b536-356637383964/-/resizeb/20x/image35-781.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="2">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild6338-6265-4735-a665-646164623066/image33-74.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__1" data-zoom-target="1" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6338-6265-4735-a665-646164623066/image33-74.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild6338-6265-4735-a665-646164623066/image33-74.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild6338-6265-4735-a665-646164623066/-/resizeb/20x/image33-741.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="3">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild6263-3063-4531-b738-633665613764/image34-76.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__2" data-zoom-target="2" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6263-3063-4531-b738-633665613764/image34-76.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild6263-3063-4531-b738-633665613764/image34-76.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild6263-3063-4531-b738-633665613764/-/resizeb/20x/image34-761.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="4">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3163-3965-4466-b963-656338653232/image36-80.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__3" data-zoom-target="3" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3163-3965-4466-b963-656338653232/image36-80.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3163-3965-4466-b963-656338653232/image36-80.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3163-3965-4466-b963-656338653232/-/resizeb/20x/image36-801.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="t-slds__arrow_container ">
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                          <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Left</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                          <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style type="text/css">
                  #rec56856649 .t-slds__bullet_active .t-slds__bullet_body {
                    background-color: #222 !important;
                  }

                  #rec56856649 .t-slds__bullet:hover .t-slds__bullet_body {
                    background-color: #222 !important;
                  }
                </style>
              </div>
              <!--/gallery -->
              <div class="t766__wrapper t-align_left ">
                <div class="t766__title-wrapper">
                  <div class="t766__title t-heading t-heading_lg js-product-name" style="">
                    <div style="color:#0374f5;" data-customstyle="yes">ТРУБНАЯ СИСТЕМА ОХЛАЖДЕНИЯ<br /></div>
                  </div>
                </div>
                <div class="t766__descr t-descr t-descr_xs " style=""><strong>СТАЦИОНАРНЫЕ АРЕНЫ</strong> <br /> трубы из полиэтилена РЕ100 <br /><br /><strong>МОБИЛЬНЫЕ КАТКИ</strong> <br /> айс-маты из EPDM-резины <br /></div>
                <div class="t766__options-wrapper js-product-controls-wrapper"> </div>
                <div class="t766__bottom-wrapper"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          t766_init('56856649');
        });
      </script>
      <style type="text/css">
        #rec56856649 .t-slds__bullet_active .t-slds__bullet_body {
          background-color: #222 !important;
        }

        #rec56856649 .t-slds__bullet:hover .t-slds__bullet_body {
          background-color: #222 !important;
        }
      </style>
    </div>
    <div id="rec56856650" class="r t-rec" style="background-color:#e6e6e6; " data-animationappear="off" data-record-type="766" data-bg-color="#e6e6e6">
      <!-- t766 -->
      <div class="t766">
        <div class="t-popup" data-tooltip-hook="#popup:tech4">
          <div class="t-popup__close">
            <div class="t-popup__close-wrapper"> <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </div>
          </div>
          <div class="t-popup__container t-popup__container-static t-width t-width_8 js-product ">
            <div class="t766__container">
              <!-- gallery -->
              <div class="t766__gallery ">
                <div class="t-slds" style="visibility: hidden;">
                  <div class="t-slds__main">
                    <div class="t-slds__container" style="background-color:#f5f5f5;">
                      <div class="t-slds__items-wrapper t-slds_animated-fast " data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                        <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3739-6334-4631-b562-393864616564/image40-88.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3739-6334-4631-b562-393864616564/image40-88.jpeg">
                              <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild3739-6334-4631-b562-393864616564/image40-88.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3739-6334-4631-b562-393864616564/-/resizeb/20x/image40-88.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="2">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3739-3037-4566-b036-343839653765/image37-82.png">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__1" data-zoom-target="1" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3739-3037-4566-b036-343839653765/image37-82.png">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3739-3037-4566-b036-343839653765/image37-82.png" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3739-3037-4566-b036-343839653765/-/resizeb/20x/image37-821.png');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="3">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild3431-3031-4166-a530-353135353738/im104.jpg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__2" data-zoom-target="2" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3431-3031-4166-a530-353135353738/im104.jpg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild3431-3031-4166-a530-353135353738/im104.jpg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild3431-3031-4166-a530-353135353738/-/resizeb/20x/im1041.jpg');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="t-slds__item " data-slide-index="4">
                          <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="image" content="https://static.tildacdn.com/tild6636-3536-4430-b262-643665383365/image39-86.jpeg">
                            <div class="t-slds__imgwrapper" bgimgfield="gi_img__3" data-zoom-target="3" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6636-3536-4430-b262-643665383365/image39-86.jpeg">
                              <div class="t-slds__bgimg t-bgimg " data-original="https://static.tildacdn.com/tild6636-3536-4430-b262-643665383365/image39-86.jpeg" style="padding-bottom:66%; background-image: url('https://static.tildacdn.com/tild6636-3536-4430-b262-643665383365/-/resizeb/20x/image39-861.jpeg');"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="t-slds__arrow_container ">
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                          <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Left</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                          <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                            <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 7px;"> <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5" /> </svg> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style type="text/css">
                  #rec56856650 .t-slds__bullet_active .t-slds__bullet_body {
                    background-color: #222 !important;
                  }

                  #rec56856650 .t-slds__bullet:hover .t-slds__bullet_body {
                    background-color: #222 !important;
                  }
                </style>
              </div>
              <!--/gallery -->
              <div class="t766__wrapper t-align_left ">
                <div class="t766__title-wrapper">
                  <div class="t766__title t-heading t-heading_lg js-product-name" style="">
                    <div style="color:#0374f5;" data-customstyle="yes">ВОЗДУХООПОРНЫЕ СООРУЖЕНИЯ<br /></div>
                  </div>
                  <div class="t766__title_small t-descr t-descr_sm js-product-sku " style="">Воздухоопорные сооружения – это технологически инновационные объекты, характеризующиеся простой установкой в кратчайший период и обеспечивающие их быструю окупаемость.<br /></div>
                </div>
                <div class="t766__descr t-descr t-descr_xs " style="">Весь период с момента заказа воздухоопорного сооружения и до момента его установки составит несколько недель, а вложенные инвестиции до 10 раз меньше от инвестиций в строительство капитальных зданий. Наряду с длительным сроком эксплуатации, конструкции обеспечивают долгосрочно высокий доход.<br /><br />Воздухоопорное сооружение представляет собой тентовое полотно без металлического каркаса, герметично закрепленное на фундамент. Внутрь тентового полотна вентиляторами подается воздух, который действует с одинаковой силой во всех направлениях. Давление воздуха используется для поддержания и стабилизации конструкции. <br /><br /> При использовании двухслойного полотна, воздух распределяется на два потока. <br /> Первый поток поддерживает давление внутри купола, которое незначительно выше атмосферного, второй поток направляется в пространство между слоями. Расстояние между слоями — 60 см, за счет чего обеспечиваются прекрасные теплоизоляционные свойства. <br /></div>
                <div class="t766__options-wrapper js-product-controls-wrapper"> </div>
                <div class="t766__bottom-wrapper"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          t766_init('56856650');
        });
      </script>
      <style type="text/css">
        #rec56856650 .t-slds__bullet_active .t-slds__bullet_body {
          background-color: #222 !important;
        }

        #rec56856650 .t-slds__bullet:hover .t-slds__bullet_body {
          background-color: #222 !important;
        }
      </style>
    </div>
    <div id="rec56856692" class="r t-rec t-rec_pt_105 t-rec_pb_30" style="padding-top:105px;padding-bottom:30px;background-color:#0374f5; " data-record-type="564" data-bg-color="#0374f5">
      <!-- t564-->
      <div class="t564">
        <div class="t-container">
          <div class="t-col t-col_6 t-prefix_3 t-align_center"> <img src="https://static.tildacdn.com/tild3136-3265-4438-b633-643639633232/prokatok_logo-03.png" class="t564__img" imgfield="img">
            <div class="t564__small-wrapper">
              <div class="t564__text t-text t-text_md" style="" field="text">
                <div style="color:#ffffff;" data-customstyle="yes"><a href="tel:+79154141001" style="color: rgb(255, 255, 255);">+7 (915) 414 1001<br /></a><span style="font-size: 16px;"><a href="mailto:info@prokatok.com" style="border-bottom-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">info@prokatok.com</a></span><br /></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="rec57065495" class="r t-rec t-rec_pt_0 t-rec_pb_45" style="padding-top:0px;padding-bottom:45px;background-color:#0374f5; " data-record-type="144" data-bg-color="#0374f5">
      <!-- T134 -->
      <div class="t134">
        <div class="t-container">
          <div class="t-col t-col_10 t-prefix_1">
            <div class="t134__descr" field="descr" style="color:#ffffff;"><br />© <?php echo date('Y'); ?> PROKATOK Все права защищены.<br /></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/allrecords-->
  
 <?php
get_footer();