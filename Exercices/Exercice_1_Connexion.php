<?php

function connect()
{

//====================================== ZONE D'EXERCICE=====================================//



    $sql_hostname="locahost"; //Nom de l'hote
    $sql_dbname="tp_bdd"; //Nom de la base de données a laquelle vous souhaitez vous connecter
    $sql_user="root"; //Nom de l'utilisateur pour se connecter a la base de données
    $sql_mdp=""; //Mot de passe de l'utilisateur 

    return new PDO('mysql:host='.$sql_hostname.';dbname='.$sql_dbname.';charset=utf8', $sql_user, $sql_mdp);



//===========================================================================================//
    
}