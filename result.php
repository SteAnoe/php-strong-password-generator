<?php
include __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Php pass gen</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        body{
            height: 100vh;
            background-color: rgb(40, 41, 40);
        }
        span{
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center text-white">
            <div>
                <span>Password: </span>
                <span class="bg-success"><?php echo generatePassword($password_length) ?></span>
            </div>
            <a href="index.php" class="btn btn-primary mt-2">try again</a>
        </div>
        
    </div>
    
</body>
</html>
