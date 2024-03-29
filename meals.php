<?php
include "./components/header.php";
include "./components/topnavbar.php";
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
                                            <h4 class="display-4 text-primary font-weight-bold">Meals</h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <a href="add-meal" class="btn btn-md btn-dark d-none d-sm-inline-flex"> <span class="mr-2">Add new meal</span> <i class="mdi mdi-plus-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="order-listing" class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="font-weight-bold">S/N</th>
                                                        <th class="font-weight-bold">Meal Title</th>
                                                        <th class="font-weight-bold">Meal Code</th>
                                                        <th class="font-weight-bold text-center">Status</th>
                                                        <th class="font-weight-bold text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $m_id = 1;
                                                    $select_query = "SELECT * FROM meals ORDER BY meal_id ASC";
                                                        $result = mysqli_query($conn, $select_query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $meal_id = $row['meal_id'];
                                                                $meal_code = $row['meal_code'];
                                                                $title = $row['title'];
                                                                $status = $row['status'];
                                                                $created_at = $row['created_at'];
                                                                $date = strtotime($created_at);
                                                                switch ($status) {
                                                                    case "Inactive";
                                                                        $class  = 'bg-warning';
                                                                        $text = 'text-white';
                                                                        break;
                                                                    case "Active";
                                                                        $class  = 'bg-success';
                                                                        $text = 'text-white';
                                                                        break;
                                                                    default:
                                                                        $class  = '';
                                                                }
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $m_id; ?></td>
                                                        <td><?php echo $title; ?></td>
                                                        <td><?php echo $meal_code; ?></td>
                                                        <td class="text-center"><span class="badge <? echo $class; ?> text-xs <? echo $text; ?>"><?php echo $status; ?></span></td>
                                                        <td class="text-right">
                                                            <a href="view-meal?id=<?php echo $meal_id; ?>" class='btn btn-dark' style="padding: 0.5rem 1rem;">View</a>
                                                            <a href="" class='btn btn-danger' style="padding: 0.5rem 1rem;">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $m_id++;
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
            


<?php include "./components/footer.php"; ?>