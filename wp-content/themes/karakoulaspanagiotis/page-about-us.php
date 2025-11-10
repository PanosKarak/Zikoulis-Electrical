<?php

/*Template Name: ΣΧΕΤΙΚΑ ΜΕ ΕΜΑΣ*/
get_header(); 

$aboutuses_query = new WP_Query(array(
    'post_type' => 'aboutus',
    'posts_per_page' => -1 
));



?>
<div style="background-color: #1c1c1c;">        
    <div class="img-about-us-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/zikoulis-electrical2.png" alt="About us banner" class="img-fluid" style="object-fit: fit; width: 100%; height: 90vh; border-bottom: 5px solid white;">
    </div>
                    <?php if($aboutuses_query -> have_posts()) : ?>
    <div class="about-us-container d-flex flex-wrap align-items-center justify-content-between">
                        <?php while($aboutuses_query -> have_posts()) : $aboutuses_query -> the_post();
                        $aboutus_details = get_field('description') ?>
        <div class="about-us-content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="inner-container">
                <h1> <strong><?php the_title();?></strong></h1>
                <h5>Δείτε περισσότερα</h5>
                <p> <?php echo esc_html($aboutus_details);?> </p>
            </div>
        </div>
       <?php endwhile;?>
    </div>
    <?php endif;?>
</div>



<div class="row align-items-center justify-content-center text-center mb-6" id="second-row">
        <h1 >Κύρια χαρακτηριστικά μας</h1>
        <hr class="hr-class" color="white" size="3px">
    <div class="col-lg-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/needsicon.png" alt="characteristics" class="bd-placeholder-img rounded-circle" height="140" width="140" style="object-fit: cover;">
        <h2 class="fw-normal">Κατανόηση & αντίληψη</h2>
        <p>Αφουγκραζόμαστε τις ανάγκες σας και προσφέρουμε προσαρμοσμένες λύσεις ακόμα και στα πιο απαιτητικά έργα.</p>
        
    </div>
    <div class="col-lg-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/speedicon1.png" alt="characteristics" class="bd-placeholder-img rounded-circle" height="140" width="140" style="object-fit: cover;">
        <h2 class="fw-normal">Ταχύτητα & Συνέπεια</h2>
        <p>Ολοκληρώνουμε κάθε έργο γρήγορα και αποτελεσματικά, τηρώντας τα συμφωνημένα χρονοδιαγράμματα.</p>
        
    </div>
    <div class="col-lg-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/qualityicon1.png" alt="characteristics" class="bd-placeholder-img rounded-circle" height="140" width="140" style="object-fit: cover;">
        <h2 class="fw-normal">Υψηλή Ποιότητα Κατασκευής</h2>
        <p>Κάθε έργο υλοποιείται με προσοχή στη λεπτομέρεια και με βάση την πολυετή εμπειρία και την τεχνική μας κατάρτιση.</p>
        
    </div>
    <div class="col-lg-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/reliabilityicon2.png" alt="characteristics" class="bd-placeholder-img rounded-circle" height="140" width="140" style="object-fit: cover;">
        <h2 class="fw-normal">Αξιοπιστία & Ασφάλεια</h2>
        <p>Δίνουμε προτεραιότητα στην ασφάλεια, τη σωστή λειτουργία και τη μακροχρόνια αξιοπιστία κάθε εγκατάστασης.</p>
        
    </div>
    <div class="col-lg-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/moneyicon.png" alt="characteristics" class="bd-placeholder-img rounded-circle" height="140" width="140" style="object-fit: cover;">
        <h2 class="fw-normal">Ανταγωνιστικό Κόστος</h2>
        <p>Παρέχουμε υπηρεσίες υψηλής ποιότητας, συνδυάζοντας τεχνογνωσία και οικονομική αποδοτικότητα.</p>
        
    </div>
</div>

<?php 

get_footer(); 

?>