<?php
$servername = "localhost";
$username = "root";
$password = "*aC5P&FufXx#u1U$";
$dbname = "pickcross";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$limit = (intval($_GET['limit']) != 0 ) ? $_GET['limit'] : 10;
$offset = (intval($_GET['offset']) != 0 ) ? $_GET['offset'] : 0;

$sql = "SELECT * FROM master_content LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
  echo '  <article class="container-fluid"> ';
  echo ' <div class="row"> ';
  echo '<div class="title col-lg-11 col-md-11 col-sm-12 col-xs-12" style="margin-left: 17px; ">' ;     
echo " <a href='#'>".$row['title']."</a></div> ";
  echo ' </div> '; 
    
  echo ' <div class="row"> ';       
  echo ' <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> ' ; 
  echo ' <img src="#" class="img-responsive"></img> ';      
  echo ' </div> </div>';   

    
}



?>