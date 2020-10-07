<?php
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost; dbname=banque_php; charset=utf8', 'root', '');

        // $db = new PDO(
        //     'mysql:host=franckpadaisback.mysql.db; dbname=franckpadaisback; charset=utf8mb4', 
        //     'franckpadaisback', 
        //     '4d410vl4cEbcK'
        // );
    
    

        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
