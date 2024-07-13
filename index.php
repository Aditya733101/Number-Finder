<?php 
    require '_navbar.php';
?>


  <!-- ======= Hero Section ======= -->
 
  <section id="hero" class="d-flex align-items-center">
      
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
        <form action="search.php" method="post">
                <div class="input-group">
                        <input type="tel" class="form-control" name="search" placeholder="Search Number here">
                        <div class="input-group-append">
                        <!-- <button class="btn btn-secondary" type="submit">
                            <i class="fa fa-search"></i>
                        </button> -->

                    </div>
                    
                </div>
                <div class="text-center">
        <button type="submit" class="btn-get-started scrollto">Search</button>
      </div>
        </form>
        </div>
      </div>
      

      <?php
session_start();
    if (isset($_SESSION['search'])) {
	$result = "<div class=\"row icon-boxes\">
        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
          <div class=\"icon-box\">
           
            <h4 class=\"title\"><a href=\"\">Name</a></h4>
            <p class=\"description\">".$_SESSION['search_first_name']."  ".$_SESSION['search_last_name']."</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
          <div class=\"icon-box\">
        
            <h4 class=\"title\"><a href=\"\">Country</a></h4>
            <p class=\"description\">".$_SESSION['search_country']."</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
          <div class=\"icon-box\">
         
            <h4 class=\"title\"><a href=\"\">State</a></h4>
            <p class=\"description\">".$_SESSION['search_state']."</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"500\">
          <div class=\"icon-box\">
           
            <h4 class=\"title\"><a href=\"\">Email</a></h4>
            <p class=\"description\">".$_SESSION['search_email']."</p>
          </div>
        </div>";
        echo $result;
        unset($_SESSION['search']);
    }
    if (isset($_SESSION['not_found'])){
      $not_found = "<br><br><h4 class=\"title text-center\"><a href=\"\">Not Found</a></h4>";
      echo $not_found;
      unset($_SESSION['not_found']);
    }         
?>



      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          
        </div>

        <div class="row content">
          <p>

                Remember the days when the phone rang and you didn’t know who it was? Back then, we felt a need to know who contacted you, as well as those you wanted to avoid. Truecaller was born out of this. To remove uncertainty. To separate signal from noise.

We can gladly say those days of uncertainty are over with Truecaller. We are committed to build that trust everywhere by making tomorrow's communication safer, smarter and more efficient. No matter if it’s in the beginning of a call, in the middle of a transaction or at the end of a signature.

Reduce user drop-offs by instantly verifying and auto-filling user details, and sparing shoppers from all the boring stuff.
Save OTP costs by making the entire process from verification to checkout OTP-free.
Materialise a simple, zero-effort flow and do away with typos, as users don’t require typing anything.
Ensure quick checkout with fewer steps/ screens, thereby keeping shoppers enthusiastic about their purchase. 
          </p>
        </div>

      </div>
    </section><!-- End About Section -->




    <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>


          <div class="container row">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group ">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
  <!-- ======= Footer ======= -->
  </main>


  <?php 
    require '_footer.php';
  ?>