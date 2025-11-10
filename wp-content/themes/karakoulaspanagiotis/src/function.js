/* about us rotation */
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll('.about-us-content');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  }, { threshold: 0.3 });

  elements.forEach(el => observer.observe(el));
});

//for the hamburger menu
document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.getElementById('hamburger');
  const menu = document.querySelector('.main-navigation');

  hamburger.addEventListener('click', function() {
    menu.classList.toggle('active');
  });
});

// AJAX για τη φόρμα επικοινωνίας
document.addEventListener('DOMContentLoaded', function () { //αφου φορτωσει το dom-html
  const contactForm = document.querySelector('.contact-form'); //παρε την κλαση contact-form της html και φορτωσε την στο const
  if (!contactForm) return; //αν δεν βρεις φόρμα σταμάτα

  contactForm.addEventListener('submit', function (e) { //οταν γινει submit
    e.preventDefault(); //σταμάτα την default λειτουργια που κάνει refresh

    const existing = contactForm.parentNode.querySelector('.contact-ajax-status'); //αν υπάρχει κάποιο μήνυμα απο προηγούμενο submit 
    if (existing) existing.remove(); //κάντο remove

    const formData = new FormData(contactForm); //δημιουργεί ενα νεο formdata στο οποίο περιλαμβάνονται τα πεδία της φορμας

    formData.set('action', 'zikoulis_contact_form'); //προσθέτει το action class της html, που συναντάμε στο functions.php, στο formData

    if (typeof ajax_object !== 'undefined' && ajax_object.nonce) { //αν υπάρχει η ajax_object(υπάρχει γιατι την ορίσαμε στο function.php)
      formData.set('security', ajax_object.nonce); //βάλε στο formData την nonce, για ασφαλεια
    }

        //Δημιουργούμε το div με μήνυμα αναμονής
    const statusDiv = document.createElement('div');
    statusDiv.className = 'contact-ajax-status alert alert-info mt-3';
    statusDiv.innerText = 'Παρακαλώ περιμένετε... Το μήνυμά σας βρίσκεται σε διαδικασία αποστολής.';
    contactForm.parentNode.insertBefore(statusDiv, contactForm.nextSibling);

    fetch(typeof ajax_object !== 'undefined' ? ajax_object.ajax_url : contactForm.action, { //αν υπάρχει η ajax_object, στέλνει post είτε στο admin-ajax είτε στο action της φορμας, τα δεδομένα της φορμας που βρίσκονται στο formData
      method: 'POST',
      credentials: 'same-origin',
      body: formData})
    .then(response => response.json().catch(() => ({ success: false })))  //αν η απαντηση στο post αίτημα είναι error επεστρεψε αντικείμενο false
    .then(json => { //έπειτα κάνε ένα div οπου θα εμφανίσεις το μήνυμα
        statusDiv.classList.remove('alert-info'); //
      //const statusDiv = document.createElement('div');
      //statusDiv.className = 'contact-ajax-status alert mt-3'; //με το συγκεκριμενο style

      if (json && json.success) { //αν το post αίτημα 
        statusDiv.classList.add('alert-success'); //έχει response success=true
        statusDiv.innerText = json.data && json.data.message ? json.data.message : 'Το μήνυμά σας στάλθηκε με επιτυχία!';//βάλε στο div μήνυμα επιτυχίας
        contactForm.reset(); //αδειασε την φόρμα
      } else {
        statusDiv.classList.add('alert-danger'); //αν έχει response success=false
        const msg = json && json.data && json.data.message ? json.data.message : 'Κάτι πήγε στραβά. Δοκιμάστε ξανά.'; //εμφάνισε μήνυμα λαθους
        statusDiv.innerText = msg;
      }

      contactForm.parentNode.insertBefore(statusDiv, contactForm.nextSibling); //μέσα στο contact-container βάλε το statusdiv ακριβως μετα την φόρμα
      setTimeout(() => { if (statusDiv) statusDiv.remove(); }, 4000); //μετά απο 4 δευτερα φύγε
    })
    .catch(err => { //αν το fetch αποτύχει, 
      console.error(err);
      const statusDiv = document.createElement('div'); //κάνε ενα div  
      statusDiv.className = 'contact-ajax-status alert alert-danger mt-3'; // με αυτο το style
      statusDiv.innerText = 'Σφάλμα δικτύου — δοκιμάστε ξανά.'; //και αυτο το μήνυμα
      contactForm.parentNode.insertBefore(statusDiv, contactForm.nextSibling); //μέσα στο contact-container βάλε το statusdiv ακριβως μετα την φόρμα
    });
  });
});
