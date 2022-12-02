<html>
    <head>
        <meta charset="utf-8">
        <title>PLS PHP</title>
    </head>

    <body>
        <p>Vous allez manger le projet e-commerce !</p>

        <?php 
            foreach($modules as $module)
            {
                echo "<p>".$module["name"]."</p>";
            }

            ?>
    </body>
</html>
            