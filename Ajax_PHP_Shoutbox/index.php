<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajax PHP Shoutbox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div id="container">
        <header>
            <h1>Js Shoutbox</h1>
        </header>
        <div id="shouts">
            <ul>
                <li></li>
            </ul> 
        </div>
        <footer>
            <form  action="#" method="">
            <label>Name: </label>
            <input type="text" id="name" name="name">
            <label>Shout Text: </label>
            <input type="text" id="shout" name="shout">
            <input type="submit" id="submit" value="SHOUTS!"/>
            </form>
        </footer>
    </div>
</body>
</html>