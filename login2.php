<?php
if (isset($_POST['resname'])&& isset($_POST['password'])) {
     
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $fname = validate($_POST['firstname']);
    $lname = validate($_POST['lastname']);
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    $password = validate($_POST['password']);
    
    

    if (empty($fname)){
         header("Location: login2.php?error=name is required");
         exit(); 
    }else if(empty($password)){
         header("Location: login2.php?error=password is required");
         exit(); 
    }else{
        echo " ";
    }
}
else{
    header("Location: login2.php");
    exit();
}
 
$conn = mysqli_connect('localhost','root','','userdetails');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(fname,lname,username,email,password)values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$fname,$lname,$username,$email,$password);
    $stmt->execute();
    print("\n ");
    echo "<center><h1> REGISTRATION SUCCESSFUL</h1></center>";
    $stmt->close();
    $conn->close();
}
?>