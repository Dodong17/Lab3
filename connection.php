<?php
        $Host = 'localhost';
        $Username = 'root';
        $password = '';
        $db = 'useraccounts';

        $conn = mysqli_connect ($Host, $Username, $password, $db);
        if (!$conn) {
            die();
        }
        

        
    ?>