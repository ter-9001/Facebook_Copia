<?php


    echo "<script> alert('Entrou'); </script>";
    
    $imagem_usuario = $_FILES['imagem_usuario'];
    $texto_post = $_POST['texto_post'];
    $image = "none"; 
    
       if (isset($_FILES['Image']))
        { 
          $image =$_FILES['Image'];
        }


    


    if(isset($imagem_usuario))
    {
        

        if(move_uploaded_file($imagem_usuario['tmp_name'], 'Usuario.jpg'));
          echo "<script> alert('Enviado') </script>";
        

    }



    if((strpos($image['name'],'.') == TRUE) && isset($texto_post) )
    {
       
        
        if(move_uploaded_file($image['tmp_name'], 'img/'.date("dmYhis").$image['name']));
            echo "<script> alert('Enviado') </script>";
        
        
        $conn = new mysqli("localhost", "root", "", "Gabriel");
        $sql= "Insert into Facebook_Copia values ('Usuário','".date("dmYhis").$image['name']."','".$texto_post."','".date("d/m/Y")." as "
        .date("h:i.s")."', 0);"; 


          if($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }


    }


    if((strpos($image['name'],'.') == FALSE) && isset($texto_post) )
    {
       
        
            
        
        $conn = new mysqli("localhost", "root", "", "Gabriel");
        $sql= "Insert into Facebook_Copia values ('Usuário','none','".$texto_post."','".date("d/m/Y")." as "
        .date("h:i.s")."', 0);"; 


          if($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }


    }

    


    header("Location: story_line.php");
    die();

?>