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
<?php
include('../dbcon.php');
$rollno=$_GET['sid'];


$sql="SELECT * FROM `student_data` WHERE `rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);

$class=$row['class'];

$sql2="SELECT * FROM `user_mark` WHERE `class`='$class'";
$run2=mysqli_query($con,$sql2);
$data=mysqli_fetch_assoc($run2);

//combine Table///


?>
<html>
<head>
    <title>Update Mark Detail</title>
<link rel="stylesheet" href="../csss/updatemark_form.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
            <li><a href="../index.php"><b>HOME</b></a></li>
            <li><a href="admindash.php"><b>DASHBOARD</b></a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
      <form method="post" action="update_mark_data.php">
          <table>
             <h4> 
                <tr>
                  <th>Student Name: </th>
                  <td><span class="span"><?php echo $row['name']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Class: </th>
                  <td><span class="span"><?php echo $row['class']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Rollno: </th>
                  <td><span class="span"><?php echo $row['rollno']; ?></span></td>
                </tr>
              </h4>
                  </table>
          <table class="table1">
              <span> <h3 class="h_3">First Exam (A)</h3></span>
             <tr>
                <th>Nepali</th>   <th> English </th> <th>Math</th> 
             </tr>
             <tr>
                 <td>
                <input type='text' name='nepali1' value="<?php echo $data['nepali1']; ?>" class="th" required/></td>
                 <td><input type='text' name='english1' value="<?php echo $data['english1']; ?>" class="th"/></td>
                 <td><input type='text' name='math1' value="<?php echo $data['math1']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Science</th>   <th>Social</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='science1' value="<?php echo $data['science1']; ?> " class="th" required/></td>
                 <td><input type='text' name='social1' value="<?php echo $data['social1']; ?> " class="th" required/></td>
                 
             </tr>
             
         </table>
          <span> <h2 class="h3">Second Exam(B)</h2> </span>
         <table class="table4">
             <tr>
                <th>Nepali</th>   <th> English </th> <th>Math</th>
             </tr>
             <tr>
                 <td><input type='text' name='nepali2' value="<?php echo $data['nepali2']; ?> " class="th" required/></td>
                 <td><input type='text' name='english2' value="<?php echo $data['english2']; ?> " class="th" required/></td>
                 <td><input type='text' name='math2' value="<?php echo $data['math2']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Science</th>   <th>Social</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='science2' value="<?php echo $data['science2']; ?> " class="th" required/></td>
                 <td><input type='text' name='social2' value="<?php echo $data['social2']; ?> " class="th" required/></td>
                 </tr>
             <tr>
             <td><input type="hidden" name="rollno" value="<?php echo $row['rollno']; ?>"/></td>
            </tr>
             <tr>
             <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>   
             </tr>
             
        </table>
         
       
      </form>
      </div>
    </header>
    
</body>
</html>