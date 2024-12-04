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
            background-image: url('https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExN3l3eGYxOXY0OXBwcHE0emxtZXhjODlrYW5vZXRpMDNmOHBremlyOSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/RiykPw9tgdOylwFgUe/giphy.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            color: yellow; //adjust color for readability
            font-family: Arial, sans-serif, bold;
        }
        h1 {
            text-align: center;
            padding-top: 20%;
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
