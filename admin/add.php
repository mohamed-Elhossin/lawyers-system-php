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
    $role = $_POST['role'];
    // Image Code
    $image_name =  time() . $_FILES['image']["name"];
    $image_tmp = $_FILES['image']["tmp_name"];
    $location =  "./upload/";
    move_uploaded_file($image_tmp, $location . $image_name);
    $insert = "INSERT INTO `admin` VALUES (NULL , '$name','$email','$password','$image_name',$role )";
    $q = mysqli_query($conn, $insert);
    testMassage($q, "Insert Admin");
}
authrization(0);

?>
<main id="main" class="main">
    <h1> Add new admin </h1>
    <div class="container p-5">
        <div class="card p-5">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
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
                    <div class="form-group">
                        <label for="">Image</label>
                        <input name="image" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="role" class="form-control" id="">
                            <option value="0"> All Acces</option>
                            <option value="1"> without admin</option>
                            <option value="2"> without admins and arical</option>
                        </select>
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