<?php
    try{

        $host = "localhost";

        $dbname = "jobboard";

        $user = "root";

        $pass = "";

        $conn = new PDO("mysql:host = $host; dbname = $dbname ", $user,$pass);

        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // if($conn == true){
        //     echo "Connected Sucessfully";
        // }else{
        //     echo "Error!!!";
        // }

    }catch(PDOException $e){
        echo $e -> getMessage();
    }
        

?>