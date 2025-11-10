<?php

/*Template Name: ΕΠΙΚΟΙΝΩΝΙΑ*/
get_header(); 

$communications_query = new WP_Query(array(
    'post_type' => 'communication',
    'posts_per_page' => 1 
));


if($communications_query -> have_posts()) :
    while($communications_query -> have_posts()) : $communications_query -> the_post();

$communication_text = get_field('communication_text');
$communication_photo = get_field('communication_photo');
$communication_photo_url = is_array($communication_photo) ? $communication_photo['url'] : $communication_photo;
?>

<div class="row contact-banner">
    <div class="col-12 col-md-6 order-2 order-md-1 text-start d-flex flex-column justify-content-center align-items-start contact-banner-text">
        <h1 class="mb-3"><?php the_title();?></h1>
        <p class="mt-2"><?php echo esc_html($communication_text);?></p>
    </div>
    <div class="col-12 col-md-6 order-1 order-md-2">
        <img src="<?php echo esc_url($communication_photo_url);?>" alt="Contact Banner" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
    </div>
</div>

<?php endwhile; endif;?>

<div class="contact-container d-flex flex-column align-items-center justify-content-center text-center">
    <h1> <strong>Επικοινωνήστε μαζί μας</strong></h1>
    <p><strong>Είμαστε εδώ για κάθε σας απορία</strong></p>
    <div style="height: 4px; background-color: #fe6601; width: 40%; margin: auto;"></div>
    <form class="contact-form" action="<?php echo esc_url(admin_url('admin-post.php'));?>" method="post">
        <div class="row">
            <div class="mb-5 col-12 col-md-6">
                <label  class="form-label">Όνομα</label>
                <input type="text" name="first-name" class="form-control" id="FormControlInput1" placeholder="Γράψτε το όνομα σας..." pattern="[A-Za-zΆ-Ωά-ώΑ-Ωα-ω\s\-]+" required oninvalid="this.setCustomValidity('Παρακαλώ συμπληρώστε το όνομά σας')" 
                oninput="this.setCustomValidity('')">
            </div>
            <div class="mb-5 col-12 col-md-6">
                <label  class="form-label">Επώνυμο</label>
                <input type="text" name="last-name" class="form-control" id="FormControlInput1" placeholder="Γράψτε το επίθετο σας..." pattern="[A-Za-zΆ-Ωά-ώΑ-Ωα-ω\s\-]+" required oninvalid="this.setCustomValidity('Παρακαλώ συμπληρώστε το επώνυμο σας')" 
                oninput="this.setCustomValidity('')">
            </div>
            <div class="mb-5 col-12 col-md-6">
                <label  class="form-label">Τηλέφωνο</label>
                <input type="tel" name="telephone" pattern="[0-9]{10}" maxlength="10" class="form-control" id="FormControlInput1" placeholder="Γράψτε το τηλέφωνο σας..." required oninvalid="this.setCustomValidity('Παρακαλώ συμπληρώστε το τηλέφωνο σας')" 
                oninput="this.setCustomValidity('')">
            </div>
            <div class="mb-5 col-12 col-md-6">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="FormControlInput1" placeholder="Γράψτε το e-mail σας..." required oninvalid="this.setCustomValidity('Παρακαλώ συμπληρώστε το e-mail σας')" 
                oninput="this.setCustomValidity('')">
             </div>
        </div>
        <div class="mb-5 col-12">
            <label class="form-label">Μήνυμα</label>
            <textarea name="message" class="form-control" id="FormControlTextarea1" rows="5" placeholder="Γράψτε το μήνυμα σας..." required oninvalid="this.setCustomValidity('Παρακαλώ συμπληρώστε το μήνυμα σας')" oninput="this.setCustomValidity('')"></textarea>
        </div>
        <input type="hidden" name="security" value="<?php echo wp_create_nonce('zikoulis_contact_form_nonce')?>">
        <input type="hidden" name="action" value="zikoulis_contact_form">
        <button type="submit" class="btn-lg mb-4 contact-button">Αποστολή</button>
    </form>
</div>
<?php if(isset($_GET['contact_status'])): ?>
    <?php if($_GET['contact_status'] === 'success'): ?>
        <div class="alert alert-success">Το μήνυμά σας στάλθηκε με επιτυχία!</div>
    <?php else: ?>
        <div class="alert alert-danger">Κάτι πήγε στραβά. Δοκιμάστε ξανά.</div>
    <?php endif; ?>
<?php endif; ?>


<?php 
get_footer(); ?>