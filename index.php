<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <?php require_once("header.php") ?>
    <main>

        <section class="container mt-4">
            <div class="row justify-content-between">

            <?php if(isset($produtos) && $produtos != []){ ?>    
            <?php foreach($produtos as $produto){ ?>
                    <div class="col-lg-3 card text-center">
                        <h1><?php echo $produto['nome']; ?></h1>
                        <img src= "<?php echo $produto['imagem']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-text"><?php echo $produto['preco']; ?></h5>
                                <a href="carrinho.php?nomeProduto=<?php echo $produto['nome']; ?>" class="btn btn-primary">Comprar</a>
                            </div>
                    </div>
            <?php } ?> 
            <?php } else { ?>     
                    <h1> Não tem produtos cadastrados nessa sessão ;( </h1>
            <?php } ?>       
            </div>
        </section>
    </main>
    
</body>
</html>