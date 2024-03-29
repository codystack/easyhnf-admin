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
                                                
                                                <tr>
                                                    <td>2</td>
                                                    <td>Stella Johnson</td>
                                                    <td>testemail@yahoo.com</td>
                                                    <td>$1,500</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Marina Michel</td>
                                                    <td>test@yahoo.com</td>
                                                    <td>$100</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>John Doe</td>
                                                    <td>testemail@gmail.com</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Peter Dobrick</td>
                                                    <td>test@gmail.com</td>
                                                    <td>$2,000</td>
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