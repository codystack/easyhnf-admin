<?php
// Connect database
include "./config/db.php";

//Manual Meal Plan Query
if (isset($_POST['manual-meal-plan-setup-btn'])) {

    $diet = $conn->real_escape_string($_POST['diet']);
    $userID = $conn->real_escape_string($_POST['userID']);

    
    $query = "INSERT INTO userdiet (diet, userID) 
                VALUES('$diet', '$userID')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        $_SESSION['success_message'] = "<strong>Success!</strong> New Meal Plan Assigned.";
        echo "<meta http-equiv='refresh' content='3; URL=manual-setup'>";
    }else {
        $_SESSION['error_message'] = "Error adding meal plan".mysqli_error($conn);
    }
}




//Manual Basic Plan Query
if (isset($_POST['manual-basic-plan-setup-btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $invoice_id = '#' . rand(1000, 9999);
    $amount = $conn->real_escape_string($_POST['amount']);
    $transaction_ref = 'REF_' . rand(1000000000, 9999999999);
    $payment_method = $conn->real_escape_string($_POST['payment_method']);
    $status = $conn->real_escape_string($_POST['status']);
    $diet = $conn->real_escape_string($_POST['diet']);
    $subscription_plan = $conn->real_escape_string($_POST['subscription_plan']);


    $query = "INSERT INTO subscription (userID, status, transaction_ref, amount, payment_method, invoice_id, subscription_plan)
        VALUES ('$userID', 'success', '$transaction_ref', '$amount', '$payment_method', '$invoice_id', '$subscription_plan')";
        
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0){
        $dietquery=mysqli_query($conn,"INSERT INTO userdiet (userID, diet) VALUES ('$userID', '$diet')");

        $conn=mysqli_query($conn,"UPDATE users SET subscription_plan='$subscription_plan' WHERE user_id ='$userID'");

        $_SESSION['success_message'] = "<strong>Success!</strong> New Suscription Plan Assigned.";
        echo "<meta http-equiv='refresh' content='3; URL=subscription-setup'>";
        
    }else{
        $_SESSION['error_message'] = "Error adding subscription plan".mysqli_error($conn);
    }

}





//Manual Custom Plan Query
if (isset($_POST['manual-custom-plan-setup-btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $invoice_id = '#' . rand(1000, 9999);
    $amount = $conn->real_escape_string($_POST['amount']);
    $transaction_ref = 'REF_' . rand(1000000000, 9999999999);
    $payment_method = $conn->real_escape_string($_POST['payment_method']);
    $status = $conn->real_escape_string($_POST['status']);
    $diet = $conn->real_escape_string($_POST['diet']);
    $subscription_plan = $conn->real_escape_string($_POST['subscription_plan']);


    $query = "INSERT INTO subscription (userID, status, transaction_ref, amount, payment_method, invoice_id, subscription_plan)
        VALUES ('$userID', 'success', '$transaction_ref', '$amount', '$payment_method', '$invoice_id', '$subscription_plan')";
        
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0){
        $conn=mysqli_query($conn,"UPDATE users SET subscription_plan='$subscription_plan' WHERE user_id ='$userID'");

        $_SESSION['success_message'] = "<strong>Success!</strong> New Suscription Plan Assigned.";
        echo "<meta http-equiv='refresh' content='3; URL=subscription-setup'>";
        
    }else{
        $_SESSION['error_message'] = "Error adding subscription plan".mysqli_error($conn);
    }

}





//Manual Coaching Plan Query
if (isset($_POST['manual-coaching-plan-setup-btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $invoice_id = '#' . rand(1000, 9999);
    $amount = $conn->real_escape_string($_POST['amount']);
    $transaction_ref = 'REF_' . rand(1000000000, 9999999999);
    $payment_method = $conn->real_escape_string($_POST['payment_method']);
    $status = $conn->real_escape_string($_POST['status']);
    $diet = $conn->real_escape_string($_POST['diet']);
    $subscription_plan = $conn->real_escape_string($_POST['subscription_plan']);


    $query = "INSERT INTO subscription (userID, status, transaction_ref, amount, payment_method, invoice_id, subscription_plan)
        VALUES ('$userID', 'success', '$transaction_ref', '$amount', '$payment_method', '$invoice_id', '$subscription_plan')";
        
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0){
        $conn=mysqli_query($conn,"UPDATE users SET subscription_plan='$subscription_plan' WHERE user_id ='$userID'");

        $_SESSION['success_message'] = "<strong>Success!</strong> New Suscription Plan Assigned.";
        echo "<meta http-equiv='refresh' content='3; URL=subscription-setup'>";
        
    }else{
        $_SESSION['error_message'] = "Error adding subscription plan".mysqli_error($conn);
    }

}