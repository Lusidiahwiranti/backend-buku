<?php

    function getConnection() {
        return
        new PDO("mysql:host=localhost;dbname=buku", "root", "", [PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
    }
?>