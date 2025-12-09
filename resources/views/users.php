<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <style>
        .wrapper {
            width: 80%;
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table th,
        table td {
            padding: 5px;
            text-align: left;
        }

        .first {
            background-color: #e5843d;
        }

        .last {
            background-color: #5a3e95;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>All Users</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Collage</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($users) > 0) :
                    $i = 1;
                    foreach ($users as $user) : ?>
                        <tr class="<?php echo ($i == 1) ? 'first' : '' ?> <?php echo ($i == count($users)) ? 'last' : '' ?>">
                            <td><?php echo $user['id'] ?></td>
                            <td><?php echo $user['name'] ?></td>
                            <td><?php echo $user['collage'] ?></td>
                        </tr>
                    <?php $i++;
                    endforeach;
                else: ?>
                    <tr>
                        <td colspan="3">No Users Found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<!-- if ($i == 0) {
echo 'first';
}else {
echo ''
}

echo ($i == 0) ? 'first' : '' -->