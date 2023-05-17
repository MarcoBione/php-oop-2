<?php

include __DIR__.'/DataBase/db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop | PHP</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <header class="container border-bottom border-secondary">
        <div>
            <h1 class="text-primary fw-bold">Pet Shop</h1>
        </div>
    </header>

    <main class="py-5">
        <div class="container border border-secondary">
            <div class="row" >
                <div class="col-4" <?php foreach($item as $products): ?>>

                    <div class="card">
                        <img src="<?php echo $item->img?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item->name?></h5>
                            <p class="card-text"><?php echo $item->type?></p>
                            <a href="#" class="btn btn-primary"><?php echo $item->price?></a>
                        </div>
                    </div>

                </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
    
</body>


</html>