<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Get a Quote-Nation Wide Lanka Tours & Travels </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>


  <?php include_once('Topbar.php'); ?>
  <?php include_once('tour_nav.php'); ?>


  <!-- Header Start -->
  <div class="container-fluid page-header">
    <div class="container">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-4 text-white text-uppercase">Get a Quote</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
          <i class="fa fa-angle-double-right pt-1 px-3"></i>
          <p class="m-0 text-uppercase">Get a Quote</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->





  <!-- Contact Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="text-center mb-3 pb-3">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact</h6>
        <h1>Get a Quote</h1>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="contact-form bg-white" style="padding: 30px;">


            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="name" name="name" required>
              <label class="mdl-textfield__label" for="name">Primary Traveler's Name *</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="email" id="email" name="email" required>
              <label class="mdl-textfield__label" for="email">Email *</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

              <input class="mdl-textfield__input" type="text" id="number" name="number" required>
              <label class="mdl-textfield__label" for="number">number *</label>

            </div>


            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="country" name="country" required>
              <label class="mdl-textfield__label" for="country ">country </label>
            </div>


            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="address" name="address" required>
              <label class="mdl-textfield__label" for="address">Address *</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-focused">
              <label class="" for="arrival">Arrival Date</label>
              <input class="mdl-textfield__input" type="date" id="arrival" name="arrival">

            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <label for="tour">Tour Category</label><br>
              <select class="mdl-textfield__input" id="tour" name="tour" required>
                <option value=""></option>
                <option value="group">Group Tour</option>
                <option value="family">Family Tour</option>
                <option value="luxury">Luxury</option>
                <option value="cultural">Cultural Beach Tour</option>
                <option value="adventure">Adventure</option>
                <option value="wellness">Wellness & Ayurveda</option>
                <option value="wildlife">Wildlife</option>
                <option value="honeymoon">Honeymoon</option>
                <option value="hill">Hill Country</option>
              </select>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <textarea class="mdl-textfield__input" id="special" name="special"></textarea>
              <label class="mdl-textfield__label" for="special">Special Requests and notes</label>
            </div>

            <button onclick="QuoteGett()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="button">Submit</button>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->






  <!-- Bootstrap Modal -->
  <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="resultModalLabel">Email sent successfully!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Result message will be displayed here -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>










  <!-- Footer Start -->
  <?php include_once('footer.php'); ?>
  <!-- Footer End -->





  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <!-- Include the following script in your HTML file or a separate JavaScript file -->
  <script>
    function QuoteGett() {
      event.preventDefault(); // Prevent the default form submission

      // Gather form data
      var formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        number: document.getElementById('number').value,
        whatsappNumber: document.getElementById('whatsappnumber').value,
        country: document.getElementById('country').value,
        address: document.getElementById('address').value,
        arrival: document.getElementById('arrival').value,
        tour: document.getElementById('tour').value,
        special: document.getElementById('special').value
      };

      // Validate form data (add more validation if needed)
      if (!formData.name || !formData.email || !formData.number || !formData.address || !formData.arrival || !formData.tour) {
        alert('Please fill in all required fields.');
        return;
      }

      // Use fetch to send data to the PHP script
      fetch('sendQuote.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(formData),
        })
        .then(response => response.text())
        .then(result => {
          // Display a success or error message


          $('#resultModal').find('.modal-body').html("You will be contacted soon,");
          $('#resultModal').modal('show');

          // Optionally, refresh the page after a delay (e.g., 3 seconds)
          setTimeout(function() {
            location.reload();
          }, 3000);


        })
        .catch(error => {
          console.error('Error:', error);
        });
    }
  </script>



</body>
<style>
  .mdl-textfield {
    width: 100%;
  }



  .mdl-textfield__label {
    color: #333;
  }

  .mdl-textfield__input {
    color: #555;
  }

  .mdl-button {
    margin-top: 16px;
  }

  .hidden {
    display: none;
  }
</style>

</html>