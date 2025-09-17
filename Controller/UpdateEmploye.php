<?php
require_once('../Model/employerInfoModel.php');

$id = $_POST['id'];
$employer_name = $_POST['employer_name'];
$company_name = $_POST['company_name'];
$contact_no = $_POST['contact_no'];
$username = $_POST['username'];

$result = updateEmployer($id, $employer_name, $company_name, $contact_no, $username);

header("Location: ../View/EmployeInfo.php");
exit();
?>