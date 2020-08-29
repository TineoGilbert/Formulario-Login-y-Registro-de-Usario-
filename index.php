<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

  <title>Document</title>
</head>

<body>
  <center>
    <div class="col-md-4 mt-3">
      <!-- Material form login -->
      <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
          <strong>Sign in</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

          <!-- Form -->
          <form class="text-center" style="color: #757575;" action="login.php" method="POST">

            <!-- Email -->
            <div class="md-form">
              <input type="email" id="materialLoginFormEmail" class="form-control" name="mail">
              <label for="materialLoginFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
              <input type="password" id="materialLoginFormPassword" class="form-control" name="password">
              <label for="materialLoginFormPassword">Password</label>
            </div>

            <div class="d-flex justify-content-around">
              <div>
                <!-- Remember me -->
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                  <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                </div>
              </div>
              <div>
                <!-- Forgot password -->
                <a href="">Forgot password?</a>
              </div>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

            <!-- Register -->
            <p>Not a member?
              <a href="registro.php">Register</a>
            </p>

            <!-- Social login -->
            <p>or sign in with:</p>
            <a type="button" class="btn-floating btn-fb btn-sm">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="btn-floating btn-tw btn-sm">
              <i class="fab fa-twitter"></i>
            </a>
            <a type="button" class="btn-floating btn-li btn-sm">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="btn-floating btn-git btn-sm">
              <i class="fab fa-github"></i>
            </a>

          </form>
          <!-- Form -->

        </div>

      </div>
      <!-- Material form login -->
    </div>
  </center>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>

</html>