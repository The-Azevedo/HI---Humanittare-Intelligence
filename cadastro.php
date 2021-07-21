<?php 
include("conex.php"); // caminho do seu arquivo de conexão ao banco de dados 
$consulta = "SELECT * FROM usuario"; 
$con = $mysqli->$query($consulta) or die($mysqli->error); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HI - Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
</head>
<body>
    <header>
        <div class = "header" style="position: absolute;">
        <img src="https://media-exp3.licdn.com/dms/image/C510BAQHPiejCs29ehw/company-logo_200_200/0/1519885305000?e=2159024400&v=beta&t=rqLskwRjIBq8m_ZZX2BtW8aOFvdTLZ-gT2A_hmlvqaA" alt="HI - Humanittare Inteligence" width=40 height=40 style=float:left> 
          

        <div class="topnav">
            <a href="#">Home</a>
            <a href="#">Link</a>
            <a style=background-color:#ADFF2F>Cadastro</a>
            <a href="#" style="float:right">Logout</a>
        </div> 
        </div>
    </header>


    <div id="tabela" class="table" style="align-items: center; position: absolute;" >
        <table> 
            <tr> 
              <td>Grupo</td> 
              <td>Apolice</td> 

            </tr> 
            <?php while($dado = $con->fetch_array()) { ?> 
            <tr> 
              <td><?php echo $dado["Grupo"]; ?></td>
              <td><?php echo $dado["Apolice"]; ?></td> 

              <td> 
                <a href="usu_editar.php?codigo=<?php echo $dado['Grupo']; ?>">Editar</a> 
                <a href="usu_excluir.php?codigo=<?php echo $dado['Apolice']; ?>">Excluir</a> 
              </td> 
            </tr> 
            <?php } ?> 
          </table> 

    </div>
</body>
</html>