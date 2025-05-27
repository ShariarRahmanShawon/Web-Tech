<?php
include "../model/db.php"; // Assuming you have a DB handler class here

// Error variables
$errors = [
    "name" => "", "dob" => "", "email" => "", "phone" => "", "password" => "",
    "gender" => "", "specialization" => "", "license" => "", "institution" => "",
    "languages" => "", "designation" => ""
];

$hasError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = trim($_POST["name"] ?? "");
    $dob = trim($_POST["dob"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $password = trim($_POST["password"] ?? "");
    $gender = $_POST["gender"] ?? "";
    $specialization = $_POST["specialization"] ?? "";
    $license = trim($_POST["license"] ?? "");
    $institution = trim($_POST["institution"] ?? "");
    $languages = $_POST["languages"] ?? [];
    $designation = $_POST["designation"] ?? "";

    // Validations
     if (empty($name)) {
        $nameError = "Name is required";
        $hasError = 1;
    }
    if (empty($dob)) {
        $dobError = "Date of birth is required";
        $hasError = 1;
    }
    if (empty($email)) {
        $emailError = "Valid email is required";
        $hasError = 1;
    }
    if (empty($phone)) {
        $phoneError = "Please select phone";
        $hasError = 1;
    }
    if (empty($password)) {
        $passwordError = "Valid password is required";
        $hasError = 1;
    }
    if (empty($gender)) {
        $genderError = "Valid gender is required";
        $hasError = 1;
    }
    if (empty($specialization)) {
        $specializationError = "Please select a specialization ";
        $hasError = 1;
    }
    if (empty($license)) {
        $licenseError = "license is required";
        $hasError = 1;
    }
    if (empty($institution)) {
        $institutionError = "institution is required";
        $hasError = 1;
    }
    if (empty($languages)) {
        $languagesError = "languages is required";
        $hasError = 1;
    }
    if (empty($designation)) {
        $designationError = "designation is required";
        $hasError = 1;
    }
    
    // If no errors, insert the data
    if ($hasError == 0) {
      $conn = getConnection();
      if (insertDoctor($name, $dob, $email, $phone, $password, $gender, $specialization, $license, $institution, $language, $designation) )
{
          echo "Doctor registered successfully!";
          header("Location: ../View/login.php");      }
        $mydb->closeCon($conn);
    }
}
?>