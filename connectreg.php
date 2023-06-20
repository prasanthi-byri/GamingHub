<?php
 include_once ("connectreg.php");

 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "gaminghub";
 $conn = new mysqli($servername, $username, $password, $db);
 
 // Check connection
 //if ($conn->connect_error) {
 // die("Connection failed: " . $conn->connect_error);
 //} 
 //echo "Connected successfull
 /*if(isset($_POST['submit'])){
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cnfrmpassword=$_POST['cnfrmpassword'];
$con=mysqli_connect("localhost","root","","gaminghub");
$sql ="INSERT INTO `prasreg`(`fullname`,`username`, `email`, `password`,`cnfrmpassword`) VALUES ('$fullname','$username','$email','$password','$cnfrmpassword')";
if ($con->query($sql) === TRUE) {
echo "<script>alert('Feedback Submitted ! Thanks for the feedback 🙏')</script>";
}
else {
echo "Error: " . $sql . "<br>" . $con->error;
}
}*/
 if(isset($_POST['Submit']))
 {
     if(mysqli_num_rows(mysqli_query($conn," INSERT INTO admin  where 
         fullname='".$_POST['fullname']."' ,username='".$_POST['username']."' ,email='".$_POST['email']."', Password='".$_POST['Password']."', 
          and  cnfrmpassword='".$_POST['cnfrmpassword']."'"))>0)
     {
         echo 'signup successfull';  
     }   
     else
     {
         echo 'incorrect username  password';    
     }
 }
 ?>
 
 Welcome <?php echo $_POST["fullname"]; ?><br>

 Your username is: <?php echo $_POST["username"]; ?>
 <?php echo "<br>"?>

 Your email address is: <?php echo $_POST["email"]; ?>
 <?php echo "<br>"?>
 
 Your password is: <?php echo $_POST["pwd"]; ?>
 <?php echo "<br>"?>

 Your cnfrmpassword is: <?php echo $_POST["cnfrmpassword"]; ?>
 <?php echo "<br>"?>

