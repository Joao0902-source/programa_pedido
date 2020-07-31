
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="reset.css" rel="stylesheet" type="text/css" />
<link href="css/estilos.css" rel="stylesheet" type="text/css" />

</head>


<body>

    <div class="div-conteudo">

     

        <div class="div-formulariobordadiv">



            <form action="querecebe.php" method="POST" enctype="multipart/form-data" class="form">
                <div class="bordadiv">
                    <p class="titulo-form" style="font-size: 25px;"><i class="fa fa-user" aria-hidden="true">  Peça galão<p></i>
                    

                  

                    <div class="linha">
                        <label class="lbl-dadospessoais" for="Nome da Mãe"><i class="fa fa-female" aria-hidden="true"> Nome:</label></i>
                        <input type="text" name="nome" id="nome" placeholder="Digite o seu nome"  maxlength="40">
                    </div>

                    <div class="linha">
                        <label class="lbl-dadospessoais" for="endereço"><i class="fa fa-male" aria-hidden="true"> Endereço:</label></i>
                        <input type="text" name="endereço" id="endereço" placeholder="Digite o seu endereço"  maxlength="40">
                    </div>

                    <div class="linha">
                        <label class="lbl-dadospessoais" for="numero"><i class="fa fa-mobile" aria-hidden="true"> Numero da residência:</label>
                        <input type="text" name="numero" size="1" placeholder="N">
                    </div>
                    
                     <div class="linha">
                        <label class="lbl-dadospessoais" for="tipogalao"><i class="fa fa-envelope-o" aria-hidden="true"> Tipo de galão:</label></i>
                       <select name="tipogalao">
                           <option>0.5L</option>
                            <option>1L</option>
                             <option>1.5L</option>
                              <option>2L</option>
                               <option>2.5L</option>
                       </select>

                    </div>

                    <div class="linha">
                        <label class="lbl-dadospessoais" for="quant"><i class="fa fa-envelope-o" aria-hidden="true"> Quantidade de galões:</label></i>
                        <input type="number" name="quant" id="quant" placeholder="N"  style="width: 50px">

                    </div>


                   

                </div>
                
                         

                           
                <div class="botoes">
                    <button type="submit" name="enviar" aria-expanded="true" class="botao1"><i class="fa fa-check" aria-hidden="true"> Enviar formulário</button></i>

                    <button type="reset" name="limpar" aria-expanded="true" class="botao2"> <i class="fa fa-times" aria-hidden="true"> Limpar formulário</button></i>

                     
                    
                </div>
                

            </form>


        </div>

    </div>

</body>
 
            
        </script>

</html>