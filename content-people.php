<div class="event-card margins">
    <article id="post-<?php the_ID(); ?>" <?php post_class('post_text'); ?>>
        <div class="post-thumbnail">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
        </div>

		<div class="post-title">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>

				<div class="event-field">
                        <h3>Biography:</h3>
                        <p><?php echo get_field('bio'); ?></p>
                    </div>