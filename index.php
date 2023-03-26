

<?php
    include_once './Data.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Datastructure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  <div class="container">
  <div class=" my-5"> 
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-md">
    <a class="navbar-brand " href="#">Developers Info</a>
  </div>
 </nav>

    <div class="row">

<?php foreach ($devs as $dev) :  ?>

    <div class="col-md-3 my-5">
        <div class="card">
            <img src="<?php echo $dev['photo']; ?>" alt="" class="card-img">
            <div class="card-body">
                <h3><?php echo $dev['name']; ?></h3>
                <h4><?php echo $dev['skill']; ?></h4>
                <p><?php echo $dev['desc']; ?></p>
            </div>
        </div>
    </div>

<?php endforeach ?>

</div>
</div>

</div>

<footer class="bg-light text-center">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">Developers Info</a>
  </div>
  <!-- Copyright -->
</footer>
  
</div>
<!-- End of .container -->
    
</head>
<body>
    
</body>
</html>