<?php
/**
 * The template for displaying customerized pages.
 *
 */

get_header(); ?>
        <div class="container" style="padding-top: 150px;">
            <div class="row" role="main">
            <?php if ( is_front_page() ) { ?>
                <h2 class="page-title"><?php the_title(); ?></h2>
            <?php } else { ?>
                <h1 class="page-title"><?php the_title(); ?></h1>
            <?php } ?>
            </div>
        </div>
        <div id="content" class="container">
            <div class="row left-col left-section">
            <div class="col-md-12">
            <?php
            /* Run the loop to output the page.
             * If you want to overload this in a child theme then include a file
             * called loop-page.php and that will be used instead.
             */
            get_template_part( 'loop', 'page' );
            ?>
            </div>
            </div><!-- .left-section -->
            <div class="container">
                <h2>近期敏捷课程公开班</h2>
                <?php if (have_posts()) : ?>
  <?php $special_query = new WP_Query('category_name=special&showposts=8'); ?>
  <ul class="row">              
      <?php while ($special_query->have_posts()) : $special_query->the_post(); $do_not_duplicate = $post->ID; ?>
        <li class="col-md-4" <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <div>
                <h4 class="course-title width-auto"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                <span class="course-title-bg"></span>
                <div class="clear"></div>
            </div>
            <div class="entry">
                <?php global $more; $more = 0; the_content("详细介绍"); ?>
            </div>
        </li>
      <?php endwhile; ?>
    </ul>   
    <?php else : ?>

        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
        <?php get_search_form(); ?>

    <?php endif; ?>
    <div class="more">
                    <a class="faq-link" href="/faq#q1">哪个课程适合我?</a>
                    <a class="more-btn" href="/category/courses/class">所有公开班</a><span class="more-btn-bg"></span>
                    <div class="clear"></div>
                </div>
            </div>  
            <div class="clear"></div>
        </div><!-- #content -->
        
<?php get_footer(); ?>
