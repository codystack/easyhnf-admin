<?php
session_start();

include "./config/db.php";

    if (!isset($_SESSION['email'])) {
        header('location: ./');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header("location: ./");
    }


    //Verify Access Code
    if (isset($_POST['verify_access_code_btn'])) {

        $code = $conn->real_escape_string($_POST['code']);

            $query = "SELECT * FROM accessCode INNER JOIN users ON accessCode.userID=users.id WHERE code = '$code'";
            $results = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($results)) {
                $code = $row['code'];
                $visitorsName = $row['visitorsName'];
                $visitorsName = $row['visitorsName'];
                $visitDate = $row['visitDate'];
                $visitTime = $row['visitTime'];
                $status = $row['status'];
                $image = $row['image'];
            }
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['code'] = $code;
                $_SESSION['visitorsName'] = $visitorsName;
                $_SESSION['visitDate'] = $visitDate;
                $_SESSION['visitTime'] = $visitTime;
                $_SESSION['status'] = $status;
                $_SESSION['image'] = $image;
            header('location: access-verified');
            }else {
                $_SESSION['message_title'] = "Invalid Access Code";
                $_SESSION['message'] = "Please Verify Access Code";
            }
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
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="inner-form">
            <div class="input-field first-wrap">
                <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                    </svg>
                </div>
                <input id="search" type="text" name="code" required placeholder="Enter Access Code" />
            </div>
            <div class="input-field second-wrap">
                <button class="btn-search" type="submit" name="verify_access_code_btn">Verify Code</button>
            </div>
        </div>
      </form>
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