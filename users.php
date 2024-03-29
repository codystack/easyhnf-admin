<?php
include "./components/header.php";
include "./components/topnavbar.php";
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
                                        <div class="table-responsive">
                                            <table id="order-listing" class="table">
                                                <thead>
                                                  <tr>
                                                      <th>SN</th>
                                                      <th>Name</th>
                                                      <th>Email</th>
                                                      <th>Amount</th>
                                                  </tr>
                                                </thead>

                                                <tbody>
                                                  <tr>
                                                      <td>1</td>
                                                      <td>David Grey</td>
                                                      <td>demo@gmail.com</td>
                                                      <td>$500</td>
                                                  </tr>
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