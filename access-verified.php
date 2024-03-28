<?php
    session_start();

    require_once "config/db.php";

    
    if (!isset($_SESSION['email'])) {
        header('location: ./');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header("location: ./");
    }

    if (isset($_GET['close'])) {
    session_destroy();
    unset($_SESSION['code']);
    header("location: verify-code");
    }

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThankGod Okoro">
        <title>Verify Code :: Goodnews Estate&trade;</title>

        <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
        <link rel="stylesheet" href="assets/css/verify.css">
        <link rel="shortcut icon" href="assets/images/gefavicon.png" />
    </head>
<body>
    <div class="s130">
        <div class="container justify-content-center pt-30" style="background-color: white; border-radius: 20px;">
            <div class="row" style="margin: 40px;">
                <div class="card">
                    <div class="card-body mt-3">
                        <div class="text-center mb-4">
                            <div class="mb-0">
                                <img alt="QR Code" src="assets/images/qr-code.png" class="img-responsive" width="108" height="108">
                            </div>
                            <h4 class="mb-n3 mt-0">Access Code</h4>
                            <div class="row">
                                <div class="mt-3">
                                    <span><?php echo $_SESSION['code']; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 mx-auto">
                            <hr />
                            <div class="card-body h-100">

                                <div class="row mt-3 mb-3 text-center">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 mb-3">
                                                Visitor's Name<br />
                                                <strong>
                                                    <?php echo $_SESSION['visitorsName']; ?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 mb-3">
                                                Visit Date<br />
                                                <strong>
                                                    <?php echo $_SESSION['visitDate']; ?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 mb-3">
                                                Visit Time<br />
                                                <strong>
                                                    <?php echo $_SESSION['visitTime']; ?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 text-right">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 text-end">
                                                Client's Name:<br />
                                                <strong>
                                                    <?php echo $_SESSION['client']; ?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/extention/choices.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        if (isset($_SESSION['message']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['message_title']; ?>",
                    text: "<?php echo $_SESSION['message']; ?>",
                    icon: "error",
                    buttons: false,
                    timer: 3000
                });
            </script>
            <?php
            unset($_SESSION['message']);
        }
    ?>
  </body>
</html>