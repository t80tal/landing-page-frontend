<?php
function getHead($title)
{ ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Tal Biton">
        <link rel="icon" type="image/x-icon" href="./public/media/favicon.ico">
        <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="./public/css/style.css">
        <title>Visio.Io <?php echo $title ?></title>
    </head>
<?php
}
?>