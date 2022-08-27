<?php
include "./shared/head.php";
include "./genral/config.php";


$error = "";
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $pasword = $_POST['password'];
  $typelogin = $_POST['type'];
 if($typelogin == 1){
  $select = "SELECT * FROM `admin` where email = '$email' and password = '$pasword' ";
  $s = mysqli_query($conn, $select);
  $numRows = mysqli_num_rows($s);
  $row = mysqli_fetch_assoc($s);
  if ($numRows  > 0) {
    echo "<script>
    window.location.replace('/hima/');
        </script>";
    $_SESSION['admin'] = $email;
    $_SESSION['name'] = $row['name'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['adminId'] = $row['id'];
    $_SESSION['image'] = $row['image'];
  } else {
    $error = "Pleaser Enter Correct Data";
  } 
}else{
  $select = "SELECT * FROM `lawyers` where email = '$email' and password = '$pasword' ";
  $s = mysqli_query($conn, $select);
  $numRows = mysqli_num_rows($s);
  $row = mysqli_fetch_assoc($s);
  if ($numRows  > 0) {
    echo "<script>
    window.location.replace('/hima/');
        </script>";
    $_SESSION['admin'] = $email;
    $_SESSION['name'] = $row['name'];
    $_SESSION['role'] = 2;
  } else {
    $error = "Pleaser Enter Correct Data";
  } 
}

}


?>

<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  <p class="text-center small">Enter your username & password to login</p>
                </div>

                <form class="row g-3 needs-validation" method="POST">

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Email

                    </label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="email" name="email" class="form-control d-block" id="yourUsername" required>
                      <div class="invalid-feedback">Please enter your Email.</div>
                    </div>
                    <div class="text-danger d-block"> <?= $error ?> </div>

                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                    <div class="text-danger"> <?= $error ?> </div>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>
                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Login Type</label>
                    <select name="type" class="form-control" id="yourPassword" required>
                      <option value="1"> Admin </option>
                      <option value="2"> lawyers </option>
                    </select>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" name="login" type="submit">Login</button>
                  </div>

                </form>

              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->
<?php
include './shared/footer.php';
include "./shared/script.php";

?>