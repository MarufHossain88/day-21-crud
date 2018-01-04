<?php
require_once 'vendor/autoload.php';
use App\classes\student;

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
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="text" name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>
