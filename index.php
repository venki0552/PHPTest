<?php
 try {
                require_once 'conf.php';
                $conn = mysqlConnector();
                $stmt = $conn->prepare('SELECT * FROM testing');
                $stmt->execute();

                while($row = $stmt->fetch()) {
                        print_r($row);          
                }


        } catch(PDOException $e) {
                echo 'ERRORs: ' . $e->getMessage();
        }


?>
