<?php
require_once('../Model/employerInfoModel.php');

if ($_POST['action'] == 'update') {
    $id = $_POST['id'];
    $employer_name = $_POST['employer_name'];
    $company_name = $_POST['company_name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    
    updateEmployer($id, $employer_name, $company_name, $contact_no, $username);
}

$employers = getAllEmployers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employer List</title>
</head>
<body>
    <h1>Employer List</h1>
    
    <table border="1">
        <tr>
            <th>ID</th><th>Name</th><th>Company</th><th>Contact</th><th>Username</th><th>Actions</th>
        </tr>
        <?php foreach ($employers as $employer): ?>
        <tr>
            <td><?php echo $employer['id']; ?></td>
            <td><?php echo $employer['employer_name']; ?></td>
            <td><?php echo $employer['company_name']; ?></td>
            <td><?php echo $employer['contact_no']; ?></td>
            <td><?php echo $employer['username']; ?></td>
            <td>
                <button onclick="showUpdateForm(<?php echo $employer['id']; ?>)">Update</button>
                
                <form method="POST" action="../Controller/DeleteEmployeInfo.php" style="display: inline;">
                    <input type="hidden" name="id" value="<?php echo $employer['id']; ?>">
                    <input type="submit" value="Delete">
                </form>
                
                <div id="updateForm<?php echo $employer['id']; ?>" style="display: none;">
                    <form method="POST">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="id" value="<?php echo $employer['id']; ?>">
                        
                        <input type="text" name="employer_name" value="<?php echo $employer['employer_name']; ?>">
                        <input type="text" name="company_name" value="<?php echo $employer['company_name']; ?>">
                        <input type="text" name="contact_no" value="<?php echo $employer['contact_no']; ?>">
                        <input type="text" name="username" value="<?php echo $employer['username']; ?>">
                        
                        <input type="submit" value="Save">
                        <button type="button" onclick="hideUpdateForm(<?php echo $employer['id']; ?>)">Cancel</button>
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script>
        function showUpdateForm(id) {
            document.getElementById('updateForm' + id).style.display = 'block';
        }
        
        function hideUpdateForm(id) {
            document.getElementById('updateForm' + id).style.display = 'none';
        }
    </script>
</body>
</html>