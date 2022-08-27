<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/aside.php";
include "../genral/config.php";
include "../genral/functions.php";

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $select  = "SELECT * FROM `lawyers` where id = $id";
    $s = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($s);
    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $update = "UPDATE `lawyers` SET  name = '$name', password= '$password' , email= '$email' where id = $id";
        $q = mysqli_query($conn, $update);
        go("/lawyers/list.php");
    }
}


?>
<main id="main" class="main">
    <h1> Edit admin </h1>
    <div class="container p-5">
        <div class="card p-5">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for=""> Name</label>
                        <input name="name" value="<?= $row['name'] ?>" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="password" value="<?= $row['password'] ?>" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" value="<?= $row['email'] ?>" type="text" class="form-control">
                    </div>
                    <button name="send" class="btn btn-primary mt-3"> Update</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include '../shared/footer.php';
include "../shared/script.php";

?>