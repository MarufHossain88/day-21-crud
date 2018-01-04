<?php
require_once 'vendor/autoload.php';
use App\classes\student;

$id= $_GET['id'];
$queryResult=student::getStudentInfoById($id);
$student=mysqli_fetch_assoc($queryResult);

//echo '<pre>';
//print_r($student);

$message='';
if(isset($_POST['btn'])){
    $message=student::saveStudentInfo($_POST);
}

?>

<hr/>

<a href="view-20.php">Add students ||</a>
<a href="view-student.php">view students</a>





<h1 style="color: green"><?php echo $message; ?></h1>
<hr/>




<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td>
                <input type="text" name="name" value="<?php echo $student['name']; ?>">
                <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" value="<?php echo $student['email']; ?>"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="number" name="mobile" value="<?php echo $student['mobile']; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="update"></td>
        </tr>
    </table>
</form>
