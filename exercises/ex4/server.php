<!DOCTYPE html>
<html>
    <head>
        <title>forms</title>
    </head>
    <body>
        <section>
            Wow, Sounds DELICIOUS!
            <br><br><br>
            Your Cupcake order is:
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                if (isset($_GET['flavor'])) {
                    $flavor = $_GET['flavor'];
                    echo "<p>Flavor: " . $flavor . "</p>";
                }

                if (isset($_GET['wrap'])) {
                    $wrap = $_GET['wrap'];
                    echo "<p>Wrap Color: " . $wrap . "</p>";
                }

                if (isset($_GET['cherry'])) {
                    $cherry = $_GET['cherry'];
                    echo "<p>Cherry On Top: " . $cherry . "</p>";
                }
                }
            ?>
            <br><br>
            Your cupcake is on the way!
        </section>
    </body>
</html>