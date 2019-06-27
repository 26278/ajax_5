<?php

include 'dbVars.php';               //inlog gegevens
$resultArray = array();         //Array voor de jQuery output
$search = $_GET['q'];           //Let op: Niet beschermd tegen SQL injection
$type = $_GET['type'];          //Let op: Niet beschermd tegen SQL injection
$con = mysqli_connect($servername, $uid, $pwd, $database);  //Bereid connectie voor

//Check of connectie mogelijk is
if (!$con) {

}

mysqli_select_db($con, "world");
$sql = "SELECT * FROM Country WHERE name LIKE '$search%' ";
//list = lijst van landen
if ($type == "list"){
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result)) {
  $resultArray[]=$row['Name'];
  }
  echo json_encode($resultArray);           //resultaat naar client als JSON gecodeerde string
}
if ($type == "answer"){};
mysqli_close($con);
?>
