<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
首页11122
<ul>
    <?php foreach( $data as $v){ ?>
    <li><?php echo $v["name"]?></li>
    <li><?php echo $v["age"]?></li>
    <li><?php echo $v["sex"]?></li>
    <?php } ?>
</ul>
</body>
</html>