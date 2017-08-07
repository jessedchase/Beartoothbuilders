<?php

/**
 * Inner Page Template
 *
   Template Name:  Inner Page
 *
 * @file           innerpage.php
 * @package        Beartooth Builders
 * @author         Jesse Chase 
 * @copyright      2015 Bozeman Interactive
 */

get_header(); ?>
    <div class="content" id="innercontent">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
            <h1><?php the_title(); ?></h1>
            <div id="pagetext">
            	<?php edit_post_link( $link, $before, $after, $id ); ?>  
            	<?php the_content(); ?>
               
            
        <?php endwhile; endif; ?>
        <?
			$child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$post->ID." AND post_type = 'page' ORDER BY menu_order", 'OBJECT');
			
			if ( $child_pages ) :
				foreach ( $child_pages as $pageChild ) :
					setup_postdata( $pageChild );
					$thumbnail = get_the_post_thumbnail($pageChild->ID, 'thumbnail');
					if($thumbnail == "") continue; // Skip pages without a thumbnail
			?>
					<div class="child-thumb">
					  <a class="child-link" href="<?= get_permalink($pageChild->ID) ?>" rel="bookmark" title="<?= $pageChild->post_title ?>">
						<?= $pageChild->post_title ?></a>
						<a href="<?= get_permalink($pageChild->ID) ?>" rel="bookmark" title="<?= $pageChild->post_title ?>"><?= $thumbnail ?>
					  </a>
					</div>
			<?
				endforeach;
			endif;
		?>
<div class="clear"></div>
<div id="bozint">
	Web Design by <a href="http://www.bozemaninteractive.com" target="_blank">Bozeman Interactive<</a>/div>
</div>
</div>

    </div>
<? get_footer(); ?>