<?php
session_start();
include('dbcon.php');

if(isset($_POST['save_student_btn']))
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];

        $query= "INSERT INTO student (full_name, email, phone, course) VALUES(:fullname, :email, :phone, :course)";
        $query_run = $pdo -> prepare($query);

        $data = [
            ':fullname' => $fullname,
            ':email' => $email,
            ':phone' => $phone,
            ':course' => $course
        ];

        $query_execute = $query_run->execute($data);

        if($query_execute){
            $_SESSION['message']="inserted successfully";
            header('location: index.php');
            exit(0);
        }
        else{
            $_SESSION['message']="not inserted";
            header('location: index.php');
            exit(0);
        }
    }
?>