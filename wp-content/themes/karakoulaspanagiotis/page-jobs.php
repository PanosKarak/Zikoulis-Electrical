<?php

/*Template Name: ΔΟΥΛΕΙΕΣ ΜΑΣ*/
get_header(); 

//Φέρνουμε όλα τα posts από το custom post type 'work'
$works_query = new WP_Query(array(
    'post_type' => 'work',
    'posts_per_page' => -1 
));

if($works_query -> have_posts()) :
    while($works_query -> have_posts()) : $works_query -> the_post();

$work_frontal = get_field('work_details_frontal');
$work_photo = get_field('work_photo');
$work_photo_url = is_array($work_photo) ? $work_photo['url'] : $work_photo;

?>
<
<div class="hero-section text-center" style="background-image: url('<?php echo esc_url($work_photo_url);?>');">
    <div class="content">
        <h1 class="display-5 fw-bold text-white"><?php the_title();?></h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4"><?php echo esc_html($work_frontal);?></p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="<?php echo get_permalink(); ?>"><button type="button" class="btn-lg px-4 me-md-2 fw-bold info-button">Περισσότερα</button></a>
            </div>
        </div>
    </div>
</div>



<?php 
    endwhile;
endif;
get_footer(); ?>