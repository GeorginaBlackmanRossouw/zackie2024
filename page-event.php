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


			<div class="people-grid">
    <?php
    $args = array(
        'post_type'      => 'event',
        'posts_per_page' => -1,
    );
    $the_query = new WP_Query($args);
    // The Loop
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            ?>
            <div class="event-card">
                <div class="post-thumbnail">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                </div>
                <div class="post-content">
                    <div class="post-title">
                        <h1><?php echo get_the_title(); ?></h1>
                    </div>
                    <div class="event-details">
                        <div class="event-field">
                            <h3>Start Date:</h3>
                            <?php echo date('jS F Y', strtotime(get_field('start_date'))); ?>
                        </div>
                        <div class="event-field">
                            <h3>End Date:</h3>
                            <p><?php echo date('jS F Y', strtotime(get_field('end_date'))); ?></p>
                        </div>
                        <div class="event-field">
                            <h3>Time:</h3>
                            <p><?php echo get_field('time'); ?></p>
                        </div>
                        <div class="event-field">
                            <h3>Location:</h3>
                            <p><?php echo get_field('location'); ?></p>
                        </div>
                        <div class="event-field">
                            <h3>Description:</h3>
                            <p><?php echo get_field('description'); ?></p>
                        </div>
                        <div class="event-field">
                            <?php $link = get_field('buy_ticket'); ?>
                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    wp_reset_postdata();
    ?>
</div>






			
		</article><!-- #post-<?php the_ID(); ?> -->



		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
