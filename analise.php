<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="vierport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" >
    <title>Programação PHP</title>
    <style type="text/css">
        h2{
            text-align: left;
        }
    </style>


</head>  
<body>

    <header>
        <h3>Programação PHP Sandro</h3>
        <h4>Teste de conhecimento LTDA</h4>
    </header>
        <br>
    <section >
            
        <h1>Programação PHP</h1><br>
        <h2>Resultado da sua análise de crédito</h2><br>

<?php

     $nome = $_POST["nome"];

     $idade = $_POST["idade"];

     $salario = $_POST["salario"];
               
     echo "Olá Sr(a) <b>$nome</b>, abaixo está o resultado de sua solicitação:<br><br>";

     if($salario >= 2000 && $idade >= 18){

        echo "<h2>Parabéns, seu seguro foi aprovado, um de nossos(as) consultores(as) entrará em contato com você em breve!</h2><br>"; 

        echo "Agradecemos a confiança.<br><br>";

     }
     else{

        echo "<b>Infelizmente sua solicitação de crédito não foi aprovada neste momento.</b><br>";
        echo "Tente novamente em outro momento.<br>";

     }

?>


            
        <br>
        <a href="index.php"><b>VOLTAR AO INÍCIO</b> </a>
            

    </section>
        <br>
        
        
    <footer>

        <h3>Teste de aprendizado</h3>  
        <h4>Programação Web com HTML, CSS e PHP</h4>
        <br>
        <p class="rodape"><b>Contatos</b></p><br>
        <p class="rodape">E-mail: Sandro_s@outlook.com</p>
        <p class="rodape">WhatsApp: (51)993790429</p>
        <br>
        <p class="rodape">CNPJ: 00.000.000/0000-1</p>
        <p class="rodape">Desenvolvido por Edwy sandro almeida dos santos</p>
        <p class="rodape">CNPJ: 00.000.000/0001-00</p>
    </footer>


</body>
</html>