<?php
    include("connection.php");
    if(isset($_POST["submit_button"]))
    {
        $name = $_POST["student_name"];
        $age = $_POST["student_age"];
        $course = $_POST["student_course"];
        $year_of_study = $_POST["student_year"];
        $email = $_POST["student_email"];

        $sql="select * from students where name='$name'";
        $result = mysqli_query($conn, $sql);
        $count_name = mysqli_num_rows($result);

        
        $sql="select * from students where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_email==0) {
          echo "<script>
                window.location.href='index.php';
                alert('Student information submitted successfully!');
                </script>";
            $sql = "insert into students(name, age, course, year_of_study, email) values('$name', '$age', '$course', '$year_of_study', '$email')";
             $result = mysqli_query($conn, $sql);
             if($result) {
             header("Location: information.php");
             }
        }
        else {
            if($count_email>0){
                echo "<script>
                window.location.href='index.php';
                alert('Student email already exists!');
                </script>";
            }
        }
            
    }

?>