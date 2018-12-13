<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= ($title) ?></title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <style>
        header {
            background-color: aquamarine;
            color: blueviolet;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <?php echo $this->render($content,NULL,get_defined_vars(),0); ?>
        <!--
            <?php echo $this->render($content2,NULL,get_defined_vars(),0); ?>
            -->
    </div>  
</body>
</html>