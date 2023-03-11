<?php
/**
 * Template part for displaying explore section
 *
 * @package Tourism Guide
 * @subpackage tourism_guide
 */
?>

<section id="travel-offer">
  <div class="container">
    <div class="cat-box">
      <div class="row">
        <?php
          $post_category = get_theme_mod('tourism_guide_explore_section_category');
          if($post_category){
            $page_query = new WP_Query(array( 'category_name' => esc_html( $post_category ,'tourism-guide')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="cat-inner-box mb-3">
                  <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                  <div class="offer-box p-3">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          }
        ?>
      </div>
    </div>
  </div>
</section>