<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package landing
 */

get_header();
$postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; 
?>

<main>
	<section class="banner-pages">
        <div class="avarta"><img src="<?php echo __BASE_URL__ ?>/images/banner-page.png" class="img-fluid w-100"></div>
    </section>
    <section class="blog-detail">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8">
    				<div class="content-detail">
    					<div class="info-detail-blog">
    						<h1><?php the_title() ?></h1>
    						<div class="date-share">
    							<div class="row">
    								<div class="col-md-6">
    									<div class="date">
    										<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M7.5 0C3.36457 0 0 3.36457 0 7.5C0 11.6354 3.36457 15 7.5 15C11.6354 15 15 11.6354 15 7.5C15 3.36457 11.6354 0 7.5 0ZM7.5 14.0625C3.88137 14.0625 0.937504 11.1186 0.937504 7.5C0.937504 3.88137 3.88137 0.937504 7.5 0.937504C11.1186 0.937504 14.0625 3.88137 14.0625 7.5C14.0625 11.1186 11.1186 14.0625 7.5 14.0625V14.0625Z" fill="#E18C44"/>
												<path d="M7.96875 2.8125H7.03125V7.69408L9.98107 10.6439L10.6439 9.98107L7.96875 7.3059V2.8125Z" fill="#E18C44"/>
											</svg>
											<span><?php echo get_the_date() ?></span>
    									</div>
    								</div>
    								<div class="col-md-6"> 
    									<div class="share-blog">
    										<ul class="list-inline text-right">
    											<li class="list-inline-item"><span>Share</span></li>
    											<li class="list-inline-item"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" target="_blank">
    												<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22Z" fill="#3B5998"/>
														<path d="M13.7653 11.4308H11.8025V18.6216H8.82867V11.4308H7.41431V8.90363H8.82867V7.26827C8.82867 6.09882 9.38418 4.26758 11.829 4.26758L14.0318 4.27679V6.72982H12.4335C12.1713 6.72982 11.8027 6.86081 11.8027 7.41867V8.90598H14.0251L13.7653 11.4308Z" fill="white"/>
													</svg>
    											</a></li>
    											<li class="list-inline-item"><a href="">
    												<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g clip-path="url(#clip0_1340_3669)">
														<path d="M11.0009 21.9998C17.076 21.9998 22.0008 17.075 22.0008 10.9999C22.0008 4.92482 17.076 0 11.0009 0C4.9258 0 0.000976562 4.92482 0.000976562 10.9999C0.000976562 17.075 4.9258 21.9998 11.0009 21.9998Z" fill="#55ACEE"/>
														<path d="M17.738 7.90534C17.2666 8.11436 16.7595 8.25574 16.2278 8.31888C16.7707 7.99358 17.1874 7.47886 17.3841 6.86453C16.876 7.16591 16.3131 7.38454 15.7144 7.50239C15.2348 6.99159 14.5514 6.67236 13.7948 6.67236C12.343 6.67236 11.1655 7.84985 11.1655 9.30165C11.1655 9.50773 11.1888 9.70833 11.2339 9.90088C9.04875 9.79127 7.11125 8.74458 5.81435 7.15336C5.58807 7.5416 5.45826 7.99358 5.45826 8.47535C5.45826 9.38734 5.92278 10.1925 6.6279 10.6638C6.1971 10.6503 5.79141 10.5321 5.43708 10.3346C5.43689 10.3458 5.43689 10.357 5.43689 10.368C5.43689 11.6419 6.34358 12.7045 7.54616 12.9459C7.32576 13.0063 7.09301 13.0382 6.85359 13.0382C6.68378 13.0382 6.51927 13.0219 6.35887 12.9914C6.69339 14.0357 7.6642 14.7959 8.81502 14.8173C7.91499 15.5226 6.78143 15.9428 5.54924 15.9428C5.33747 15.9428 5.12766 15.9305 4.92236 15.9059C6.08534 16.6522 7.46773 17.0873 8.95247 17.0873C13.7887 17.0873 16.4335 13.081 16.4335 9.60617C16.4335 9.49224 16.4309 9.37871 16.4258 9.26616C16.9399 8.89556 17.3856 8.43261 17.738 7.90534Z" fill="#F1F2F2"/>
														</g>
														<defs>
														<clipPath id="clip0_1340_3669">
														<rect width="22" height="22" fill="white"/>
														</clipPath>
														</defs>
													</svg>
    											</a></li>
    										</ul>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    					<div class="info-detail">
    						<?php the_content() ?>
    					</div>
    				</div>

    				<div class="post-other">
    					<div class="row">
    						<div class="col-md-6">
    							<div class="item-post-other">
    								<h3><a href="">Vật dụng thường ngày trở nên tiện ích hơn nhờ năng lượng mặt trời</a></h3>
    								<div class="link-other-post">
    									<a href="">
    										<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_322_150)">
												<path d="M11.4545 5.45453L1.86229 5.45453L3.65844 3.65839C3.87145 3.44541 3.87145 3.10002 3.65844 2.88701C3.55193 2.78053 3.41233 2.72726 3.27273 2.72726C3.13313 2.72726 2.99353 2.78053 2.88705 2.88704L0.159782 5.61431C-0.0532367 5.8273 -0.0532367 6.17268 0.159782 6.3857L2.88705 9.11297C3.10004 9.32595 3.44542 9.32595 3.65844 9.11297C3.87145 8.89999 3.87145 8.5546 3.65844 8.34159L1.86229 6.54544L11.4545 6.54544C11.7558 6.54544 12 6.30122 12 5.99999C12 5.69875 11.7558 5.45453 11.4545 5.45453Z" fill="#555555"/>
												</g>
												<defs>
												<clipPath id="clip0_322_150">
												<rect width="12" height="12" fill="white" transform="translate(12 12) rotate(-180)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Previous post</span>
    									</a>
    								</div>
    							</div>
    						</div>
    						<div class="col-md-6">
    							<div class="item-post-other">
    								<h3><a href="">Xu hướng lắp đặt năng lượng mặt trời cho các công trình công cộng</a></h3>
    								<div class="link-other-post">
    									<a href="">
    										<span>Next post</span>
    										<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1340_3657)">
												<path d="M0.545455 6.54544L10.1377 6.54544L8.34156 8.34158C8.12855 8.55456 8.12855 8.89994 8.34156 9.11296C8.44807 9.21944 8.58767 9.27271 8.72727 9.27271C8.86687 9.27271 9.00647 9.21944 9.11295 9.11293L11.8402 6.38565C12.0532 6.17267 12.0532 5.82729 11.8402 5.61427L9.11295 2.887C8.89996 2.67402 8.55458 2.67402 8.34156 2.887C8.12855 3.09998 8.12855 3.44536 8.34156 3.65838L10.1377 5.45453L0.545455 5.45453C0.244218 5.45453 0 5.69875 0 5.99998C0 6.30122 0.244218 6.54544 0.545455 6.54544Z" fill="#555555"/>
												</g>
												<defs>
												<clipPath id="clip0_1340_3657">
												<rect width="12" height="12" fill="white"/>
												</clipPath>
												</defs>
											</svg>
    									</a>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="side-bar">
    					<div class="other-news">
    						<div class="title-other">Recent post</div>
    						<div class="list-news-other">

							<?php 
								$categories = get_the_category(get_the_ID());
			                    $args_nb=array(
			                        'post_type' => 'post',
			                        'post__not_in' => array(get_the_ID()),
			                        'orderby'   => 'rand',
			                        'order'     => 'DESC',
			                        'posts_per_page' => 5,
			                    );   
			                    $my_query_nb = new wp_query($args_nb);
			                ?>
			                <?php if ( $my_query_nb->have_posts() ): ?>
			                    <?php while ($my_query_nb->have_posts()):$my_query_nb->the_post(); ?>
			                    	<div class="item-other">
	    								<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="img-fluid w-100"></a></div>
	    								<div class="info">
	    									<h4><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h4>
	    								</div>
    								</div>
			                    <?php endwhile ?>
			                <?php endif;wp_reset_query(); ?>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
</main>

<?php
get_footer();
