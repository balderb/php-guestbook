<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest-book challenge</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class = "main container">
    <header>
        <h1>Welcome to the Guest book challenge</h1>
        <p>Please leave a comment below. It's free! :)</p>

    </header>

    <main>
        <form action="#" method="post">

            <label for="title"> Title:
            <input type="text" name="title"/>
            </label>

            <br>

            <label for="date"> Date of today:
            <input type="date" name="date" required pattern="\d{4}-\d{2}-\d{2}"/>
            </label>

            <br>

            <label for="content"> Your message:
            <input type="text" name="content"/>
            </label>

            <br>

            <label for="author"> Your name:
            <input type="text" name="author"/>
            </label>

            <br>

            <label for="post"> Send it:
            <input type="submit" name="post"/>
            </label>

        </form>
    </main>

    <footer>
        <!–– task here comes the function call getFooter() in php as indicated in Tips & Advice ––>
    </footer>

</div>

</body>
</html>

<?php
// declare(strict_types=1);

$myFile = fopen("comments.html","a") or die ("this gives an error");
$writeInFile1= "<br>Name:</br>".$_POST['title']."<br/>";
$writeInFile2= "<br>Name:</br>".$_POST['date']."<br/>";
$writeInFile3= "<br>Name:</br>".$_POST['content']."<br/>";
$writeInFile4= "<br>Name:</br>".$_POST['author']."<br/><hr>";
fwrite($myFile, $writeInFile1);
fwrite($myFile, $writeInFile2);
fwrite($myFile, $writeInFile3);
fwrite($myFile, $writeInFile4);
fclose($myFile);

require("comments.html");

?>





