jQuery(document).ready(function($) {

    // This is a test
    $('img').addClass('img-fluid');

    $('.carousel-inner .carousel-item:first').addClass('active')

      // Toggle navigation
      $('#nav-toggle').click(function() {
        this.classList.toggle("active");
        // If sidebar is visible:
        if ($('body').hasClass('show-nav')) {
          // Hide sidebar
          $('body').removeClass('show-nav');
        } else { // If sidebar is hidden:
          $('body').addClass('show-nav');
          // Display sidebar
        }
      });

});
