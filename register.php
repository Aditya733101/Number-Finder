<?php 
    require '_navbar.php';
?>


  <main id="main">

        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Registration Form</h2>
        </div>


          <div class="container row">

            <form action="registerBackend.php" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                </div>

                <div class="col-md-6 form-group">
                  <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
                </div>

                <div class="col-md-6 form-group ">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                </div>

                <div class="col-md-6 form-group ">
                  <input type="tel" class="form-control" name="tel" id="tel" placeholder="Phone Number" required>
                </div>

                <div class="col-md-6 form-group">
                  <input type="text" name="country" class="form-control" id="country" placeholder="Country" required>
                </div>

                <div class="col-md-6 form-group">
                  <input type="text" name="state" class="form-control" id="state" placeholder="State" required>
                </div>
              </div>


              <div class="form-group mt-3">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
              </div>

              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              </div>

              <div class="form-group mt-3">
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
              </div>
                <br>
              <div class="text-center"><button class="btn btn-primary" type="submit" name="submit" value="submit">Register</button></div>
            </form>

          </div>

        </div>

      </div>
      
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php 
    require '_footer.php'
  ?>