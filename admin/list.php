<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/aside.php";
include "../genral/config.php";
include "../genral/functions.php";

$select = "SELECT * FROM `admin` JOIN permations ON admin.role = permations.id";
$s = mysqli_query($conn, $select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `admin` where id =$id ";
    $d =  mysqli_query($conn, $delete);
   go("/lawyers/list.php");
}
authrization(0);
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>List admin</h1>
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
                        <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">role</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($s as $data) { ?>
                                    <tr>
                                        <th scope="row"><?= $data['id'] ?> </th>
                                        <td><?= $data['name'] ?> </td>
                                        <td><?= $data['email'] ?> </td>
                                        <td><?= $data['descriptoin'] ?> </td>
                                        <td> <a href="/hima/lawyers/list.php?delete=<?= $data['id'] ?> " class="btn btn-danger"> Delete</a> </td>

                                        <td> <a href="/hima/lawyers/update.php?edit=<?= $data['id'] ?> " class="btn btn-info"> Update</a> </td>
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