<?php



    function getConnection() {
    $con = mysqli_connect('127.0.0.1', 'root', '', 'mydb');
    return $con;
}

    function insertDoctor($name, $dob, $email, $phone, $password, $gender, $specialization, $license, $institution, $language, $designation) {
        $conn =getConnection();
        $sql = "INSERT INTO Doctor (name, dob, email, phone, password, gender, specialization, license, institution, language, designation)
                VALUES ('{$name}', '{$dob}', '{$email}', '{$phone}', '{$password}', '{$gender}', '{$specialization}', '{$license}', '{$institution}', '{$language}', '{$designation}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        }
            return false;
        
    }
    
    

    


?>

