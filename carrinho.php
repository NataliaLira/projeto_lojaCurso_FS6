<?php
 $nomeSistema = "Cursos Online";
 $usuario = ["nome"=>"Nati"];

 $categorias = ["Cursos", "Palestras", "Artigos","Workshop"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>arrinho</title>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center p-3">  
        <div id="logo">
        <h1><?php echo $nomeSistema;?></h1>
        </div>  

        <nav>
            <ul class="nav">

            <?php if (isset($usuario) && $usuario!= []) { ?> 
                <li class= "nav-item">
                    <a class="nav-link" href="#">Curso</a>
                </li>
                <li class= "nav-item">
                    <a class="nav-link" href="#">Olá <?php echo $usuario['nome'] ?> </a>
                </li>

            <?php }else { ?>
                
                <li class= "nav-item">
                    <a class="nav-link" href="#">Log In</a>
                </li>
                <li class= "nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>
                </li>
            <?php } ?>

            </ul>
        </nav>
    </header>

    <main>
    <div>
        <nav class= "bg-dark">
            <ul class= "nav d-flex justify-content-between p-3">

            <?php foreach($categorias as $categoria){ ?>
                <li class= "nav-item">
                    <a class="nav-link text-white" href="#"><?php echo $categoria; ?></a>
                </li>
            <?php } ?>    
               
            </ul>
        </nav>
    </div> 

    <section class="container">
       <div class="row">
            <div class="col-12">
                <h1>Carrinho de compras</h1>
            </div>    
            <div class="col-12">
                <div class="row card">
                    <div class="col-12">
                        <h3>Você está comprando o curso <?php echo $_GET['nomeProduto']; ?></h3>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form class= "d-flex flex-column p-3" method="post" action="sucesso.php">
                            <input type="text" name="nomeCompleto" placeholder="Digite seu nome">
                            <input type="text" name="cpf" placeholder="Digite seu CPF">
                            <input type="number" name="cartao" id="Digite o número do cartão">
                            <input type="date" name="validadecartao" placeholder="Digite a data de validade">
                            <input type="password" name="codigoCartao" placeholder="Digite o CV">
                            <button class="btn btn-success" type="submit">Finalizar Compra</button>
                        </form>
                    </div>
                </div>
            </div>
       </div>         
    </section>
    </main>
    
</body>
</html>