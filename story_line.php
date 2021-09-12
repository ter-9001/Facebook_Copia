<!DOCTYPE html>
  <html>
      <head>
            <link rel="shortcut icon" 
            href="https://www.facebook.com/rsrc.php/yD/r/d4ZIVX-5C-b.ico?_nc_eui2=AeHWxq756WPR2zGVTeNFyNe6k5Q9qm8iHrqTlD2qbyIeuq9iPEnD7mihGuAwum4JME09LLTUgO_a9USa9mImE9kY"/>
            
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
             integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
             
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
             <script src="story_line.js"></script>

            <title> Facebook </title> 

              <link rel="stylesheet" href="story_line.css">
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        </head>
      <body>


            

            <nav style="padding: 5px 10px 5px 10px; background-color: rgb(26, 25, 25);
            display: flex; flex-direction: row; align-items: center;justify-content: space-between;">
               

               <div style="justify-content: start; display: flex; flex-direction: row;">
                        
                        
                            <img src="https://www.facebook.com/rsrc.php/yD/r/d4ZIVX-5C-b.ico?_nc_eui2=AeHWxq756WPR2zGVTeNFyNe6k5Q9qm8iHrqTlD2qbyIeuq9iPEnD7mihGuAwum4JME09LLTUgO_a9USa9mImE9kY"
                            class="icon_nav" style="margin-right: 10px;">
                       

                       
                            <form action="action.php" method="post" enctype="multipart/form-data">
                            <label style="height: 50px; width: 50px;
                            background-image:url('Usuario.jpg');background-repeat: no-repeat; background-size: 100% 100%;
                            border-radius: 50%;margin-right: 10px;">


                                <input name="imagem_usuario" onchange="form.submit()" type="file"/>

                            </label>
                            </form>
                       

                            <p class="usuario" style="font-family: Arial, sans-serif; font-size: 30px; 
                            font-style: oblique;">
                                Usuário
                            </p>
               </div>



              
               
                    <form class="form-inline">
                        <input class="form-control mr-sm-2"  type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>                
                
               
               


            </nav>    

            <div id="abaixodonav" class="container-fluid text-center" style="justify-content: left; background-color: rgb(44, 44, 44);" >

                <div class="row">

                    <div class="col-4">
    
                    </div>


                    <!-- Input color rgb(141, 141, 143) Post rgb(71, 71, 72);-->
    
                    <div class="col-4" id="todos_post">
    
                        
                        
                            <div id="poste" class="post" >
                                    
                                <form action="action.php" method="post" enctype="multipart/form-data">    
                                            
                                            <div style="display: flex; flex-direction: row; 
                                            border-bottom: solid rgb(58, 60, 60) 0.2px; margin: 10px;">

                                                        <img class="icon_post" />

                                                        <input style="background-color: rgb(105, 105, 106);
                                                        border: rgb(84, 85, 87) 1px solid; border-radius: 15%; width: 100%; height: 45px;
                                                        color: rgb(182, 182, 186);" type="text"
                                                        placeholder="No que você está pensando" name="texto_post"/>

                                            </div>


                                            <div id="envios" style="display: flex; flex-direction: row; width: auto; justify-content: space-between;">

                                                <label class="label_send"
                                                style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/vQA16taCsp9.png?_nc_eui2=AeE48VNbYGGO3rPBH7lLLyVXhBG3JHCj4n6EEbckcKPifjDZQKqcTcPhjvaHdQUzOZOFyK2Zq-5_3hgAIexTXaWP');
                                                background-position:0 0;background-size:auto;width:24px;height:24px;background-repeat:no-repeat;">

                                                    
                                                        
                                                            <input type="file" name="Live"/>
                                                        
                                                </label>


                                                <p class="icon_send"> Vídeo ao Vivo </p>


                                                <label class="label_send"
                                                style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/vQA16taCsp9.png?_nc_eui2=AeE48VNbYGGO3rPBH7lLLyVXhBG3JHCj4n6EEbckcKPifjDZQKqcTcPhjvaHdQUzOZOFyK2Zq-5_3hgAIexTXaWP');
                                                background-position:0 -275px;background-size:auto;width:24px;height:24px;background-repeat:no-repeat;display:inline-block">

                                                    
                                                        
                                                    <input type="file" name="Image"/>
                                                        
                                                </label>


                                                <p class="icon_send"> Foto/Video </p>


                                                <label class="label_send"
                                                style="background-image: url('https://www.facebook.com/rsrc.php/v3/yR/r/vQA16taCsp9.png?_nc_eui2=AeHIsxDfWEhPlYXuEby7UQFmwq3kOEfBW2LCreQ4R8FbYnQv1uWNSCFE9yQkuNAtm1XDtO8223fEQfpysFVytVty');
                                                background-position: 0px -392px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;">

                                                    
                                                        
                                                    <input type="file" name="Image2"/>
                                                        
                                                </label>


                                                <p style="display: inline-block;font-family: Helvetica, sans-serif;  
                                                color: rgb(182, 182, 186);"> Acontecimentos </p>


                                            </div>

                                            <div style="border-top: solid 0.2px rgb(58, 60, 60); padding: 20px 0 10px 0;">
                                                <input class="btn btn-primary" type="submit" value="Enviar"/> 
                                            </div>


                                </form>    
                            </div>


                            
                            <?php

                                    $success = new mysqli("localhost", "root", "", "Gabriel");

                                    $sql = mysqli_query($success,"SELECT * FROM Facebook_Copia 
                                    ORDER BY id DESC");

                                    if($sql)
                                    {
                                        while( $row = mysqli_fetch_row($sql))
                                        {
                                            if(strpos($row[1],".png") || strpos($row[1],".jpg") )
                                            {
                                                        echo  "<div id=\"post_imagem\" 
                                                    class=\"post\"> 
                                                    
                                                        <div style=\"display: flex; flex-direction: row; align-items:flex-end\">
                                                            <img class=\"icon_post\">
                                                            <p class=\"usuario\">".$row[0]."</p>
                                                            <p style=\"color: rgb(182, 182, 186);\"> Postado em ".$row[3]." </p>
                                                        </div>
                        
                                                        <div>
                                                            <img class=\"image_post\"
                                                            src=\"img\\".$row[1]."\"> 
                                                        </div>
                        
                        
                                                        <div style=\"padding-top: 10px ;margin: 0 0 20px 40px; border: solid rgb(58, 60, 60) 0.2px; border-top: none;\">
                                                            <p class=\"texto\">".$row[2]."</p>
                                                        </div>
                        
                                                    </div>";
                                            }





                                            if(strpos($row[1],".mp4") )
                                            {
                                                        echo  "<div id=\"post_imagem\" 
                                                    class=\"post\"> 
                                                    
                                                        <div style=\"display: flex; flex-direction: row; align-items:flex-end\">
                                                            <img class=\"icon_post\">
                                                            <p class=\"usuario\">".$row[0]."</p>
                                                            <p style=\"color: rgb(182, 182, 186);\"> Postado em ".$row[3]." </p>
                                                        </div>
                        
                                                        <div>
                                                            <video width=\"100%\" height=\"auto\" style=\"margin: 10px 0 0 0;\" controls>
                                                               <source src=\"img\\".$row[1]."\">
                                                            </video>
                                                            
                                                        </div>
                        
                        
                                                        <div style=\"padding-top: 10px ;margin: 0 0 20px 40px; border: solid rgb(58, 60, 60) 0.2px; border-top: none;\">
                                                            <p class=\"texto\">".$row[2]."</p>
                                                        </div>
                        
                                                    </div>";
                                            }






                                            if($row[1] == "none" )
                                            {
                                                        echo  "<div id=\"post_texto\" 
                                                        class=\"post\"> 
                                                        
                                                            <div style=\"display: flex; flex-direction: row; align-items:flex-end\">
                                                                <img class=\"icon_post\">
                                                                <p class=\"usuario\">".$row[0]."</p>
                                                                <p style=\"color: rgb(182, 182, 186);\"> Postado em ".$row[3]." </p>
                                                            </div>
                            
                                                            <div style=\"padding-top: 10px ;margin: 0 0 20px 40px;\">
                                                                <p class=\"texto\">".$row[2]."</p>
                                                            </div>
                            
                                                        </div>";
                                            }
                                        }
                                        
                                    }


                            
                            
                            ?>
                        
                           


                            
                           
    
    
                    </div>
                    
                    <div class="col-4">
    
                    </div>
    
    
                </div>


            </div>

      </body>
  </html>