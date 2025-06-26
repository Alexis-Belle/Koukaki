
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
                    <swiper-container class="characters-swiper" slides-per-view="auto" slides-per-group="1" centered-slides="true" 
                    loop="true" space-between="0" navigation="false" pagination="false" grab-cursor="false">

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