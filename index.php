<?php
                 
    $navigation = ['index' => 'Home', 'about' => 'Over ons', 'portfolio' => 'Portfolio', 'contact' => 'Contacteer ons'];
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Formulier GET-methode></title>
</head>
<body>
    <div class="container">
  

    <ul>
    <?php
        foreach ($navigation as $key => $value) {
           
        echo "<li> <a href=";
        echo " {$key } => {$value} ";                                //put $key into li and $value into href;
            
        
       


           
        }
    ?>

    </ul>

    </div>

 
    


</body>
</html>