<div class="event-card margins">
    <article id="post-<?php the_ID(); ?>" <?php post_class('post_text'); ?>>
        <div class="post-thumbnail">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
        </div>
        <div class="post-content">
            <p>
                <div class="post-title">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
                <div class="event-details">
                    <div class="event-field">
                        <h3>Start Date:</h3>
                      
                        <?php 
                       echo  date('jS F Y',strtotime( get_field('start_date'))); ?>
                    </div>
                    <div class="event-field">
                        <h3>End Date:</h3>
                        <p><?php echo date('jS F Y',strtotime( get_field('end_date')));?></p>
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
                        <?php $link=get_field('buy_ticket'); ?>
                        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                    </div>
                </div>
            </p>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>

