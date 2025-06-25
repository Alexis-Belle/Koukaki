
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
                <div class="main-character">
                    <h3>Les personnages</h3>
                    <swiper-container class="characters-swiper" slides-per-view="auto" centered-slides="true" effect="coverflow" 
                    loop="true" space-between="50" navigation="true" pagination="false" grab-cursor="true">
                        <?php while ( $characters_query->have_posts() ) : $characters_query->the_post(); ?>
                            <swiper-slide>
                            <figure>
                                <?php the_post_thumbnail( 'medium' ); ?>
                                <figcaption class="perso-name"><?php the_title(); ?></figcaption>
                            </figure>
                            </swiper-slide>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </swiper-container>
                </div>