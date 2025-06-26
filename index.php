<html>
<head>
    <title>Student Result Management System</title>
    <link rel="stylesheet" href="csss/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">

    <style>
        body{
            background-image: url("./background.jpg");
            background-size: cover;
            max-width: 100%;
  max-height: 100%;
        }
    </style>
</head>
<body>
<nav>
        <a href="index.php" class="logo">Results</a>
        <a href="login.php" class="btn">login</a>
     </nav>
    <section class="sec">
            <form  method="post" action="result.php">
                <input type="text" name="class" required placeholder="Enter your Class"/>
                <input type="text" name="rollno" required placeholder="Enter your Roll number"/><br>
                <input type="submit" name="submit" value="SUBMIT" class="sub"/>
            </form>
        
      </section>
</body>
</html>
