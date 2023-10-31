<!doctype html>
<html lang="en"> 
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biodata</title>
    <link rel="stylesheet" href="styles-desktop.css" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="styles-mobile.css" media="screen and (max-width: 768px)">
</head>

<body>
<?php require('action.php'); ?>
    <div>
        <header>
            <h1><img src="<?php echo $images ?>" width="300" height="400"></h1>
            <h1><?php echo $name ?></h1>
        
        </header>
        <section class="info">
        
            <div class="left">
            
                <p>IC: <?php echo $ic ?></p>
                <p>Father Name: <?php echo $father ?></p>
                <p>Mother Name: <?php echo $mother ?></p>
                <p>Gender: <?php echo $gender ?></p>
                <p>Hobby: <?php echo $hobby ?></p>
                <p>Address: <?php echo $address ?></p>
                <p>Age: <?php echo $age ?></p>
                </div>
            <div class="right">
                <p>Secondary School: <?php echo $secondary ?></p>
                <p>Diploma: <?php echo $diploma ?></p>
                <p>Degree: <?php echo $degree ?></p>
            
                
            </div>
        </section>
        
    </div>
</body>

</html>
