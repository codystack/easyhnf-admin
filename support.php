<?php
include "./components/header.php";
include "./components/topnavbar.php";
?>

        <div class="container-fluid page-body-wrapper">
        
            <?php include "./components/side-navbar.php"; ?>

            <div class="main-panel">        
                <div class="content-wrapper">
                  <div class="row">
                    <div class="col-md-10 col-sm-12 mx-auto grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                            <div class="mb-5 text-center">
                                <h1 class="display-3 text-primary">Complain/Request</h1>
                            </div>
                            <form class="">
                                
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control form-control-lg" id="category">
                                        <option>Complain</option>
                                        <option>Request</option>
                                        <option>Tech Support</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Subject</label>
                                    <input type="text" class="form-control form-control-lg" id="subject" placeholder="Account funding">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" rows="10"></textarea>
                                </div>

                                <div class="">
                                    <button type="submit" class="btn btn-primary btn-lg mr-2">Submit</button>
                                    <button type="reset" class="btn btn-danger btn-lg mr-2">Reset</button>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
                </div>


<?php include "./components/footer.php"; ?>