<?php
 try {
    $id = $_POST['id'];
  
                require_once 'conf.php';
                $conn = mysqlConnector();
                $stmt = $conn->prepare('SELECT * FROM testing where id'+$id);
                $stmt->execute();

                while($row = $stmt->fetch()) {
                        echo $row;        
                }


        } catch(PDOException $e) {
                echo 'ERRORs: ' . $e->getMessage();
        }


?>
