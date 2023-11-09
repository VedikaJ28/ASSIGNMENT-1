<html>
    <head>
        <title>phppg</title>
        <link rel="stylesheet" href="style.css">
</head>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
$sql = "SELECT * FROM `form`.`form2`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo $num;
echo " Registrations till now<br>";

echo '<h3>REGISTRAIONS</h3>';
echo '<table border=1>';
echo '<tr>';
echo '<th>Sr No.</th>';
echo '<th>NAME</th>';
echo '<th>EMAIL</th>';
echo '<th>GENDER</th>';
echo '<th>CITY</th>';
echo '</tr>';
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>';
        echo $row['srno'];
        echo '</td>';
        echo '<td>';
        echo $row['name'];
        echo '</td>';
        echo '<td>';
        echo $row['email'];
        echo '</td>';
        echo '<td>';
        echo $row['gender'];
        echo '</td>';
        echo '<td>';
        echo $row['city'];
        echo '</td>';
        echo '</tr>';
        
    }
echo '</table>';      
       
    
?>
