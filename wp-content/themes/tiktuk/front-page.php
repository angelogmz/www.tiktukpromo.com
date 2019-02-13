<?php
/* Template Name: Front page */ 
?>
<?php get_header(); ?>

<main role="main">
    <!-- section -->

<div class="home-search-bar">
    <div class="d-none">
        <div class="home-search"> <?php get_template_part('searchform'); ?></div>
    </div>
    <div class="col-10 offset-1 col-sm-12 offset-sm-0 col-lg-6 offset-lg-3">
        <form class="search-dropdown-form">
        <div class="search-select-wrap">
            <div class="search-select-box">
                <?php wp_dropdown_categories( 'show_count=1&hierarchical=1&value_field=slug&id=filter-cat&show_option_none=Choose a category' ); ?>
            </div>
            <div class="search-select-box" id="tag-dropdown">
                <?php wp_dropdown_categories( 'taxonomy=post_tag&id=filter-tag&value_field=slug' ); ?>
            </div>            
            <div class="search-select-box">
                <button id="filter-submit" type="submit" form="form1" value="Submit">Quick search</button>
            </div>            
        </div>
        </form>
    </div>
</div>


<div class="container">
    <div class="container-inner-wrap">
        <div class="col-12 col-sm-12 col-lg-8">

    <div class="posts-loop">
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
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'front-size'); 
                $featured_img_url = $featured_img_url ?: get_template_directory_uri() .'/img/sample-320-240.jpg';

                $postPerma = get_the_permalink();
                $posttitle = get_the_title();
                $posttags = get_the_tags();
                $categories = get_the_category();
                ?> 

                <div class="post-thumbnail">
                    <a href="<?php echo $postPerma; ?>"><img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>"/></a>
                </div>
                <div class="post-text">
                    <div class="content">    
                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <div class="item-details">
                        <?php
                            if ($posttags) {
                        ?>   
                        <div class="tags-list">
                            <?php
                                foreach($posttags as $tag) {
                                    echo $tag->name . ' ';
                                }
                            ?>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="cat-list">
                        <?php
                            if ( ! empty( $categories ) ) {
                            echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                            }
                        ?>
                        </div>


                        </div>
                        

                        <?php html5wp_excerpt('html5wp_index'); ?>
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

    </div>


    </div>

    <div class="feat-ads col-lg-3 col-md-12 col-sm-12">
        <?php get_template_part( 'page-includes/comp', 'feat-ads' ); ?>
    </div>

    </div>
    
        
</div>


</main>


<?php get_footer(); ?>

