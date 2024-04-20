<!-- footer section start -->
<div id="contact" class="footer_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-lg-3" style="margin-top: 20px;">
          <div class=" footer_logo"><img src="images/INTERNATIONAL.png"></div>

        </div>
        <div class="col-sm-6 col-lg-3">
          <h1 class="customer_text">CUSTOMER SERVICE</h1>


          <p class="footer_text">
            <img src="images/location.png" width="30" height="30" alt="Location Icon">&nbsp;&nbsp;Location<br>
            <!-- Your custom image icon -->

            DOOR NO-8-A, NERUKUNDRAM PATHAI
            100 FEET ROAD, SIMS BUS STOP,
            (near HDFC Bank) Vadapalani,
            Chennai-600026.
          </p>
        </div>



        <div class="col-sm-6 col-lg-3">
          <h1 class="customer_text">LET US HELP YOU</h1>
          <p class="footer_text">
            📞 <a href="tel:+919043965390" class="phone-link">+91 9043965390</a><br>
            📞 <a href="tel:+919150535375" class="phone-link">+91 9150535375</a><br>
            📞 <a href="tel:+919840861663" class="phone-link">+91 9840861663</a>
          </p>
          <h1 class="customer_text">Land-Line</h1>
          <p class="footer_text">
            📞 <a href="tel:+91-44-47966579" class="phone-link">+91-44-47966579</a>
          </p>
        </div>

        <div class="col-sm-6 col-lg-3">
          <h1 class="customer_text">OUR SHOP</h1>
          <p class="footer_text">here are many variat
            ions of passages of L
            orem Ipsum available
            , but the majority h
            ave suffered altera
            tion in some form, by </p>

          <div class="social_icon">
            <ul>
              <li><a href="#"><img src="images/fb-icon.png"></a></li>
              <li><a href="#"><img src="images/twitter-icon.png"></a></li>
              <li><a href="#"><img src="images/instagram-icon.png"></a></li>
              <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">© Since 2022 J3 INTERNATIONAL TRAVEL SERVICE, CHENNAI. All Rights Reserved.</p>

    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>

  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>


  <script>
    window.addEventListener('scroll', function () {
      var header = document.querySelector('.header_main'); // Assuming heading class is '.header_main'
      var scrollPosition = window.scrollY;

      if (scrollPosition > 100) { // Adjust this value as needed
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });

  </script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the modal
        var modal = document.getElementById('enquiryModal');

        // Function to show the modal
        function showEnquiryModal() {
            modal.style.display = "block";
        }

        // Call the function after 5 seconds (5000 milliseconds)
        setTimeout(showEnquiryModal, 5000);

        // Add event listener for closing the modal when clicking on close button or outside modal
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('close') || event.target === modal) {
                modal.style.display = "none";
            }
        });

        // Button functionality
        const btn = document.querySelector("#btn");
        const btnText = document.querySelector("#btnText");

        btn.onclick = () => {
            btnText.innerHTML = "Thanks";
            btn.classList.add("active");
        };
    });
</script>



</body>

</html>