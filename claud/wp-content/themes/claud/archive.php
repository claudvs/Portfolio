<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">reorder</i>
    </a>
    <ul>
        <li>
            <a href="#start" class="btn-floating green">
                <i class="material-icons">navigation</i>
            </a>
        </li>
    </ul>
</div>
	<?php 

	$member_terms = get_the_terms($post_id,'project-type'); 
    //if we have member terms assigned to this post
    if($member_terms){ 
        foreach($member_terms as $term){
            //collect term information and display it
            $term_name = $term->name;
         	if ($term_name == 'Frontend') {
            	include (TEMPLATEPATH. '/slideshow.php');
            }
            if ($term_name == 'Web Design') {
            	include (TEMPLATEPATH. '/slideshowDesign.php');
            }
                
        }
    }
	


	?>

	<section id="primary" class="archive-content">
		<main id="main" class="" role="main">

		<?php if ( have_posts() ) : ?>
<!--
			<header class="page-header">
				 <?php display_member_taxonomy_terms($post->ID); ?> 
			</header> .page-header -->
			<div class="row content-articles">
				
			
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				?>

		 
					
				
				<?php
				get_template_part( 'content', get_post_format() );?>
			 
				<?php

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
</div>
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
