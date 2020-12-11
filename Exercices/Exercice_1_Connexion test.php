<?php

function connect()
{

//====================================== ZONE D'EXERCICE=====================================//



    $sql_hostname="localhost"; //Nom de l'hote
    $sql_dbname="aliverto"; //Nom de la base de données a laquelle vous souhaitez vous connecter
    $sql_user="aliverto"; //Nom de l'utilisateur pour se connecter a la base de données
    $sql_mdp="!21952859!"; //Mot de passe de l'utilisateur 

    echo 'mysql:host='.$sql_hostname.';dbname='.$sql_dbname.';=charset=utf8';

    return new PDO('mysql:host='.$sql_hostname.';dbname='.$sql_dbname.';=charset=utf8', $sql_user, $sql_mdp);


//===========================================================================================//
    
}

