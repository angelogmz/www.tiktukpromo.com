<section>
        <?php 

        $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

        $query_args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'paged' => $paged,
            'page' => $paged
            );

        $the_query = new WP_Query( $query_args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="posts-item">

                <?php
                $featured_img_url = get_the_post_thumbnail_url('full'); 
                $featured_img_url = $featured_img_url ?: get_template_directory_uri() .'/img/sample-320-240.jpg';

                $postPerma = get_the_permalink();
                $posttitle = get_the_title();
                $posttags = get_the_tags();
                $categories = get_the_category();
                ?> 

                <div class="post-thumbnail">
                    <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>"/>
                </div>
                <div class="post-text">
                    <div class="content">    
                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <?php
                            if ($posttags) {
                            foreach($posttags as $tag) {
                                echo $tag->name . ' ';
                            }
                            }

                            if ( ! empty( $categories ) ) {
                            echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                            }
                        ?>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <!-- pagination here -->
            <?php
                if ( function_exists( 'custom_pagination' ) ) {
                custom_pagination($the_query->max_num_pages,"",$paged);
            }
            ?>

        <?php wp_reset_postdata(); ?>

        <?php else:  ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </section>