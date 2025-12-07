<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrapper {
            width: 80%;
            margin: 0 auto;
        }

        .wrapper p {
            padding: 20px;
            background-color: #e6ffe1;
            font-size: 24px;
            text-align: center;
        }

        .wrapper p span {
            color: #24ba06;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <p>Sum of <span><?php echo $x ?></span> + <span><?php echo $y ?></span> = <span><?php echo $sum ?></span></p>
    </div>

    <p>Developer name: <?php echo $dev_name ?></p>
</body>

</html>