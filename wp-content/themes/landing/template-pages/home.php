<?php /* Template Name: Trang chủ */ ?>
<?php get_header(); ?> 
<main>
    <section class="box-banner">
        <div class="slide-banner">
            <div class="item-slide">
                <div class="item-banner"><img src="<?php echo get_field('avr_banner')['url'] ?>" class="img-fluid w-100" alt=""></div>
            </div>
        </div>
    </section>
    <section class="box-about">
        <div class="container">
            <div class="title text-center">
                <h2><?php the_field('title_ab') ?></h2>
            </div>
            <div class="txt-about text-center">
                <?php the_field('desc_about') ?>
            </div>
            <div class="video-about">
                <div class="avar-video"><img src="<?php echo get_field('avr_video')['url'] ?>" class="img-fluid w-100" alt=""></div>
                <div class="icon-video text-center"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal-video"><img src="<?php echo __BASE_URL__ ?>/images/play.png" class="img-fluid" alt=""></a></div>

                <div class="modal fade modal-popup" id="myModal-video">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="content-popup-video">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="iframe-video">
                                        <iframe width="1280" height="536" src="https://www.youtube.com/embed/UVbv-PJXm14" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <section class="box-linhvuc">
        <div class="container">
            <div class="list-linhvuc">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="txt-linhvuc text-right">
                            <div class="abs-lv"><img src="<?php echo __BASE_URL__ ?>/images/abs-1.png" class="img-fluid" alt=""></div>
                            <div class="inc-txt-lv">
                                <div class="title"><h2><?php the_field('title_lv') ?></h2></div>
                                <div class="desc">
                                    <?php the_field('desc_title_lv') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php while ( has_sub_field('list_linhvuc' ) ) : ?>
                        <div class="col-md-4 col-sm-4">
                            <div class="item-linhvuc">
                                <div class="avarta"><img src="<?php echo get_sub_field( 'avr_lv' )['url']; ?>" class="img-fluid w-100" alt=""></div>
                                <div class="info text-center">
                                    <h3><a href="javascript:void(0)"><?php the_sub_field( 'title_item_lv' ); ?></a></h3>
                                </div>
                                <div class="info-abs">
                                    <h3><a href="javascript:void(0)"><?php the_sub_field( 'title_item_lv' ); ?></a></h3>
                                    <div class="desc"><?php the_sub_field( 'sort_lv' ); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="box-benefit">
        <div class="container"> 
            <div class="title text-center">
                <h2><?php the_field('title_benn') ?></h2>
            </div>
            <div class="list-benef text-center">
                <div class="row">
                    <?php $count_ben = 1; ?>
                    <?php while ( has_sub_field('list_benn' ) ) : ?>
                        <div class="col-md-4">
                            <div class="item-benn">
                                <div class="icon"><img src="<?php echo __BASE_URL__ ?>/images/ben.png" class="img-fluid" alt=""><span><?php echo $count_ben++ ?></span></div>
                                <div class="info">
                                    <h3><?php the_sub_field( 'title_item_benn' ); ?></h3>
                                    <div class="desc"><?php the_sub_field( 'sort_benn' ); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="box-infopages">
        <div class="container">
            <div class="list-ctn-page">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item-inf-page item-doituong">
                            <div class="abs-lv"><img src="<?php echo __BASE_URL__ ?>/images/abs-1.png" class="img-fluid" alt=""></div>
                            <h4 class="text-center text-uppercase"><?php the_field('title_doituong') ?></h4>
                            <div class="info">
                                <?php the_field('desc_doituong') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-inf-page item-tieuchi">
                            <div class="abs-lv"><img src="<?php echo __BASE_URL__ ?>/images/abs-2.png" class="img-fluid" alt=""></div>
                            <h4 class="text-center text-uppercase"><?php the_field('title_tieuchi') ?></h4>
                            <div class="info">
                                <?php the_field('desc_tieuchi') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <section class="box-brief">
        <div class="container">
            <div class="title text-center">
                <h2><?php the_field('title_hs') ?></h2>
            </div>
            <div class="list-info-brief">
                <div class="abs-lv"><img src="<?php echo __BASE_URL__ ?>/images/abs-2.png" class="img-fluid" alt=""></div>
                <div class="tab-brief">
                    <ul>
                        <?php $count_brief = 1; ?>
                        <?php while ( has_sub_field('content_tab_hs' ) ) : ?>
                            <li data-tab="tab-<?php echo $count_brief++ ?>" class="clc-tab <?php echo $count_brief == 2 ? 'active' : null; ?>"><a href="javascript:void(0)"><?php the_sub_field( 'title_tab_hs' ); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <div class="tab-content-brief">
                    <?php $content_brief = 1; ?>
                    <?php while ( has_sub_field('content_tab_hs' ) ) : ?>
                        <div class="detail-tab content-brief <?php echo $content_brief == 1 ? 'active' : null; ?>" id="tab-<?php echo $content_brief++ ?>">
                            <ul>
                                <?php while ( has_sub_field('hs_tab' ) ) : ?>
                                    <li><?php the_sub_field( 'text_tab' ); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div> 
        </div>
    </section>
    <section class="box-step">
        <div class="bg-step"><img src="<?php echo __BASE_URL__ ?>/images/bg-step.png" class="img-fluid w-100" alt=""></div>
        <div class="container">
            <div class="title text-center">
                <h2><?php the_field('title_qtrinh') ?></h2>
            </div>
            <div class="list-step">
                <div class="numb-step-box">
                    <div class="avarta-step"><img src="<?php echo __BASE_URL__ ?>/images/step-1.png" class="img-fluid w-100" alt=""></div>
                    <div class="item-step">
                        <div class="numb-step"><span>Bước <label>1</label></span></div>
                        <div class="info">
                            <div class="desc">Dự án An ninh Năng lượng Đô thị Việt Nam sẽ đánh giá và lựa chọn các Hồ sơ đạt yêu cầu. Đơn vị không đạt yêu cầu sẽ nhận được thông báo từ chối từ Dự án. Đơn vị đạt yêu cầu sẽ được cán bộ Dự án liên hệ để bổ sung thông tin, làm rõ một số nội dung hoặc hướng dẫn thực hiện các bước tiếp theo</div>
                        </div>
                    </div>
                </div>
                <div class="numb-step-box">
                    <div class="avarta-step"><img src="<?php echo __BASE_URL__ ?>/images/step-2.png" class="img-fluid w-100" alt=""></div>
                    <div class="item-step">
                        <div class="numb-step"><span>Bước <label>2</label></span></div>
                        <div class="info">
                            <div class="desc">Dự án An ninh Năng lượng Đô thị Việt Nam sẽ đánh giá và lựa chọn các Hồ sơ đạt yêu cầu. Đơn vị không đạt yêu cầu sẽ nhận được thông báo từ chối từ Dự án. Đơn vị đạt yêu cầu sẽ được cán bộ Dự án liên hệ để bổ sung thông tin, làm rõ một số nội dung hoặc hướng dẫn thực hiện các bước tiếp theo</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-coundown text-center">
        <div class="container">
            <div class="title">
                <h2>Thời hạn đăng ký hồ sơ</h2>
            </div>
            <div class="info-count">
                <h4>17:59 (ICT) - Ngày 15/12/2021</h4>
            </div>
            <div class="count-down text-uppercase" data-countdown="2022/02/25 16:14:25"></div>
            <div class="btn-regis-count btn-main text-uppercase"><a href="">đăng ký dự thi</a></div>
            <div class="desc">
                 Further questions may be submitted in English and must be submitted electronically by no later than 6:00 PM ICT on Monday, November 15, 2021 via email to <span>VUESActivityFund@dai.com.</span>
            </div>
        </div>
    </section>
    <section class="box-project"> 
        <div class="abs-pr"><img src="<?php echo __BASE_URL__ ?>/images/abs-3.png" class="img-fluid" alt=""></div>
        <div class="container-fluid">
            <div class="title text-center">
                <h2>Các dự án nổi bật</h2>
            </div>
            <div class="slide-project">
                <div class="item-slide">
                    <div class="item-project">
                        <div class="info">
                            <div class="inf-prj">
                                <h3><a href="javascript:void(0)">Hệ thống lưu trữ năng lượng bằng pin</a></h3>
                                <div class="desc">
                                    <p>Hệ thống lưu trữ năng lượng tiên tiến;</p>
                                    <p>Khuyến khích sử dụng năng lượng hiệu quả, cân bằng đường cong phụ tải và giảm phát thải CO2;</p>
                                    <p>Có thể được ứng dụng trong nhiều lĩnh vực bao gồm lĩnh vực thương mại và công nghiệp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="avarta"><a href="javascript:void(0)"><img src="<?php echo __BASE_URL__ ?>/images/project.png" class="img-fluid w-100" alt=""></a></div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-project">
                        <div class="info">
                            <div class="inf-prj">
                                <h3><a href="javascript:void(0)">Hệ thống lưu trữ năng lượng bằng pin</a></h3>
                                <div class="desc">
                                    <p>Hệ thống lưu trữ năng lượng tiên tiến;</p>
                                    <p>Khuyến khích sử dụng năng lượng hiệu quả, cân bằng đường cong phụ tải và giảm phát thải CO2;</p>
                                    <p>Có thể được ứng dụng trong nhiều lĩnh vực bao gồm lĩnh vực thương mại và công nghiệp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="avarta"><a href="javascript:void(0)"><img src="<?php echo __BASE_URL__ ?>/images/project.png" class="img-fluid w-100" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-quesstion">
        <div class="container">
            <div class="content-quesstion">
                <div class="row">
                    <div class="col-md-7">
                        <div class="avarta"><img src="<?php echo __BASE_URL__ ?>/images/quess.png" class="img-fluid w-100" alt=""></div>
                    </div>
                    <div class="col-md-5">
                        <div class="txt-quess">
                            <div class="title">
                                <h2><?php the_field('title_quess') ?></h2>
                            </div>
                            <div class="desc"><?php the_field('sort_quess') ?></a></div>
                            <div class="btn-main"><a href="">Xem thêm</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-blog">
        <div class="container">
            <div class="title text-center">
                <h2><?php the_field('title_blog') ?></h2>
            </div>
            <div class="list-blog">
                <div class="row">
                    <?php 
                        $args=array(
                            'post_type' => 'post',
                            'orderby'   => 'publish_date', 
                            'order'     => 'DESC',
                            'paged'     => get_query_var('paged') ? get_query_var('paged') : 1,
                            'posts_per_page' => 3,
                        );
                        $my_query = new wp_query($args);
                        $max_num_pages = $my_query->max_num_pages;
                    ?>

                    <?php if ( $my_query->have_posts() ): ?>
                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
                            <div class="col-md-4 col-sm-4">
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
                        <div class="btn-main text-center"><a href="http://localhost/landing_dai/news/">Xem thêm</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>  