<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <div class="container-fluid">
    <div class="row">
    <div class="col-6">
    <h1 class="mb-3 text-white text-center">IN REGULAR ORDER</h1>
    <?php
        
        $name = ['Mohit Kohli','Rohit Singh','Udit Kotiyal','Yesh Yadav','Chakshu Yadav','Kundan Panday'];
        $age = [21,22,22,21,23,21];
        $class = ['B.Voc','BCA','B.SC','B.Com','B.A','B.Tech'];
        for($i=0;$i<count($name);$i++){ ?>
        <ul class="list-group list-group bg-light shadow p-2 mb-2">
            <li class="list-group-item list-group-item-success"><b>Name:</b> <?php print_r($name[$i])?></li>
            <li class="list-group-item list-group-item-light"><b>Age:</b> <?php print_r($age[$i])?></li>
            <li class="list-group-item list-group-item-primary"><b>Class:</b> <?php print_r($class[$i])?></li>
        </ul>

        <?php
         }?>
    
    
    </div>
    <div class="col-6">
    <h1 class="mb-3 text-white text-center">IN REVERSE ORDER</h1>
    <?php
        

        for($i=(count($name)-1);$i>=0;$i--){ ?>
        <ul class="list-group list-group bg-light shadow p-2 mb-2">
            <li class="list-group-item list-group-item-success"><b>Name:</b> <?php print_r($name[$i])?></li>
            <li class="list-group-item list-group-item-light"><b>Age:</b> <?php print_r($age[$i])?></li>
            <li class="list-group-item list-group-item-primary"><b>Class:</b> <?php print_r($class[$i])?></li>
        </ul>

        <?php
         }?>
    
    
    </div>
    </div>
    </div> 
    
    
</body>
</html>