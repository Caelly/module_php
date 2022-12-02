<?php 

    function getModules()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=module_php;charset=utf8', 'root', '');
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
        $modules = $db->query('SELECT * from module');
        return $modules;
    }
