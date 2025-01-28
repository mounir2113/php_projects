<?php $conn= mysqli_connect("localhost" , "root" ,'','todoapp');
$sql= "SELECT * FROM `todolist` ";
$result= mysqli_query($conn,$sql) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>todo app</title>
</head>
<body>
 <div class="add-task">
  <form action="task-save.php" method="post">
    <input type="text" name="task">
    <input class="btn btn-success" type="submit" value="submit">
  </form>
  </div>

  <?PHP 
  session_start();
  if (isset($_SESSION['success'])):?>
  <div class="alert alert-success text-center">
  <?PHP echo $_SESSION['success'];
   unset($_SESSION['success']);?>
  </div>
  <?PHP endif ?>




  <table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">task</th>
      <th scope="col">date</th>
      <th scope="col">option</th>
    </tr>
  </thead>
  <tbody >
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
      <button type="button" class="btn btn-primary">edit</button>
      <button type="button" class="btn btn-danger">delete</button>
      </td>
    </tr>
    
  </tbody>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>