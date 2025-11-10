<?php

/*Template Name: ΥΠΗΡΕΣΙΕΣ*/
get_header(); 

$services_query = new WP_Query(array(
    'post_type' => 'service',
    'posts_per_page' => -1 
));



?>
    <h1 class="mt-3 text-center">Οι Υπηρεσίες μας</h1>
    <div style="height: 5px; background-color: black; width: 40%; margin: auto;"></div>

    <div class="services-container text-center">
        <div class="services-row">
            <?php if($services_query -> have_posts()) :
                    while($services_query -> have_posts()) : $services_query -> the_post();
                        $service_details = get_field('service_details')?>
            <div class="col-3 services-box d-flex flex-column align-items-center justify-content-center text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/lightbulb.png" alt="Λάμπα" class="lightbulb">
                <h1><?php the_title();?></h1>
                <p><?php echo esc_html($service_details);?></p>
            </div>
            
            <?php endwhile; endif;?>
        
        </div>
    </div>

<?php


get_footer(); 
?>