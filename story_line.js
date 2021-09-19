document.addEventListener("DOMContentLoaded", function(event) {

    //$(".icon_post").attr('src', 'Usuario.jpg');

    $('#pesquisar_post').click(function(){
         
        
        var pes =$('#pes').val();

        var ps = $(".texto").get();

                $(".post").css("display","none");
                


                ps.forEach(obj => {
                
                
                    if(obj.innerHTML.includes(pes))
                         console.log( $(obj.closest(".post")).css("display","block"))
                
                
                
                
                })

                $("#poste").css("display","block");
            
    })



})