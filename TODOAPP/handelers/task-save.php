<?PHP


session_start();
$conn= mysqli_connect("localhost" , "root" ,'','todoapp');



if(!$conn){
  echo "connect error ." . mysqli_error($conn);
}




if($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST["task"]) && !empty($_POST["task"])){

  $text = trim(htmlspecialchars(htmlentities($_POST["task"])));
  echo $text ;

$sql ="INSERT INTO `todolist`(`value`) VALUES('$text')";
$result = mysqli_query($conn, $sql) ;
}
if (mysqli_affected_rows($conn)== 1){
  $_SESSION['success'] ="data  insert succesfully" ;
}

header("location: ../index.php") ;



?>