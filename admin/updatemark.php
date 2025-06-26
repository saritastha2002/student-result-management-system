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
    <title>Update Record</title>
<link rel="stylesheet" href="../csss/updatemark.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php"><b>HOME</b></a></li>
                <li class="logout"><a href="admindash.php"><b>DASHBOARD</b></a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form align="center" method="post" action="updatemark.php">
        <h3>Search Student and Update Marks</h3>
        <table class="table1">
             <label>Name:</label>
             <input type="text" name="name" class="box"/><br>
            <label>Class : </label>
            <input type="text" name="class" class="box"/><br>
            
            <label>Rollno : </label>
            <input type="text" name="rollno" class="box"/><br>

            <input type="submit" value="Search" name="submit" class="submit"/>

         </table>
         <table class="table2">
              <tr> 
                <th>Id</th>
                <th>Name</th>
                <th>Class</th>
                <th>Roll No</th>
                <th>Edit</th>
            </tr>
         <?php
            if(isset($_POST['submit']))
            {
                include('../dbcon.php');
                $class=$_POST['class'];
                $rollno=$_POST['rollno'];
                
                $sql="SELECT * FROM `student_data` WHERE `class`='$class'  AND `rollno`='$rollno' ";
                $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)<0)
                {
                     ?>
                     <script>
                     alert('No Record Found');
                     </script>
                    <?php
                }
                else
                {
                    
                 while($data=mysqli_fetch_assoc($run))  
                 {
                    
             ?>
                   <tr>
            <th class="student_class2"> <?php  echo $data['id'].'<br>'; ?></th>
            <th class="student_class2"> <?php  echo $data['name'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['class'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['rollno'].'<br>'; ?></th> 
            <th class="student_class2"><a href="updatemark_form.php?sid=<?php echo $data['rollno']; ?>">Edit</a></th> 
           
           </tr>    
              
               <?php  
                 }
                    
                }
               
            }
            
            ?>
              </table>   
      </form>
 </div>
 </header>
    
</body>
</html>
      
   