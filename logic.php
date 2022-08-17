<?php 
    $conn = mysqli_connect("localhost","root","","gaurav_blog");
    // $conn = mysqli_connect("127.0.0.2","gauravhb_blog","gaurav02","gauravhb_blog");

    if(!$conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'> Connection not established succesfully</h3>";
    }

    $sql = "select * from post";
    $query = mysqli_query($conn,$sql);




    if(isset($_REQUEST["id"])){
        $id = $_REQUEST['id'];
        $sql = "select * from post where id = $id";
        $query = mysqli_query($conn,$sql);
    }

    if(isset($_REQUEST["update"])){
        $title = $_REQUEST['title'];
        $id = $_REQUEST['id'];
        $content = $_REQUEST['content'];

        $sql = "update post set title='$title' , Content ='$content' where id = $id ";
        mysqli_query($conn,$sql);
        header("location: index.php?info=updated");
        exit();
    }

    if(isset($_REQUEST["delete"])){
        $id = $_REQUEST['id'];
        $sql = "delete from post where id = $id";
        $query = mysqli_query($conn,$sql);
        header("location: index.php?info=deleted");
        exit();
    }

    if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from login where email = '$email'";
        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);
        if($count>0){
            echo "<p>Email Already Exist.</p>";
        }
        else{

            $sql = "INSERT INTO login(name, email,password) VALUES('$name','$email','$password')";
            mysqli_query($conn,$sql);
            header("location: index.php?info=signup");
            exit();
        }
    }

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $sql = "INSERT INTO contact(name, email,subject,msg) VALUES('$name','$email','$subject','$message')";
        mysqli_query($conn,$sql);
        header("location: index.php?info=contact");
        exit();
    }

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql= "SELECT * FROM login WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count>0){


            header("location: index.php?info=login");        
                session_start();
                        $_SESSION['name'] = $email;
                        exit();

    
        }
        else{
            header("location: index.php?info=loginfail");
        }

    
        // $check = mysqli_fetch_array($result);
        // if(isset($check)){
        //     session_start();
        //         $_SESSION['name'] = $email;

        //     header("location: index.php?info=login");
        //     exit();
        //     }else{
        //         header("location: index.php?info=loginfail");
        //         exit();
        //     }
    }

    if(isset($_POST['logout'])){
        session_destroy();
 
            header("location: index.php");

    }

    
    if(isset($_REQUEST["submit"])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        session_start();
        $user = $_SESSION['name'];
        $sql = "INSERT INTO post(title, content,user) VALUES('$title','$content','$user')";
        mysqli_query($conn,$sql);

        header("location: index.php?info=added");
        exit();
    }
?>