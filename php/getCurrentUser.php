<?php
  session_start();
  include "./config.php";

  
  
  $user = $_SESSION['user'];
  $sql = "SELECT * FROM alunos WHERE login='$user'";
  $result = mysqli_query($con, $sql);
  if(!$result){
    echo 3;
  }
  while($row = $result->fetch_assoc()){
      echo $row['nome'];
    }


?>