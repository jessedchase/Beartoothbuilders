<?php

/**
 * Contact Page Template
 *
   Template Name:  Contact Page
 *
 * @file           contactpage.php
 * @package        Beartooth Builders
 * @author         Jesse Chase 
 * @copyright      2015 Bozeman Interactive
 */

get_header(); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
    <div class="content" id="innercontent">
    	
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                <h1><?php the_title(); ?></h1>
                <div id="contactform">
                    <?php edit_post_link( $link, $before, $after, $id ); ?>  
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
                <div id="sidebar">
                    <?php get_sidebar(); ?>
                </div>
        <div class="clear"></div>
    </div>
<? get_footer(); ?>