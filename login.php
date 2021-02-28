
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َAnimated Login Form</title>
    <link rel="stylesheet" href="style.css">
<style>
    body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #34495e;
}
.box{
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
}
p{color:white;}

a:link{color:red;}

a:hover{color:green;}

</style>
  </head>
  <body>

<form class="box" action="" method="POST">
  <h1>Login</h1>
  <input type="text" name="nameee" placeholder="Username">
  <input type="password" name="passs" placeholder="Password">
  <input type="submit"  value="Login">
 <p> NEW USER?</p><a href="registeration.php">Register here</a>
</form>

<?php
    $server="localhost";
    $user="root";
    $pass="";
    $d="registeration";
    $con=mysqli_connect($server,$user,$pass,$d);
?>
<?php
    $name1=$_POST["nameee"];
    $name2=$_POST["passs"];
   
    if(isset($_POST["nameee"]))
    {
        $qry= "SELECT username from register WHERE username='$name1' and password1='$name2'";
        $res=mysqli_query($con,$qry) or die(mysqli_error());
        // if($res)
        //  {
        //      echo "found successfully";
        //      header("location:helloinphp.php");
        //  }     
        
        $row=mysqli_num_rows($res);
        if($row==1)
        {echo"credential matched";
        header("location:helloinphp.php");}

        else{echo"username or password is incorrect";}
    
    }
?>

  </body>
</html>
