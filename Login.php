<?php 
    if ($_SERVER ["REQUEST_METHOD"] =="POST"){
        $username = $_POST["username"];
        $password= $_POST["password"];
        if ($username=="shameem" && $password=="123"){
            setcookie("username","$username",time()+60);
            header("Location: dashboard.php");
        }
    } 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="username"> <br>
        Password: <input type="password" name="password"> <br>   
        <input type="submit" name="submit" value="Log In"> 
    </form>
</body>
</html>