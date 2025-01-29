<?PHP

$conn= mysqli_connect("localhost" , "root" ,'','todoapp');
if(isset($_GET['id'])){

  session_start() ;
  $id= $_GET['id'] ;
$sql= "DELETE FROM todolist WHERE id = $id ";
$result= mysqli_query($conn,$sql) ;
// header("location: ../index.php") ;

if (mysqli_affected_rows($conn)== 1){
  $_SESSION['success'] ="data  insert succesfully" ;
} elseif (mysqli_affected_rows($conn)== 0){
 echo "404 not found!" ;
 die;
}


}
?>