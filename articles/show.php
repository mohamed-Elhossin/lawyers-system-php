<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/aside.php";
include "../genral/config.php";
include "../genral/functions.php";

if (isset($_GET['show'])) {
    $id = $_GET['show'];
    $select  = "SELECT * FROM `articles` where id = $id";
    $s = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($s);
}


?>
<main id="main" class="main">
    <h1> Show Aricales </h1>
    <div class="container col-6 p-5">
        <div class="card p-5">
            <img src="./upload/<?= $row['image'] ?>" class="img-top" alt="">
            <div class="card-body">
                <p> Title :<?= $row['title'] ?> </p>
                <p> desciption :<?= $row['desciption'] ?> </p>
                <p> Auther :<?= $row['auther'] ?> </p>
            </div>
        </div>
    </div>
</main>

<?php
include '../shared/footer.php';
include "../shared/script.php";

?>