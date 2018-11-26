<?php
function getFormation()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=panier;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die ('Erreur : '.$e->getMessage());
    }
    $req = $db->query();
    return $req;
}
?>