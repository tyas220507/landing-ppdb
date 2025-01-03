<?php
// Memastikan konstanta hanya didefinisikan jika belum ada
if (!defined('ASSETS_PATH')) {
    define('ASSETS_PATH', '/path/to/assets');
}
?>

<footer id="footer" class="footer dark-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center">
          <span class="sitename">Bootslander</span>
        </a>
        <div class="footer-contact pt-3">
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Terms of service</a></li>
          <li><a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Product Management</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12 footer-newsletter">
        <h4>Our Newsletter</h4>
        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
        <form action="forms/newsletter.php" method="post" class="php-email-form">
          <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your subscription request has been sent. Thank you!</div>
        </form>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Bootslander</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you've purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->

      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?= ASSETS_PATH ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= ASSETS_PATH ?>vendor/php-email-form/validate.js"></script>
<script src="<?= ASSETS_PATH ?>vendor/aos/aos.js"></script>
<script src="<?= ASSETS_PATH ?>vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= ASSETS_PATH ?>vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= ASSETS_PATH ?>vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="<?= ASSETS_PATH ?>js/main.js"></script>
<link rel="stylesheet" href="/DataTables/datatables.css" />
<script src="/DataTables/datatables.js">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<!-- JavaScript for Search Functionality -->
<script>
        document.getElementById("searchInput").addEventListener("input", function() {
    var searchQuery = this.value.toLowerCase();
    var table = document.getElementById("pendaftaranTable");
    var rows = table.getElementsByTagName("tr");
    var searchResults = document.getElementById("searchResults");

    // Kosongkan hasil pencarian sebelumnya
    searchResults.innerHTML = "";

    // Loop through all table rows (skip the header row)
    for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        var found = false;
        var resultText = "";

        // Loop through all cells in the row
        for (var j = 0; j < cells.length; j++) {
            var cellText = cells[j].textContent || cells[j].innerText;
            if (cellText.toLowerCase().indexOf(searchQuery) > -1) {
                found = true;
                resultText += cellText + " "; // Add matched cell content to resultText
            }
        }

        // Show or hide the row based on the search query
        if (found) {
            rows[i].style.display = "";
            
            // Add matching text to the searchResults list
            var li = document.createElement("li");
            li.textContent = resultText.trim();  // Trim extra spaces
            searchResults.appendChild(li);
        } else {
            rows[i].style.display = "none";
        }
    }
});

    </script>
</body>
</html>