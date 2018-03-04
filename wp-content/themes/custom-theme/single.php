<?php get_header('single'); ?>
        <br class="clear">
        <section class="blog" style="background-color: white !important;">
            <div class="col-md-12 page-content" style="width: 100%;padding-right: 20px;padding-left: 30px;margin: 0 auto;display: block;">
                <h2 class="uppercase title"><?php the_title();?></h2>
                <div class="featured-img">
                    <?php 
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }  
                    ?>
                </div>
                <br>
                <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/page/content', 'page' );
                        the_content();

                    endwhile; // End of the loop.


                ?>
            </div>      
        </section>

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




