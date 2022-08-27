<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/aside.php";
include "../genral/config.php";
include "../genral/functions.php";

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $select  = "SELECT * FROM `articles` where id = $id";
    $s = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($s);
    if (isset($_POST['send'])) {
        $title = $_POST['title'];
        $desciption = $_POST['desciption'];
   
        move_uploaded_file($image_tmp, $location . $image_name);
        $update = "UPDATE `articles` SET  title = '$title', desciption= '$desciption' where id = $id";
        $q = mysqli_query($conn, $update);
        go("/articles/list.php");
    }
}


?>
<main id="main" class="main">
    <h1> Edit Aricales </h1>
    <div class="container p-5">
        <div class="card p-5">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for=""> title</label>
                        <input name="title" value="<?= $row['title'] ?>" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">desciption</label>
                        <input name="desciption" value="<?= $row['desciption'] ?>" type="text" class="form-control">
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