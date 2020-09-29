<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest-book challenge</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

    <h1>Guest book challenge</h1>

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

        <label for="post"> Sent it:
            <input type="submit" name="post"/>
        </label>

    </form>
</body>
</html>

<?php
// declare(strict_types=1);

// $myfile =




