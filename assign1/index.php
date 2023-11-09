<?php
$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);
    
    if(!$conn){
        die("connection failed" . mysqli_connect_error());
    }
    
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    
    $sql="INSERT INTO `form`.`form2` (`name`, `email`, `gender`, `city`) VALUES('$name', '$email', '$gender', '$city');";
    

    if($conn->query($sql) == true){
        $insert = true;
       }
    else{
        echo "ERROR: $sql <br> $conn->error";
        $status = false;
    }
    $conn->close();
}
?>
<html>
    <head>
        <title>ASSIGNMENT 1</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <img class="bg" src="i.jpeg">
    <div class="container">
        <h1>REGISTRATION FORM</h1>
        <p>*Enter all details carefully</p>
        
       
        <form action="index.php" method="post">
            NAME: &nbsp; &nbsp;<input type="text" name="name" id="name" placeholder="Enter your name" style="width: 50%; height: 35px;"><br><br>
            E-MAIL: &nbsp; &nbsp;<input type="email" name="email" id="email" placeholder="Enter your email" style="width: 50%; height: 35px;"><br><br>
            Gender:
                <input type="radio" class="container" name="gender" value="MALE"> MALE
                <input type="radio" class="container" name="gender" value="FEMALE"> FEMALE 
                <input type="radio" class="container" name="gender" value="OTHER"> OTHER <br><br>
            City: &nbsp; &nbsp;<select  name="city">
                <option value="city" selected>Select City</option>
                <option value="nagpur">Nagpur</option>
                <option value="mumbai">Mumbai</option>
                <option value="pune">Pune</option>
                <option value="wardha">Wardha</option>
           </select><br><br>
        <button class="btn">Submit</button>  <br>  
    </form>

    
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $message = "Thank you $name for registration! ";
        echo '<p style="color:brown";>'.$message.'<p>';
    }
    ?>
    
    
    
</body>
</html>

