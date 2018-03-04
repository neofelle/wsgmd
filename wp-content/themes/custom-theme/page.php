<?php get_header('pages'); ?>
  <section class="content">
    <div style="width: 100%;margin: 0px;padding: 0px;">
      <div class="left-side" style="padding: 0px;">
        <section class="ribbon">
            <div class="col-md-12 left" style="padding: 0px;margin: 0px;">
                <div class="bg-1" style="background-color: #be0a2f;margin: 0px;padding: 0px;padding-top: 20px;">
                    <span class="footnote center">Wine Cellar Design</span>
                    <br/>
                    <span class="footnote-2">3D Drawing <br/> Request</span>
                    <br/>
                    <span class="footnote center">We will create a unique <br/>design just for you!</span>
                    <br/>
                    <a class="button-blue" href="#">Click Here</a>
                    <br/>
                </div>
                <img class="img-ribbon-bottom" src="<?php bloginfo('template_directory'); ?>/images/home/ribbon-bottom.png">
                <img class="img-ribbon-top" src="<?php bloginfo('template_directory'); ?>/images/home/ribbon-top.png">
                <div style="height: 16.1vw;background-color: #be0a2f;margin: 0px;padding: 0px;padding-top: 10px;position: relative;bottom: 1.5vw;">
                        <span class="footnote-2">Fast Quote <span style="font-size: 1vw;">or</span></span>
                        <span class="footnote-2">Just a Question?</span>
                        <br class="clear" />
                        <div style="width: 100%;" style="background-color: #be0a2f;position: relative;">
                            <div class="col-md-7 left cd-1 tw-container" style="z-index: 3;background-color: #be0a2f;">
                                <span class="footnote text-left" style="padding-left: 10px;">Have one of <br/>our wine cellar<br/>designers<br/> contact you</span>
                                <br class="clear" />
                                <a class="button-blue" href="#">Click Here</a>
                            </div>
                            <div class="col-md-5 cd-2 left face-1 tw-container" style="z-index: 2;background-color: #be0a2f;position: relative;">
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <br class="clear" />
        <section class="left-side-nav">
            <?php 
              $v = 0;
              $menuargs = array(
                "theme_location" => "primary",
                "menu_class" => "s-menu",
                "menu_id" => "LEFT-MENU",
              );
              $items_left = wp_get_nav_menu_items( 'LEFT-MENU', $menuargs); 
            ?>
            <div style="width: 100%;background-color: #ffebc8;">
                <div style="background-color: #aea18b;padding-top: 10px;padding-bottom: 10px;padding-left: 25px;padding-right: 25px;">
                    <span class="footnote text-left">Project Features</span>
                </div>
                <ul class="nav-pages">
                    <?php foreach( $items_left as $item ){ ?>
                        <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                    <?php } ?>
                </ul>
            </div>

        </section>
      </div>    
      <div class="right-side">


        <section class="contact-section">
            <div style="background-color: #fbe2b5;display: flex;padding-top: 9px;padding-bottom: 9px;box-shadow: 1px 2px 6px 0px #0e0e0e7a;">
                <div class="col-md-4 left">
                    <span class="contact-1" style="text-transform: uppercase;"><?php the_title();?></span>
                </div>
                <div class="col-md-8 left">
                    <div class="contact-container">
                        <div class="col-md-1 left">
                            <img style="position: relative;top: 9px;" src="<?php bloginfo('template_directory'); ?>/images/home/phone.png" alt="Menu"> 
                        </div>
                        <div class="col-md-10 left">
                            <span>Call us to receive your custom quote <a href="tel:2818097283">(281)-809-7283</a> <br/> or complete our <a class="contact-link" href="#">request a quote form</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact-2-mobile">
            <div style="background-color: #ffebc8;display: flex;padding-top: 15px;padding-bottom: 15px;width: 100%;">
                <div class="col-md-12 left">
                    <div class="contact-container">
                        <div class="center" style="padding:0px;width:100%;">
                            <span class="contact-1 co-text">HOUSTON'S BEST WINE<br/>CELLARS BUILDERS</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br class="clear">
        <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/page/content', 'page' );
                the_content();
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
        ?>     
      </div>
    </div>
  </section>





<section class="ribbon-mobile">
    <div class="col-md-12 left" style="padding-left: 10px;padding-right:10px;margin: 0px;">
        <div class="bg-1" style="background-color: #be0a2f;margin: 0px;padding: 0px;padding-top: 20px;">
            <span class="footnote-m-1 center">Wine Cellar Design</span>
            <br/>
            <span class="footnote-m-2">3D Drawing <br/> Request</span>
            <br/>
            <span class="footnote-m-1 center">We will create a unique <br/>design just for you!</span>
            <br/><br/>
            <a class="button-blue" href="#">Click Here</a>
            <br/>
        </div>
        <img class="img-ribbon-bottom" src="<?php bloginfo('template_directory'); ?>/images/home/ribbon-bottom.png">
        <img class="img-ribbon-top" src="<?php bloginfo('template_directory'); ?>/images/home/ribbon-top.png">
        <div class="m-23">
                <span class="footnote-m-2 r-3">Fast Quote <span style="font-size: 1vw;">or</span></span>
                <span class="footnote-m-2 r-3">Just a Question?</span>
                <div class="s-2" style="width:100%;background-color: #be0a2f;position: relative;">
                    <div class="col-md-7 left cd-1 tw-container" style="z-index: 3;background-color: #be0a2f;">
                        <br/>
                        <span class="footnote-m-1 text-left" style="padding-left: 10px;">Have one of <br/>our wine cellar<br/>designers<br/> contact you</span>
                        <br class="clear" /><br/>
                        <a class="button-blue" href="#">Click Here</a>
                    </div>
                    <div class="col-md-5 cd-2 left face-1 tw-container" style="z-index: 2;background-color: #be0a2f;position: relative;">
                    </div>
                </div>
        </div>
    </div>
    <br class="clear">
</section>
<section class="nav-2">
    <?php 
      $v = 0;
      $menuargs = array(
        "theme_location" => "primary",
        "menu_class" => "s-menu",
        "menu_id" => "LEFT-MENU",
      );
      $items_left = wp_get_nav_menu_items( 'LEFT-MENU', $menuargs); 
    ?>
    <div style="width: 100%;background-color: #ffebc8;">
        <div style="background-color: #aea18b;padding-top: 1px;padding-bottom: 5px;padding-left: 10px;padding-right: 25px;">
            <span class="footnote text-left">Project Features</span>
        </div>
        <br/>
        <ul class="nav-pages">
            <?php foreach( $items_left as $item ){ ?>
                <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
            <?php } ?>
        </ul>
    </div>
</section>
<?php get_footer(); ?>




