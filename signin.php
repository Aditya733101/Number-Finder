<?php 
    require '_navbar.php';
    session_start();
    if (isset($_SESSION['first_name'])) {
      echo "<script>
          window.location.href='home.php';
          </script>";
  } 
?>


  <main id="main">

    



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <br><br>
          <h2>Sign in</h2>
        </div>


          <div class="container row pd-15">

            <form action="signinBackend.php" method="post">
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" name="uname" id="uname" placeholder="Username " required>
                </div>
              </div>
              <br>
              <div class="form-group col-md-12">
                <input type="password" class="form-control" name="password" id="subject" placeholder="Password" required>
              </div>
              <br>
              <div class="text-center"><button class="btn btn-primary" name="submit" value="submit" type="submit">Sign in</button></div>
            </form>

          </div>
<br><br><br><br><br><br><br>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php 
    require '_footer.php'
  ?>