<?php
require_once 'vendor/autoload.php';
use App\classes\student;

$message='';


if (isset($_GET['delete'])){
    $id = $_GET['id'];
    $message = student::deleteStudentInfoById($id);
}




$queryResult = student::getStudentInfo();


//while ($student = mysqli_fetch_assoc($queryResult)){
//    echo "<pre>";
//    print_r($student);
//}



?>


<hr/>

<a href="view-20.php">Add students ||</a>
<a href="view-student.php">view students</a>





<h1 style="color: green"><?php echo $message; ?></h1>
<hr/>


<table border="1" width="700">
    <tr>
        <th>Id</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
        <th>Action</th>
    </tr>
    <?php while ($student = mysqli_fetch_assoc($queryResult)){ ?>
    <tr>
        <td><?php echo $student['id'] ;?></td>
        <td><?php echo $student['name'] ;?></td>
        <td><?php echo $student['email'] ;?></td>
        <td><?php echo $student['mobile'] ;?></td>
        <td>
            <a href="edit-student.php?id=<?php echo $student['id']; ?>">Edit</a>
            <a href="?delete=true&id=<?php echo $student['id']; ?>" onclick="return confirm('Are u sure to delete this');">Delete</a>
        </td>
    </tr>

    <?php }?>
</table>