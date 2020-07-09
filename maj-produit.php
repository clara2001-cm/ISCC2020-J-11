<?php

    function connect_to_database(){
       
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "BaseTest01";
    } 
    
    try{
        
        $pdo->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        echo "Connected successfully";
        
        return $pdo;
    }      catch (PDOException $e) {
            
        echo "Connection failed: ". $e->getMessage();
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "BaseTest01";

$pdo = new PDO("mysql:host=$servername;dbname=$databasename",$username, $password);
$SQL = "UPDATE produit SET quantité=5 WHERE ID= 4";  

$stmt= $pdo->prepare($sql);
$stmt->execute();

?>