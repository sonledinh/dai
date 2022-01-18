<?php /* Template Name: Tin tức */ ?>
<?php get_header(); ?> 
<main>
    <section class="banner-pages">
        <div class="avarta"><img src="<?php echo __BASE_URL__ ?>/images/banner-page.png" class="img-fluid w-100"></div>
    </section>
    <section class="box-news-page">
        <div class="container">
            <div class="title text-center">
                <h2>Blogs</h2>
            </div>
            <div class="list-blog">
                <div class="row">
                    <?php 
                        $args=array(
                            'post_type' => 'post',
                            'orderby'   => 'publish_date', 
                            'order'     => 'DESC',
                            'paged'     => get_query_var('paged') ? get_query_var('paged') : 1,
                            'posts_per_page' => 9,
                        );
                        $my_query = new wp_query($args);
                        $max_num_pages = $my_query->max_num_pages;
                    ?>

                    <?php if ( $my_query->have_posts() ): ?>
                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
                            <div class="col-md-4">
                                <div class="item-blog">
                                    <div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
                                    <div class="info">
                                        <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                        <div class="desc">
                                            <?php the_field('desc_post') ?>
                                        </div>
                                        <div class="more-link text-uppercase">
                                            <a href="<?php echo get_the_permalink() ?>">
                                                <span>đọc thêm</span>
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.454545 5.45476H8.44809L6.9513 6.95155C6.77379 7.12903 6.77379 7.41685 6.9513 7.59437C7.04006 7.68309 7.15639 7.72749 7.27273 7.72749C7.38906 7.72749 7.50539 7.68309 7.59412 7.59434L9.86685 5.32161C10.0444 5.14412 10.0444 4.85631 9.86685 4.67879L7.59412 2.40606C7.41664 2.22858 7.12882 2.22858 6.9513 2.40606C6.77379 2.58355 6.77379 2.87137 6.9513 3.04888L8.44809 4.54567H0.454545C0.203515 4.54567 0 4.74918 0 5.00021C0 5.25124 0.203515 5.45476 0.454545 5.45476Z" fill="#333333"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile ?>
                    <?php endif;wp_reset_query(); ?>

                    <div class="col-md-12">
                        <div class="pagination w-100">
                                <?php 
                                    $total_pages = $my_query->max_num_pages;
                                    if ($total_pages > 1){
                                        $current_page = max(1, get_query_var('paged'));
                                        echo paginate_links(array(
                                            'base' => get_pagenum_link(1) . '%_%',
                                            'current' => $current_page,
                                            'total' => $total_pages,
                                            'prev_text' => '&larr;',
                                            'next_text' => '&rarr;',
                                            'type' => 'list'
                                        ));
                                    }
                                ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>  