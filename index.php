
<?php

//connection 
$servername ="localhost";
$username ="root";
$password ="";
$dbname="db1";
$conn = mysqli_connect ($servername, $username, $password, $dbname);
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;


//operation
if(isset($_POST['opera'])){
    echo "<br>";
 $sql = "";

    $sql = $conn->query("UPDATE  slider SET off_on ='on'") ;
    if($sql===TRUE){
    
        echo "successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}

//motors
else if(isset($_POST['sav'])){
$mt1 = $_POST['mt1'];
$mt2 = $_POST['mt2'];
$mt3 = $_POST['mt3'];
$mt4 = $_POST['mt4'];
$mt5 = $_POST['mt5'];
$mt6 = $_POST['mt6'];  

$sql = "";
//$sql = "select * from slider WHERE 1";
//$rs = mysqli_query($conn, $sql) ;
// database insert SQL code
$sql = $conn->query("UPDATE  slider SET m1='$mt1',m2='$mt2', m3='$mt3', m4='$mt4', m5='$mt5', m6='$mt6'") ;
//$rs = mysqli_query($conn, $sql) ;
// insert in database

 if($sql===TRUE){
  echo "New record UPDATED successfully.  " ;
}else {
  echo "Error: ";
}
}

?>