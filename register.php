<?php
    include ('config.php');

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $images=$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];
    $std=$_POST['std'];
 
    if($password!=$cpassword){
        echo '<script>alert("Password didnot match");
        window.location="./tamplete/registration.php";
        </script>';
        
    }else{
        move_uploaded_file($tmp_name,"uploads/$images");
        $sql="INSERT INTO usersdata (name,mobile,password,photo,standard,status,votes) VALUES('$name','$mobile','$password','$images','$std',0,0)";
        // if ($con->query($sql) === TRUE) {
        //     echo "New record created successfully";
        //   } else {
        //     echo "Error: " . $sql . "<br>" . $con->error;
        //   }
        
        
        $result=mysqli_query($con,$sql);
        if($result){
        echo '<script>alert("Data inserted");
         window.location="../";
        </script>';
        }else{
            echo "registration error";
        }
    }
    
?>