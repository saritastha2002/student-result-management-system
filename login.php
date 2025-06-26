<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');	
}
?>
<html>
<head>
    <title>Login  here</title>

    <link rel="stylesheet" href="csss/login.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <style>
        body{
            background-image: url("./teacher.jpg");
            background-size: cover;
            max-width: 100%;
  max-height: 30%;
        }
    </style>
</head>
<body>
<nav>
        <a href="index.php" class="logo">Results</a>
        <a href="login.php" class="btn">login</a>
    </nav>
    
      <section class="sec">
        <form method="post" action="login.php">
        <h1>Login</h1>
          <input type="text" name="username" required placeholder="Enter your username"/>
          <input type="password" name="password" required placeholder="Enter your password"/><br>
          <input type="submit" name="submit" value="SUBMIT" class="sub"/>
       </form>
      </section>         
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    include('dbcon.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
        alert('Username or Password Not Match');
        window.open('login.php','_self');
        </script>
       <?php
    }
    else
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        header('location:admin/admindash.php');
    }
}
?>