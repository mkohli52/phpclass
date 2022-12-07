<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<?php
        $items =json_decode(file_get_contents('https://dummyjson.com/products'));
        // echo '<pre>';
        // print_r($items)
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php 
                for($i=0;$i<count($items->products);$i++){
            ?>
            <div class="card mb-2 me-2" style="width: 18rem;">
                <img src="<?php echo $items->products[$i]->images[0]; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $items->products[$i]->title; ?></h5>
                        <p class="card-text"><?php echo $items->products[$i]->description; ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
            <?php }?>
        </div>
    </div>
</body>
<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>