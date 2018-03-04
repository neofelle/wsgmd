<?php get_header('blogs'); ?>
		<br class="clear">
		<section class="blog" style="background-color: white !important;">
	        <div class="col-md-12 page-content" style="width: 100%;padding-right: 20px;padding-left: 30px;margin: 0 auto;display: block;">
				 <?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 			 		
				 	   $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'DESC', 'posts_per_page'=>4, 'paged' => $paged)); ?>
			    	<?php if ( $wpb_all_query->have_posts() ) : ?>
	    				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

							<div class="col col-md-12 blog-container mobile-divider">  
								<div class="col blog-1 left blog-img">
								<?php if(has_post_thumbnail()){ ?>
									<?php the_post_thumbnail(); ?>
								<?php }else{ ?>
									<img class="img-frame img-center" src="<?php bloginfo('template_directory'); ?>/images/blog-img.jpg">
								<?php } ?>
								</div>
								<div class="col blog-2 left blog-text">
									<h3 class="title-blog"><?php the_title(); ?></h3>
									<p class="content-blog"><?php echo get_post_meta( get_the_ID(), 'short_desc', true); ?></p>
									<br style="clear: both;" />
									<a href="<?php the_permalink(); ?>" class="button-blog">Read More</a>
								</div>
							</div>
							<br class="clear"><br>
			     		<?php endwhile; ?>
				 	<?php endif; ?>
				<br style="clear:both;">
				<div style="margin-top: 20px;text-align: center;padding-bottom: 40px;">
					<div>	
					    <?php
					    	$big = 999999999; // need an unlikely integer
					    	echo paginate_links(array(
							    'base' => str_replace($big,'%#%', get_pagenum_link($big)),
							    'format' => '?paged=%#%',
							    'current' => max( 1, get_query_var('paged') ),
							    'total' => $wpb_all_query->max_num_pages
							));
					    ?>
					    <?php  wp_reset_postdata(); ?>	
				    </div>
				</div>
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




