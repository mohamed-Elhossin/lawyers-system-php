<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/aside.php";
include "../genral/config.php";
include "../genral/functions.php";

$select = "SELECT * FROM articles";
$s = mysqli_query($conn, $select);
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM articles where id =$id ";
    $d =  mysqli_query($conn, $delete);
    go("/articles/list.php");
}
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Tables articles</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable ">
                            <thead>
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Title</th>
                                    <th colspan="3" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($s as $data) { ?>
                                    <tr>
                                        <th scope="row"><?= $data['id'] ?> </th>
                                        <td><?= $data['title'] ?> </td>
                                        <td> <a href="/hima/articles/list.php?delete=<?= $data['id'] ?> " class="btn btn-danger"> <i class='bx bxs-message-x'></i></a> </td>
                                        <td> <a href="/hima/articles/show.php?show=<?= $data['id'] ?> " class="btn btn-primary"> <i class='bx bx-show-alt'></i></a> </td>
                                        <td> <a href="/hima/articles/update.php?edit=<?= $data['id'] ?> " class="btn btn-info"> <i class='bx bx-edit-alt'></i></a> </td>
                                    </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php
include '../shared/footer.php';
include "../shared/script.php";

?>