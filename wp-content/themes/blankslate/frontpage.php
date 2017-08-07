<?php

/**
 * Front Page Template
 *
   Template Name:  Front Page
 *
 * @file           frontpage.php
 * @package        Beartooth Builders
 * @author         Jesse Chase 
 * @copyright      2015 Bozeman Interactive
 */

get_header(); ?>
<style>body{background-image:none!important;background-color:transparent!important;}</style>
    <div class="content" id="homecontent">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
            <h1>Beartooth Builders</h1>
            <h3><?php the_content(); ?></h3>
            <?php edit_post_link( $link, $before, $after, $id ); ?>  
        <?php endwhile; endif; ?>
    </div>
<? get_footer(); ?>