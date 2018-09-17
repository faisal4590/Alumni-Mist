<?php


define('DBINFO','mysql:host=localhost;dbname=alumni');
define('DBUSER','root');
define('DBPASS','');

function performQuery($query){
    $con = new PDO(DBINFO,DBUSER,DBPASS);
    $stmt = $con->prepare($query) or die('cant execute the query');

    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}

function fetchAll($query){
    $con = new PDO(DBINFO, DBUSER, DBPASS);
    $stmt = $con->query($query);
    return $stmt->fetchAll();
}

?>