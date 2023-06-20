<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zackie
 */

get_header();
?>

	<main id="primary" class="site-main">



		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header block block--full-width margins block--header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
<div class="people-container margins ">
    
    <div class="images-container">
        <div class="people-grid">
            <?php
            $args = array(
                'post_type'      => 'people',
                'posts_per_page' => -1,
            );
            $the_query = new WP_Query($args);
            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>
                
                    <div class="people-grid-item">
    <a href="<?php the_permalink(get_the_ID(),); ?>" >
        <?php echo get_the_post_thumbnail(get_the_ID(), 'image'); ?>
        <h3><?php echo get_the_title(); ?></h3>
      
            <span class="bio-overlay"> <!--  <?php echo get_field('bio'); ?> --> wanna learn more? Click Me</span>
       
    </a>
   
</div>
                 
                    <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>


			
		</article><!-- #post-<?php the_ID(); ?> -->



		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
