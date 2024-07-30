<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/delete.php"; 
?>

        <div class="container-fluid page-body-wrapper">
        
            <?php include "./components/side-navbar.php"; ?>

            <div class="main-panel"> 
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="display-4 text-primary font-weight-bold">Users</h4>
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
                                                      <th class="font-weight-bold">Name</th>
                                                      <th class="font-weight-bold">Email</th>
                                                      <th class="font-weight-bold">Phone</th>
                                                      <th class="font-weight-bold">Status</th>
                                                      <th class="font-weight-bold text-right">Action</th>
                                                  </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $u_id = 1;
                                                    $select_query = "SELECT * FROM users ORDER BY user_id ASC";
                                                        $result = mysqli_query($conn, $select_query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $user_id = $row['user_id'];
                                                                $first_name = $row['first_name'];
                                                                $last_name = $row['last_name'];
                                                                $email = $row['email'];
                                                                $status = $row['status'];
                                                                $phone = $row['phone'];
                                                                switch ($status) {
                                                                    case "Inactive";
                                                                        $class  = 'bg-warning';
                                                                        $text = 'text-black';
                                                                        break;
                                                                    case "Active";
                                                                        $class  = 'bg-success';
                                                                        $text = 'text-black';
                                                                        break;
                                                                    default:
                                                                        $class  = '';
                                                                }
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $u_id; ?></td>
                                                        <td><?php echo $first_name; ?> <?php echo $last_name ?></td>
                                                        <td><?php echo $email; ?></td>
                                                        <td><?php echo $phone; ?></td>
                                                        <td class="text-center"><span class="badge <? echo $class; ?> text-xs <? echo $text; ?>"><?php echo $status; ?></span></td>
                                                        <td class="text-right">
                                                            <a href="view-user?id=<?php echo $user_id; ?>" class='btn btn-dark' style="padding: 0.5rem 1rem;">View</a>
                                                            <a href="edit-user?id=<?php echo $user_id; ?>" class='btn btn-secondary' style="padding: 0.5rem 1rem;">Edit</a>
                                                            <button type="button" data-id="<? echo $user_id; ?>" onclick="confirmUserDelete(this);" class='btn btn-danger' style="padding: 0.5rem 1rem;">Delete</button>
                                                        </td>
                                                    </tr>
                                                  <?php
                                                    $u_id++;
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