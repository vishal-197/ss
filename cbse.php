<!doctype html>
<html lang="en">

<?php

include('head.php');
 ?>
<body>

<?php

include('header.php');
 ?>


  <div class="main">
    <section class="chdp-sec">
      <div class="container">
        
        <div class="heading_section">
          <h1 class="title-head">CBSE</h1>
          <!-- <h4 class="sub-title">Leading Young India</h4> -->
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <!-- <h5 class="card-title">chdp</h5> -->
        <!-- <p class="card-text">For Existing Schools</p> -->
      </div>

      
    </section>
  </div>
 
 
 <?php

include('footer.php');
 ?>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- jquery min js -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="js/jquery.js" type="efe6ce93c700f9bb922c644f-text/javascript"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>






  <script src="js/lottie.min.js" type="efe6ce93c700f9bb922c644f-text/javascript"></script>
  <script src="js/custom.js" type="efe6ce93c700f9bb922c644f-text/javascript"></script>

  <script src="js/rocket-loader.min.js"
    data-cf-settings="efe6ce93c700f9bb922c644f-|49" defer></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>


</html>




<script>
  // header js

  $(document).ready(function () {
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 50) {
        $(".header").addClass("active");
      } else {
        $(".header").removeClass("active");
      }
    });
  });


  // $(document).ready(function() {

  // var animation = bodymovin.loadAnimation({
  //     container: document.getElementById("browserGif"),
  //     renderer: "svg",
  //     loop: true,
  //     autoplay: true,
  //     path: "https://assets4.lottiefiles.com/packages/lf20_dd9wpbrh.json",
  // });
  // var animation = bodymovin.loadAnimation({
  //     container: document.getElementById("serBannerGif"),
  //     renderer: "svg",
  //     loop: true,
  //     autoplay: true,
  //     path: "https://assets9.lottiefiles.com/packages/lf20_u4jjb9bd.json",
  // });
  // });browserGif


  // from validation
  (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()





  var $owl = $('.owl-carousel');
		
		$owl.children().each( function( index ) {
		  $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
		});
		
		$owl.owlCarousel({
			items: 4,
			center: true,
			loop: true,
      margin:30,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				767:{
					items:3
				},
				992:{
					items:4

				}
			}
		});
		
		$(document).on('click', '.owl-item>a', function() {
		$owl.trigger('to.owl.carousel', $(this).data( 'position' ) 
		);
		
	});


  
	
</script>
<script>
  AOS.init();
</script>
</body>

</html>