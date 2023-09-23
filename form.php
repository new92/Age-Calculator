<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    <?php
    if(!isset($_POST['submit'])) {
    ?>
    <center><form method="post" action="main.php">
        Date:<input type="date" name="date" />
        <br /><br />
        <input type="submit" name="submit" value="Submit" />
    </form></center>
    <?php
    } else {
        $date = (string) $_POST['date'];
        $date = explode('-', $date);
        $yo = getdate()['year'] - $date[0];
        echo '<center>You are: ' . $yo . ' years old</center>';
    }
    ?>
</body>
</html>
