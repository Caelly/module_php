<html>
    <head>
        <meta charset="utf-8">
        <title>PLS PHP</title>
    </head>

    <body>
        <p>Vous allez manger le projet e-commerce !</p>
            <?php
                try
                {
                    $db = new PDO('mysql:host=localhost;dbname=module_php;charset=utf8', 'root', '');
                }
                catch(Exception $e){
                    die('Erreur : '.$e->getMessage());
                }
                $modules = $db->query('SELECT * from module');

                foreach($modules as $module)
                {
                    echo "<p>".$module["name"]."</p>";
                }
            ?>
    </body>
</html>
    