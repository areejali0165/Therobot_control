<?php
//connection to server & database 
$servername ="localhost";
$username ="root";
$password ="";
$dbname="db1";
$conn = mysqli_connect ($servername, $username, $password, $dbname);
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;


//forward

if(isset($_POST['forward'])){

    $my_query = "select * from direction WHERE 1 ";
    $res = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO direction (forward) VALUES ('f')";
    $res = mysqli_query($conn, $my_query);
    if($res)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR";
    }
//right

}else if(isset($_POST['right'])){

    $my_query = "select * from direction WHERE 1 ";
    $res = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO direction (right_direction) VALUES ('r')";
    $res = mysqli_query($conn, $my_query);
    if($res)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR";
    }
//stop

}else if(isset($_POST['left'])){

    $my_query = "select * from direction WHERE 1 ";
    $res = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO direction (left_direction) VALUES ('l')";
    $res = mysqli_query($conn, $my_query);
    if($res)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR";
    }


//stop
}else if(isset($_POST['stop'])){

    $my_query = "select * from direction WHERE 1 ";
    $res = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO direction (stop) VALUES ('s')";
    $res = mysqli_query($conn, $my_query);
    if($res)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR";
    }

//backward
}else if(isset($_POST['backward'])){

    $my_query = "select * from direction WHERE 1 ";
    $res = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO direction (backward) VALUES ('b')";
    $res = mysqli_query($conn, $my_query);
    if($res)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR";
    }


}





?>
