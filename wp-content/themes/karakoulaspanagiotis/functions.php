<?php

function karakoulaspanagiotis_resources() {
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css'); // to load the bootstrap css file
    wp_enqueue_style('zikoulis_elecrical_styles', get_stylesheet_uri()); // to load the style.css file, zikoulis_elecrical_styles is the name of the styles is a nickname for us
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', NULL, '1.0', true); // to load the bootstrap js file
    wp_enqueue_style('karakoulas-icons', get_template_directory_uri() . '/css/icons.css', array(), '1.0'); // to load the icons css file
    wp_enqueue_script('karakoulas-js', get_template_directory_uri() . '/src/function.js', array(), null, true); //load the js file

    wp_localize_script('karakoulas-js', 'ajax_object', array( 'ajax_url' => admin_url('admin-ajax.php'), 'nonce'    => wp_create_nonce('zikoulis_contact_form_nonce'), ));
}

add_action('wp_enqueue_scripts', 'karakoulaspanagiotis_resources'); // we call the function, karakoulaspanagiotis_resources is the name of the function we created above

function karakoulaspanagiotis_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'karakoulaspanagiotis') // we register the main menu
    ));
}
add_action('init', 'karakoulaspanagiotis_menus'); // we call the function, karakoulaspanagiotis_menus is the name of the function we created above


// for the mailtrap, για κάθε φορά που εκτελείται wp_mail()
function my_mailtrap_phpmailer( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Username   = '324814aa7fb86d';
    $phpmailer->Password   = 'f86f19496151e2';
    $phpmailer->Port       = 587;
}
add_action( 'phpmailer_init', 'my_mailtrap_phpmailer' );



function zikos_contact_form() {
    check_ajax_referer('zikoulis_contact_form_nonce', 'security'); //δες αν υπάρχει το nonce που στείλαμε στην formdata στο js
    //αποθηκευουμε τα δεδομένα απο κάθε post που μας ερχεται μέσω ajax αφου τα καθαρίσουμε
    $first_name = sanitize_text_field($_POST['first-name'] ?? '');
    $last_name  = sanitize_text_field($_POST['last-name'] ?? '');
    $telephone  = sanitize_text_field($_POST['telephone'] ?? '');
    $email      = sanitize_email($_POST['email'] ?? '');
    $message    = sanitize_textarea_field($_POST['message'] ?? '');
    //παρολο που βάλαμε required στο html, εκεινο αφορα τον browser, ενω εδώ αφορα τον server, είναι σαν δικλέιδα ασφαλειας

    if (empty($first_name) || empty($last_name) || empty($telephone) || empty($email) || empty($message)) {
        wp_send_json_error(['message' => 'Παρακαλώ συμπληρώστε όλα τα πεδία.']);
    }

    //ετοιμάζει το mail
    $to = 'info@zikoulis.com';
    $subject = 'Νέο μήνυμα από τη φόρμα επικοινωνίας';
    $body = "Όνομα: $first_name $last_name\nΤηλέφωνο: $telephone\nEmail: $email\nΜήνυμα:\n$message";
    $headers = ['Content-Type: text/plain; charset=UTF-8'];
    //στέλνει το μήνυμα
    $sent = wp_mail($to, $subject, $body, $headers);
    // βγάζει το αντίστοιχο μήνυμα
    if ($sent) {
        wp_send_json_success(['message' => 'Το μήνυμά σας στάλθηκε με επιτυχία!']);
    } else {
        wp_send_json_error(['message' => 'Αποτυχία αποστολής e-mail. Παρακαλώ δοκιμάστε ξανά.']);
    }
}

add_action('wp_ajax_zikoulis_contact_form', 'zikos_contact_form'); //to ajax εκτελει την function

?>
