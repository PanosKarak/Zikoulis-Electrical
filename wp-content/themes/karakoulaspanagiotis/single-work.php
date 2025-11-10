<?php

get_header(); 

if(have_posts()) : 
    while( have_posts()) : the_post();

$work_description = get_field('work_description');
$work_photos = get_field('work_photos');
if($work_photos) :


?>
<div class="carousel-outter">
    <div id="carousel-single-work" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
        <div class="carousel-inner">
            <?php foreach($work_photos as $index => $photo):
                $active = ($index == 0) ? 'active' : ''; ?>
                <div class="carousel-item <?php echo esc_attr($active); ?>">
                    <img src="<?php echo esc_url($photo['url']); ?>" class="" alt="...">
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-single-work" data-bs-slide="prev">
            <span class="" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-single-work" data-bs-slide="next">
            <span class="" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
    </div>
</div>

<div class="work-text-container">
    <div class="work-desc-container text-center">
        <div class="carousel-single-work-description">
            <h1 class=""><?php the_title();?></h1>
            <div class="mb-3" style="height: 4px; background-color: #fe6601; width: 40%; margin: auto;"></div>
            <p><?php echo esc_html($work_description);?></p>
         </div>
    </div>
</div>
    


<?php
endif;
endwhile;
endif;
get_footer(); 
?>