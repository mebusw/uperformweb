<?php
/**
 * The blog sidebar.
 * cyg
 */
?>
<aside class="right-col right-section course-list">
<h2>近期博文</h2>
<ul id="recent_post">
<?php
query_posts('cat='.BLOG_CAT_ID.'&posts_per_page=10&orderby=id&order=DESC'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<li <?php post_class() ?> id="post-<?php the_ID(); ?>">
	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</li>
<?php endwhile; ?>
</ul>
<span class="height_space"></span>
<h2>博客分类</h2>
<ul id="recent_post">
<?php
$args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 1,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => BLOG_CAT_ID,
	'feed'               => 'RSS',
	'feed_type'          => '',
	'feed_image'         => get_template_directory_uri().'/images/blogrss2.png',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => __( '' ),
	'show_option_none'   => __('No categories'),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => null
); 
wp_list_categories($args);
?>
</ul>
<span class="height_space"></span>
<h2>Tags</h2>
<ul id="tags">
<?php wp_tag_cloud('smallest=8&largest=16'); ?>
</ul>

<?php else : ?>
<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't
here.</p>
<?php get_search_form(); ?> 
<?php endif; ?>
<span class="height_space"></span>

            <div class="right-col right-section course-list container">
                <h2>近期敏捷课程公开班</h2>
                <?php if (have_posts()) : ?>
                <ul class="row">
                <?php $special_query = new WP_Query('category_name=special&showposts=8');
                while ($special_query->have_posts()) : $special_query->the_post();
                $do_not_duplicate = $post->ID; ?>
                    <li class="col-md-4" <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        <div>
                            <h4 class="course-title width-auto"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                            <span class="course-title-bg"></span>
                            <div class="clear"></div>
                        </div>
                        <div class="entry">
                        <?php 
                            global $more;    // Declare global $more (before the loop).
                            $more = 0;       // Set (inside the loop) to display content above the more tag.
                            the_content("详细介绍");
                        ?>
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

</aside>