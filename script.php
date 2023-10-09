<?php

//var_dump($_GET);

$censored = '<span class="danger">⚠️ questa parola e illegale ⚠️</span>';

$newParagraph =  str_replace($_GET['badword'], $censored,  $_GET['paragraph']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script php</title>
    <style>
        body {
            color: white;
            min-height: 100%;
            background-color: black;
        }

        p {
            font-size: 1.5rem;
        }

        .danger {
            color: red;
            padding: 0.25rem;
            border: 3px solid red;
            background-color: yellow;
        }

        .d-flex {
            display: flex;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="d-flex">

        <h1>paragraph: <?php echo $_GET['paragraph'] ?></h1>

        <h2>bad word: <?php echo $_GET['badword'] ?></h2>

        <p><?php echo $newParagraph ?></p>

    </div>

</body>

</html>