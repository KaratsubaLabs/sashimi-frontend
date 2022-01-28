<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>sashimi | home</title>        
        <link rel="stylesheet" href="./styles/index.css">
    </head>
    <body>

        <?php require 'types.php'; ?>
        <?php include 'nav.php'; ?>

        <div class="index-main-container">
            <div class="title-container">
                <h1>🐟 the sashimi monitor</h1>
                <hr>
                <p>
                    the <b>sashimi</b> project is a status monitor for <b>からつばLABS</b> hosted services.
                </p>
                <hr>

                <table class="status-table">
                    <tr>
                        <th>Service</th>
                        <th>Status</th>
                        <th>Uptime</th>
                    </tr>
                    <?php foreach ($services as $service) : ?>
                    <tr>
                    <td><?= $service['name']; ?></th>
                        <td><?= $service['state']; ?></th>
                        <td><?= $service['uptime']; ?>%</th>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

    </body>
</html>
