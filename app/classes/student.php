<?php

namespace App\classes;


class student
{

    private function dbConnection(){
        $hostName='localhost';
        $userName='root';
        $passWord='';
        $dbName='bitm-maruf-71';
        $link = mysqli_connect($hostName,$userName,$passWord,$dbName);
        return $link;
    }



    public function saveStudentInfo($data){
        $sql="INSERT INTO students(name,email,mobile)
              VALUES('$data[name]','$data[email]','$data[mobile]')";

        if(mysqli_query(student::dbConnection(),$sql)){
            $message= "Students info save successfully";
            return $message;

        }else{
            die('Query problem'.mysqli_error(student::dbConnection()));
        }
    }




    public function getStudentInfo(){
        $sql= "SELECT * FROM students";

        if(mysqli_query(student::dbConnection(),$sql)){
            $queryResult=mysqli_query(student::dbConnection(),$sql);

            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(student::dbConnection()));
        }
    }




    public function getStudentInfoById($id){
        $sql = "SELECT * FROM students WHERE id='$id' ";

        if(mysqli_query(student::dbConnection(),$sql)){
            $queryResult=mysqli_query(student::dbConnection(),$sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(student::dbConnection()));
        }
    }





    public function updateStudentInfoById($data){
        $sql = "UPDATE students SET name='$data[name]', email='$data[email]',mobile='$data[mobile]'
                WHERE id='$data[id]' ";

        if(mysqli_query(student::dbConnection(),$sql)){
            $queryResult=mysqli_query(student::dbConnection(),$sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(student::dbConnection()));
        }
    }





    public function deleteStudentInfoById($id){
        $sql = "DELETE FROM students WHERE id= '$id' ";

        if(mysqli_query(student::dbConnection(),$sql)){
            $message = "Student info delete successfully ";
            return $message;
        }else{
            die('Query problem'.mysqli_error(student::dbConnection()));
        }
    }




}