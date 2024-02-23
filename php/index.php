<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antsybor</title>
    <link rel=stylesheet type="text/css" href="css/style.css">
</head>
<body>
    <form action="" method="GET">
        <input type="submit" name="knopka">
    </form>
    <?php
        if(isset($_GET['knopka'])) {
            $array = array();
            for ($i = 0; $i <= 0; $i++) {
                $array[] = rand(1, 100); 
            }
            foreach ($array as $arrayy) {
                echo $arrayy. " ";
            }
            if($array[0] > 50){
                $fon = "red";
                echo $fon;
            }
            else if($array[0] < 50){
                $fon = "blue";
                echo $fon;
            }
            else {
                $fon = "green";
                echo $fon;
            }
        }
    ?>
    <div class="<?=$fon?>">
        
    </div>
</body>
</html>