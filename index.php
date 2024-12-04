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
            background-image: url('https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExNWM1dWRmdWM3YWNtd3Q2MG1qcDlzN2VzbjBxZmV6ejJ1Mjh1aTRvaiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/qNLVw5pjdIS10cItDe/giphy.webp');
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            color: green; //adjust color for readability
            font-family: Arial, sans-serif;
        }
        h1 {
            position: absolute; 
            top: 10px; 
            right: 10px; 
            margin: 0; 
            font-size: 1.5rem;
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
