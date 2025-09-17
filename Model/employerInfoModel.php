<?php
require_once('databaseConnection.php');

function getAllEmployers() {
    $con = getConnection();
    $sql = "SELECT id, employer_name, company_name, contact_no, username FROM employers";
    $result = mysqli_query($con, $sql);

    $employers = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $employers[] = $row;
    }

    mysqli_close($con);
    return $employers;
}

function getEmployerById($id) {
    $con = getConnection();
    $sql = "SELECT * FROM employers WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $employer = mysqli_fetch_assoc($result);
    mysqli_close($con);
    return $employer;
}

function updateEmployer($id, $employer_name, $company_name, $contact_no, $username) {
    $con = getConnection();
    $sql = "UPDATE employers SET 
            employer_name = '$employer_name', 
            company_name = '$company_name', 
            contact_no = '$contact_no', 
            username = '$username'
            WHERE id = $id";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    return $result;
}

function deleteEmployer($id) {
    $con = getConnection();
    $sql = "DELETE FROM employers WHERE id = $id";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    return $result;
}


?>