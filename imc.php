<?php
    header("Content-type:text/html;charset=UTF-8" );
    //variaveis
    //die mata a execucao do codigo
    //var_dump 
    //var_dump($_POST);die();
    $altura=0;
    $peso=0;
    $msg="";
    $nome="";
    //calculos
    //isset() -> valida se uma variavel existe
    //empty( )-> valida se a varavel esta vazia
    // ! retorna a negação de algo 
    //validar se o usuario prencheu o formulario
    if(isset($_POST["altura"]) && !empty($_POST["altura"]) 
    && isset($_POST["peso"]) && !empty($_POST["peso"])
    && isset($_POST["nome"]) && !empty($_POST["nome"])
    && isset($_POST["calcular"]))
    {
        //receber os valores do html
        $altura=($_POST["altura"]/100);
        $peso=$_POST["peso"];
        $nome=$_POST["nome"];
        $imc=$peso/($altura*$altura);
        echo('<img href="">');
    if($imc < 16)
    {
        echo("<h1>Usuario: ".$nome."<br>");
        echo("Peso: ".$peso."Kg <br>");
        echo("Altura: ".$altura."M <br>");  
        $msg="Situaçao:<label style='color: grey'>Peso Deficitario</label><br></h1>";//Resultado
        echo("$msg");
        echo "<img src='pesobaixo.png'><br>";
    }
    else if($imc>16 && $imc <18.5)
    {
        echo("<h1>Usuario: ".$nome."<br>");
        echo("Peso: ".$peso."Kg <br>");
        echo("Altura: ".$altura."M <br>");  
        $msg="Situaçao:<label style='color: #26ABE3'>Abaixo do Peso</label><br></h1>";//Resultado
        echo("$msg");
        echo "<img src='abaixopeso.png'><br>";
    }
    else if($imc>18.5 && $imc<24)
    {
        echo("<h1>Usuario: ".$nome."<br>");
        echo("Peso: ".$peso."Kg <br>");
        echo("Altura: ".$altura."M <br>");  
        $msg="Situaçao:<label style='color: #259E4D'>Normal</label><br></h1>";//Resultado
        echo("$msg");
        echo "<img src='pesonormal.png'><br>";
    }
    else if($imc>25 && $imc<30)
    {
        echo("<h1>Usuario: ".$nome."<br>");
        echo("Peso: ".$peso."Kg <br>");
        echo("Altura: ".$altura."M <br>");  
        $msg="Situaçao:<label style='color: #6B7F37'>Acima do Peso</label><br></h1>";//Resultado
        echo("$msg");
        echo "<img src='acimadopeso.png'><br>";
    }
    else if($imc>30 && $imc<35)
    {
        echo("<h1>Usuario: ".$nome."<br>");
        echo("Peso: ".$peso."Kg <br>");
        echo("Altura: ".$altura."M <br>");  
        $msg="Situaçao:<label style='color: #F0A91D'>Obesidade1</label><br></h1>";//Resultado
        echo("$msg");
        echo "<img src='obesidade1.png'><br>";
    }
    else if($imc>35 && $imc<40)
    {
        echo("<h1>Usuario: ".$nome."<br>");
        echo("Peso: ".$peso."Kg <br>");
        echo("Altura: ".$altura."M <br>");  
        $msg="Situaçao:<label style='color: #E9752C'>Obesidade2</label><br></h1>";//Resultado
        echo("$msg");
        echo "<img src='obesidade2.png'><br>";
    }else{
        echo("<h1>Usuario: ".$nome."<br>");
        echo("Peso: ".$peso."Kg <br>");
        echo("Altura: ".$altura."M <br>");  
        $msg="Situaçao:<label style='color: red'>Obesidade3</label><br></h1>";//Resultado
        echo("$msg");
        echo "<img src='obesidade3.png'><br>";
    }
}    
   
    //saida de usuario
   
    echo("<a href=index.html>Voltar</a>");
?>