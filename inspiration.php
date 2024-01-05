<!doctype html>
<html lang="en">

<?php

include('head.php');
 ?>
<body>

<?php

include('header.php');
 ?>


        <!-- About page banner start -->
        <!-- <section class="about-page-banner">
          <img src="./image/about-banner.jpg">
        </section> -->
        <!-- About page banner -->

        <!-- <section class="school-about sec-top-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="">
                  <p>Sanskar is a co-educational, English Medium, Senior Secondary School set up in April 2002 and affiliated to the Central Board of Secondary Education, New Delhi.</p>
                  <p>The parent body, Sri Sai Shiksha Sansthan has a deep commitment towards the cause of education. The Trust has provided a vast infrastructure with large green playfields. The finest possible team has been put together in the school. Each member shares this commitment and lives by it.</p>
                  <p>It is a child-oriented school, which provides opportunities for skill based activities that contribute to the development of an all-round personality. By nurturing values of tolerance, understanding and cooperation, we prepare the children to become worthy citizens of a multicultural nation.</p>
                  <p>The students are given opportunities to develop qualities of responsibility, determination and perseverance that play a crucial role in building a sense of self discipline. Thus we seek to prepare each child to assume the responsibilities of leadership as well as the ability to work in a team.</p>

                </div>

              </div>
              <div class="col-md-5">
                  <div class="video-wrapper">
                    <video autoplay muted loop playsinline preload="metadata">
                      <source src="./video//video1.mp4" type="video/mp4">
                    </video>
               </div>
              </div>
            </div>
          </div>
        </section> -->


        <section class="inspiration sec-spacing">
            <div class="container">

                  <div class="heading_section text-center"  data-aos="fade-left" data-aos-duration="2000">
                  <h1 class="title-head">The Inspiration</h1>
                  <!-- <h4 class="sub-title">Leading Young India</h4> -->
                </div>
                <div class="inspiration-img-box">
                <div class="inspiration-left-side">
                  <div class="card">
                    <img src="./image/New Project.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lachman A. Bhatia</h5>
                      <p class="card-text">April 1, 1938 - July 27, 2019</p>
               
                    </div>
                  </div>
                </div>
                <!-- <div class="col-md-4">
                  <img src="">
                  <p>We salute the man who put in his best to give the city another good school. Sanskar School is the result of Mr. Kanni Thahryamal’s dream, initiative and untiring efforts.</p>

                </div> -->
                <div class="inspiration-right-side">
                  <div class="card">
                    <img src="./image/New Project (1).png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Kanhiya Thahryamal</h5>
                      <p class="card-text">December 20,1964 - July 1, 2006</p>
               
                    </div>
                  </div>
                </div>
                <div class="inspiration-content">

                  <h5>We salute the man who put in his best to give the city another good school. Sanskar School is the result of Mr. Kanni Thahryamal’s dream, initiative and untiring efforts.</h5>
                </div>
                </div>
            </div>
        </section>




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
 
 
    <script>
// header js

$(document).ready(function() {
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 50) {
            $(".header").addClass("active");
        } else {
            $(".header").removeClass("active");
        }
    });
});



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
    </script>

</body>

</html>