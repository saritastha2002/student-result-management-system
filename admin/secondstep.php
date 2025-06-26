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
<link rel="stylesheet" href="../csss/secondstep.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<style>
    label{
        text-align:left;
    }
</style>
</head>
<body>

      <div class="container">
          
          <form method="post" action="thirdstep.php">
              <h3 class=m_text> Add Exam mark</h3>
              <!-- <input type="hidden" name="class" class="class" value="11 ?>" required/> -->
          <input type="hidden" name="class" class="class" value="<?php  echo $_POST['class']; ?>" required/>
          <!-- <input type="hidden" name="rollno" class="rollno" value="11" required/> -->
          <input type="hidden" name="rollno" class="rollno" value="<?php  echo $_POST['rollno']; ?>" required/>
          <br>
            <h4>First Exam (A)</h4>   
            <label>Nepali : </label> 
            <input type='number' name='nepali1' placeholder='Nepali'  min='0' max='100' required/> <br>
            <label>English : </label> 
            <input type='number' name='english1' placeholder='English' min='0' max='100'  required/> <br>
            <label>Math : </label> 
            <input type='number' name='math1' placeholder='Math' min='0' max='100' required/> <br>
            <label>Science : </label>
            <input type='number' name='science1' placeholder='Science'min='0' max='100'  required/> <br>
            <label>Social : </label>
            <input type='number' name='social1' placeholder='social' min='0' max='100' required/> <br></br>
                  
            
          <span> <h4>Second Exam(B)</h4> </span>              
                <label>Nepali : </label>
                <input type='number' name='nepali2' placeholder='nepali' min='0' max='100' required/> <br>
                <label>English : </label>
                <input type='number' name='english2' placeholder='English' min='0' max='100' required/> <br>
                <label>Math : </label>
                <input type='number' name='math2' placeholder='Math'min='0' max='100'  required/><br>  
                <label>Science : </label>
                <input type='number' name='science2' placeholder='Science' min='0' max='100' required/> <br>
                <label>Social : </label>  
                <input type='number' name='social2' placeholder='Social' min='0' max='100' required/> 
                <br>     
             <input type="submit" name="submit" value="Submit" class="btn"/>     
       </form>
      </div>
    </header>   
</body>
</html>
<?php
if(isset($_POST['submit1']))
{ 
    include('../dbcon.php');
    $username=$_POST['name'];
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    
    
    $sql="INSERT INTO Student_data(name,class,rollno) VALUES ('$username','$class','$rollno')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>
