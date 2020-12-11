<?php

function connect()
{

//====================================== ZONE D'EXERCICE=====================================//



    return new PDO("mysql:host=127.0.0.1; dbname=FormaFor ; charset=utf8", "root", "");

    


//===========================================================================================//
    
}

function SecondeSolution()
{
    $sql_hostname="127.0.0.1"; //Nom de l'hote
    $sql_dbname="FormaFor"; //Nom de la base de données a laquelle vous souhaitez vous connecter
    $sql_user="root"; //Nom de l'utilisateur pour se connecter a la base de données
    $sql_mdp=""; //Mot de passe de l'utilisateur 

    return new PDO('mysql:host=' . $sql_hostname . ';dbname=' . $sql_dbname . ';=charset=utf8', $sql_user, $sql_mdp);

}