<?php 
$pageTitle = "Home";
include "view-header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://tenor.com/view/apply-today-apply-today-ice-group-galway-gif-16159688.gif');
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            color: yellow; //adjust color for readability
            font-family: Arial, sans-serif;
        }
        h1 {
            position: absolute; 
            top: 10px; 
            left: 10px; 
            margin: 0; 
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <h1>Final Project</h1>
</body>
</html>
<?php 
include "view-footer.php";
?>
