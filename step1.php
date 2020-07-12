
            <div class="container_homepage_events_title text-center double_margin_bottom">
                <code><h2></code><h2>Upcoming Events</h2>   <code></h2></code>
            </div>
            <div id="eventcarousel" class="owl-carousel">
            <?php $args	=	array( 'post_type'=> 'events', 'order' => 'ASC');
                query_posts( $args );
              xxx  global $posts;
                while( have_posts() ) : the_post();
                $featured_image = get_featured_image_url(get_the_ID(),"medium");
                $eventbrite_link = get_field("eventbrite_link");
                ?>
                <div class="item">
                    <div class="container_homepage_event text-center">
                        <div class="event_img">
                            "hi there" 'how are you'
                            xxx
                            <!-- TESTING THIS -->
                            <img src="<?php echo $featured_image; ?>">
                        </div>
                        <div class="event_btn text-center margin_top">
                            <a href="<?php echo $eventbrite_link; ?>" target="_blank">Discover</a>
                        </div>
                    </div>
                </div>
              <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
