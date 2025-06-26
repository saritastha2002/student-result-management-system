<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>

<html>
<head>
    <title>Homepage</title>
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">

</head>
<body>
    
    
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $nepali1=$_POST['nepali1'];
    $english1=$_POST['english1'];
    $math1=$_POST['math1'];
    $science1=$_POST['science1'];
    $social1=$_POST['social1'];
    
    $nepali2=$_POST['nepali2'];
    $english2=$_POST['english2'];
    $math2=$_POST['math2'];
    $science2=$_POST['science2'];
    $social2=$_POST['social2'];
    
    $sql="INSERT INTO `user_mark`(`rollno`,`class`,`nepali1`, `english1`, `math1`, `science1`, `social1`, `nepali2`, `english2`, `math2`, `science2`, `social2`) VALUES ('$rollno','$class','$nepali1','$english1','$math1','$science1','$social1','$nepali2','$english2','$math2','$science2','$social2')";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Inserted Succesfully');
        window.open('admindash.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
}
?>