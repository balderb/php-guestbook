<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>guest-book challenge</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="title"/>
        <label for="date">Today:>
        <input type="date" name="date" required pattern="\d{4}-\d{2}-\d{2}"/>
        </label>
        <input type="text" name="content"/>
        <input type="text" name="author"/>
    </form>
</body>
</html>

<?php
declare(strict_types=1);

