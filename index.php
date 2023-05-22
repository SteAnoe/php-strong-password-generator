<?php

session_start();
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
    </style>
</head>
<body>
    
    <div class="container text-white">
        <div>
           <h1>Password Generator</h1>
            <form action="result.php" method="GET">
                <div>
                    <label for="password-length" class="form-label">Password Length:</label>
                    <input type="number" value="<?php echo $password_length; ?>" name="password-length" class="form-control" id="password-length" min="8" max="24">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Genera</button>
            </form> 
        </div>
        
    </div>
</body>
</html>