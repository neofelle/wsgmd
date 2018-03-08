<?php
/**
Template Name: Custom
 */
?>
<?php get_header(); ?>
            <div id="headerInterior" style="position: relative;bottom: 4px;">
                <div id="headerLeftInterior">
                    <img id="imageHeader" src="<?php bloginfo('template_directory'); ?>/images/interiorPageLgPhoto.jpg" style="height:218px;width:566px;">
                </div>
                <div id="headerRight">
                    <div id="interiorheaderRTop">
                    </div>
                    <div class="interiorheaderphoto">
                        <img id="imageBanner" src="<?php bloginfo('template_directory'); ?>/images/interiorRightPhoto.jpg" style="height:185px;width:368px;">
                    </div>
                </div>
            </div>
            <br/>
            <div id="mainContent">
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
                <br style="clear:both;"/>
            </div>
<?php get_footer(); ?>