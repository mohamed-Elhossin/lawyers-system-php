<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/aside.php";
include "../genral/config.php";
include "../genral/functions.php";
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = "INSERT INTO `lawyers` VALUES (NULL , '$name', '$password','$email')";
    $q = mysqli_query($conn, $insert);
    testMassage($q, "Insert To Database");
}

?>
<main id="main" class="main">
<h1> Add new Lawyer </h1>
    <div class="container p-5">
        <div class="card p-5">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for=""> Name</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="password" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" type="text" class="form-control">
                    </div>
                    <button name="send" class="btn btn-info mt-3"> Send Data </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include '../shared/footer.php';
include "../shared/script.php";

?>