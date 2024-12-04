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
            background-image: url('https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZWtnZHJseW93djN4bjVtYnd5ajg5eGNyZWFnNmFsODhlZ2hxM2g5YSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/RiykPw9tgdOylwFgUe/giphy.gif');
            background-size: 110%;
            background-repeat: no-repeat;
            background-position: center top;
            height: 100vh;
            color: yellow; //adjust color for readability
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            padding-top: 30%;
        }
    </style>
</head>
<body>
    <h1>MIS 4013 Final Project</h1>
</body>
</html>
<?php 
include "view-footer.php";
?>
