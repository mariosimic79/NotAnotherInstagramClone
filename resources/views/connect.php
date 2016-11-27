<?php

        $dsn = 'mysql:host=localhost; dbname=galerija; charset=utf8';
        $username = 'root';
        $password = '';
        
            try
            {
                $conn = new PDO($dsn, $username, $password);
            }
             catch (PDOException $e)
             {
                 echo 'Connection failed: '.$e->getMessage();
                 exit;
             }