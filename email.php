<?php
$email_error;

if (empty($_POST["email"])) {
$email_error = "email is required";

}else{
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VARIDATE_EMAIL)) {
        $email_error = "invalid email format";
    }
}
?>