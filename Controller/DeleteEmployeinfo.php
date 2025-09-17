<?php
require_once('../Model/employerInfoModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    
    
    if (!is_numeric($id) || $id <= 0) {
        header("Location: ../View/EmployeInfo.php");
        exit();
    }
    
    
    $result = deleteEmployer($id);
    
    if ($result) {
        header("Location: ../View/EmployeInfo.php");
        exit();
    } else {
        header("Location: ../View/EmployeInfo.php");
        exit();
    }
} else {
    
    header("Location: ../View/EmployeInfo.php");
    exit();
}
?>