<?php 
    use OOP\Vehicles; 
    use OOP\Masina; 
    use OOP\Dviratis; 
    use OOP\Motociklas; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=3.0">
        <title>PHP OOP demo</title>
    </head>
    <body>
        <?php
            $masina = new Masina('AMG', 'Mercedes');
            echo $masina . "<br>"; 
            $dviratis = new Dviratis('3000', 'Bmx');
            echo $dviratis . "<br>"; 
            $bike = new Motociklas('800', 'suzuki');
            echo $bike . "<br>"; 
            $transportas = new Vehicles('x', 'Tesla');
            echo $transportas . "<br>"; 
          
            

        ?>
    </body>
</html>