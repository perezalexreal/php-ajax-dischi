<?php 

include  __DIR__ . "/database/db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>


    <div>
        <div class="main-container">
        <?php foreach( $db as $album ){
        ?>
            <div class="card">
                <img src="<?php echo $album["poster"] ?>"alt="" />
                
                <h1><?php echo $album["title"] ?></h1>
                <p><?php echo $album["author"] ?></p>
                <p><?php echo $album["year"] ?></p>
            </div>
       <?php }?>
        </div>

    </div>


</body>

</html>