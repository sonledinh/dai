<?php /* Template Name: faq */ ?>
<?php get_header(); ?> 
<main>
    <section class="banner-pages">
        <div class="avarta"><img src="<?php echo __BASE_URL__ ?>/images/banner-page.png" class="img-fluid w-100"></div>
    </section>
    <section class="faq-page">
        <div class="container">
            <div class="title text-center">
                <h2><?php the_field('title') ?></h2>
                <div class="desc">
                    <?php the_field('desc_quess') ?>
                </div>
            </div>
            <div class="content-faq">
                <div class="row">
                    <div class="col-md-4">
                        <div class="side-bar-faq">
                            <div class="tab-faq">
                                <ul>
                                    <li><a href="javascript:void(0)" class="active" data-tab="tab-coll-1">About USAID Vietnam Urban Energy Security</a></li>
                                    <li><a href="javascript:void(0)" data-tab="tab-coll-2">About the Innovation Challenge Fund</a></li>
                                    <li><a href="javascript:void(0)" data-tab="tab-coll-3">About the Innovation Challenge Fund Selection Process</a></li>
                                    <li><a href="javascript:void(0)" data-tab="tab-coll-4">About submitting an Expression of Interest (EOI) or Request for Proposal (RFP), and Award Management</a></li>
                                    <li><a href="javascript:void(0)" data-tab="tab-coll-5">More information</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content-faq-tab active" id="tab-coll-1">
                            <div class="title-tab-faq">
                                <h3><?php the_field('title_quess_1') ?></h3>
                            </div>
                            <div class="list-colls">
                                <div id="accordion_1">
                                    <?php 
                                    $num_1_1 = 1;
                                    $num_1_2 = 1;
                                    $num_1_3 = 1;
                                    $num_1_4 = 1;
                                    $num_1_5 = 1;
                                    $num_coll_1 = 1;
                                     ?>
                                    <?php while ( has_sub_field('list_quess_1' ) ) : ?>
                                        <div class="item-coll">
                                            <div class="head-coll" id="heading-<?php echo $num_1_1++ ?>-1">
                                                <a href="javascript:void(0)" class="<?php echo $num_1_2 == 1 ? null : 'collapsed'; ?>" data-toggle="collapse" data-target="#collapse-<?php echo $num_1_2++ ?>-1" aria-expanded="true" aria-controls="collapse-<?php echo $num_1_3++ ?>-1"><?php echo $num_coll_1++ ?>. <?php the_sub_field('cauhoi_1') ?></a>
                                            </div>
                                            <div id="collapse-<?php echo $num_1_4++ ?>-1" class="collapse <?php echo $num_1_2 == 2 ? 'show' : null; ?> " aria-labelledby="heading-<?php echo $num_1_5++ ?>-1" data-parent="#accordion_1">
                                                <div class="body-coll">
                                                    <?php the_sub_field('traloi_1') ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div> 
                        </div>
                        <div class="content-faq-tab" id="tab-coll-2">
                            <div class="title-tab-faq">
                                <h3>About the Innovation Challenge Fund</h3>
                            </div>
                            <div class="list-colls">
                                <div id="accordion_2">
                                    <?php 
                                    $num_2_1 = 1;
                                    $num_2_2 = 1;
                                    $num_2_3 = 1;
                                    $num_2_4 = 1;
                                    $num_2_5 = 1;
                                    $num_coll_2 = 1;
                                     ?>
                                    <?php while ( has_sub_field('list_quess_2' ) ) : ?>
                                        <div class="item-coll">
                                            <div class="head-coll" id="heading-<?php echo $num_2_1++ ?>-2">
                                                <a href="javascript:void(0)" class="<?php echo $num_2_2 == 1 ? null : 'collapsed'; ?>" data-toggle="collapse" data-target="#collapse-<?php echo $num_2_2++ ?>-2" aria-expanded="true" aria-controls="collapse-<?php echo $num_2_3++ ?>-2"><?php echo $num_coll_2++ ?>. <?php the_sub_field('cauhoi_1') ?></a>
                                            </div>
                                            <div id="collapse-<?php echo $num_2_4++ ?>-2" class="collapse <?php echo $num_2_2 == 2 ? 'show' : null; ?> " aria-labelledby="heading-<?php echo $num_2_5++ ?>-2" data-parent="#accordion_2">
                                                <div class="body-coll">
                                                    <?php the_sub_field('traloi_1') ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div> 
                        </div>
                        <div class="content-faq-tab" id="tab-coll-3">
                            <div class="title-tab-faq">
                                <h3>About the Innovation Challenge Fund</h3>
                            </div>
                            <div class="list-colls">
                                <div id="accordion_3">
                                    <?php 
                                    $num_3_1 = 1;
                                    $num_3_2 = 1;
                                    $num_3_3 = 1;
                                    $num_3_4 = 1;
                                    $num_3_5 = 1;
                                    $num_coll_3 = 1;
                                     ?>
                                    <?php while ( has_sub_field('list_quess_3' ) ) : ?>
                                        <div class="item-coll">
                                            <div class="head-coll" id="heading-<?php echo $num_3_1++ ?>-2">
                                                <a href="javascript:void(0)" class="<?php echo $num_3_2 == 1 ? null : 'collapsed'; ?>" data-toggle="collapse" data-target="#collapse-<?php echo $num_3_2++ ?>-2" aria-expanded="true" aria-controls="collapse-<?php echo $num_3_3++ ?>-2"><?php echo $num_coll_3++ ?>. <?php the_sub_field('cauhoi_1') ?></a>
                                            </div>
                                            <div id="collapse-<?php echo $num_3_4++ ?>-2" class="collapse <?php echo $num_3_2 == 2 ? 'show' : null; ?> " aria-labelledby="heading-<?php echo $num_3_5++ ?>-2" data-parent="#accordion_3">
                                                <div class="body-coll">
                                                    <?php the_sub_field('traloi_1') ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div> 
                        </div>
                        <div class="content-faq-tab" id="tab-coll-4">
                            <div class="title-tab-faq">
                                <h3>About the Innovation Challenge Fund</h3>
                            </div>
                            <div class="list-colls">
                                <div id="accordion_4">
                                    <?php 
                                    $num_4_1 = 1;
                                    $num_4_2 = 1;
                                    $num_4_3 = 1;
                                    $num_4_4 = 1;
                                    $num_4_5 = 1;
                                    $num_coll_4 = 1;
                                     ?>
                                    <?php while ( has_sub_field('list_quess_4' ) ) : ?>
                                        <div class="item-coll">
                                            <div class="head-coll" id="heading-<?php echo $num_4_1++ ?>-4">
                                                <a href="javascript:void(0)" class="<?php echo $num_4_2 == 1 ? null : 'collapsed'; ?>" data-toggle="collapse" data-target="#collapse-<?php echo $num_4_2++ ?>-4" aria-expanded="true" aria-controls="collapse-<?php echo $num_4_3++ ?>-4"><?php echo $num_coll_4++ ?>. <?php the_sub_field('cauhoi_1') ?></a>
                                            </div>
                                            <div id="collapse-<?php echo $num_4_4++ ?>-4" class="collapse <?php echo $num_4_2 == 2 ? 'show' : null; ?> " aria-labelledby="heading-<?php echo $num_4_5++ ?>-4" data-parent="#accordion_4">
                                                <div class="body-coll">
                                                    <?php the_sub_field('traloi_1') ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div> 
                        </div>
                        <div class="content-faq-tab" id="tab-coll-5">
                            <div class="title-tab-faq">
                                <h3>About the Innovation Challenge Fund</h3>
                            </div>
                            <div class="list-colls">
                                <div id="accordion_4">
                                    <?php 
                                    $num_5_1 = 1;
                                    $num_5_2 = 1;
                                    $num_5_3 = 1;
                                    $num_5_4 = 1;
                                    $num_5_5 = 1;
                                    $num_coll_5 = 1;
                                     ?>
                                    <?php while ( has_sub_field('list_quess_5' ) ) : ?>
                                        <div class="item-coll">
                                            <div class="head-coll" id="heading-<?php echo $num_5_1++ ?>-5">
                                                <a href="javascript:void(0)" class="<?php echo $num_5_2 == 1 ? null : 'collapsed'; ?>" data-toggle="collapse" data-target="#collapse-<?php echo $num_5_2++ ?>-5" aria-expanded="true" aria-controls="collapse-<?php echo $num_5_3++ ?>-5"><?php echo $num_coll_5++ ?>. <?php the_sub_field('cauhoi_1') ?></a>
                                            </div>
                                            <div id="collapse-<?php echo $num_5_4++ ?>-5" class="collapse <?php echo $num_5_2 == 2 ? 'show' : null; ?> " aria-labelledby="heading-<?php echo $num_5_5++ ?>-5" data-parent="#accordion_5">
                                                <div class="body-coll">
                                                    <?php the_sub_field('traloi_1') ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>  