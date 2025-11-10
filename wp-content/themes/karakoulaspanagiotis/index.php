<?php get_header(); ?>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators"> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4" class=""></button> </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/images/camera.webp" class="carousel-item-img " alt="">
                                <div class="cont">
                    <div class="carousel-caption text-center">
                        <h1><strong>ΣΥΣΤΗΜΑΤΑ ΑΣΦΑΛΕΙΑΣ</strong></h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sxedia.webp" class="carousel-item-img " alt="">
                <div class="cont">
                    <div class="carousel-caption text-center">
                        <h1><strong>ΠΙΣΤΟΠΟΙΗΤΙΚΑ ΔΕΗ</strong></h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pinakas.jpg" class="carousel-item-img " alt="">
                <div class="cont">
                    <div class="carousel-caption text-center">
                        <h1><strong>ΗΛΕΚΤΡΟΛΟΓΙΚΕΣ ΕΓΚΑΤΑΣΤΑΣΕΙΣ</strong></h1>
                    </div>
                </div>
            </div>
                        <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/smart-home.webp" class="carousel-item-img " alt="">
                <div class="cont">
                    <div class="carousel-caption text-center">
                        <h1><strong>ΕΞΥΠΝΟ ΣΠΙΤΙ</strong></h1>
                    </div>
                </div>
            </div>
        </div> 
    </div>

<div class="container-fluid my-5">
    <div class="row justify-content-around">
        
        <div class="col-12 col-md-5 project-card">
            <div class="p-5 rounded-3 shadow-lg project-card-inner" 
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/picture1.jpg'); 
                        background-size: cover; 
                        background-position: center;">
                <div class="project-card-text text-white">
                    <h1 class="display-4 fw-bold lh-1 info-text">Τα έργα μας</h1>
                    <p class="lead info-text">Δείτε κάποιες πρόσφατες δουλειές μας</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a href="http://localhost/Zikoulis-Electrical/wordpress/our-jobs/"><button type="button" class="btn-lg px-4 me-md-2 fw-bold info-button">Δείτε περισσότερα</button> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-5 project-card">
            <div class="p-5 rounded-3 shadow-lg project-card-inner" 
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/picture2.jpg'); 
                        background-size: cover; 
                        background-position: center;">
                <div class="project-card-text text-white">
                    <h1 class="display-4 fw-bold lh-1 info-text">Οι Υπηρεσίες μας</h1>
                    <p class="lead info-text"><strong>Δείτε κάποιες ενδεικτικές υπηρεσίες που προσφέρουμε</strong></p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a href="http://localhost/Zikoulis-Electrical/wordpress/our-services/"><button type="button" class="btn-lg px-4 me-md-2 fw-bold info-button"><strong>Δείτε περισσότερα</strong></button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

<?php get_footer(); ?>