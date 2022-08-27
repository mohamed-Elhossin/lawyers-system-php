<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/aside.php";
include "../genral/config.php";
include "../genral/functions.php";
if (isset($_POST['send'])) {
    $title = $_POST['title'];
    $desciption = $_POST['desciption'];
    $auther = $_SESSION['admin'];

    // Image Code
    $image_name =  time() . $_FILES['image']["name"];
    $image_tmp = $_FILES['image']["tmp_name"];
    $location =  "./upload/";
    move_uploaded_file($image_tmp, $location . $image_name);
    $insert = "INSERT INTO articles VALUES(null, '$title' ,'$desciption','$auther','$image_name',default)";
    $i = mysqli_query($conn, $insert);
    testMassage($i, "Insert Artical Done");
}

authrization(0, 1, 2);
?>
<!-- $_FILES -->
<main id="main" class="main">
    <h1> Add new Articles </h1>
    <div class="container p-5">
        <div class="card p-5">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for=""> Title</label>
                        <input name="title" required type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">desciption</label>
                        <input name="desciption" required type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Image</label>
                        <input name="image" required type="file" class="form-control">
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