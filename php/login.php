 <?php
 include "config.php";
 session_start();


 $user = $_POST['user'];
 $password = $_POST['password'];

          if(empty($user)||empty($password)){
            echo 2;
          }
          $sql = "SELECT * FROM alunos WHERE login='$user'";
          $result = mysqli_query($con, $sql);
          if(!$result){
            echo 3;
          }
          while($row = $result->fetch_assoc()){
              if($row['senha'] === $password){
                echo 1;
                $_SESSION['user'] = $user;
              } else {
                echo 0;
              }
            }
?>