<?php get_header(); ?>
    <div class="content" id="innercontent">
            <h1>Press</h1>
            <div id="pagetext">
            	<section id="content" role="main">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'entry' ); ?>
                <?php comments_template(); ?>
                <?php endwhile; endif; ?>
                <?php get_template_part( 'nav', 'below' ); ?>
                </section>
            </div>
    </div>
<? get_footer(); ?>