<?php
$cd  = isset($_COOKIE['cd_order'])  ? (int) $_COOKIE['cd_order']  : 0;
$dvd = isset($_COOKIE['dvd_order']) ? (int) $_COOKIE['dvd_order'] : 0;
?>
<html>
<head>
    <title>Order Form</title>
</head>
<body>
    <form action="Lat3_4b.php" method="post">
        <p> Order CD, amount:
            <input type="text" name="cd_order" value="<?php echo $cd; ?>" size="2" maxlength="2">
        </p>
        <p> Order DVD, amount:
            <input type="text" name="dvd_order" value="<?php echo $dvd; ?>" size="2" maxlength="2">
        </p>
        <input type="submit" value="Add To Cart" name="submit">
    </form>
</body>
</html>