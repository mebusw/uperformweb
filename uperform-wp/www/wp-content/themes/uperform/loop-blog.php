<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Uperform
 * @since Uperform 1.0
 */
?>
<div class="slider">
<div class="wrapper" role="main">
<h1 class="page-title"><?php
	if(is_tag()){
		printf( __( 'Tag —— "%s"', 'uperform' ), '<span>' . single_cat_title( '', false ) . '</span>' );
	}else{
		printf( __( '%s', 'uperform' ), '<span>' . single_cat_title( '', false ) . '</span>' );
	}
	
?></h1>
</div><!-- .wrapper -->
</div><!-- .slider -->
<div id="content" class="wrapper blog">
<div class="inner-content">
<div class="left-section left-col trainning">
<div class="blog-list">
<?php while ( have_posts() ) : the_post(); ?>
<article>
<h3 class="blog-title"><a href="<?php the_permalink() ?>" rel="bookmark"
	title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
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
	<div class="blog_content">
	<?php the_excerpt(); ?> <?php //the_content('详细介绍'); ?> 
	</div>
	<?php edit_post_link( __( '[Edit]', 'cyg' ), '<span class="edit-link">', '</span>' ); ?>
</article>
<?php endwhile; // End the loop. Whew. ?> 
</div>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>

<div class="clear"></div>
<div class="inside-contact">
<p>内训咨询及获取任一课程详细信息：</p>
<p class="tel">Tel: 021-63809913</p>
<p class="email">Email: <a href="mailto:Service@ScrumChina.com">Service@ScrumChina.com</a></p>
</div>
</div>
<?php get_sidebar('blog');?>
<div class="clear"></div>
</div>
</div>
<!-- #content -->
