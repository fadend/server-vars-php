<?php
$server_keys = array_keys($_SERVER);
sort($server_keys);
?>
<html>
    <head>
        <title>PHP $_SERVER</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th><th>Value</th>
            </tr>
            <?php foreach($server_keys as $key) {
                if (!str_starts_with($key, 'HTTP_') && !str_starts_with($key, 'REMOTE_')) {
                    continue;
                }
                ?>
            <tr>
                    <td><?= htmlspecialchars($key) ?></td>
                    <td><?= htmlspecialchars($_SERVER[$key]) ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>