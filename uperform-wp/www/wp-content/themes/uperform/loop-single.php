<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Uperform
 * @since Uperform 1.0
 */
 
$cat_id= get_blog_cat_id();
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php if ($cat_id==BLOG_CAT_ID) {?>
					<div class="entry-meta">
						<span class="date"><i><?php
						echo get_the_date();
						?></i></span>
						<span class="categories-links">
						<em><?php the_category(', '); ?></em>
						</span>
						<?php $tags_flag=get_the_tag_list();
							if($tags_flag){?>
							<span class="tags-list">
							<?php the_tags('', ', ', ''); ?>
							</span>
						<?php }?>
					</div>
					<?php }?>
					<div class="entry-content blog_content">
						<article>
						<?php the_content(); ?>
						<?php edit_post_link( __( '[Edit]', 'cyg' ), '<span class="edit-link">', '</span>' ); ?>
						
						<?php if ($cat_id==BLOG_CAT_ID) {?>
						<ul class="rel_post">
							<li class="previous_post_link left-col">
								上篇：<?php previous_post_link(); ?>
							</li>
							<li class="next_post_link right-col">
								下篇：<?php next_post_link(); ?>
							</li>
						</ul>
						<?php }?>
						
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						</article>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>