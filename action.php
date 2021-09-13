<?php


    echo "<script> alert('Entrou'); </script>";
    
    $conn = new mysqli("localhost", "root", "", "Gabriel");
                            

    $sql = mysqli_query($conn,"SELECT Usuario from Facebook_Copia where id=1;");

    if($sql)
    {
        while( $row = mysqli_fetch_row($sql))
        {
            $usuário = $row[0];
        }
    
    }
   


    if(isset($_FILES['imagem_usuario']))
    {
        $imagem_usuario = $_FILES['imagem_usuario'];

        if(move_uploaded_file($imagem_usuario['tmp_name'], 'Usuario.jpg'));
          echo "<script> alert('Enviado') </script>";
        

    }



    if((strpos($_FILES['Image']['name'],'.') == TRUE) && isset($_POST['texto_post']) )
    {
       
      $image = $_FILES['Image'];
      $texto_post = $_POST['texto_post'];

        if(move_uploaded_file($image['tmp_name'], 'img/'.date("dmYhis").$image['name']));
            echo "<script> alert('Enviado') </script>";
        
        
        $conn = new mysqli("localhost", "root", "", "Gabriel");
        $sql= "Insert into Facebook_Copia values ('".$usuário."','".date("dmYhis").$image['name']."','".$texto_post."','".date("d/m/Y")." as "
        .date("h:i.s")."', 0);"; 


          if($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }


    }


    if((strpos($_FILES['Image']['name'],'.') == FALSE) && isset($_POST['texto_post']))
    {
      $texto_post=$_POST['texto_post'];
        
            
        
        $conn = new mysqli("localhost", "root", "", "Gabriel");
        $sql= "Insert into Facebook_Copia values ('".$usuário."','none','".$texto_post."','".date("d/m/Y")." as "
        .date("h:i.s")."', 0);"; 


          if($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }


    }

    if(isset($_POST['put_name'])){




      $put_name = $_POST['put_name'];
      echo "<script> alert('Mudando nome') </script>";

       $conn = new mysqli("localhost", "root", "", "Gabriel");  
       $sql = "UPDATE Gabriel.Facebook_Copia set Usuario='".$put_name."';";


            if($conn->query($sql) === TRUE) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }



    }

    if(isset($_POST['apagar']))
    {
      $apagar=$_POST['apagar'];
      
      $conn = new mysqli("localhost", "root", "", "Gabriel");  
      $sql = "Delete from Gabriel.Facebook_Copia where id=".$apagar.";";


            if($conn->query($sql) === TRUE) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }

    }


    header("Location: story_line.php");
    die();

?>