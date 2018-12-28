<?php
        $db=new PDO("mysql:host=localhost;dbname=bookstore",
                "root","");
        $db->exec("set names utf8");
?>