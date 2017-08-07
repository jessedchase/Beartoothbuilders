<?php get_header(); ?>
    <div class="content" id="innercontent">
    	<h1><?php the_title();?></h1>
        <section id="content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
            <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
            <?php endwhile; endif; ?>
        </section>
    </div>
<? get_footer(); ?>