<?php



function phpmotorsConnect(){

    $server= 'localhost';
    $dbname='phpmotors'; 
    $username='iClient';
    $password='gfO[E8Cco[)QruV[';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try{
        $link= new PDO($dsn, $username, $password, $options);
        if(is_object($link)){
            // echo('Connected to the database');
        }
        return $link ;
    }
    catch(PDOException $e){
       
        header('Location: /phpmotors/view/500.php');

        exit;

    }

}

phpmotorsConnect();













?>