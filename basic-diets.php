<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/delete.php";
?>

        <div class="container-fluid page-body-wrapper">

            <?php include "./components/side-navbar.php"; ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row grid-margin">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="display-4 text-primary font-weight-bold">Basic Diets</h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <a href="add-basic-diet" class="btn btn-md btn-dark d-none d-sm-inline-flex"> <span class="mr-2">Add new diet</span> <i class="mdi mdi-plus-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <?php
                                            if (isset($_SESSION['error_message'])) {
                                                ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <div class="alert-message text-center">
                                                        <?php
                                                        echo $_SESSION['error_message'];
                                                        ?>
                                                    </div>
                                                </div>
                                                <?php
                                                unset($_SESSION['error_message']);
                                            }
                                        ?>
                                        <?php
                                            if (isset($_SESSION['success_message'])) {
                                                ?>
                                                <div class="alert alert-success" role="alert">
                                                    <div class="alert-message text-center">
                                                        <?php echo $_SESSION['success_message']; ?>
                                                    </div>
                                                </div>
                                                <?php
                                                unset($_SESSION['success_message']);
                                            }
                                        ?>
                                        <div class="table-responsive">
                                            <table id="order-listing" class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="font-weight-bold">S/N</th>
                                                        <th class="font-weight-bold">Title</th>
                                                        <th class="font-weight-bold">Amount</th>
                                                        <th class="font-weight-bold">Date Created</th>
                                                        <th class="font-weight-bold text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $dt_id = 1;
                                                    $select_query = "SELECT * FROM basic_diet ORDER BY created_at DESC";
                                                        $result = mysqli_query($conn, $select_query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $diet_id = $row['diet_id'];
                                                                $title = $row['title'];
                                                                $price = $row['price'];
                                                                $created_at = $row['created_at'];
                                                                $date = strtotime($created_at);
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $dt_id; ?></td>
                                                        <td><?php echo $title; ?></td>
                                                        <td>₦<?php echo number_format($price, 0, '.', ','); ?></td>
                                                        <td><?php echo date('j F Y', $date); ?></td>
                                                        <td class="text-right">
                                                            <a href="edit-basic-diet?id=<?php echo $diet_id; ?>" class='btn btn-dark' style="padding: 0.5rem 1rem;">Edit</a>
                                                            <button type="button" data-id="<? echo $diet_id; ?>" onclick="confirmBasicDietDelete(this);" class='btn btn-danger' style="padding: 0.5rem 1rem;">Delete</button>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $dt_id++;
                                                            }
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
<?php 
include "./components/delete-modals.php";
include "./components/footer.php"; 
?>